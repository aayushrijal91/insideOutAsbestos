<header>
    <div class="navigation-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="javascript:void(0)" id="show-slide-nav" class="d-xl-none">
                        <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 2.21289C21.0851 2.21289 8.03546 2.21289 2 2.21289" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M25 12C21.0851 12 8.03546 12 2 12" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M25 21.7876C21.0851 21.7876 8.03546 21.7876 2 21.7876" stroke="white" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </a>
                </div>
                <div class="col-5 col-lg-4 col-xxl-3 d-none d-xl-block">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <a href="#services" class="btn text-white fs-20 fw-600">Services</a>
                        </div>
                        <div class="col-auto">
                            <a href="#contact-us" class="btn text-white fs-20 fw-600">Contact</a>
                        </div>
                        <div class="col-auto">
                            <a href="#about" class="btn text-white fs-20 fw-600">About</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-none d-xl-block">
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
                <div class="col-lg-8 col-xl-6">
                    <div class="fs-150 fw-800 font-agharti text-uppercase text-white lh-1"><span class="gradient-text-bg">Breathe Easy</span> with inside Outside</div>
                    <div class="text-white fs-30 fw-600 my-4 gradient-text-bg lh-1 d-inline-flex">Sydney's Leading Asbestos Removal Company</div>
                    <div class="pt-3">
                        <a href="#contact-us" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row pt-6">
                <div class="col-lg-9 col-xl-7 col-xxl-6 px-0">
                    <div class="cta bg-primary">
                        <div class="row gx-0 justify-content-end">
                            <div class="col-lg-11 col-xxl-9 pe-md-4 pe-lg-6">
                                <div class="row justify-content-around justify-content-lg-between">
                                    <div class="col-auto d-flex align-items-end text-white py-4 py-md-5">
                                        <div class="fs-100 font-agharti fw-900 lh-08">35+</div>
                                        <div class="fw-700 lh-1 ps-2">Years<br> Industry<br> Experience</div>
                                    </div>
                                    <div class="col-auto d-flex align-items-end text-white py-4 py-md-5">
                                        <div class="fs-100 font-agharti fw-900 lh-08">24HR</div>
                                        <div class="fw-700 lh-1 ps-2">Response<br> Time</div>
                                    </div>
                                    <div class="col-auto d-flex align-items-end text-white py-4 py-md-5">
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

<section class="services bg-light" id="services">
    <div class="container">
        <div class="text-primary text-uppercase font-agharti fs-65 fw-900 lh-1">Services We Provide</div>
        <ul class="nav nav-pills bg-grey rounded-15 p-2" id="pills-tab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="tab" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Residential Asbestos Removal</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="tab" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Commercial Asbestos Removal</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-3-tab" data-bs-toggle="tab" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Asbestos Inspection</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-4-tab" data-bs-toggle="tab" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Asbestos Decontamination</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="pills-5-tab" data-bs-toggle="tab" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">Asbestos Disposal</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <?= renderImg("service-1.jpg", "lib", "hero_img") ?>
                    </div>
                    <div class="col-xl-6">
                        <div class="py-5 px-md-5 px-lg-7 text-center text-md-start">
                            <div class="font-agharti fw-900 fs-65 text-uppercase lh-1">Residential Asbestos Removal</div>
                            <div class="fs-20 py-3">If you notice even the slightest amount of asbestos in your home, you must remove it immediately. Don’t put your family or yourself at risk.</div>
                            <a href="#form" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <?= renderImg("service-2.jpg", "lib", "hero_img") ?>
                    </div>
                    <div class="col-xl-6">
                        <div class="py-5 px-md-5 px-lg-7 text-center text-md-start">
                            <div class="font-agharti fw-900 fs-65 text-uppercase lh-1">Commercial Asbestos Removal</div>
                            <div class="fs-20 py-3">We are licenced to inspect, remove and dispose of asbestos in commercial properties. Our team can complete an asbestos survey or audit of the building.</div>
                            <a href="#form" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <?= renderImg("service-3.jpg", "lib", "hero_img") ?>
                    </div>
                    <div class="col-xl-6">
                        <div class="py-5 px-md-5 px-lg-7 text-center text-md-start">
                            <div class="font-agharti fw-900 fs-65 text-uppercase lh-1">Asbestos Inspection</div>
                            <div class="fs-20 py-3">Properly and safely inspecting your home or building for asbestos requires a trained team to ensure both that all dangerous traces are found and that the testing process is completed properly.</div>
                            <a href="#form" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <?= renderImg("service-4.jpg", "lib", "hero_img") ?>
                    </div>
                    <div class="col-xl-6">
                        <div class="py-5 px-md-5 px-lg-7 text-center text-md-start">
                            <div class="font-agharti fw-900 fs-65 text-uppercase lh-1">Asbestos Decontamination</div>
                            <div class="fs-20 py-3">We will decontaminate the site, once we have removed the large pieces of asbestos, so that it is thoroughly clean of any waste and debris.</div>
                            <a href="#form" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <?= renderImg("service-5.jpg", "lib", "hero_img") ?>
                    </div>
                    <div class="col-xl-6">
                        <div class="py-5 px-md-5 px-lg-7 text-center text-md-start">
                            <div class="font-agharti fw-900 fs-65 text-uppercase lh-1">Asbestos Disposal</div>
                            <div class="fs-20 py-3">Asbestos has special disposal facilities that we have access to, as they cannot be disposed off at any ordinary waste facility.</div>
                            <a href="#form" class="btn d-inline-flex btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-lg-end">
            <div class="col-lg-6 col-xl-5">
                <div class="fs-65 text-white fw-900 text-uppercase font-agharti pb-3">Book In A <span class="gradient-text-bg">Free Inspection Today</span></div>
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse1" class="recaptchaResponse">
                    <div class="row justify-content-end gy-3 gy-md-4">
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="tel" name="phone" class="form-control" placeholder="Number" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="text" name="suburb" class="form-control" placeholder="Suburb" required>
                        </div>
                        <div class="col-12">
                            <input type="date" name="date" class="form-control" placeholder="Suburb" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-secondary text-white fs-20 fw-600 px-5">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="why-us bg-light">
    <div class="container">
        <div class="text-primary text-uppercase font-agharti fs-65 fw-900 lh-1 pb-5">Why Choose us?</div>

        <div class="row g-3 g-xxl-5">
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-1.jpg", "lib", "w-100") ?>
                    <div class="caption">Free Onsite Quote</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-2.jpg", "lib", "w-100") ?>
                    <div class="caption">High-Tech Equipment</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-3.jpg", "lib", "w-100") ?>
                    <div class="caption">Highly Competitive Pricing</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-4.jpg", "lib", "w-100") ?>
                    <div class="caption">Licensed &amp; Fully Insured</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-5.jpg", "lib", "w-100") ?>
                    <div class="caption">Qualified &amp; Highly Trained Team</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-6.jpg", "lib", "w-100") ?>
                    <div class="caption">Fast Turn-Around</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-7.jpg", "lib", "w-100") ?>
                    <div class="caption">Safe Work Practice</div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="why-us-card">
                    <?= renderImg("why-us-8.jpg", "lib", "w-100") ?>
                    <div class="caption">Quality Services</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps-to-keep-safe">
    <div class="container">
        <div class="fs-65 text-white text-uppercase fw-900 font-agharti lh-1 text-center text-md-start">Our steps to keep you and your family safe</div>
        <div class="row justify-content-around gy-7 py-5">
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">1</div>
                    <div class="text">Indicate the contaminated areas</div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">2</div>
                    <div class="text">Identify The Hazard</div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">3</div>
                    <div class="text">Remove The asbestos</div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">4</div>
                    <div class="text">Use wet &amp; dry vaccum to cleanup</div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">5</div>
                    <div class="text">Decontaminate the site</div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="steps-card">
                    <div class="fs-235 number">6</div>
                    <div class="text">Dispose of the asbestos</div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="#form" class="btn btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                    Enquire Now
                </a>
            </div>
            <div class="col-auto">
                <a href="tel: <?= $phone_number ?>" class="btn btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                    <?= $phone_number ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="asbestos-location">
    <div class="container">
        <div class="fs-65 text-primary text-uppercase fw-900 font-agharti lh-1 pb-5 text-center text-md-start">Where asbestos could be found in your home</div>

        <div class="d-flex justify-content-center">
            <div class="house-wrapper">
                <?= renderImg('house-model.png', 'lib') ?>
                <div class="pointer pointer-1"></div>
                <div class="pointer pointer-2"></div>
                <div class="pointer pointer-3"></div>
                <div class="pointer pointer-4"></div>
                <div class="pointer pointer-5"></div>
                <div class="pointer pointer-6"></div>
                <div class="pointer pointer-7"></div>
                <div class="pointer pointer-8"></div>
                <div class="pointer pointer-9"></div>
                <div class="pointer pointer-10"></div>
                <div class="pointer pointer-11"></div>
                <div class="pointer pointer-12"></div>
                <div class="pointer pointer-16"></div>
                <div class="pointer pointer-19"></div>
                <div class="pointer pointer-20"></div>
                <div class="pointer pointer-22"></div>
                <div class="pointer pointer-24"></div>
                <div class="pointer pointer-25"></div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-1" class="asbestos-location-btn">Eaves & Gable Ends</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-2" class="asbestos-location-btn">Garage, Sheds & External Toilets</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-3" class="asbestos-location-btn">Vinyl floor tiles</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-4" class="asbestos-location-btn">Internal & external ventilators</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-5" class="asbestos-location-btn">Splashbacks</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-6" class="asbestos-location-btn">Carpet Underlay</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-7" class="asbestos-location-btn">Backing of Vinyl sheet flooring</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-8" class="asbestos-location-btn">Fireplace flues</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-9" class="asbestos-location-btn">Internal walls &amp; ceilings</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-10" class="asbestos-location-btn">Gutters</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-11" class="asbestos-location-btn">Downpipes</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-12" class="asbestos-location-btn">Internal Angle Mouldings</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-13" class="asbestos-location-btn">Fences</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-14" class="asbestos-location-btn">Compressed Asbestos Sheet Cement Flooring</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-15" class="asbestos-location-btn">Insulation Below Wood Heaters</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-16" class="asbestos-location-btn">External Angle Mouldings</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-17" class="asbestos-location-btn">Backing For electrical Meter Boards</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-18" class="asbestos-location-btn">Kennels</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-19" class="asbestos-location-btn">“tilux” marble finish wall panels</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-20" class="asbestos-location-btn">loose fill insulation in roof cavities</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-21" class="asbestos-location-btn">Insulation for hot water pipes &amp; Tanks</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-22" class="asbestos-location-btn">Ridge Capping</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-23" class="asbestos-location-btn">Buried &amp; Dumped waste materials</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-24" class="asbestos-location-btn">Corrugated Asbestos cement roofing</a></div>
            <div class="col-auto"><a href="javascript:void(0)" data-target="pointer-25" class="asbestos-location-btn">Wall sheeting</a></div>
        </div>

        <div class="row pt-5 pt-md-7">
            <div class="col-auto">
                <a href="#form" class="btn btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                    Enquire Now
                </a>
            </div>
            <div class="col-auto">
                <a href="tel: <?= $phone_number ?>" class="btn btn-secondary rounded-5 fw-600 text-white py-3 px-md-4 fs-20">
                    <?= $phone_number ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="licenses">
    <div class="container">
        <div class="fs-65 text-uppercase fw-900 font-agharti lh-1 pb-5">We Are Fully Licensed &amp; Insured</div>
        <div class="license-slider d-lg-none" id="license-slider">
            <div class="d-flex justify-content-center">
                <?= renderImg('safework-nsw.png', 'logo') ?>
            </div>
            <div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto"><?= renderImg('license.png', 'icons') ?></div>
                    <div class="col col-md-auto">
                        <div class="fw-700 fs-20 lh-1">Non-friable Asbestos Removal Licence</div>
                        <div class="fs-20 fw-500">No. AD2060</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto font-agharti fs-65 fw-900 lh-1">35+</div>
                    <div class="col-auto">
                        <div class="fw-700 fs-20">Years Industry</div>
                        <div class="fw-700 fs-20">Experience</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center justify-content-md-between align-items-center gy-5 d-none d-lg-flex">
            <div class="col-auto">
                <?= renderImg('safework-nsw.png', 'logo') ?>
            </div>
            <div class="col-auto">
                <div class="row align-items-center">
                    <div class="col-auto"><?= renderImg('license.png', 'icons') ?></div>
                    <div class="col col-md-auto">
                        <div class="fw-700 fs-20 lh-1">Non-friable Asbestos Removal Licence</div>
                        <div class="fs-20 fw-500">No. AD2060</div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="row align-items-center">
                    <div class="col-auto font-agharti fs-65 fw-900 lh-1">35+</div>
                    <div class="col-auto">
                        <div class="fw-700 fs-20">Years Industry</div>
                        <div class="fw-700 fs-20">Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact-us">
    <div class="container">
        <div class="row gx-xxl-7 gy-5">
            <div class="col-lg-6">
                <div class="font-agharti lh-1 fs-65 fw-900 text-uppercase pb-4">Contact Us</div>
                <p class="fs-20 lh-1218 fw-700">We have been in the Asbestos industry for over 30 years. We are equipped with the latest equipment and technology to handle any asbestos job.</p>
                <p class="fs-20 lh-1218">Safety first attitude - we uphold all required safety procedures and use appropriate equipment to ensure asbestos and other materials are disposed of safely off your property.</p>
                <p class="fs-20 lh-1218">We complete small scale residential demolitions including kitchens, bathrooms, laundries, sheds and garages as well as commercial shops and strip outs. </p>
                <div class="pt-3">
                    <a href="tel: <?= $phone_number ?>" class="btn d-inline-flex rounded-5 fw-600 text-white py-3 px-0 fs-20">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4588 13.0876L13.0626 11.6543C12.7098 11.5043 12.3146 11.4696 11.9387 11.5556C11.5629 11.6415 11.2276 11.8432 10.9852 12.1293L10.0064 13.2918C8.40185 12.3136 7.03593 11.0208 6.00027 9.5001L7.224 8.57028C7.52481 8.34003 7.73697 8.0217 7.82741 7.66491C7.91785 7.30812 7.88149 6.93292 7.72399 6.59782L6.22652 3.36304C6.05824 3.00284 5.76076 2.71114 5.38713 2.53997C5.0135 2.36879 4.58801 2.32928 4.18656 2.42846L1.31161 3.14097C0.894524 3.2435 0.531903 3.48859 0.293191 3.82931C0.0544787 4.17004 -0.0435462 4.58244 0.0178878 4.98755C0.553434 8.52014 2.27891 11.7929 4.93602 14.316C7.59313 16.839 11.0389 18.4766 14.7576 18.9836C15.1838 19.0409 15.6172 18.947 15.9751 18.7198C16.333 18.4926 16.5902 18.1481 16.6976 17.7521L17.4475 15.0209C17.5519 14.6395 17.5096 14.2354 17.3284 13.881C17.1471 13.5267 16.8388 13.2453 16.4588 13.0876Z" fill="white" />
                            <path d="M20 9.5001H17.5C17.4981 7.61099 16.7073 5.7998 15.3012 4.464C13.8951 3.12819 11.9887 2.37691 10.0002 2.37503V0C12.6514 0.00282878 15.1932 1.00464 17.0678 2.78564C18.9425 4.56664 19.997 6.98139 20 9.5001Z" fill="white" />
                            <path d="M15.0001 9.5001H12.5001C12.5001 8.87021 12.2368 8.26611 11.7679 7.82071C11.2991 7.3753 10.6632 7.12508 10.0002 7.12508V4.75005C11.3263 4.75005 12.598 5.2505 13.5357 6.14131C14.4733 7.03212 15.0001 8.24031 15.0001 9.5001Z" fill="white" />
                        </svg>
                        <span class="ps-3"><?= $phone_number ?></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
                    <div class="row justify-content-end gy-3 gy-md-4">
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="tel" name="phone" class="form-control" placeholder="Number" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <input type="text" name="suburb" class="form-control" placeholder="Suburb" required>
                        </div>
                        <div class="col-12">
                            <select name="service" class="form-control form-select" required>
                                <option value="" selected disabled>Service</option>
                                <option>Residential Asbestos Removal</option>
                                <option>Commercial Asbestos Removal</option>
                                <option>Asbestos Inspection</option>
                                <option>Asbestos Decontamination</option>
                                <option>Asbestos Disposal</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-secondary text-white fs-20 fw-600 px-4">Send enquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="services-areas">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="fs-65 text-uppercase fw-900 font-agharti lh-1 pb-5 text-primary">We Service Sydney Metro, Northern Beaches and Nearby areas</div>

                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212086.49889468186!2d151.1042948261236!3d-33.84193892717345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW!5e0!3m2!1sen!2sau!4v1666053244847!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 gx-xl-5 text-white justify-content-center">
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>