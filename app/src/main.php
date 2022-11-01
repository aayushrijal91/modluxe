<!-- Modal -->
<div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 px-4 px-xxl-6">
                            <div class="text-center pb-3"><?= renderImg('brook.png', 'lib', 'dp') ?></div>
                            <div class="hero_heading text-center text-gradient fs-116 font-playlist">Meet Brook</div>
                            <div class="sub_heading fs-70 text-gradient fw-200 lh-1 text-center pt-3 pb-4">Your Bathroom Stylist</div>
                            <div class="row justify-content-center align-items-center gx-3">
                                <div class="col">
                                    <div class="gradient-divider"></div>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="form_phoneBtn text-decoration-none fs-31 fw-300 text-gradient px-3 font-inter">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.4131 17.7296L17.1607 15.8405C16.7188 15.6429 16.224 15.5972 15.7534 15.7105C15.2828 15.8237 14.863 16.0896 14.5594 16.4666L13.334 17.9988C11.3248 16.7096 9.61452 15.0057 8.31774 13.0014L9.85 11.7759C10.2266 11.4725 10.4923 11.0529 10.6055 10.5827C10.7188 10.1124 10.6733 9.61793 10.476 9.17627L8.60103 4.91289C8.39033 4.43815 8.01785 4.0537 7.55002 3.8281C7.08219 3.60249 6.54942 3.55041 6.04676 3.68114L2.44698 4.62021C1.92474 4.75534 1.47069 5.07836 1.1718 5.52743C0.872901 5.9765 0.750162 6.52004 0.827085 7.05397C1.49765 11.7098 3.65816 16.0233 6.98518 19.3486C10.3122 22.674 14.6268 24.8323 19.283 25.5005C19.8166 25.576 20.3593 25.4522 20.8074 25.1528C21.2556 24.8534 21.5776 24.3993 21.712 23.8774L22.6511 20.2777C22.7817 19.7751 22.7288 19.2424 22.5019 18.7754C22.275 18.3084 21.8889 17.9376 21.4131 17.7296Z" fill="url(#paint0_linear_221_191)" />
                                            <path d="M19.5871 0.480481C18.5324 0.478562 17.4945 0.743568 16.5698 1.25082C15.6452 1.75807 14.864 2.49107 14.2989 3.38155C13.7338 4.27203 13.4033 5.29102 13.3381 6.34364C13.2729 7.39626 13.4752 8.44825 13.926 9.40166L13.3266 13.0014L16.9264 12.402C17.7755 12.803 18.7039 13.0078 19.6429 13.0013C20.5819 12.9948 21.5074 12.7771 22.3509 12.3644C23.1944 11.9517 23.9343 11.3546 24.5157 10.6172C25.0971 9.87984 25.5052 9.02112 25.7097 8.10464C25.9143 7.18816 25.91 6.2374 25.6973 5.32278C25.4846 4.40817 25.0689 3.55311 24.4809 2.82095C23.8929 2.08879 23.1478 1.49827 22.3006 1.09313C21.4535 0.687989 20.5261 0.478604 19.5871 0.480481Z" fill="url(#paint1_linear_221_191)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_221_191" x1="11.763" y1="3.6106" x2="11.763" y2="25.5221" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_221_191" x1="19.5931" y1="0.480469" x2="19.5931" y2="13.0014" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                        <span class="ps-1"><?= $phone_number ?></span>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="#">
                                        <svg width="17" height="26" viewBox="0 0 17 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.28593 25.0898L5.25004 14.1339H0.554688V9.43856H5.25004V6.30833C5.25004 2.08376 7.86616 0.0478516 11.6348 0.0478516C13.44 0.0478516 14.9914 0.182248 15.4436 0.242318V4.65724L12.8299 4.65843C10.7803 4.65843 10.3834 5.63235 10.3834 7.06152V9.43856H16.2059L14.6408 14.1339H10.3834V25.0898H5.28593Z" fill="url(#paint0_linear_124_198)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_124_198" x1="8.38028" y1="0.0478516" x2="8.38028" y2="25.0898" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="#">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.8139 2.30319C16.157 2.30319 16.553 2.31727 17.8739 2.37675C18.6677 2.38629 19.4539 2.53241 20.1982 2.80872C20.7425 3.0098 21.2346 3.33075 21.6381 3.74779C22.0551 4.15127 22.376 4.64338 22.5771 5.1877C22.8534 5.9319 22.9996 6.71812 23.0091 7.5119C23.0686 8.83286 23.0827 9.23353 23.0827 12.5719C23.0827 15.9103 23.0686 16.311 23.0091 17.632C22.9996 18.4257 22.8534 19.212 22.5771 19.9562C22.3693 20.4963 22.0504 20.9868 21.6412 21.3961C21.2319 21.8053 20.7414 22.1242 20.2013 22.332C19.4571 22.6083 18.6709 22.7544 17.8771 22.764C16.5561 22.8235 16.1554 22.8375 12.817 22.8375C9.47865 22.8375 9.07798 22.8235 7.75702 22.764C6.96324 22.7544 6.17702 22.6083 5.43282 22.332C4.8885 22.1309 4.39639 21.81 3.99291 21.3929C3.57587 20.9895 3.25492 20.4974 3.05384 19.953C2.77753 19.2088 2.63141 18.4226 2.62187 17.6288C2.56239 16.3079 2.54831 15.9072 2.54831 12.5688C2.54831 9.2304 2.56239 8.82973 2.62187 7.50877C2.63141 6.71499 2.77753 5.92877 3.05384 5.18457C3.25492 4.64025 3.57587 4.14814 3.99291 3.74466C4.39639 3.32762 4.8885 3.00667 5.43282 2.80559C6.17702 2.52928 6.96324 2.38316 7.75702 2.37362C9.07798 2.31414 9.47865 2.30006 12.817 2.30006L12.8139 2.30319ZM12.8139 0.0478516C9.41292 0.0478516 8.9872 0.0619376 7.64903 0.122977C6.61129 0.14408 5.58464 0.340944 4.6127 0.705201C3.77686 1.0191 3.01989 1.51218 2.39492 2.14981C1.75729 2.77477 1.26422 3.53175 0.950319 4.36758C0.586061 5.33952 0.389198 6.36617 0.368094 7.40391C0.307055 8.74209 0.292969 9.1678 0.292969 12.5688C0.292969 15.9698 0.307055 16.3955 0.368094 17.7337C0.389198 18.7714 0.586061 19.7981 0.950319 20.77C1.26422 21.6059 1.75729 22.3628 2.39492 22.9878C3.01989 23.6254 3.77686 24.1185 4.6127 24.4324C5.58562 24.797 6.61336 24.9939 7.65216 25.0146C8.9872 25.0757 9.41292 25.0898 12.8139 25.0898C16.2149 25.0898 16.6406 25.0757 17.9788 25.0146C19.0176 24.9939 20.0453 24.797 21.0183 24.4324C21.85 24.1104 22.6054 23.6184 23.236 22.9877C23.8666 22.3571 24.3587 21.6017 24.6807 20.77C25.0453 19.7971 25.2421 18.7694 25.2629 17.7306C25.3239 16.3955 25.338 15.9698 25.338 12.5657C25.338 9.16154 25.3239 8.73896 25.2629 7.40078C25.2404 6.36391 25.0425 5.33834 24.6775 4.36758C24.3636 3.53175 23.8705 2.77477 23.2329 2.14981C22.608 1.51218 21.851 1.0191 21.0151 0.705201C20.0432 0.340944 19.0166 0.14408 17.9788 0.122977C16.6406 0.0619376 16.2149 0.0478516 12.8139 0.0478516Z" fill="url(#paint0_linear_124_197)" />
                                            <path d="M12.8139 6.13929C11.5423 6.13929 10.2992 6.51638 9.24188 7.22286C8.18455 7.92935 7.36046 8.9335 6.87383 10.1083C6.38719 11.2832 6.25987 12.5759 6.50795 13.8231C6.75604 15.0703 7.36839 16.216 8.26757 17.1152C9.16675 18.0143 10.3124 18.6267 11.5596 18.8748C12.8068 19.1229 14.0995 18.9955 15.2744 18.5089C16.4492 18.0223 17.4534 17.1982 18.1599 16.1408C18.8663 15.0835 19.2434 13.8404 19.2434 12.5688C19.2434 11.7245 19.0771 10.8884 18.754 10.1083C18.4309 9.32827 17.9573 8.61949 17.3603 8.02245C16.7632 7.42542 16.0545 6.95182 15.2744 6.62871C14.4943 6.3056 13.6583 6.13929 12.8139 6.13929ZM12.8139 16.743C11.9883 16.743 11.1813 16.4982 10.4949 16.0395C9.80844 15.5808 9.27342 14.9289 8.95749 14.1662C8.64155 13.4035 8.55889 12.5642 8.71995 11.7545C8.88101 10.9448 9.27857 10.201 9.86233 9.61722C10.4461 9.03345 11.1899 8.6359 11.9996 8.47484C12.8093 8.31378 13.6486 8.39644 14.4113 8.71237C15.174 9.0283 15.826 9.56332 16.2846 10.2498C16.7433 10.9362 16.9881 11.7432 16.9881 12.5688C16.9881 13.6759 16.5483 14.7376 15.7655 15.5204C14.9827 16.3032 13.921 16.743 12.8139 16.743Z" fill="url(#paint1_linear_124_197)" />
                                            <path d="M19.497 7.38826C20.3268 7.38826 20.9995 6.71556 20.9995 5.88574C20.9995 5.05593 20.3268 4.38323 19.497 4.38323C18.6672 4.38323 17.9945 5.05593 17.9945 5.88574C17.9945 6.71556 18.6672 7.38826 19.497 7.38826Z" fill="url(#paint2_linear_124_197)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_124_197" x1="12.8155" y1="0.0478516" x2="12.8155" y2="25.0898" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_124_197" x1="12.8155" y1="0.0478516" x2="12.8155" y2="25.0898" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear_124_197" x1="12.8155" y1="0.0478516" x2="12.8155" y2="25.0898" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FDF18C" />
                                                    <stop offset="0.901042" stop-color="#B28E5D" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="gradient-divider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-4 px-xxl-6">
                            <div class="form_heading text-gradient text-capitalize fs-40 fw-200 lh-1">Let Us make your bathroom<br> Renovation Experience Seamless</div>
                            <form action="./src/form" method="POST">
                                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                                <div class="row form_row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="tel" class="form-control" name="phone" placeholder="Your Phone" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="message" placeholder="Your Message" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn w-100 btn-gradient border-0 fs-20 rounded-pill text-white py-3 px-5">Book A Consultation</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox" name="portfolio_copy" value="1" id="portfolioCheckbox">
                                            <label class="form-check-label lh-1 text-gradient text-capitalize fs-23 pt-2 ps-3" for="portfolioCheckbox">
                                                Receive A copy of our portfolio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="hero-video">
        <video id="video" autoplay muted loop playsinline>
            <source src="./assets/video/y2mate.mp4" type="video/mp4">
            <source src="./assets/video/y2mate.mp4" type="video/ogg">
            Your browser does not support HTML video.
        </video>
    </div>
    <div class="navigation-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gx-2 gy-3">
                <div class="col-12 d-xl-none">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-0">
                        <div class="col-auto">
                            <a href="#form" data-bs-toggle="modal" role="button" class="btn border-white rounded-pill">
                                Book A Consultation
                            </a>
                        </div>
                        <div class="col">
                            <div class="white-divider"></div>
                        </div>
                        <div class="col-auto">
                            <div class="btn border-white rounded-pill">
                                <div class="row gx-2">
                                    <div class="col-auto">
                                        <a href="tel:<?= $phone_number ?>" class="text-decoration-none fs-14 fw-800 font-inter">
                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6072 9.10592L8.59315 8.21121C8.38389 8.11763 8.14952 8.09596 7.92665 8.1496C7.70377 8.20324 7.50493 8.32917 7.36117 8.50772L6.78075 9.23342C5.82919 8.62281 5.01916 7.81582 4.40499 6.86655L5.13069 6.28614C5.30908 6.14242 5.4349 5.94371 5.48853 5.72099C5.54217 5.49828 5.5206 5.26407 5.4272 5.0549L4.53916 3.03569C4.43937 2.81084 4.26296 2.62876 4.04138 2.52191C3.81981 2.41506 3.56749 2.3904 3.32941 2.45231L1.6245 2.89707C1.37716 2.96107 1.16211 3.11406 1.02055 3.32674C0.878987 3.53943 0.820856 3.79686 0.857288 4.04974C1.17488 6.25484 2.19813 8.29777 3.77386 9.8727C5.3496 11.4476 7.39304 12.4698 9.59831 12.7863C9.85104 12.8221 10.1081 12.7635 10.3203 12.6217C10.5326 12.4799 10.6851 12.2648 10.7488 12.0176L11.1935 10.3127C11.2554 10.0747 11.2303 9.82241 11.1228 9.60121C11.0154 9.38001 10.8325 9.20439 10.6072 9.10592Z" fill="white" />
                                                <path d="M9.74261 0.936407C9.24312 0.935498 8.75152 1.06101 8.3136 1.30125C7.87568 1.5415 7.50567 1.88866 7.23805 2.3104C6.97043 2.73215 6.81388 3.21476 6.78301 3.7133C6.75213 4.21184 6.84791 4.71008 7.06145 5.16163L6.77754 6.86654L8.48246 6.58264C8.88461 6.77254 9.32434 6.86955 9.76907 6.86647C10.2138 6.86339 10.6521 6.7603 11.0516 6.56485C11.4511 6.3694 11.8015 6.08658 12.0769 5.73734C12.3523 5.38811 12.5455 4.9814 12.6424 4.54734C12.7393 4.11328 12.7373 3.66298 12.6365 3.2298C12.5358 2.79663 12.3389 2.39166 12.0604 2.04489C11.7819 1.69813 11.429 1.41845 11.0278 1.22657C10.6266 1.03469 10.1873 0.935518 9.74261 0.936407Z" fill="white" />
                                            </svg>

                                            <span class="ps-1"><?= $phone_number ?></span>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#">
                                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.4613 12.4184L2.44458 7.31366H0.256836V5.12592H2.44458V3.66742C2.44458 1.69903 3.66353 0.750427 5.41946 0.750427C6.26057 0.750427 6.98347 0.813048 7.19413 0.841036V2.89811L5.9763 2.89867C5.02133 2.89867 4.83642 3.35246 4.83642 4.01836V5.12592H7.54932L6.82007 7.31366H4.83641V12.4184H2.4613Z" fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#">
                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.79102 1.80127C8.34869 1.80127 8.53319 1.80784 9.14868 1.83555C9.51853 1.83999 9.88486 1.90808 10.2316 2.03682C10.4852 2.13051 10.7145 2.28005 10.9025 2.47437C11.0968 2.66236 11.2464 2.89166 11.3401 3.14528C11.4688 3.49203 11.5369 3.85836 11.5413 4.22821C11.5691 4.8437 11.5756 5.03039 11.5756 6.58587C11.5756 8.14136 11.5691 8.32805 11.5413 8.94353C11.5369 9.31339 11.4688 9.67971 11.3401 10.0265C11.2432 10.2781 11.0947 10.5067 10.904 10.6974C10.7133 10.8881 10.4847 11.0366 10.2331 11.1335C9.88632 11.2622 9.51999 11.3303 9.15014 11.3347C8.53465 11.3624 8.34796 11.369 6.79248 11.369C5.23699 11.369 5.0503 11.3624 4.43482 11.3347C4.06496 11.3303 3.69863 11.2622 3.35188 11.1335C3.09826 11.0398 2.86897 10.8902 2.68097 10.6959C2.48666 10.5079 2.33712 10.2786 2.24343 10.025C2.11468 9.67825 2.0466 9.31193 2.04215 8.94207C2.01444 8.32659 2.00788 8.1399 2.00788 6.58441C2.00788 5.02893 2.01444 4.84224 2.04215 4.22675C2.0466 3.8569 2.11468 3.49057 2.24343 3.14382C2.33712 2.8902 2.48666 2.66091 2.68097 2.47291C2.86897 2.2786 3.09826 2.12906 3.35188 2.03536C3.69863 1.90662 4.06496 1.83853 4.43482 1.83409C5.0503 1.80638 5.23699 1.79982 6.79248 1.79982L6.79102 1.80127ZM6.79102 0.750427C5.20636 0.750427 5.00801 0.75699 4.3845 0.785431C3.90098 0.795264 3.42262 0.88699 2.96976 1.05671C2.58031 1.20297 2.22761 1.43271 1.93641 1.72981C1.63932 2.021 1.40957 2.37371 1.26332 2.76315C1.09359 3.21602 1.00187 3.69437 0.992035 4.17789C0.963594 4.8014 0.957031 4.99976 0.957031 6.58441C0.957031 8.16907 0.963594 8.36742 0.992035 8.99093C1.00187 9.47445 1.09359 9.95281 1.26332 10.4057C1.40957 10.7951 1.63932 11.1478 1.93641 11.439C2.22761 11.7361 2.58031 11.9659 2.96976 12.1121C3.42308 12.282 3.90194 12.3737 4.38596 12.3834C5.00801 12.4118 5.20636 12.4184 6.79102 12.4184C8.37567 12.4184 8.57403 12.4118 9.19754 12.3834C9.68155 12.3737 10.1604 12.282 10.6137 12.1121C11.0013 11.9621 11.3532 11.7328 11.6471 11.439C11.9409 11.1452 12.1702 10.7932 12.3202 10.4057C12.4901 9.95235 12.5818 9.47349 12.5915 8.98947C12.6199 8.36743 12.6265 8.16907 12.6265 6.58295C12.6265 4.99684 12.6199 4.79994 12.5915 4.17644C12.581 3.69332 12.4888 3.21547 12.3187 2.76315C12.1725 2.37371 11.9427 2.021 11.6456 1.72981C11.3544 1.43271 11.0017 1.20297 10.6123 1.05671C10.1594 0.88699 9.68106 0.795264 9.19754 0.785431C8.57403 0.75699 8.37567 0.750427 6.79102 0.750427Z" fill="white" />
                                                <path d="M6.79102 3.58866C6.19851 3.58866 5.61932 3.76436 5.12667 4.09354C4.63402 4.42271 4.25005 4.89059 4.0233 5.43799C3.79656 5.98539 3.73724 6.58774 3.85283 7.16886C3.96842 7.74997 4.25374 8.28377 4.6727 8.70273C5.09166 9.12169 5.62546 9.40701 6.20658 9.5226C6.78769 9.63819 7.39004 9.57887 7.93744 9.35213C8.48484 9.12539 8.95272 8.74141 9.28189 8.24876C9.61107 7.75611 9.78677 7.17692 9.78677 6.58441C9.78677 6.19101 9.70928 5.80145 9.55873 5.43799C9.40818 5.07453 9.18752 4.74428 8.90933 4.4661C8.63115 4.18792 8.3009 3.96725 7.93744 3.8167C7.57398 3.66615 7.18443 3.58866 6.79102 3.58866ZM6.79102 8.52932C6.40635 8.52932 6.03032 8.41525 5.71049 8.20154C5.39065 7.98783 5.14136 7.68408 4.99416 7.3287C4.84695 6.97331 4.80844 6.58226 4.88348 6.20498C4.95853 5.82771 5.14376 5.48116 5.41576 5.20916C5.68776 4.93716 6.03431 4.75192 6.41159 4.67688C6.78886 4.60183 7.17992 4.64035 7.5353 4.78756C7.89069 4.93476 8.19444 5.18404 8.40815 5.50388C8.62186 5.82372 8.73592 6.19975 8.73592 6.58441C8.73592 7.10023 8.53101 7.59493 8.16627 7.95967C7.80153 8.32441 7.30684 8.52932 6.79102 8.52932Z" fill="white" />
                                                <path d="M9.90491 4.1706C10.2916 4.1706 10.605 3.85717 10.605 3.47052C10.605 3.08388 10.2916 2.77044 9.90491 2.77044C9.51827 2.77044 9.20483 3.08388 9.20483 3.47052C9.20483 3.85717 9.51827 4.1706 9.90491 4.1706Z" fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto text-center">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col">
                    <div class="white-divider"></div>
                </div>
                <div class="col-auto">
                    <div class="row gx-2 gx-md-5">
                        <div class="col-auto">
                            <a href="#about" class="btn px-0">About <span class="d-none d-md-block ps-1">Modluxe</span></a>
                        </div>
                        <div class="col-auto">
                            <a href="#portfolio" class="btn px-0">Our Portfolio</a>
                        </div>
                        <div class="col-auto">
                            <a href="#team" class="btn px-0">Meet The Directors</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="white-divider"></div>
                </div>
                <div class="col-auto d-none d-xl-block">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-3">
                        <div class="col-6 col-md-auto">
                            <a href="#form" data-bs-toggle="modal" role="button" class="btn border-white rounded-pill px-4">
                                <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-6 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="text-decoration-none fs-16 fw-800 px-3 font-inter">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3354 11.9987L11.3774 10.6846C11.07 10.5471 10.7258 10.5153 10.3985 10.5941C10.0711 10.6729 9.77907 10.8578 9.56792 11.1201L8.71546 12.1859C7.31788 11.2891 6.12819 10.1039 5.22614 8.70966L6.29199 7.8572C6.55399 7.64611 6.73878 7.35426 6.81756 7.02715C6.89633 6.70005 6.86466 6.35607 6.72748 6.04885L5.4232 3.08321C5.27664 2.75298 5.01754 2.48555 4.69211 2.32862C4.36668 2.17169 3.99609 2.13546 3.64643 2.22639L1.14239 2.87962C0.779117 2.97361 0.463279 3.19831 0.255365 3.51069C0.0474501 3.82306 -0.0379281 4.20115 0.01558 4.57256C0.482033 7.81123 1.9849 10.8117 4.2992 13.1248C6.6135 15.438 9.61474 16.9393 12.8536 17.4041C13.2248 17.4566 13.6024 17.3706 13.9141 17.1623C14.2258 16.954 14.4498 16.6381 14.5433 16.2751L15.1965 13.7711C15.2874 13.4215 15.2506 13.051 15.0927 12.7261C14.9349 12.4012 14.6664 12.1433 14.3354 11.9987Z" fill="white" />
                                    <path d="M13.0651 -2.18135e-05C12.3315 -0.00135681 11.6095 0.182984 10.9663 0.535832C10.3231 0.88868 9.77967 1.39856 9.38661 2.01798C8.99354 2.63741 8.76363 3.34623 8.71828 4.07844C8.67292 4.81065 8.81361 5.54243 9.12723 6.20562L8.71025 8.70965L11.2143 8.29268C11.8049 8.57159 12.4508 8.71406 13.1039 8.70954C13.7571 8.70502 14.4009 8.55362 14.9877 8.26655C15.5744 7.97949 16.089 7.56411 16.4935 7.05118C16.8979 6.53825 17.1818 5.94091 17.3241 5.3034C17.4663 4.66589 17.4634 4.00454 17.3154 3.36832C17.1675 2.73211 16.8783 2.13733 16.4693 1.62803C16.0603 1.11873 15.542 0.707961 14.9527 0.426142C14.3634 0.144322 13.7183 -0.00132769 13.0651 -2.18135e-05Z" fill="white" />
                                </svg>
                                <span class="ps-1"><?= $phone_number ?></span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#">
                                <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.02293 16L3 9H0V6H3V4C3 1.3008 4.67151 0 7.07938 0C8.23277 0 9.22406 0.08587 9.51294 0.12425V2.94507L7.84296 2.94583C6.53343 2.94583 6.27987 3.5681 6.27987 4.48124V6H10L9 9H6.27986V16H3.02293Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 1.441C10.136 1.441 10.389 1.45 11.233 1.488C11.7402 1.49409 12.2425 1.58746 12.718 1.764C13.0658 1.89248 13.3802 2.09754 13.638 2.364C13.9045 2.62179 14.1095 2.93622 14.238 3.284C14.4145 3.75949 14.5079 4.26183 14.514 4.769C14.552 5.613 14.561 5.869 14.561 8.002C14.561 10.135 14.552 10.391 14.514 11.235C14.5079 11.7422 14.4145 12.2445 14.238 12.72C14.1052 13.0651 13.9015 13.3785 13.64 13.64C13.3785 13.9015 13.0651 14.1052 12.72 14.238C12.2445 14.4145 11.7422 14.5079 11.235 14.514C10.391 14.552 10.135 14.561 8.002 14.561C5.869 14.561 5.613 14.552 4.769 14.514C4.26183 14.5079 3.75949 14.4145 3.284 14.238C2.93622 14.1095 2.62179 13.9045 2.364 13.638C2.09754 13.3802 1.89248 13.0658 1.764 12.718C1.58746 12.2425 1.49409 11.7402 1.488 11.233C1.45 10.389 1.441 10.133 1.441 8C1.441 5.867 1.45 5.611 1.488 4.767C1.49409 4.25983 1.58746 3.75749 1.764 3.282C1.89248 2.93422 2.09754 2.61979 2.364 2.362C2.62179 2.09554 2.93622 1.89048 3.284 1.762C3.75949 1.58546 4.26183 1.49209 4.769 1.486C5.613 1.448 5.869 1.439 8.002 1.439L8 1.441ZM8 0C5.827 0 5.555 0.009 4.7 0.048C4.03696 0.0614835 3.381 0.187265 2.76 0.42C2.22596 0.620558 1.74231 0.9356 1.343 1.343C0.9356 1.74231 0.620558 2.22596 0.42 2.76C0.187265 3.381 0.0614835 4.03696 0.048 4.7C0.009 5.555 0 5.827 0 8C0 10.173 0.009 10.445 0.048 11.3C0.0614835 11.963 0.187265 12.619 0.42 13.24C0.620558 13.774 0.9356 14.2577 1.343 14.657C1.74231 15.0644 2.22596 15.3794 2.76 15.58C3.38163 15.813 4.03828 15.9387 4.702 15.952C5.555 15.991 5.827 16 8 16C10.173 16 10.445 15.991 11.3 15.952C11.9637 15.9387 12.6204 15.813 13.242 15.58C13.7734 15.3743 14.256 15.0599 14.659 14.657C15.0619 14.254 15.3763 13.7714 15.582 13.24C15.815 12.6184 15.9407 11.9617 15.954 11.298C15.993 10.445 16.002 10.173 16.002 7.998C16.002 5.823 15.993 5.553 15.954 4.698C15.9397 4.03552 15.8132 3.38025 15.58 2.76C15.3794 2.22596 15.0644 1.74231 14.657 1.343C14.2577 0.9356 13.774 0.620558 13.24 0.42C12.619 0.187265 11.963 0.0614835 11.3 0.048C10.445 0.009 10.173 0 8 0Z" fill="white" />
                                    <path d="M8 3.892C7.18751 3.892 6.39327 4.13293 5.71772 4.58432C5.04216 5.03572 4.51563 5.6773 4.2047 6.42794C3.89378 7.17858 3.81243 8.00456 3.97093 8.80143C4.12944 9.5983 4.52069 10.3303 5.09521 10.9048C5.66972 11.4793 6.40169 11.8706 7.19857 12.0291C7.99544 12.1876 8.82142 12.1062 9.57206 11.7953C10.3227 11.4844 10.9643 10.9578 11.4157 10.2823C11.8671 9.60673 12.108 8.81249 12.108 8C12.108 7.46053 12.0017 6.92634 11.7953 6.42794C11.5889 5.92953 11.2863 5.47667 10.9048 5.09521C10.5233 4.71374 10.0705 4.41115 9.57206 4.2047C9.07366 3.99826 8.53947 3.892 8 3.892ZM8 10.667C7.47252 10.667 6.95688 10.5106 6.51829 10.2175C6.07971 9.92448 5.73787 9.50795 5.53601 9.02062C5.33415 8.53329 5.28134 7.99704 5.38425 7.47969C5.48715 6.96235 5.74116 6.48713 6.11415 6.11415C6.48713 5.74116 6.96235 5.48715 7.47969 5.38425C7.99704 5.28134 8.53329 5.33415 9.02062 5.53601C9.50795 5.73787 9.92448 6.07971 10.2175 6.51829C10.5106 6.95688 10.667 7.47252 10.667 8C10.667 8.70733 10.386 9.38569 9.88585 9.88585C9.38569 10.386 8.70733 10.667 8 10.667Z" fill="white" />
                                    <path d="M12.27 4.69C12.8002 4.69 13.23 4.26019 13.23 3.73C13.23 3.19981 12.8002 2.77 12.27 2.77C11.7398 2.77 11.31 3.19981 11.31 3.73C11.31 4.26019 11.7398 4.69 12.27 4.69Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="container">
            <div class="row justify-content-center align-items-center gy-3 gy-md-4">
                <div class="col-12 fs-60 font-playlist text-gradient">
                    Style + Function + Quality
                </div>
                <div class="col-xl-9 hero_heading fs-86 lh-1 fw-200">
                    <span class="text-gradient">Sydney's Leading</span> Bathroom Renovation Specialsts
                </div>
                <div class="col-10 col-md-12 sub_heading fs-26 fw-200">
                    A team that delivers unparalleled and unmatched quality
                </div>
                <div class="col-auto d-xl-none">
                    <a href="#form" data-bs-toggle="modal" role="button" class="btn btn-gradient border-0 rounded-pill px-4">
                        <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="specialise">
        <div class="container">
            <div class="row gy-3 gy-md-5">
                <div class="col-lg-6 text-center">
                    <div class="font-playlist text-gradient fs-40">Services we specialise in</div>
                    <div class="px-3 px-md-0">
                        Bathroom Renovation
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        New Bathroom Builds
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        Commercial Bathroom Works
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        Bathroom Retreats
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="font-playlist text-gradient fs-40">Styles we love but not limited to</div>
                    <div class="px-4 px-md-0">
                        The Classic Bathroom
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        The Modern Bathroom
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        The designer bathroom
                        <span class="px-1"><svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3.50008" cy="3.67141" r="2.73543" fill="white" />
                            </svg></span>
                        The traditional bathroom
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="gradient-divider"></div>

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-between gy-md-5">
            <div class="col-12 d-md-none"><?= renderImg('about-wallpapers-sm.png', 'lib', 'w-100') ?></div>
            <div class="col-lg-6 col-xl-5 order-md-last order-lg-first">
                <div class="hero_heading fs-70 fw-300 lh-1 pb-2">A team that delivers unparalleled and unmatched quality</div>
                <div class="py-4 lh-1_875">
                    <p class="pb-lg-4">Let Modluxe Bathrooms take you on a journey of bringing your vision to a reality. Bathrooms are one of the most important rooms where workmanship should be held to the highest standards.</p>
                    <p>Our dedicated bathroom renovation specialists are passionate in delivering some of the most modern and trend setting styles in the Sydney market. Check out our stunning portfolio</p>
                </div>
                <div class="row align-items-center gx-2 gx-md-4 pt-md-5 pt-xl-6">
                    <div class="col-auto">
                        <a href="#form" data-bs-toggle="modal" role="button" class="btn border-secondary text-secondary rounded-pill px-4">
                            <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="#FDF18C" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="#FDF18C" />
                            </svg>
                        </a>
                    </div>
                    <div class="col">
                        <div class="gradient-divider"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-md-block order-lg-last order-md-first"><?= renderImg('about-wallpapers.png', 'lib') ?></div>
        </div>
    </div>
</section>

<section class="portfolio py-5 py-md-0" id="portfolio">
    <div class="container">
        <div class="portfolio-card">
            <div class="row gx-0 align-items-center order">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="py-3 py-md-5 py-lg-3 px-md-4 px-xl-7">
                        <div class="text-gradient font-playlist fs-66 pb-md-2">Modern</div>
                        <div class="fw-300 lh-1_875 pt-3 pb-4 pt-md-4 pb-md-6">If it’s sleek, cutting edge or minimal that you are looking for then a modern bathroom could be the one for you. Modluxe Bathrooms has over 15 years of experience project management and delivery of bathroom builds from concept to reality. Go with the best!</div>
                        <div class="row align-items-center gx-2 gx-md-4">
                            <div class="col-auto">
                                <a href="#form" data-bs-toggle="modal" role="button" class="btn border-secondary text-secondary rounded-pill px-4">
                                    <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="#FDF18C" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="#FDF18C" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col">
                                <div class="gradient-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative order-first order-lg-last">
                    <div class="portfolio-slider">
                        <div><?= renderImg('modern-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-4.jpg', 'lib') ?></div>
                    </div>
                    <div class="nextArrow" id="arrow1">
                        <svg width="75" height="12" viewBox="0 0 75 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M74.5073 6.50707C74.7873 6.22702 74.7873 5.77298 74.5073 5.49293L69.9436 0.9293C69.6636 0.649253 69.2096 0.649253 68.9295 0.9293C68.6495 1.20935 68.6495 1.66339 68.9295 1.94344L72.9861 6L68.9295 10.0566C68.6495 10.3366 68.6495 10.7907 68.9295 11.0707C69.2096 11.3507 69.6636 11.3507 69.9436 11.0707L74.5073 6.50707ZM0.855469 6.71711H74.0002V5.28289H0.855469V6.71711Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-card mt-4 mt-md-5">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="py-3 py-md-5 py-lg-3 px-md-4 px-xl-7">
                        <div class="text-gradient font-playlist fs-66 pb-2">Traditional</div>
                        <div class="fw-300 lh-1_875 pt-3 pb-4 pt-md-4 pb-md-6">For those who want a more classic or timeless style the traditional design could be a more suitable choice. Using a more neutral colour pallette and natural materials such as wood for cabinets and vanities, this style invites warmth and charm at the same time. Call our consultants at Modluxe today!</div>
                        <div class="row align-items-center gx-2 gx-md-4">
                            <div class="col-auto">
                                <a href="#form" data-bs-toggle="modal" role="button" class="btn border-secondary text-secondary rounded-pill px-4">
                                    <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="#FDF18C" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="#FDF18C" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col">
                                <div class="gradient-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative order-first order-lg-last">
                    <div class="portfolio-slider">
                        <div><?= renderImg('traditional-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-4.jpg', 'lib') ?></div>
                    </div>
                    <div class="nextArrow">
                        <svg width="75" height="12" viewBox="0 0 75 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M74.5073 6.50707C74.7873 6.22702 74.7873 5.77298 74.5073 5.49293L69.9436 0.9293C69.6636 0.649253 69.2096 0.649253 68.9295 0.9293C68.6495 1.20935 68.6495 1.66339 68.9295 1.94344L72.9861 6L68.9295 10.0566C68.6495 10.3366 68.6495 10.7907 68.9295 11.0707C69.2096 11.3507 69.6636 11.3507 69.9436 11.0707L74.5073 6.50707ZM0.855469 6.71711H74.0002V5.28289H0.855469V6.71711Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-card mt-4 mt-md-5">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="py-3 py-md-5 py-lg-3 px-md-4 px-xl-7">
                        <div class="text-gradient font-playlist fs-66 pb-2">Designer</div>
                        <div class="fw-300 lh-1_875 pt-3 pb-4 pt-md-4 pb-md-6">A true luxury or high end bathroom can create an oasis within your home. For those willing to go the distance a Designer Bathroom can be a worthy investment. With 15 years in building and construction, Modluxe Bathrooms can provide full support to ensure that you come out the other side with your bathroom looking better than ever!</div>
                        <div class="row align-items-center gx-2 gx-md-4">
                            <div class="col-auto">
                                <a href="#form" data-bs-toggle="modal" role="button" class="btn border-secondary text-secondary rounded-pill px-4">
                                    <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="#FDF18C" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="#FDF18C" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col">
                                <div class="gradient-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative order-first order-lg-last">
                    <div class="portfolio-slider">
                        <div><?= renderImg('designer-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-4.jpg', 'lib') ?></div>
                    </div>
                    <div class="nextArrow">
                        <svg width="75" height="12" viewBox="0 0 75 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M74.5073 6.50707C74.7873 6.22702 74.7873 5.77298 74.5073 5.49293L69.9436 0.9293C69.6636 0.649253 69.2096 0.649253 68.9295 0.9293C68.6495 1.20935 68.6495 1.66339 68.9295 1.94344L72.9861 6L68.9295 10.0566C68.6495 10.3366 68.6495 10.7907 68.9295 11.0707C69.2096 11.3507 69.6636 11.3507 69.9436 11.0707L74.5073 6.50707ZM0.855469 6.71711H74.0002V5.28289H0.855469V6.71711Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact d-none d-md-block">
    <div class="container-fluid px-xxl-0">
        <div class="row align-items-center">
            <div class="col-6 col-lg-8 col-xl-9">
                <div class="gradient-divider"></div>
            </div>
            <div class="col-auto">
                <a href="#form" data-bs-toggle="modal" role="button" class="btn border-secondary text-secondary rounded-pill px-4">
                    <span class="pe-3">Book A Consultation</span> <svg width="33" height="12" viewBox="0 0 33 12" fill="#FDF18C" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.7343 6.87102C33.0305 6.57483 33.0305 6.09461 32.7343 5.79841L27.9076 0.971697C27.6114 0.675505 27.1312 0.675505 26.835 0.971697C26.5388 1.26789 26.5388 1.74811 26.835 2.0443L31.1254 6.33472L26.835 10.6251C26.5388 10.9213 26.5388 11.4015 26.835 11.6977C27.1312 11.9939 27.6114 11.9939 27.9076 11.6977L32.7343 6.87102ZM0.693359 7.09316L32.198 7.09316V5.57627L0.693359 5.57627L0.693359 7.09316Z" fill="#FDF18C" />
                    </svg>
                </a>
            </div>
            <div class="col">
                <div class="gradient-divider"></div>
            </div>
        </div>
    </div>
</section>

<div class="gradient-divider d-md-none"></div>

<section class="team" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
                <div class="fs-70 fw-300 text-center pb-4 pb-md-5 lh-1">Meet the <span class="text-gradient">Modluxe Directors</span></div>
                <div class="row pt-5 gy-7 gx-md-2 gx-lg-4">
                    <div class="col-md-6">
                        <div class="team-card">
                            <?= renderImg('team-chris.png', 'lib', 'mt-n5') ?>
                            <div class="fs-48 font-playlist text-gradient pt-4 pt-md-5">Chris</div>
                            <div class="fs-14 fw-300 font-inter pt-3">
                                <p>Christopher Kolar is the Co-founder and managing director of Modluxe. Chris is a highly experienced builder who lives and breathes construction. With over 15 years of experience in the construction industry, Chris has a passion for providing outstanding customer service and superior construction works for his clients.</p>
                                <p>Chris is also the founder and director of KC Constructions of which he has successfully built up into successful construction and renovation leader in the Sydney region. Along with his team of expert tradesmen, Chris is confident that Modluxe can produce results for you that are second to none.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-card">
                            <?= renderImg('team-ray.png', 'lib', 'mt-n5') ?>
                            <div class="fs-48 font-playlist text-gradient pt-4 pt-md-5">Ray</div>
                            <div class="fs-14 fw-300 font-inter pt-3">
                                <p>Raymond Albassit is the Co-founder and managing director of Modluxe. Ray has over 25 years experience in the Gyprock/Plastering, renovation and construction industry. His experience is vast and shows through the pride that he takes in his work.</p>
                                <p>Ray is passionate about his work and providing outstanding customer service. Ray is the founder and director of Complete Interior Linings, the professionals in Gyprocking & Plastering</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-7 col-md-6">
                        <div class="row justify-content-between align-items-center gy-lg-4">
                            <div class="col-xl-auto">
                                <div class="font-playlist fs-23 text-gradient">Proud members of</div>
                            </div>
                            <div class="col col-md-auto">
                                <?= renderImg('master-builders.png', 'lib') ?>
                            </div>
                            <div class="col col-md-auto">
                                <?= renderImg('hia-member.png', 'lib') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="row justify-content-between justify-content-lg-end align-items-center gy-lg-4">
                            <div class="col-lg-auto">
                                <div class="font-playlist fs-23 text-gradient">Powered by</div>
                            </div>
                            <div class="col col-md-auto">
                                <?= renderImg('kc-constructions.png', 'lib') ?>
                            </div>
                            <div class="col col-md-auto">
                                <?= renderImg('cil.png', 'lib') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center gy-3">
            <div class="col-auto d-lg-none">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="font-playlist fs-29 text-gradient">The perfect blend of modern and luxury</div>
            </div>
            <div class="col-11 col-md-auto">
                <div class="row gx-2 gx-md-3 gx-xxl-5 justify-content-between justify-content-md-center align-items-center">
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto text-primary">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                    <div class="col-auto text-primary">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto d-none d-lg-block">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>