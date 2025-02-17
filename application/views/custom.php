<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Requirements</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white py-4">
    <div class="container-fluid">
      <a class="navbar-brand " href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80" alt="home-page-banner">
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

  <header class="custom-banner w-100">
    <div class="overlay"></div>
    <div class="container position-relative pt-4">
      <div class="row">
        <div class="col-12">
          <div class="content">
            <h2>Rho Motion Consultancy</h2>
            <p>Tailored research and custom reports to inform your strategic decision-making</p>
            <a class="btn btn-primary fw-bold mt-4" href="<?= base_url('contact_us') ?>">Get in touch</a>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- our services -->
  <section class="custom-section ">

    <div class="container-fluid content-container">
      <div class="row justify-content-end">
        <div class="col-md-6 ">
          <img
            src="https://res.cloudinary.com/dkklqdsqc/image/upload/v1702261345/assets/consultancy/kn5enxfwlgnjjjep4wtz.svg"
            class="" alt="Background Image">

        </div>
        <div class="col-md-6 py-5 d-flex flex-column justify-content-center ">

          <div class="d-flex flex-column justify-content-center">
            <h2 class="text-uppercase " style="font-size:1.3rem; font-weight: 800; color: #5866ff !important;">Our
              Services</h2>
            <p style="font-size: 2.25rem; font-weight:600; line-height: 140%;">Unparalleled experience, unique insight
              and unmatched data</p>
            <p class="" style="font-size: 1.25rem; line-height:160%;">We provide commercial and vendor due diligence
              across the energy transition. From gigafactories to recycling, our dynamic and informed team can support
              the process.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- custom-about -->
  <section class="custom-about-section">
    <div class="custom-about-overlay d-none d-md-block"></div>
    <div class="container-fluid custom-about-content-container text-start">
      <div class="row" style="color: rgba(255, 255, 255, .8); max-width :36.4rem;">
        <div>
          <h2 style="font-weight:600; font-size: 2.25rem;line-height :145%;">Independent, tailored advice for financial
            organisations involved in the energy transition</h2>
          <p class="lead">Our team has experience working on both the buy and sell side with unique and specialised
            commercial due diligence. Our comprehensive appraisals unlock the potential and identify paths to success.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- custom-animation-->
  <section class="py-5" style="background-color: #161933;">
    <div class="container">
      <div class="row text-white">
        <div class="col-md-4">
          <video class="custom-animation-video w-auto" autoplay playsinline>
            <source
              src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705429115/assets/home/Market_Studies_320_pro4444px_ujmrov.mov"
              type="video/mp4; codecs=&quot;hvc1&quot;">
            <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430270/assets/home/output_st1zps.webm"
              type="video/webm">
          </video>
          <p class="fs-4 mt-4 mt-md-5">Market studies</p>
          <p class="fs-6 mt-3 mt-md-2 opacity-80 text-justify">We provide an overview of the sub-genres across the
            battery value
            chain, including regional and country level granularity of supply chains, and competitor landscape.</p>
        </div>
        <div class="col-md-4">
          <video class="custom-animation-video w-auto" autoplay playsinline>
            <source
              src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705673213/assets/home/Market_Research_320px_pro4444_2_snz9xy.mov"
              type="video/mp4; codecs=&quot;hvc1&quot;">
            <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705673192/assets/home/output_hwrufc.webm"
              type="video/webm">
          </video>
          <p class="fs-4 mt-4 mt-md-5">Market research & customer validation</p>
          <p class="fs-6 mt-3 mt-md-2 opacity-80">From major OEMs and public bodies, to technology developers, we source
            deep and relevant insights through interviews that capture the voice of your customers and identify critical
            demands for both B2B and B2C audiences.</p>
        </div>
        <div class="col-md-4">
          <video class="custom-animation-video w-auto" autoplay playsinline>
            <source
              src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430830/assets/home/Due_Dilligence_320px_pro4444_gstrvl.mov"
              type="video/mp4; codecs=&quot;hvc1&quot;">
            <source src="https://res.cloudinary.com/dkklqdsqc/video/upload/v1705430900/assets/home/output_ph4ama.webm"
              type="video/webm">
          </video>
          <p class="fs-4 mt-4 mt-md-5">Due diligence</p>
          <p class="fs-6 mt-3 mt-md-2 opacity-80">We provide due diligence for both the buy and sell side through
            comprehensive, expert advice that gives you the best chance of deal success.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- video-section -->

  <section
    class="video-section-relative video-section-aspect-ratio d-md-flex align-items-center justify-content-center bg-sky-blue-4">
    <img class="video-section-bg-image d-none d-md-block"
      src="https://res.cloudinary.com/dkklqdsqc/image/upload/f_auto,q_auto/v1705339164/assets/consultancy/our-consultancy-team_mkabyo.png"
      alt="Consultancy Team">
    <!-- <div class="video-section-overlay d-none d-md-block"></div> -->
    <div class="video-section-content container py-5">
      <div class="mx-3">
        <div class="text-start  text-white">
          <h2 class="text-h3 md:text-h2 mb-1  fw-bold fs-36">Our Consultancy Team</h2>
          <p class="text-body-text mb-4 fw-normal">How we support our clients' investment strategies</p>
        </div>
        <div class="min-h-12">
          <button class="video-section-button" id="playButton">
            Play video
            <i class="icofont-ui-play"></i>
          </button>
          <div class="video-section-modal" id="videoModal">

            <div class="video-section-modal-content">
              <div class="video-section-video d-flex flex-row-reverse gap-2 ">


                <!-- button -->

                <button class="video-section-close-button" id="closeButton">
                  <i class="icofont-ui-close fs-30   text-white"></i>
                </button>
                <!-- Video  -->

                <video width="" height="" autoplay muted controls class="object-fit-scale">
                  <source src="<?= base_url('assets/images/dummy.mp4
                  ') ?>" type="video/mp4">

                  Your browser does not support the video tag.
                </video>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>









  <section class="example-work bg-primary-200 mt-0">

    <div class="container-xxl py-5">
      <div class="text-center d-flex flex-column  ">
        <h3 class=" fw-bold fs-22 text-primary">EXAMPLES OF OUR WORK</h3>
        <p class=" fs-30 " style="max-width: 42rem; align-self: center;">Our consultancy experience spans finance
          raising, market entry and strategic advisory</p>
      </div>
      <div class="row py-4">
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class=" py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class=" py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>


      </div>
      <div class="row py-2">
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="case-study ">
            <img
              src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/case-study-icons/case-study-01.98b84c.svg"
              class="py-4" alt="">
            <h5 class="">CASE STUDY 1</h5>
            <h6 class="fw-bold py-2">Next-generation battery technologies</h6>
            <p>We provided bottom-up cost models for the next-generation anode, cathode and electrolyte innovations for
              lithium-ion and sodium-ion batteries as a basis for future strategy and investment decisions on behalf of
              a major public body.</p>
          </div>
        </div>


      </div>

  </section>


  <!-- get in touch form -->


  <section>
    <div class="con-wrapper">
      <div class="container-fluid">
        <div class="row text-start">
          <!-- Left Column -->
          <div class="col-md-5 d-flex flex-column justify-content-center position-relative p-0">
            <picture class="w-100 h-100">
              <source media="(min-width: 768px)"
                srcset="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701786601/assets/consultancy/consulting-contact_lf62dg_kr9cgs.jpg">
              <img class="position-absolute top-0 left-0 w-100 h-100 object-cover object-right-top"
                src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1701786600/assets/consultancy/consulting-contact-mobile_w4syry_eed7cu.png"
                aria-hidden="true">
            </picture>
            <div class="d-none d-md-block position-absolute bg-black opacity-50 top-0 left-0 w-100 h-100"></div>
            <div class="position-relative text-white w-100 px-5 py-3 bg-sky-blue-5 bg-transparent-md">
              <h2 class="text-uppercase fw-semibold text-bright-purple text-sky-blue-4-md mb-2">Consultancy Team</h2>
              <p class="fs-5 fs-4-md fw-semibold mb-4">Independent, tailored advice for your business</p>
              <p class="mb-4">Our consultancy team brings a breadth of industry experience across the EV value chain and
                wider energy mix; from raw materials extraction through anode, cathode and battery cell technologies,
                charging, BESS, and battery recycling.</p>
              <p>To speak to our team about your consultancy project, call us on connect@eninrac.com, or email
                connect@eninrac.com</p>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-7 bg-sky-blue-5 p-4 bg-primary-200">
            <div class="px-5 mx-5">
              <h2>Get in touch</h2>
              <p>Contact us to discuss our products and how they can support you.</p>
              <form enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name"
                      required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                  <input type="email" id="email" name="email" class="form-control"
                    placeholder="email@youremailaddress.com" required>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone number <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">+91</span>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="XXXXXXXXXXX" required>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Register interest</button>
                <p class="py-4">By submitting this form, you agree to Eninrac's privacy policy.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="process bg-primary-300">
    <div class="container-xxl py-4">

      <div class="row">
        <h2 class="fw-bold ">OUR PROCESS</h2>
        <div class="col-md-4 text-center mb-4">

          <p class="text-start h2 text-white">How do we conduct our consultancy and advisory work?</p>
        </div>
        <div class="col-md-8">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right  fs-30"></i>
                  <div>
                    <h5 class="card-title ">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right fs-30"></i>
                  <div>
                    <h5 class="card-title">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right fs-30"></i>
                  <div>
                    <h5 class="card-title">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right fs-30"></i>
                  <div>
                    <h5 class="card-title">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right fs-30"></i>
                  <div>
                    <h5 class="card-title">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-70">
                <div class="card-body d-flex flex gap-4">
                  <i class="icofont-arrow-right fs-30"></i>
                  <div>
                    <h5 class="card-title">Determine Suitable Companies</h5>
                    <p class="card-text">We use qualitative and semi-quantitative decision criteria to determine
                      suitable companies for review.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <footer class="footer text-center text-md-start z-1">
    <div class="container-fluid">
      <div class="row" style="padding: 2rem;">
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
          <div class="row">
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
      <div class="row " style="padding: 0rem 2rem;">

        <p class="copyright mb-0" style="font-size: 1.3rem;">&copy; 2024 Eninrac. All rights reserved.</p>


        <p class="privacy  "><a href="">Privacy Policy</a> • <a href="">Terms & Conditions</a></p>

      </div>
    </div>
  </footer>



  <!-- scripts -->



  <!-- script for play/pause -->



  <script>
    document.getElementById('playButton').addEventListener('click', function () {
      document.getElementById('videoModal').style.display = 'flex';
    });
    document.getElementById('closeButton').addEventListener('click', function () {
      document.getElementById('videoModal').style.display = 'none';
    });
  </script>
  <script src="<?= base_url('assets/js/footer.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>