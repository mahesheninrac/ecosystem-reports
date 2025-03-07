<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecosystem</title>
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <script src="https://cdn.jsdelivr.net/npm/@dotlottie/player-component@v1.3.0/dist/dotlottie-player.js"></script>
</head>

<body>
  <style>
    .center {
      width: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    iframe {
      border: 0;
      overflow: hidden;
      position: absolute;
    }

    .attribution {
      display: block;
      transition: all 0.8s ease 0s;
      border-radius: 4px;
      display: flex;
      align-items: center;
      padding: 7px 9px;
      position: absolute;
      bottom: -30px;
      left: 10px;
      text-decoration: none;
      z-index: 10;
      background: rgba(34, 41, 47, 0.04);
      opacity: 0.4;
    }

    .attribution.dark {
      background: rgba(255, 255, 255, 0.04);
      opacity: 0.8;
    }

    .attribution.dark span {
      color: #ffffff;
      opacity: 0.8;
    }

    .video-container img {
      width: 100%;
      max-width: 400px;
      transform: translateY(100px);
      opacity: 0;
      transition: transform 0.8s ease-out, opacity 0.8s ease-out;
    }

    /* When active, move up and fade in */
    .owl-item.active .video-container img {
      transform: translateY(0);
      opacity: 1;
      transition-delay: 2s;
    }


    /* When inactive, fade out without going back down */
    .owl-item:not(.active) .video-container img {
      opacity: 0;
      transform: translateY(-50px);
      /* Moves slightly up while disappearing */
      transition: opacity 0.5s ease-in, transform 0.5s ease-in;
    }

    .text-container p {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .owl-item.active .text-container p {
      opacity: 1;
    }
  </style>
  <!-- navbar section  -->
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-md bg-white py-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('') ?>">
        <img src=" <?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="icofont-navigation-menu fs-30"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center" style="gap: 1.5rem;">
          <li class="nav-item">
            <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>">Reports</a>
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

  <!-- Bootstrap JS (Ensure this is included for toggle functionality) -->


  <!-- Hero Section -->
  <div class=" hero-banner-section" style="background-color: #d0ddf7;">
    <div class="container">
      <div class="position-relative">
        <div id="container" class="position-absolute d-none d-sm-block d-md-block d-lg-block">
          <dotlottie-player background="transparent" speed="1" loop="" autoplay=""></dotlottie-player>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class=" d-flex align-items-center justify-content-between">
              <div class="text-container  p-4">
                <p class="">
                  HEllo Market Intelligence for Enabling Indian Energy Transition
                </p>
              </div>
              <div class="video-container  d-flex justify-content-end align-items-center p-5">
                <img src="https://omnicoreplus.com/assets/om-upload/5.png" style="opacity:0;" class="image-fluid"
                  alt="">
              </div>
            </div>
          </div>

          <div class="item ">
            <div class=" d-flex align-items-center justify-content-between">
              <div class="text-container  p-4">
                <p class="">
                  Your customers don't fit in a box, and neither does our approach.
                </p>
              </div>
              <div
                class="video-container d-none d-sm-flex d-lg-flex d-md-flex justify-content-end align-items-center p-5">
                <img src="https://omnicoreplus.com/assets/om-upload/4.png" class="image-fluid" style="opacity:0;"
                  alt="">
              </div>
            </div>
          </div>

          <div class="item">
            <div class=" d-flex align-items-center justify-content-between">
              <div class="text-container  p-4">
                <p class="">
                  A fresh approach to market research.
                </p>
              </div>
              <div class="video-container  d-flex justify-content-end align-items-center p-5">
                <img src="https://omnicoreplus.com/assets/om-upload/3.png" class="image-fluid" alt="">
              </div>
            </div>
          </div>

          <!-- blck
           
          https://omnicoreplus.com/assets/om-upload/new-project-1-.png
          -->

          <div class="item">
            <div class=" d-flex align-items-center justify-content-between">
              <div class="text-container  p-4">
                <p class="">
                  A fresh approach to market research.
                </p>
              </div>
              <div class="video-container  d-flex justify-content-end align-items-center p-5">
                <img src="https://omnicoreplus.com/assets/om-upload/2.png" style="opacity:0;" class="image-fluid"
                  alt="">
              </div>
            </div>
          </div>

          <div class="item">
            <div class=" d-flex align-items-center justify-content-between">
              <div class="text-container  p-4">
                <p class="">
                  A fresh approach to market research.
                </p>
              </div>
              <div class="video-container  d-flex justify-content-end align-items-center p-5">
                <img src="https://omnicoreplus.com/assets/om-upload/1.png" style="opacity:0;" class="image-fluid"
                  alt="">
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Eco System Report   -->
  <section style="background-color: #EBE3E0;" class="position-relative">
    <div class="hero p-0 position-relative" style="background:none; top:-120px">
      <div class="container-fluid">
        <div class="row row-gap-3 py-3">
          <!-- card1 -->
          <div class="col-md-3"> <a href="<?= base_url("reports") ?>" class="card overflow-hidden w-100 card-overlay ">
              <div class="card-body card-height-173 position-relative py-4">
                <img src="<?= base_url() ?>assets/images/ECO SYSTEM REPORTS.jpg" class="d-none d-md-block" alt="" />
                <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
                  <span>ECO SYSTEM REPORTS</span>
                  <i class="icofont-external-link"></i>
                </h2>
                <p class="card-text pt-2 position-relative z-1" style="max-width: 19.21rem;">
                  Ford ahead with locking oppurtunities across India's energy transition.
                </p>
              </div>
            </a>
          </div>

          <div class="col-md-3"> <a href="<?= base_url('custom_page') ?>"
              class="card overflow-hidden w-100 hero-card-overlay ">
              <div class="card-body position-relative py-4">
                <img src="<?= base_url() ?>assets/images/CUSTOM REQUIREMENTS.jpg" class="d-none d-lg-block" alt="" />
                <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">

                  CUSTOM REQUIREMENTS

                  <i class="icofont-external-link"></i>
                </h2>
                <p class="card-text pt-2 position-relative z-1" style="max-width: 19.21rem;">
                  Address your energy transition needs using tailored research.
                </p>
              </div>
            </a>
          </div>


          <div class="col-md-3">
            <!-- card2 -->
            <a href="<?= base_url('') ?>" class="card overflow-hidden w-100  hero-card-overlay">
              <div class="card-body position-relative py-4">
                <img src="<?= base_url() ?>assets/images/SURVEYS AND VOC.jpg" class="d-none d-lg-block" alt="" />
                <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
                  SURVEYS & VoC

                  <i class="icofont-external-link"></i>
                </h2>
                <p class="card-text pt-2 position-relative z-1" style="max-width: 19.21rem;">

                  Learn energy transition market signals & orient your product to tap early advantage.
                </p>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <!-- card3 -->
            <a href="<?= base_url('event') ?>" class="card overflow-hidden w-100 hero-card-overlay ">
              <div class="card-body position-relative py-4">
                <img src="<?= base_url() ?>assets/images/WEBINARS & INTERVIEWA.jpg" class="d-none d-lg-block" alt="" />
                <h2 class="card-title d-flex justify-content-between align-items-center position-relative z-1">
                  WEBINARS & INTERVIEWS
                  <!-- <img src="" class="opacity-75" alt="arrow" class="ms-2" /> -->
                  <i class="icofont-external-link"></i>
                </h2>
                <p class="card-text pt-2 position-relative z-1" style="max-width: 19.21rem;">
                  Understand the energy transition market perspective from seasoned professionals & experts
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- bg-primary section second placeholder overlapping  -->

  <style>
    .research-tab-heading {
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.4rem;
    }

    .text-h3-accord {
      font-size: 1.75rem;
      font-weight: 400;
      line-height: 2.538rem;
    }

    @media screen and (min-width: 768px) {
      .research-tab-heading {
        font-size: 1.313rem;
        font-weight: 600;
        line-height: 1.838rem;
      }

      .text-h3-accord {
        font-size: 2.25rem;
        font-weight: 400;
        line-height: 3.15rem;
      }
    }
  </style>
  <!-- bg-primary section second placeholder overlapping  -->
  <div class="container-fluid pb-4 our-research" style="background-color: #EBE3E0;">
    <div class="row">
      <div class="col-md-6">
        <p class="research-title h4 mb-3 section-header fs-20" style="font-weight: 800; color: #5866ff !important;">
          ECO SYSTEM REPORTS
        </p>
        <h2 class="mb-4 text-h3-accord">
          We analyse the following areas across the energy transition:
        </h2>

        <div class="accordion" id="researchAccordion" style="background-color: #EBE3E0;">
          <div class="accordion-item" style="background-color: #EBE3E0; border: none;">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button border-top border-1 border-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                style="background-color: #EBE3E0;">
                <img
                  src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-01.037f2f.svg"
                  class="icon me-3" alt="" />
                <span class="research-area research-tab-heading fw-400">EV Eco System Reports</span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Our comprehensive view of total battery demand and chemistry across all end-use markets.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="background-color: #EBE3E0; border: none;">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button border-top border-1 border-dark collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo" style="background-color: #EBE3E0;">
                <img
                  src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg"
                  class="icon me-3" alt="" />
                <span class="research-area research-tab-heading fw-400">Solar Eco System Reports</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Professional analysis of the EV ecosystem, from sales data to battery insights and legislation impacts.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="background-color: #EBE3E0; border: none;">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button border-top border-1 border-dark collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                aria-controls="collapseThree" style="background-color: #EBE3E0;">
                <img
                  src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-02.1f9e80.svg"
                  class="icon me-3" alt="" />
                <span class="research-area research-tab-heading fw-400">Wind Eco System Reports</span>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysing the role of batteries in supporting future renewable deployment.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="background-color: #EBE3E0; border: none;">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button border-top border-1 border-dark collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                aria-controls="collapseFour" style="background-color: #EBE3E0;">
                <img
                  src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-04.8205fb.svg"
                  class="icon me-3" alt="" />
                <span class="research-area research-tab-heading fw-400">Hydrogen Eco System Reports</span>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysis beyond the battery covering motor types, power electronics and vehicle architectures.
              </div>
            </div>
          </div>

          <div class="accordion-item" style="background-color: #EBE3E0; border: none;">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button border-top border-1 border-dark collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                aria-controls="collapseFive" style="background-color: #EBE3E0;">
                <img
                  src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/our-research/shape-05.1b030d.svg"
                  class="icon me-3" alt="" />
                <span class="research-area research-tab-heading fw-400">Bess Eco System Reports</span>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
              data-bs-parent="#researchAccordion">
              <div class="accordion-body">
                Analysing the underlying charging networks and systems that support EV growth.
              </div>
            </div>
          </div>
        </div>

        <a href="<?= base_url('reports') ?>" class="see-more btn btn-primary-outline py-2 mb-5 mt-4" style="background-color: #EBE3E0; border: 1px solidrgb(193, 193, 193) !important; padding-left: 1.3rem;
    padding-right: 1.3rem;">See Our Eco System
          Reports</a>
      </div>

      <div class="col-md-6 d-none d-lg-block position-relative">
        <div class="illustration w-100 ">
          <img src=" <?= base_url('assets/images/home.png') ?>" alt="Research Illustration" style="filter:invert(47%) sepia(27%) saturate(2298%) hue-rotate(206deg) brightness(92%) contrast(18%);
          padding-top: 4rem; min-width:calc(100% + 12.5rem); max-width: 100%; height:auto; left:-130px;"
            class="img-fluid position-absolute top-0 " />
        </div>
      </div>
    </div>
  </div>



  <!-- market research services -->
  <style>
    @media screen and (min-width: 768px) {
      .market-research-services-hlp {
        padding-top: 6.56rem !important;
        padding-bottom: 4.56rem !important;
      }

      .market-research-services-hlp .market-reasearch-heading {
        font-size: 2.25rem !important;
        font-weight: 400 !important;
        line-height: 3.15rem !important;
      }

      .text-paragraph-m {
        margin-bottom: 2.5rem !important;
      }

      .text-pre-title-l {
        font-size: 1.313rem;
        font-weight: 600;
        line-height: 1.838rem;
      }
    }

    .market-research-services-hlp {
      padding-top: 3.25rem;
      padding-bottom: 1.87rem;
    }

    .market-research-services-hlp .market-reasearch-heading {
      font-size: 1.75rem;
      font-weight: 400;
      line-height: 2.538rem;
    }

    .fw-800 {
      font-weight: 800;
    }

    .text-paragraph-m {
      font-size: 1rem;
      font-weight: 500;
      line-height: 1.6rem;
    }

    .market__service-item {
      transition: 0.4s all ease-in-out;
      border-radius: 8px;
      padding: 20px;
    }

    .market__service-item:hover {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .right-arrow-link span {
      transition: 0.3s all ease-in-out;
    }

    .right-arrow-link:hover span {
      margin-right: 1rem !important;
    }
  </style>

  <section class="market-research-services-hlp bg-primary-light-800">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-12">
          <div class=" text-center mx-auto" style="max-width: 850px; width: 100%;">

            <h2 class="text-sky-blue-5 mb-3 fw-bold fs-30"
              style="line-height: 140% !important;font-size:2.25rem !important;">
              Market research services</h2>
            <p class="fs-20 mb-4 text-center">We work with the world’s leading brands,
              harnessing research to unlock new ideas, develop
              future strategies and power business growth.</p>
          </div>
        </div>
      </div>

      <div class="row row-gap-4">
        <div class="col-md-4 market__service-item">
          <div class="w-100 position-relative d-flex gap-3 justify-content-center align-items-start">
            <div class="center-card-box-image-area">
              <img src="https://eninrac.com/assets/upload/market-tracking-icon-1.png" alt="market-tracking-icon-1.png"
                width="45" height="46">
            </div>
            <a href="https://eninrac.com/market-research-service/market-tracking-and-sizing" target="_blank"
              class="h-100 text-darklight-900">
              <h3 class="text-pre-title-l">Market Tracking & Sizing</h3>
              <p class="text-paragraph-m ">Our Market Tracking And Sizing services help organisations to estimate the
                ROI and extent of profit they potentially could earn from new business, product or service.</p>
              <p class="p-0 d-flex align-items-center fw-800 fs-14"><span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more</p>
            </a>
          </div>

        </div>

        <div class="col-md-4 market__service-item">
          <div class="w-100 position-relative gap-3 d-flex justify-content-center align-items-start">
            <div class="center-card-box-image-area">
              <img src="https://eninrac.com/assets/upload/market-research-service-icon-2.png"
                alt="market-tracking-icon-1.png" width="45" height="46">
            </div>
            <a href="https://eninrac.com/market-research-service/market-analytics" target="_blank"
              class=" h-100 text-darklight-900">
              <h3 class="text-pre-title-l">Market Analytics
              </h3>
              <p class="text-paragraph-m ">Market Analytics Services offer businesses a comprehensive range of data and
                data analysis solutions to assist them in making informed marketing decisions.</p>
              <p class="p-0 d-flex align-items-center fw-800 fs-14"><span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more</p>
            </a>
          </div>

        </div>

        <div class="col-md-4 market__service-item">
          <div class="w-100 position-relative gap-3 d-flex justify-content-center align-items-start">
            <div class="center-card-box-image-area">
              <img src="https://eninrac.com/assets/upload/market-tracking-icon-2.png" alt="market-tracking-icon-1.png"
                width="45" height="46">
            </div>
            <a href="https://eninrac.com/market-research-service/competitor-analysis" class=" h-100 text-darklight-900">
              <h3 class="text-pre-title-l">Competitor Analysis</h3>
              <p class="text-paragraph-m ">Conducting a competitor analysis, also called competitive analysis, is a
                crucial step for businesses to identify their competitors in the industry and analyze their marketing
                strategies.</p>
              <p class="p-0 d-flex align-items-center fw-800 fs-14"><span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more</p>
            </a>
          </div>

        </div>

        <div class="col-md-4 market__service-item">
          <div class="w-100 position-relative gap-3 d-flex justify-content-center align-items-start">
            <div class="center-card-box-image-area">
              <img src="https://eninrac.com/assets/upload/market-tracking-icon-3.png" alt="market-tracking-icon-1.png"
                width="45" height="46">
            </div>
            <a href="https://eninrac.com/market-research-service/research-on-demand-tracking" target="_blank"
              class=" h-100 text-darklight-900">
              <h3 class="text-pre-title-l">Research on Demand Tracking</h3>
              <p class="text-paragraph-m ">Through our on demand research services we find filter and compiled research
                as per need of your business to take informed and tactical decision in a timely manner.</p>
              <p class="p-0 d-flex align-items-center fw-800 fs-14"><span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more</p>
            </a>
          </div>

        </div>

        <div class="col-md-4 market__service-item">
          <div class="w-100 position-relative gap-3 d-flex justify-content-center align-items-start">
            <div class="center-card-box-image-area">
              <img src="https://eninrac.com/assets/upload/market-tracking-icon-1.png" alt="market-tracking-icon-1.png"
                width="45" height="46">
            </div>
            <a href="https://eninrac.com/market-research-service/" target="_blank" class=" h-100 text-darklight-900">
              <h3 class="text-pre-title-l">Market Research Service
              </h3>
              <p class="text-paragraph-m ">Market research service is instrumental to determine opportunity for
                businesses. With Eninrac you get access to market information that is accurate & absolute in nature,</p>
              <p class="p-0 d-flex align-items-center fw-800 fs-14"><span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more</p>
            </a>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class=" p-3">
            <a href="https://eninrac.com/service" target="_blank"
              class="d-flex align-items-center right-arrow-link fs-18 fw-700 text-dark text-pre-title-l">
              <span style="width:20px; height:20px;font-size:16px"
                class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                <i class="icofont-long-arrow-right"></i></span> See
              Full service list
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- market research services end -->

  <!-- Sector we serve -->

  <section class="market-research-services-hlp">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="text-sky-blue-5 mb-3 fw-bold fs-30"
            style="line-height: 140% !important;font-size:2.25rem !important;">
            Sector we serve</h2>
          <p class="fs-20 mb-4">With over 30 years in the business of market research, we have extensive
            experience and a depth of
            knowledge across a range of sectors.</p>
          <p class="fs-20 mb-4 ">We bring this to bear to design the very best approach to meet your
            objectives.
          </p>
          <p class="p-0  fw-800 fs-14">
            <a href="https://store.eninrac.com/browse-categories" class="d-flex align-items-center">

              <span style="width:20px; height:20px;font-size:16px"
                class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                <i class="icofont-long-arrow-right"></i></span> Find out more
            </a>
          </p>
        </div>
        <div class="col-md-7">
          <div class="parent-service-list w-100 row" style="flex-grow: 0; column-count: 2; column-gap: 0;"
            style="height:100%">

          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    @media screen and (min-width: 1040px) {
      .m06__link-wrap {
        padding: 24px 0;
        margin-bottom: -38px;
      }

      .servicelink-item {
        padding: 14px 33px 13px 25px !important;
        width: auto;
        font-size: 1.25rem !important;
      }

      .m06__link-wrap {
        padding: 24px 0 !important;
        margin-bottom: -38px !important;
      }
    }

    .servicelink-item {
      padding: 0px 33px 0px 0px;
      font-size: 14px;
      transition: box-shadow .25s ease;
    }



    @media screen and (min-width: 780px) {
      .m06__link-wrap {
        margin-bottom: -42px;
      }

      .servicelink-item:hover {
        box-shadow: 0 4px 16px 8px rgba(209, 211, 212, .5);
      }
    }

    .servicelink-item {
      max-width: 100%;
    }

    .m06__link-wrap {
      page-break-inside: avoid;
      break-inside: avoid;
      padding: 18px 0px;

    }
  </style>

  <script>
    const sectors = [
      {
        link: "sector/automotive-and-assembly",
        image: "https://eninrac.com/assets/upload/assembly-bmw.jpg",
        title: "Automotive & Assembly"
      },
      {
        link: "sector/fmcg",
        image: "https://eninrac.com/assets/upload/fmcg.jpeg",
        title: "FMCG"
      },
      {
        link: "sector/healthcare-systems-and-equipment",
        image: "https://eninrac.com/assets/upload/healthcare.jpg",
        title: "Healthcare Systems & Equipment"
      },
      {
        link: "sector/renewable-energy-sources",
        image: "https://eninrac.com/assets/upload/RE.jpg",
        title: "Renewable Energy Sources"
      },
      {
        link: "sector/logistics-and-warehousing",
        image: "https://eninrac.com/assets/upload/1-283.jpg",
        title: "Logistics & Warehousing"
      },
      {
        link: "sector/metals-and-mining",
        image: "https://eninrac.com/assets/upload/Mining.jpg",
        title: "Metals & Mining"
      },
      {
        link: "sector/oil-and-gas",
        image: "https://eninrac.com/assets/upload/oil.png",
        title: "Oil & Gas"
      },
      {
        link: "sector/pharmaceutical",
        image: "https://eninrac.com/assets/upload/Pharma.jpg",
        title: "Pharmaceutical"
      },
      {
        link: "sector/power-and-utilities",
        image: "https://eninrac.com/assets/upload/power.jpg",
        title: "Power & Utilities"
      },
      {
        link: "sector/public-sector",
        image: "https://eninrac.com/assets/upload/Public_Sector.jpg",
        title: "Public Sector"
      },
      {
        link: "sector/chemical-and-petrochemicals",
        image: "https://eninrac.com/assets/upload/Chemical-petrochemical.jpg",
        title: "Chemical & Petrochemicals"
      },
      {
        link: "sector/capital-projects-and-infrastructure",
        image: "https://eninrac.com/assets/upload/Capital.jpg",
        title: "Capital Projects & Infrastructure"
      }
    ];


    const parentServiceList = document.querySelector(".parent-service-list")



    sectors.forEach(sect => {
      let div = document.createElement('div');
      div.setAttribute('class', ' d-flex m06__link-wrap col-md-6 col-sm-6');
      div.innerHTML = `
            <a href="https://store.eninrac.com/${sect.link}" class="servicelink-item service_list_item d-flex align-items-center gap-2">
              <div class="service_list_item-icon"></div>
              <span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="service_list_item-span text-dark fw-700" style="font-size:1.25rem;">${sect.title}</span>
              <span style="width:20px;height:20px;"
                class="d-flex bg-primary-500 text-white rounded-circle">
                <i class="icofont-long-arrow-right mx-0"></i></span>
            </a>
      `
      parentServiceList.appendChild(div)
    })


  </script>

  <!-- Sector we serve end -->
  <!-- Case studies -->

  <section class="d-md-flex eco-case-study-section">
    <div class="eco__casestudy--left">
      <div class="container">
        <div class="intro">
          <h2 class="h2 h2-casestudy">Our mission is to raise the impact of research – and we're delivering</h2>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="result--view w-100 ">
              <div class="d-flex w-100 h-100 Active">
                <div class="">
                  <img width="216" height="216"
                    src="https://kadence.com/wp-content/uploads/2020/07/mrs-oppies-432x410.jpg"
                    class=" left--result-image" alt="">
                </div>
                <div class="eco__result-content">
                  <h3 class="eco__result-award h6 fw-700">Market Research Supplier of the Year</h3>
                  <p class="eco__result-achievment">Winner</p>
                  <cite class="eco__result-cite">— Marketing Research & Insight Excellence Awards – 2019</cite>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="result--view w-100">
              <div class="d-flex w-100 h-100 Active">
                <div class="">
                  <img width="216" height="216"
                    src="https://kadence.com/wp-content/uploads/2020/07/mrs-oppies-432x410.jpg"
                    class=" left--result-image" alt="">
                </div>
                <div class="eco__result-content">
                  <h3 class="eco__result-award h6 fw-700">Market Research Supplier of the Year</h3>
                  <p class="eco__result-achievment">Winner</p>
                  <cite class="eco__result-cite">— Marketing Research & Insight Excellence Awards – 2019</cite>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
    <div class="eco__casest-right">
      <img style="width: 100%;"
        src="https://kadence.com/wp-content/uploads/2020/07/chuttersnap-mf-o1E7omzk-unsplash-1440x432.jpg" alt="">
      <div class="container">
        <div class="single-case-study-item__content px-md-4">
          <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
            src="https://kadence.com/wp-content/uploads/2020/07/1200px-Samsung_wordmark.svg-288x44.png" alt="">
          <a href="">
            <h2 class="h3 text-dark">
              Demonstrating the positive impact of CSR programmes on brand perceptions across Asia for Samsung
            </h2>
          </a>
          <p class="fs-18 mb-4">Neuroscience helped Bloomberg show that its advertising platform is a cut above the rest
            and delivers
            better outcomes for advertisers.</p>
          <div class="btn-wrap-case-study">
            <p class="p-0  fw-800 fs-14">
              <a href="https://store.eninrac.com/browse-categories" style="width: max-content;"
                class="d-flex right-arrow-link align-items-center">

                <span style="width:20px; height:20px;font-size:16px"
                  class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                  <i class="icofont-long-arrow-right"></i></span> Find out more
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- case studies end -->

  <!-- ///////////////////////////////////////////////////////////////////////
Testimonials 
 ///////////////////////////////////////////////////////////////////////////-->

  <style>
    @media screen and (min-width: 1040px) {
      .eco__media {
        width: 602px !important;
        max-width: 50% !important;
        margin-bottom: 110px !important;
      }
    }

    .eco__media {
      margin-left: -5vw;
      position: relative;
      max-width: 75%;
      margin-bottom: 55px;
    }

    .eco__large-image {
      padding-bottom: 71.92691%;
      position: relative;
      width: 100% !important;
      height: 0;
    }

    .eco__large-image-wrap {
      position: absolute;
      right: 0;
      bottom: 0;
      height: 0;
      width: 142.36%;
      padding-bottom: 142.36%;
      -webkit-clip-path: circle(50% at 50% 50%);
      clip-path: circle(50% at 50% 50%);
      background-color: #f6f7f8;
    }


    .eco__testimonials-image {

      object-fit: cover;
      width: 100%;
    }
  </style>

  <section class="d-lg-flex d-md-flex position-relative w-100 overflow-hidden">
    <div class="container eco__m07__container">


      <div class="eco__side-media" style="margin-left: -5vw;position: relative;max-width: 75%;margin-bottom: 55px;">
        <div class="" style="padding-bottom: 71.92691%;position: relative;width: 100%;height: 0;">
          <div class=""
            style="position: absolute;right: 0;bottom: 0;height: 0;width: 142.36%;padding-bottom: 142.36%;-webkit-clip-path: circle(50% at 50% 50%);clip-path: circle(50% at 50% 50%);background-color: #f6f7f8;">
            <img class="eco__testimonials-image"
              src="https://einfews.energyinfra.market/assets/om-upload/testimonial-circle-1-1-.png" width="1202"
              height="866" alt="">
          </div>
        </div>
      </div>

      <div class="eco__testimonials">
        <div class="container">
          <div class="carousel-card owl-carousel owl-theme">
            <div class="item">
              <div class="content-text-container p-3">
                <div class="d-flex" style="max-width: 150px;">
                  <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                    src="https://eninrac.com/assets/upload/Artson-LOGO.png" alt="">
                </div>
                <div class="case-text">
                  <i class="fs-20 icofont-quote-left"></i>
                  <p class="fs-16">Getting custom research support on cryogenic tankers from eninrac
                    consulting was a good experience. Team is very professional.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <i class="fs-20 icofont-quote-left"></i>
              <p class="fs-14">Embassy found the study on coal consumption and future demand in India
                until 2030 beneficial for formulating key policies for Indonesia w.r.t Indian dynamics
              </p>
              <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                src="https://eninrac.com/assets/upload/Indonasia-LOGO.png" alt="">

            </div>

            <div class="item ">
              <a href="market-response/deloitte" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Deloitte-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">'The market research services rendered by eninrac was very insightful for
                          us. Safely, we can say they are disrupting the domain in their own way</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="market-response/mckinsey-and-company" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Mckinsey-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">The D2I model prepared by the eninrac team, was an interesting piece.
                          It helped us learn unit wise dismantling opportunity for thermal plants</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/ge-energy" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/GE-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">The business intelligence service for Indian wind turbines by eninrac
                          team
                          was fantastic for us.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/artson-engineering" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Artson-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">Getting custom research support on cryogenic tankers from eninrac
                          consulting was a good experience. Team is very professional.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="market-response/deloitte" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Deloitte-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">'The market research services rendered by eninrac was very insightful for
                          us. Safely, we can say they are disrupting the domain in their own way</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="market-response/ptc-india" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">

                    <div class="content-text-container p-3">
                      <div class="com-logo pb-3">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/PTC-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">Latent power demand estimates for 3 states of India was a game changer
                          for
                          us to re-orient the power trading segment in India</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/mckinsey-and-company" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">

                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="assets/upload/Mckinsey-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">The D2I model prepared by the eninrac team, was an interesting piece.
                          It helped us learn unit wise dismantling opportunity for thermal plants</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/ge-energy" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">

                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="assets/upload/GE-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">The business intelligence service for Indian wind turbines by eninrac
                          team
                          was fantastic for us.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/artson-engineering" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box d-flex w-100">

                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Artson-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">Getting custom research support on cryogenic tankers from eninrac
                          consulting was a good experience. Team is very professional.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="item ">
              <a href="market-response/embassy-of-indonesia" target="blank">
                <div class="carosole-wrapper">
                  <div class="carosole-box w-100">
                    <div class="content-text-container p-3">
                      <div class="com-logo">
                        <img width="144" height="50" style="object-fit:scale-down; margin-bottom:17px;"
                          src="https://eninrac.com/assets/upload/Indonasia-LOGO.png" alt="">
                      </div>
                      <div class="case-text">
                        <i class="fs-20 icofont-quote-left"></i>
                        <p class="fs-14">Embassy found the study on coal consumption and future demand in India
                          until 2030 beneficial for formulating key policies for Indonesia w.r.t Indian dynamics
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ///////////////////////////////////////////////////////////////////////
Testimonials end
 ///////////////////////////////////////////////////////////////////////////-->

  <!-- ///////////////////////////////////////////////////////////////////////
Footer site map 
 ///////////////////////////////////////////////////////////////////////////-->

  <section class="footer-site-map py-4 contact-site-details">
    <div class="container" style="margin-bottom: 55px;">
      <div class="row">
        <div class="col-md-7">
          <h2 class="h3">The global boutique for data and insight</h2>
          <p>Our global footprint makes us the go-to partner for international market research. We offer all qualitative
            and quantitative methodologies across our office network and beyond.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-md-flex row">
        <div class="eco-footer__buttons col-md-3" id="tabButtons">
          <button class="eco-footer__button-item is-active" data-tab="eninrac">Eninrac Consulting</button>
          <button class="eco-footer__button-item" data-tab="omnicore">Omnicore Plus</button>
          <button class="eco-footer__button-item" data-tab="vantedge">Vantedge</button>
          <button class="eco-footer__button-item" data-tab="warehouses">Warehouses In India</button>
          <button class="eco-footer__button-item" data-tab="horizon">Horizon</button>
          <button class="eco-footer__button-item" data-tab="vision">Vision Board</button>
        </div>

        <div class="eco-footer__information-details col-md-9" id="tabContent">
          <div class="row">
            <div class="col">
              <div class="eco__posts" id="eninrac" style="display: block;">
                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Eninrac Office Noida <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>

                    </div>

                  </a>
                </div>
              </div>

              <div class="eco__posts" id="omnicore" style="display: none;">
                <div class="row">
                  <div class="col-md-5">
                    <div class="small-article-eco-post"
                      style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                      <a href="#" class="d-flex" style=" color:#000;">
                        <div class="position-relative" style="width: 88px; height: 70px;">
                          <img
                            src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                            class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                            alt="">
                        </div>
                        <div class="" style="padding: 4px 25px 6px 14px;">
                          <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                            style="width:calc(100% - 88px); flex-grow: 1; ">
                            Eninrac Office Noida <span style="width:20px; height:20px;font-size:16px"
                              class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                              <i class="icofont-long-arrow-right"></i></span>
                          </h3>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="eco-foter__image-wrapper">
                      <div class="d-flex align-center justify-content-center"
                        style="width: 100%; height: 100%; position: relative; overflow: hidden; left: -0.333313px; top: -0.364258px;">
                        <img src="https://omnicoreplus.com/assets/om-upload/eninrac-i-mac-mockup.png" alt=""
                          style="width: auto; object-fit: cover;" height="314">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="eco__posts" id="vantedge" style="display: none;">
                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Eninrac Office Noida <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>
                    </div>
                  </a>
                </div>
              </div>
              <div class="eco__posts" id="warehouses" style="display: none;">
                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Warehouses in India <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>

                    </div>

                  </a>
                </div>

                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Warehouses in India <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>

                    </div>

                  </a>
                </div>

              </div>
              <div class="eco__posts" id="horizon" style="display: none;">
                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Horizon blogs <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>

                    </div>

                  </a>
                </div>
              </div>

              <div class="eco__posts" id="vision" style="display: none;">
                <div class="small-article-eco-post"
                  style=" background-color: var(--primary-100); color:#000; border-radius:2px; margin-top:1rem; overflow:hidden;">
                  <a href="#" class="d-flex" style=" color:#000;">
                    <div class="position-relative" style="width: 88px; height: 70px;">
                      <img
                        src="https://kadence.com/wp-content/uploads/2020/07/Kadence-China-1-e1595423194741-176x176.png"
                        class="small-article-post__image position-absolute w-100 top-0 left-0" style="height: 100%;"
                        alt="">
                    </div>
                    <div class="" style="padding: 4px 25px 6px 14px;">
                      <h3 class="w-100 small-article-heading fs-14 fw-700 mb-0 my-1 d-flex gap-1"
                        style="width:calc(100% - 88px); flex-grow: 1; ">
                        Vision Board <span style="width:20px; height:20px;font-size:16px"
                          class=" d-flex justify-content-center align-items-center me-2 bg-primary-500 text-white rounded-circle">
                          <i class="icofont-long-arrow-right"></i></span>
                      </h3>

                    </div>

                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <script>
      const buttons = document.querySelectorAll(".eco-footer__button-item");
      const contents = document.querySelectorAll(".eco__posts");
      buttons.forEach(button => {
        button.addEventListener("click", () => {
          document.querySelector(".is-active").classList.remove("is-active");
          button.classList.add("is-active");

          contents.forEach(content => {
            content.style.display = "none";
          });
          const target = button.getAttribute("data-tab");
          document.getElementById(target).style.display = "block";
        });
      });
    </script>

  </section>
  <!-- ///////////////////////////////////////////////////////////////////////
Footer site map end
 ///////////////////////////////////////////////////////////////////////////-->


  <!-- contact Category Section -->
  <section class="form-background-wrapper eco-block-group has-background">
    <div class="container">
      <h3 class="h3" style="margin-bottom: 40px;">Please select the type of enquiry</h3>

      <div class="row">
        <div class="col-md-6">
          <div class="row row-gap-3">
            <div class="col-md-6"><button class="w-75 enquiry-btn-item">
                <a href="https://eninrac.com/submit-rfp" target="_blank" class="text-white">
                  Request a Call</a></button></div>
            <div class="col-md-6">
              <div class=""><button class="w-75 enquiry-btn-item"> <a class="text-white"
                    href="https://eninrac.com/submit-rfp" target="_blank">Request a Quote</a> </button></div>
            </div>
            <div class="col-md-6">
              <div class=""><button class="w-75 enquiry-btn-item"> <a class="text-white"
                    href="https://eninrac.com/submit-rfp" target="_blank">Employment</a> </button></div>
            </div>
            <div class="col-md-6">
              <div class=""><button class="w-75 enquiry-btn-item"> <a class="text-white"
                    href="https://eninrac.com/submit-rfp" target="_blank">Marketing</a> </button></div>
            </div>
            <div class="col-md-6">
              <div class=""><button class="w-75 enquiry-btn-item"> <a class="text-white"
                    href="https://eninrac.com/submit-rfp" target="_blank">others</a> </button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- contact Category Section End-->

  <section class="relative px-0  " style="background-color:#CAC0FF;  padding-bottom: 2rem;">
    <div class="container-xxl  max-w-content-container d-md-flex align-items-lg-center pb-5 pb-md-5 pt-5 pt-md-5 mx-1">
      <div class="col-md-6 pe-md-5">
        <p class=" h4  mb-3 fw-bold fs-20   section-header" style="color: #5866ff !important;">
          SURVEYS & VoC
        </p>
        <h2 class="mb-3 text-h3 text-md-h2" style="font-size: 2.25rem; font-weight: 800; line-height: 140%;">
          Bringing together leaders and innovators across the energy
          transition
        </h2>
        <p class="mb-4 mb-md-5 max-w-lg text-body-text">
          We assemble leaders in energy, transport, technology and financial
          markets across the globe through dedicated events programmes.
          Exploring EV and Battery, Charging, Infrastructure and Battery
          Recycling, we create opportunities for long-lasting and meaningful
          industry connections.
        </p>
        <a class="btn btn-primary rounded-md fw-bold font-medium px-3" href="<?= base_url('event') ?>">Learn more</a>
      </div>
      <div class="col-md-6 d-flex justify-content-center mt-5 mt-md-0">
        <picture>
          <source media="(min-width: 640px)" srcset="https://omnicoreplus.com/assets/om-upload/3-in-1-collage.png">
          <img class="img-fluid object-cover mx-auto mx-md-0 w-100 max-w-md h-auto"
            src="https://omnicoreplus.com/assets/om-upload/3-in-1-collage.png" alt="">
        </picture>
      </div>
    </div>
  </section>
  <!-- contact us -->
  <section class="position-relative"
    style="min-height: 400px; margin:0 ; background-image: linear-gradient(#cac0ff,#041e42);">
    <div class="wrapper contact"
      style="margin:auto; min-width:95%; position:absolute; z-index: 2; top:0; bottom:0 ; left:15px; right:15px ">
      <div class="position-relative py-5 px-3 bg-lilac-medium md:py-7 max-w-content-container mx-auto overflow-hidden">
        <div class="d-flex flex-column align-items-center py-4">
          <h3 class="text-h3  fs-24 text-center md:text-5xl mb-3 mb-md-4 display-2">
            Contact us
          </h3>
          <span class="text-sm text-center mb-4 mb-md-5 md:max-w-3xl h3 fs-20" style="line-height: 140%;">Register your
            interest and we’ll contact you shortly to <br> provide
            sample materials and arrange a demo.</span>
          <a class="btn btn-primary px-5 py-2 text-sm md:py-0 md:text-base font-medium rounded-md btn-lg fw-bold"
            href="<?= base_url('contact_us') ?>">Get in touch</a>
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
            <img src="
            <?= base_url('assets/images/Asset 8.svg
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
              <div class="nav-links"> <a href="<?= base_url('reports') ?>" class=" d-block" id="reports">Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom Requirements</a>
                <a href="<?= base_url('event') ?>" class=" d-block" id="event">Surveys & VoC</a>
                <a href="<?= base_url('contact_us') ?>" class="d-block">About us</a>
              </div>
            </div>
            <div class="col-6">
              <div class="newsletter-form line-height:1.1 ">
                <p class="mb-2">Subscribe to our newsletter</p>
                <div class="w-100 newsletterfooter-input-i position-relative">
                  <input type="email" name="subscriberemail" style="font-size: 1rem;font-weight: 500; " id=""
                    class="text-white ps-2  mb-2 w-100" placeholder="your work email">
                  <i class="icofont-long-arrow-right position-absolute"></i>
                </div>
                <p style="font-size: .8rem;">By submitting this form, you agree to Eninrac&#39;s privacy policy.</p>
                <div class="social-icons mt-4">
                  <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer">
                    <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg"
                      alt="LinkedIn">
                  </a>
                  <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank" rel="noreferrer">
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
  <!--  -->
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/popper.js"></script>
  <script src="<?= base_url() ?>assets/plugins/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/highcharts.js"></script>
  <script src="<?= base_url() ?>assets/plugins/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/perfect-scrollbar.js"></script>
  <script src="<?= base_url() ?>assets/plugins/daterangepicker.js"></script>
  <script src="<?= base_url() ?>assets/js/app.js"></script>
  <script src="<?= base_url() ?>assets/js/script.js"></script>
  <script src="<?= base_url() ?>assets/js/embedScript.js"></script>
  <script src="<?= base_url('assets/js/footer.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>