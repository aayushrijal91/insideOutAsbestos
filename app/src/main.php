<header>
    <div class="navigation-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-5 col-lg-4 col-xxl-3">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <a href="" class="btn text-white fs-20 fw-600">Services</a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="btn text-white fs-20 fw-600">Contact</a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="btn text-white fs-20 fw-600">About</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row gx-3 justify-content-center align-items-center">
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-5 text-white fw-600 py-3 px-md-4 fs-20">
                                <?= $phone_number ?>
                            </a>
                        </div>
                        <div class="col-auto socials">
                            <a href="<?= $facebook ?>" class="btn btn-secondary rounded-circle p-0">
                                <svg width="12" height="24" viewBox="0 0 11 17" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.39936 17L3.375 9.5625H0.1875V6.375H3.375V4.25C3.375 1.3821 5.15098 0 7.70934 0C8.93482 0 9.98806 0.0912369 10.295 0.132016V3.12914L8.52065 3.12994C7.12927 3.12994 6.85986 3.79111 6.85986 4.76132V6.375H10.8125L9.75 9.5625H6.85985V17H3.39936Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto socials">
                            <a href="<?= $instagram ?>" class="btn btn-secondary rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="fs-150 fw-800 font-agharti text-uppercase text-white lh-1"><span class="gradient-text-bg">Breathe Easy</span> with inside Outside</div>
                    <div class="text-white fs-30 fw-600 my-4 gradient-text-bg lh-1 d-inline-flex">Sydney's Leading Asbestos Removal Company</div>
                    <div class="pt-3">
                        <a href="tel:<?= $phone_number ?>" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row pt-6">
                <div class="col-lg-6 px-0">
                    <div class="cta bg-primary">
                        <div class="row justify-content-end">
                            <div class="col-lg-10 pe-4 pe-xl-8">
                                <div class="row justify-content-between">
                                    <div class="col-auto d-flex align-items-end text-white py-5">
                                        <div class="fs-100 font-agharti fw-900 lh-08">35+</div>
                                        <div class="fw-700 lh-1 ps-2">Years<br> Industry<br> Experience</div>
                                    </div>
                                    <div class="col-auto d-flex align-items-end text-white py-5">
                                        <div class="fs-100 font-agharti fw-900 lh-08">24HR</div>
                                        <div class="fw-700 lh-1 ps-2">Response<br> Time</div>
                                    </div>
                                    <div class="col-auto d-flex align-items-end text-white py-5">
                                        <div class="fs-100 font-agharti fw-900 lh-08">FREE</div>
                                        <div class="fw-700 lh-1 ps-2">Onsite<br> Quote</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved
                    </div>
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