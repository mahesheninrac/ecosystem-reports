<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />



</head>

<body>
    <!-- navbar   -->
    <nav class="navbar navbar-expand-md bg-white py-4">
        <div class="container-fluid">
            <a class="navbar-brand " href="<?= base_url('') ?>">


                <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icofont-navigation-menu fs-30"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center" style="gap: 1.5rem; ">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>"> Reports</a>
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
                    <li class="nav-item">
                        <i class="icofont-navigation-menu fs-22" style=" margin-right: 5px"></i>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->


    <div class="overflow-hidden product-hero container-fluid  " style="padding:0 0 6.5rem 0;">
        <div class="hero-section  d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="text-container flex-grow-1 flex-basis-100 flex-md-basis-45">
                <div class=" " style="max-width: 80%;">
                    <p class="w-100 h1" style="font-size: 3.125rem; line-height: 4.25rem;        font-weight: 400;">Battery Demand <br> Outlook Services</p>
                    <p class="mt-4 text-start" style="font-size: 1rem; font-weight:400;letter-spacing:-0.01rem">Our Battery Demand Outlook Service provides you with a complete overview of global battery demand across all end use markets, with in depth analysis across EV (BEV, PHEV, HEV, FCEV), stationary storage (grid & BTM), two & three wheeler, micromobility, portables, and Non-road Mobile Machinery markets so that you can make more informed decisions.</p>
                    <div class="pt-1">
                        <a href="#demo-section">
                            <button type="button" class=" fw-bold btn btn-primary px-4 py-2 rounded-md mx-auto ">Request Demo</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="video-container flex-grow-1 flex-basis-100 flex-md-basis-55 " style="scale: 1.3;">
                <img src="https://rhomotion.com/app/uploads/2023/12/Vector-3.svg" alt="Battery Demand Outlook" class="img-fluid">
            </div>
        </div>
    </div>


    <!--services  -->

    <div class="container-fluid service-ribbon ">
        <div class="row row-cols-1 row-cols-md-4 gy-4">
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-2">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">PDF &amp; Excel</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">Released quarterly</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white"> Customisable</p>
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-md-center px-4 py-2 text-center">
                <div class="min-w-3">
                    <img src="https://placehold.co/50" alt="">
                    <p class="text-base leading-5 mt-0 mt-md-3 ml-4 ml-md-0 text-white">Analyst access</p>
                </div>

            </div>

        </div>
    </div>
    <!-- Interested in a sample report -->

    <div class="sample-report-banner container-fluid w-100 mx-0 row  ">


        <div class="d-flex justify-content-center  align-item-center" style="align-self: center;gap:6rem;">
            <img class="sample-report-image" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap" width="250px" height="200px">
            <div class="py-4 " style="max-width: 37rem;">
                <h1 class="text-dark" style="font-size: 1.75rem; ">Interested in a sample report?</h1>
                <p class="w-60 text-dark">Register your interest and we&#39;ll contact you shortly to provide sample materials and arrange a demo.</p>
                <a href="<?= base_url("/reports") ?>">
                    <button type="button" class="btn  px-4 py-2 rounded-md mx-auto fw-bold text-white">Get Reports</button>
                </a>

            </div>
        </div>
    </div>



    <!-- included -->
    <!-- pt-3 pb-2 pt-md-4 pb-md-5 -->
    <section class="overflow-hidden what_included fw-bold">
        <div class="container-fluid text-center px-3 px-md-0">
            <div class="min-h-4">
                <h3 class="" style="font-size: 2.25rem; line-height:1.125;font-weight:600">What&#39;s included?</h3>
                <div class="text-center" style="font-size: 1rem; font-weight:500; line-height:1.6rem;text-align: left;">
                    <p>Battery Demand Outlook Service combines all our battery outlooks in one place,<br> providing a comprehensive view of total battery demand. Reports include:</p>
                </div>
            </div>

            <div class="d-flex justify-content-evenly m-4">
                <div class="product-tab" target="overall-market">Overall Market</div>
                <div class="product-tab" target="sales-market">Sales Market</div>
                <div class="product-tab" target="production-market">Production Market</div>
            </div>

            <!-- overall market -->
            <div class="row row-cols-1 row-cols-md-2 g-3 g-md-4  product-tab-content" id="overall-market">
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title"> overall EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- sales market -->
            <div class="row row-cols-1 row-cols-md-2 g-3 g-md-4 hidden product-tab-content" id="sales-market">
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">Sales EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title"> Production EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- production market -->
            <div class="row row-cols-1 row-cols-md-2 g-3 g-md-4 hidden product-tab-content" id="production-market">
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">production EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded position-relative overflow-hidden what_included_card ">
                        <img class="d-none d-md-block w-25 position-absolute top-50 translate-middle-y end-0 brightness-50" src="">
                        <div class="text-start d-flex flex-column">
                            <div class="d-flex align-items-center mb-2 gap-3">
                                <img class="check-box me-2" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check.0e6cc9.svg" alt="Check Icon" width="24" height="24">
                                <div class="d-flex flex-column gap-3 ">
                                    <h4 class="title">EV & Battery Quarterly Outlook</h4>
                                    <a href="https://rhomotion.com/research/ev-battery-quarterly-outlook/" class="">learn more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>



        <section class="faq">
            <div class="container-fluid mt-5">
                <div class="faq-section">
                    <div class="faq-item border-top border-dark">
                        <h3 class="faq-question">How is the report delivered? <span><i class="icofont-arrow-right"></i></span></h3>
                        <div class="faq-answer">
                            <p>The service is provided via our reports and data files, with a consolidated total battery demand file.</p>
                        </div>
                    </div>
                    <div class="faq-item   border-top border-bottom border-dark">
                        <h3 class="faq-question ">What does the product cost? <span><i class="icofont-arrow-right"></i></span></h3>
                        <div class="faq-answer ">
                            <p>The product cost varies depending on the specifications and requirements of the client. Please contact us for detailed pricing.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </section>



    <!-- demooo -->

    <section class="position-relative  demo-section" id="demo-section">
        <div class="container-xxl  demo-section-left
        ">
            <div class="row no-gutters ">
                <div class="col-md-6 d-flex flex-column  text-white justify-content-center align-items-center ">
                    <h2 class="text-sky-blue-5 mb-3 text-center  fw-bold ">
                        Request demo
                    </h2>
                    <p class="text-sky-blue-5 mb-4 text-center" style="max-width:400px;">
                        Register your interest and we&#39;ll contact you shortly to provide sample materials and arrange a demo.
                    </p>

                </div>

                <!-- section for form -->
                <div class="col-md-6 p-0 w-50 overflow-hidden   demo-section-right">
                    <div class="demo-form-section ">
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
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="XXXXXXXXXX" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary px-2 py-2">Request Demo</button>
                            <p class="py-4 fs-14">By submitting this form, you agree to Eninrac’s <u>privacy policy</u>.</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- related products -->

    <section class="related-products px-1 py-4">
        <h1 class=" py-4 mx-1 h2">Related Products</h1>

        <div class="container-fluid d-flex flex-wrap gap-2  py-2 justify-content-around">
            <div class="related-products-card" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">EV & Battery Quarterly Outlook</p>
                </div>
            </div>
            <div class="related-products-card" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Battery Energy Stationary Storage Quarterly Outlook</p>
                </div>
            </div>
            <div class="related-products-card" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">eMicromobility and 2&3 Wheeler Outlook</p>
                </div>
            </div>
            <div class="related-products-card" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Portables Battery Outlook</p>
                </div>
            </div>
            <!-- Add New Products  -->


            <!-- <div class="" style="width: 15rem;">
                <img class="card-img-top rounded-lg" src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ipad_frame_2.373b58.png" alt="Card image cap">
                <div class="border-0 py-4 text-start">
                    <p class="card-text fw-bold ">Some quick example text</p>
                </div>
            </div> -->

        </div>





    </section>


    <!-- footer -->

    <footer class="footer text-center text-md-start z-1">
        <div class="container-fluid">
            <div class="row" style="padding:2rem">
                <div class="col-md-5 col-lg-5 mb-4 mb-md-0">
                    <div>
                        <img src="<?= base_url('assets/images/Asset 8.svg
            ') ?>" alt="Logo" class="logo mb-4 w-25 h-50">
                    </div>
                    <div class="contact-info">
                        <p>Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301</p>
                        <p>(+91) 9319048963, (+91) 9319047963<br><a href="mailto:info@rhomotion.com">connect@eninrac.com</a></p>
                    </div>

                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="row" style="padding: 2rem;">
                        <div class="col-6">
                            <div class="nav-links">
                                <a href="<?= base_url('reports') ?>" class="d-block" id="reports">Reports</a>
                                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom Requirements</a>
                                <a href="<?= base_url('event') ?>" class="d-block" id="event">Surveys & VoC</a>
                                <a href="<?= base_url('contact_us') ?>" class="d-block">About us</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="newsletter-form line-height:1.1 ">
                                <p class="mb-2">Subscribe to our newsletter</p>
                                <div class="w-100 newsletterfooter-input-i position-relative">
                                    <input type="email" name="" id="" class="mb-2 w-100 " placeholder="your work email">
                                    <i class="icofont-long-arrow-right position-absolute"></i>
                                </div>
                                <p style="font-size: .8rem;">By submitting this form, you agree to Rho Motion’s privacy policy.</p>
                                <div class="social-icons mt-4">
                                    <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer">
                                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg" alt="LinkedIn">
                                    </a>
                                    <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank" rel="noreferrer">
                                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg" alt="Twitter">
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " style="padding: 0 2rem;">

                <p class="copyright mb-0" style="font-size: 1.3rem;">&copy; 2024 Eninrac. All rights reserved.</p>


                <p class="privacy  "><a href="">Privacy Policy</a> • <a href="">Terms & Conditions</a></p>

            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach(item => {
                const question = item.querySelector(".faq-question");
                question.addEventListener("click", () => {
                    item.classList.toggle("active");
                    const arrow = question.querySelector("span");
                    if (item.classList.contains("active")) {
                        arrow.innerHTML = `<i class="icofont-arrow-down " ></i>`;
                    } else {
                        arrow.innerHTML = item.querySelector(".faq-answer").style.display === 'none' ? "" : `<i class="icofont-arrow-right "></i>`;
                    }
                });
            });
        });


        document.addEventListener("DOMContentLoaded", function() {
            const productTab = document.querySelectorAll(".product-tab");



            productTab.forEach(tab => {

                tab.addEventListener("click", (e) => {
                    showTabContent(e.target.getAttribute("target"));
                });
            });
        });

        function showTabContent(id) {
            const sections = document.querySelectorAll(".product-tab-content")
            sections.forEach(section => {
                if (section.id === id) {
                    section.classList.remove("hidden");
                } else {
                    section.classList.add("hidden");
                }
            });



        }
    </script>
    <script src="<?= base_url('assets/js/footer.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>