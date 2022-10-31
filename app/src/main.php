<header>
    <div class="navigation-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col">
                    <div class="horizontal-line"></div>
                </div>
                <div class="col-auto">
                    <div class="row gx-xl-5">
                        <div class="col-auto">
                            <a href="#about" class="btn px-0">About Modluxe</a>
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
                    <div class="horizontal-line"></div>
                </div>
                <div class="col-auto">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-3">
                        <div class="col-6 col-md-auto">
                            <a href="#form" class="btn border-white rounded-pill px-4">
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
            <div class="row justify-content-center align-items-center gy-4">
                <div class="col-12 fs-60 font-playlist text-gradient">
                    Style + Function + Quality
                </div>
                <div class="col-xl-9 fs-86 lh-1 fw-200">
                    <span class="text-gradient">Sydney's Leading</span> Bathroom Renovation Specialsts
                </div>
                <div class="col-12 fs-26 fw-200">
                    A team that delivers unparalleled and unmatched quality
                </div>
            </div>
        </div>
    </div>
</header>

<section class="specialise">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="font-playlist text-gradient fs-40">Services we specialise in</div>
                <div class="d-flex align-items-center justify-content-center fw-300">
                    <div>Bathroom Renovation</div>
                    <div class="dot"></div>
                    <div>New Bathroom Builds</div>
                    <div class="dot"></div>
                    <div>Commercial Bathroom Works</div>
                    <div class="dot"></div>
                    <div>Bathroom Retreats</div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="font-playlist text-gradient fs-40">Styles we love but not limited to</div>
                <div class="d-flex align-items-center justify-content-center fw-300">
                    <div>The Classic Bathroom</div>
                    <div class="dot"></div>
                    <div>The Modern Bathroom</div>
                    <div class="dot"></div>
                    <div>The designer bathroom</div>
                    <div class="dot"></div>
                    <div>The traditional bathroom</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gradient-divider"></div>

<section class="about">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-xl-5">
                <div class="fs-70 fw-300 lh-1 pb-2">A team that delivers unparalleled and unmatched quality</div>
                <div class="py-4 lh-1_875">
                    <p class="pb-4">Let Modluxe Bathrooms take you on a journey of bringing your vision to a reality. Bathrooms are one of the most important rooms where workmanship should be held to the highest standards.</p>
                    <p>Our dedicated bathroom renovation specialists are passionate in delivering some of the most modern and trend setting styles in the Sydney market. Check out our stunning portfolio</p>
                </div>
                <div class="row align-items-center pt-6">
                    <div class="col-md-auto">
                        <a href="#form" class="btn border-secondary text-secondary rounded-pill px-4">
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
            <div class="col-lg-6"><?= renderImg('about-wallpapers.png', 'lib') ?></div>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <div class="portfolio-card">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6">
                    <div class="py-3 px-7">
                        <div class="text-gradient font-playlist fs-66 pb-2">Modern</div>
                        <div class="fw-300 lh-1_875 pt-4 pb-6">If it’s sleek, cutting edge or minimal that you are looking for then a modern bathroom could be the one for you. Modluxe Bathrooms has over 15 years of experience project management and delivery of bathroom builds from concept to reality. Go with the best!</div>
                        <div class="row align-items-center">
                            <div class="col-md-auto">
                                <a href="#form" class="btn border-secondary text-secondary rounded-pill px-4">
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
                <div class="col-lg-6">
                    <div class="portfolio-slider">
                        <div><?= renderImg('modern-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('modern-4.jpg', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-card mt-5">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6">
                    <div class="py-3 px-7">
                        <div class="text-gradient font-playlist fs-66 pb-2">Traditional</div>
                        <div class="fw-300 lh-1_875 pt-3 pb-6">For those who want a more classic or timeless style the traditional design could be a more suitable choice. Using a more neutral colour pallette and natural materials such as wood for cabinets and vanities, this style invites warmth and charm at the same time. Call our consultants at Modluxe today!</div>
                        <div class="row align-items-center">
                            <div class="col-md-auto">
                                <a href="#form" class="btn border-secondary text-secondary rounded-pill px-4">
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
                <div class="col-lg-6">
                    <div class="portfolio-slider">
                        <div><?= renderImg('traditional-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('traditional-4.jpg', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-card mt-5">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6">
                    <div class="py-3 px-7">
                        <div class="text-gradient font-playlist fs-66 pb-2">Designer</div>
                        <div class="fw-300 lh-1_875 pt-4 pb-6">A true luxury or high end bathroom can create an oasis within your home. For those willing to go the distance a Designer Bathroom can be a worthy investment. With 15 years in building and construction, Modluxe Bathrooms can provide full support to ensure that you come out the other side with your bathroom looking better than ever!</div>
                        <div class="row align-items-center">
                            <div class="col-md-auto">
                                <a href="#form" class="btn border-secondary text-secondary rounded-pill px-4">
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
                <div class="col-lg-6">
                    <div class="portfolio-slider">
                        <div><?= renderImg('designer-1.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-2.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-3.jpg', 'lib') ?></div>
                        <div><?= renderImg('designer-4.jpg', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>