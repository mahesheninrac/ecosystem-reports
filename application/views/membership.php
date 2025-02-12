<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
   
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <style>
        .accord-overlay {

            position: relative !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background-color: rgba(255, 255, 255, .9) !important;

            z-index: 1;
        }

        .membership-introduction {
            line-height: 4.25rem !important;
            font-size: 3.125rem !important;
            width: 40rem;

        }
    </style>
</head>

<body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-md bg-white py-4">
        <div class="container">
            <a class="navbar-brand " href="<?= base_url('/') ?>">

                <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="./Assets/menu.png" alt="" /></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>">Eco System Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('custom_page') ?>">Custom Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('event') ?>">Surveys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('contact_us') ?>">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="custom-banner w-100">
        <div class="overlay"></div>
        <div class="container-xxl position-relative pt-4">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h2 class="h1 primary-color fw-bold fs-28">Eninrac Consultancy</h2>
                        <p class="membership-introduction">Exclusive access to our analysis, resources and industry news</p>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- content paltform -->
    <section>

        <div class="container-xxl d-flex flex bg-primary-700 py-4  align-item-center">
            <div class=" " style="max-width: 50%;  padding:5rem 0rem;">
                <h3 class="h4 fw-bold">
                    Rho Motion content platform for members only
                </h3>
                <h1 class="text-white pb-2 " style="font-size: 2.25rem ; line-height: 3.125rem; ">
                    Up-to-date insights into the energy transition markets, and your Rho Motion reports in one place
                </h1>
                <ul class="mb-3 d-flex flex-column gap-2 p-0 text-white fs-20">
                    <li class="d-flex align-items-start gap-2">
                        <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                        Build your public profile
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                        Connect and collaborate with other sector specialists
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <img class="w-10" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg" aria-hidden="true" />
                        Inclusion in pre and post-event promotion
                    </li>
                </ul>
                <a class="btn btn-primary d-inline-block text-nowrap px-4 py-2 text-md fw-medium" href="<?= base_url('contact_us') ?>">Request Demo</a>
            </div>

            <div class="" style="max-width: 50%; padding:5rem 0rem;">
                <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262970/assets/membership/maj116a1ftvssngf7uhe.png" alt="">
            </div>

        </div>
    </section>

    <section class="briefing ">
        <div class="container-xxl d-flex flex-row gap-2 bg-primary-300 py-4">

            <div style="min-width: 50%;" class="briefing-left">
                <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/membership-illustrations-1.6b59d2a484167ee2.png" alt="" style="max-width: 100%;">
            </div>

            <div class="d-flex flex-column gap-1 briefing-right" style="min-width: 50%;">
                <h1 class="membership-accord-text">
                    Regularly updated content to provide actionable <br>intelligence on the energy transition
                </h1>

                <div class="membership-accord ">
                    <div class="accordion " id="accordionExample">
                        <div class="accordion-item accord-overlay">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Rho Motion Briefings and Resources
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapsed " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Long-form briefings including Rho Motion insight and analysis, plus trackers, tools and resources.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Industry Update
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Latest news stories from energy transition markets around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Videos and Presentation
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        An entire archive of our webinars, round table discussions, event session recordings and presentations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Your Eninrac’s subscription
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Access to all your Rho Motion reports</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <div class="con-wrapper ">
        <div class="container-xxl">
            <div class="row text-start">
                <!-- Left Column -->
                <div class="col-md-5 d-flex flex-column justify-content-center align-item-center position-relative p-0">
                    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262970/assets/membership/maj116a1ftvssngf7uhe.png" alt="" style="padding: 4rem;">
                </div>
                <!-- Right Column -->
                <div class="col-md-7 bg-sky-blue-5 p-4 bg-primary-200">
                    <div class="px-5 mx-5 membership-demo-form">
                        <h1>Request Membership demo</h1>
                        <p>Get in touch for an in-depth discussion and walk-through of our membership platform.</p>
                        <div class="">
                            <form enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email@youremailaddress.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone number <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text">+91</span>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="XXXXXXXXXXX" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary px-2 py-2">Request Trial</button>
                                <p class="py-4">By submitting this form, you agree to Eninrac's privacy policy.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </section>




    <footer class="footer text-center text-md-start z-1">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4 mb-md-0">
                    <div>
                        <img src="<?= base_url('assets/images/final-logo-ecosystem-white.png') ?>" alt="Logo" class="logo mb-4 w-25 h-50">
                    </div>
                    <div class="contact-info">
                        <p>Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301</p>
                        <p>(+91) 9319048963, (+91) 9319047963<br><a href="mailto:info@rhomotion.com">connect@eninrac.com</a></p>
                    </div>
                    <div class="social-icons mt-4">
                        <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer">
                            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg" alt="LinkedIn">
                        </a>
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank" rel="noreferrer">
                            <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg" alt="Twitter">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="nav-links">
                                <a href="<?= base_url('reports') ?>" class="d-block" id="reports">Eco System Reports</a>
                                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom Requirements</a>
                                <a href="<?= base_url('event') ?>" class="d-block" id="event">Surveys & VoC</a>
                                <a href="<?= base_url('contact_us') ?>" class="d-block">About us</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="nav-links">
                                <a href="/magazine" class="d-block">Magazine</a>
                                <a href="https://einfews.energyinfra.market/" class="d-block">News</a>
                                <a href=" https://eninrac.com/careers" class="d-block">Careers</a>
                                <a href="<?= base_url("contact_us") ?>" class="d-block">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 text-md-start">
                    <p class="copyright">&copy; 2024 Eninrac. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="privacy"><a href="">Privacy Policy</a> • <a href="">Terms & Conditions</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>