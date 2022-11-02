<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score. Please try resubmitting the form again');
        }

        $to = $admin_email;
        $subject = "Message from " . $site;
        $subject_2 = $site . " Portfolio - Thank You For Your Enquiry";

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $suburb = $_POST['suburb'];
        $comment = $_POST['message'];
        $portfolio_copy = $_POST['portfolio_copy'];

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . strip_tags($name) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . strip_tags($phone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Suburb</td>' .
            '<td><b>' . strip_tags($suburb) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Message</td>' .
            '<td><b>' . strip_tags($comment) . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $headers_1 = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $email . ">\r\n" .
            "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $no_reply_email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        $message_2 = '<!DOCTYPE html><html><body>' .
            'Thank you for your enquiry<br><br>' .
            'Please see our attached portfolio.<br><br>' .
            'Our team will be in contact with you shortly.<br><br>' .
            $site . ' Team<br><br>' .
            '<img src="https://modluxe.com.au/assets/images/logo/email-logo.png" alt="Modluxe">';

        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers_2 = "From: " . $site . " <" . $no_reply_email . ">\r\n" .
            "MIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        $messagea = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $message_2 . "\n\n";

        global $mime_boundary, $messagea;

        if (isset($portfolio_copy)) {
            $dest_path = './../assets/uploads/ModluxePortfolio_A4_Sep2022.pdf';

            $messagea .= "--{$mime_boundary}\n";
            $fp =    @fopen($dest_path, "rb");
            $data =  @fread($fp, filesize($dest_path));
            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $messagea .= "Content-Type: application/octet-stream; name=\"" . basename($dest_path) . "\"\n" .
                "Content-Description: " . basename($dest_path) . "\n" .
                "Content-Disposition: attachment;\n" . " filename=\"" . basename($dest_path) . "\"; size=" . filesize($dest_path) . ";\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $messagea .= "--{$mime_boundary}--";

            mail($email, $subject_2, $messagea, $headers_2);
        }

        $result = mail($to, $subject, $message, $headers_1);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
