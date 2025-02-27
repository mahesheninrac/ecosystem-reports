<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

</head>

<body>
    <!-- navbar section  -->
    <nav class="navbar navbar-expand-md bg-white py-4">
        <div class="container-fluid">
            <a class="navbar-brand " href="<?= base_url('') ?>">


                <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80"
                    alt="home-page-banner">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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





    <!--banner section  -->

    <header class="event-banner-relative  py-5  overflow-hidden">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <picture>
                        <source media="(min-width: 768px)"
                            srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701983968/assets/event-archive/hkskl3wi4ebtqhy36ntx.svg">
                        <img class="event-banner-absolute top-0 end-0 h-100 w-50 object-fit-cover"
                            src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701983968/assets/event-archive/uoadj24f0mnn0dtx3g6r.svg"
                            aria-hidden="true">
                    </picture>
                </div>
                <div class="col-md-6 order-md-1 d-flex flex-column justify-content-center">
                    <div class="text-start text-md-start" style="max-width: 33.31rem;">
                        <h1 class="" style="font-size: 1.3125rem; font-weight:600; line-height: 140%; color: #5866ff">
                            ENINRAC'S WEBINARS</h1>
                        <p style="font-size: 2.25rem; font-weight:600; line-height: 140%;">Connecting you with key
                            players across the energy transition</p>
                        <p class="mb-4 py-2 " style="font-size: 1rem; font-weight:400;line-height:160%">Rho Motion
                            events are a forum for learning, discussion and collaboration. They offer outstanding
                            opportunities for networking and market insights into the challenges and opportunities
                            facing the sector.</p>
                        <a class="btn btn-primary fw-bold py-2" href="#eventTabsContent">See full event list</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- events -->

    <section class="tabs-section  event-section">
        <div class="container-fluid">
            <h1 class="p-2 fw-bold">Webinars</h1>
            <!-- Tab Navigation -->
            <div class="">
                <ul class="nav nav-tabs nav-fill py-2" id="eventTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active px-2 py-4 text-dark" id="all-events-tab" data-bs-toggle="tab"
                            data-bs-target="#all-events" type="button" role="tab" aria-controls="all-events"
                            aria-selected="true">ALL WEBINARS</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="live-events-tab" data-bs-toggle="tab"
                            data-bs-target="#live-events" type="button" role="tab" aria-controls="live-events"
                            aria-selected="false">LIVE WEBINARS</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="webinars-tab" data-bs-toggle="tab"
                            data-bs-target="#webinars" type="button" role="tab" aria-controls="webinars"
                            aria-selected="false">Upcoming WEBINARS</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="past-events-tab" data-bs-toggle="tab"
                            data-bs-target="#past-events" type="button" role="tab" aria-controls="past-events"
                            aria-selected="false">PAST WEBINARS</div>
                    </li>
                </ul>
            </div>


            <!-- Tab Content -->
            <div class="tab-content" id="eventTabsContent">
                <!-- All Events -->
                <div class="tab-pane fade show active" id="all-events" role="tabpanel" aria-labelledby="all-events-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block ">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>



                    </div>
                </div>

                <!-- Live Events -->
                <div class="tab-pane fade" id="live-events" role="tabpanel" aria-labelledby="live-events-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Webinars -->
                <div class="tab-pane fade" id="webinars" role="tabpanel" aria-labelledby="webinars-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Past Events -->
                <div class="tab-pane fade" id="past-events" role="tabpanel" aria-labelledby="past-events-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Podcast -->
    <section class="tabs-section  event-section">
        <div class="container-fluid">
            <h1 class="p-2 fw-bold">Podcast</h1>
            <!-- Tab Navigation -->
            <div class="">
                <ul class="nav nav-tabs nav-fill py-2" id="eventTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active px-2 py-4 text-dark" id="all-podcast-tab" data-bs-toggle="tab"
                            data-bs-target="#all-podcast" type="button" role="tab" aria-controls="all-podcast"
                            aria-selected="true">ALL PODCAST</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="live-podcast-tab" data-bs-toggle="tab"
                            data-bs-target="#live-podcast" type="button" role="tab" aria-controls="live-podcast"
                            aria-selected="false">LIVE PODCAST</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="upcoming-webinars-tab" data-bs-toggle="tab"
                            data-bs-target="#upcoming-webinars" type="button" role="tab"
                            aria-controls="upcoming-webinars" aria-selected="false">UPCOMING PODCAST</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link px-2 py-4 text-dark" id="past-podcast-tab" data-bs-toggle="tab"
                            data-bs-target="#past-podcast" type="button" role="tab" aria-controls="past-podcast"
                            aria-selected="false">PAST PODCAST</div>
                    </li>
                </ul>
            </div>


            <!-- Tab Content -->
            <div class="tab-content" id="eventTabsContent">
                <!-- All Events -->
                <div class="tab-pane fade show active" id="all-podcast" role="tabpanel"
                    aria-labelledby="all-podcast-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block ">
                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>
                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>
                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>
                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Live Events -->
                <div class="tab-pane fade" id="live-podcast" role="tabpanel" aria-labelledby="live-podcast-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Webinars -->
                <div class="tab-pane fade" id="upcoming-webinars" role="tabpanel"
                    aria-labelledby="upcoming-webinars-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Past Events -->
                <div class="tab-pane fade" id="past-podcast" role="tabpanel" aria-labelledby="past-podcast-tab">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <a href="">
                                <div class="d-flex flex event-block">

                                    <div class=" event-block-text d-flex flex gap-4">
                                        <div class="time-date">
                                            <p class="online-event">online event</p>
                                            <p class="time-date">31 July 2024</p>
                                        </div>

                                        <div class="grow">
                                            <div class="title line-clamp">
                                                2024 EV & battery market slowdown: Temporary setback or long-term trend?
                                            </div>
                                            <p class="line-clamp description">Register now for our latest webinar on the
                                                EV and battery market slowdown: Temporary setback or Long-Term Trend?
                                                Join our expert analyst team as they review the EV and battery markets,
                                                reflecting on trends from the first half of 2024 and discussing
                                                potential developments for the rest of the year.</p>
                                        </div>

                                    </div>
                                    <div class="image-holder">
                                        <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="">
                                    </div>


                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- recent speakers -->

    <section class="p-4 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 py-4 fw-bold ">Recent speakers</h2>
            <div class="m-auto pb-5 position-relative" style="max-width: 900px;">
                <a target="blank" href="https://eninrac.com/">
                    <div class="overlay-white-transparent"></div>
                    <div class="client-logo-placeholder">
                        <img class="w-100" src="https://eninrac.com/assets/upload/client_logo.png" alt="client"
                            style="filter: grayscale(100)">
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Speak at our events -->
    <section class="speak-events px-4 ">
        <div
            class="container-fluid mx-auto max-w-content-container d-md-flex align-items-lg-center pb-5 pb-md-5 pt-5 pt-md-5 ">

            <div class="col-md-6 d-flex justify-content-center mt-5 mt-md-0">
                <picture>
                    <source media="(min-width: 640px)"
                        srcset="https://omnicoreplus.com/assets/om-upload/3-in-1-collage.png">
                    <img class="img-fluid object-cover mx-auto mx-md-0 w-100 max-w-md h-auto"
                        src="https://omnicoreplus.com/assets/om-upload/3-in-1-collage.png" alt="">
                </picture>
            </div>
            <div class="col-md-6 pe-md-5 px-3">
                <div class="position-relative ms-sm-5 w-sm-50">
                    <h2 class="h3 h2-md mb-3 mt-4 sm:mb-3 sm:mt-n3">Speak at our events</h2>
                    <ul class="mb-3 d-flex flex-column gap-2">
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10"
                                src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg"
                                aria-hidden="true" />
                            Build your public profile
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10"
                                src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg"
                                aria-hidden="true" />
                            Connect and collaborate with other sector specialists
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <img class="w-10"
                                src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/check-blue-circle.0320f9.svg"
                                aria-hidden="true" />
                            Inclusion in pre and post-event promotion
                        </li>
                    </ul>
                    <a class="btn btn-primary d-inline-block text-nowrap px-4 py-2 text-md fw-bold mt-4"
                        href="<?= base_url('contact_us') ?>">Get in touch</a>
                </div>

            </div>

        </div>
    </section>


    <!-- feedback  -->
    <section class="position-relative px-5 event-bg-light-gray">
        <picture>
            <source media="(min-width: 768px)"
                srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787407/assets/event-archive/event-archive-feedback_yvlb0w_jotake.webp">
            <img class="position-absolute start-0 top-0 w-100 h-100 object-cover object-start"
                src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701787406/assets/event-archive/event-archive-feedback-mobile_aol204_eja3lr.webp"
                alt="">
        </picture>
        <div class="position-absolute start-0 top-0 w-100 h-100 event-bg-black-60"></div>
        <div class="position-relative mx-auto event-max-w-container d-flex justify-content-end">
            <div class="event-pt-custom event-pt-md-custom event-pb-custom event-pb-md-custom text-light">
                <div class="event-max-w-custom">
                    <p class="event-text-h4 text-uppercase event-mb-custom event-text-lilac-medium"> EVENT FEEDBACK </p>
                    <p class="event-text-body-text event-text-pre-title"> "I thought that the program was put together
                        excellently – the topics were interesting and all of the topics in each session were very
                        complementary. The presentations were very engaging and I enjoyed the conversations during the
                        sessions. The allocated time and spaces for networking ensured that interactions with other
                        participants were very fruitful" </p>
                    <p class="event-mt-custom event-text-h5 event-text-h4"> Sharon Booyens, PhD </p>
                    <p class="event-text-body-text event-text-big-copy"> Manager, Market Intelligence: Carbon. Sasol
                        Chemicals </p>
                </div>
            </div>
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
                        <p>Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301
                        </p>
                        <p>(+91) 9319048963, (+91) 9319047963<br><a
                                href="mailto:info@rhomotion.com">connect@eninrac.com</a></p>
                    </div>

                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="row" style="padding: 2rem;">
                        <div class="col-6">
                            <div class="nav-links">
                                <a href="<?= base_url('reports') ?>" class="d-block" id="reports">Reports</a>
                                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom
                                    Requirements</a>
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
                                <p style="font-size: .8rem;">By submitting this form, you agree to Rho Motion’s privacy
                                    policy.</p>
                                <div class="social-icons mt-4">
                                    <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank"
                                        rel="noreferrer">
                                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg"
                                            alt="LinkedIn">
                                    </a>
                                    <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank"
                                        rel="noreferrer">
                                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg"
                                            alt="Twitter">
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




    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/footer.js') ?>"></script>
</body>

</html>