<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surveys</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <style>
    .accordion-section {
      background-color: #D0DDF7;
    }

    .accordion-container {
      width: 100%;
      max-width: 600px;
      margin: auto;
    }

    .accordion-container .accordion {
      margin-bottom: 8px;
    }

    .accordion-inner {
      grid-column-gap: 12px;
      grid-row-gap: 12px;
      cursor: pointer;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 16px 20px;
      display: flex;
      color: inherit;
      border-radius: 6px;
      transition: background-color 0.3s ease-in-out;
    }

    .single-about-icon-box.single-box-accordion {
      background-color: #fff;
      color: #041424;
      transition: background-color 0.4s ease-in-out;
      border-radius: 6px;
      margin-bottom: 8px;
    }

    .single-about-icon-box.single-box-accordion:hover {
      background-color: #041424 !important;
      color: #fff !important;
    }

    .single-about-icon-box .accordion-heading {
      font-weight: 600;
      line-height: 25.5px;
      font-size: 17px;
    }

    .single-about-icon-box .accordion-expand p {
      color: #fff;
      opacity: 0.8 !important;
    }

    .single-box-accordion.is-open {
      border-radius: 6px;
      background-color: #041424;
      color: #fff;
    }

    .single-about-icon-box .accordion-expand {
      padding-left: 20px;
      padding-right: 20px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease, opacity 0.5s ease;
      opacity: 0;
    }

    .single-about-icon-box .accordion-expand.active {
      padding-bottom: 16px;
      max-height: 300px;
      opacity: 1;
    }

    .accordion-section img {
      transition: opacity 0.5s ease, visibility 0.5s ease;
      position: absolute;
      top: 0;
      left: 0;
      display: none;
      width: 100%;
    }

    .accordion-section .image-container {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .accordion-section img.active {
      display: block;
      opacity: 1;
      visibility: visible;
    }
  </style>
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

  <section style="padding:88px 0px 80px 0px">
    <div class="container">
      <div class="content pt-2 mx-auto" style="max-width:700px; ">
        <p class="text-center">Ecosystem survey</p>
        <h1 class="fw-700 text-center">Quick Questionnaire Creation Painless Programming.</h1>
        <p class=" mb-2 text-center" style="font-size:17px">Give Knit your research objectives, use case, and audience
          criteria and get an
          editable draft of your
          questionnaire in minutes.</p>
        <a href=""></a>
      </div>

      <div class="row">
        <div class="col-md-6"></div>
      </div>
    </div>
  </section>

  <section class="accordion-section" style="padding:88px 0px 80px 0px">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-md-6">
          <div class="section-title left style-two" style="margin-bottom: 40px;">
            <h5 class="fw-600 text-primary mb-3">IT Support For Business</h5>
            <h3 class="fw-700 mt-1">Ensuring Your Success Trusted</h3>
            <h3 class="fw-700">IT Services Source</h3>
            <p class="mt-3">Monotonectally synergize granular markets and front markets. Collaboratively visualize
              strategic infomediaries after multimedia based models. Synergistically task state of the
              art infrastructures for</p>
          </div>
          <div class="accordion-container">
            <div class="single-about-icon-box single-box-accordion research-content is-open">
              <div class="about-icon-box-content accordion-inner">
                <div class="accordion-heading">Survey Creation</div>
              </div>
              <div class="accordion-expand active">
                <p>Let Knit instantly draft a questionnaire that leverages your past
                  research and new objectives – all available in a doc-like editor to edit
                  directly, comment feedback, or circulate with your team. Then, within
                  that same day, your dedicated Knit Researcher will work with you to
                  finalize, program and launch the survey.</p>
              </div>
            </div>

            <div class="single-about-icon-box single-box-accordion survey-content">
              <div class="about-icon-box-content accordion-inner">
                <div class="accordion-heading">Survey Creation</div>
              </div>
              <div class="accordion-expand">
                <p>Let Knit instantly draft a questionnaire that leverages your past
                  research and new objectives – all available in a doc-like editor to edit
                  directly, comment feedback, or circulate with your team. Then, within
                  that same day, your dedicated Knit Researcher will work with you to
                  finalize, program and launch the survey.</p>
              </div>
            </div>

            <div class="single-about-icon-box single-box-accordion eninrac-content">
              <div class="about-icon-box-content accordion-inner">
                <div class="accordion-heading">Survey Creation</div>
              </div>
              <div class="accordion-expand">
                <p>Let Knit instantly draft a questionnaire that leverages your past
                  research and new objectives – all available in a doc-like editor to edit
                  directly, comment feedback, or circulate with your team. Then, within
                  that same day, your dedicated Knit Researcher will work with you to
                  finalize, program and launch the survey.</p>
              </div>
            </div>

            <div class="single-about-icon-box single-box-accordion ecosystem-content">
              <div class="about-icon-box-content accordion-inner">
                <div class="accordion-heading">Survey Creation</div>
              </div>
              <div class="accordion-expand">
                <p>Let Knit instantly draft a questionnaire that leverages your past
                  research and new objectives – all available in a doc-like editor to edit
                  directly, comment feedback, or circulate with your team. Then, within
                  that same day, your dedicated Knit Researcher will work with you to
                  finalize, program and launch the survey.</p>
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image-container d-none d-md-block">
            <img class="research-content active" src="https://shorturl.at/hQNrv" alt="">
            <img class="survey-content" src="https://shorturl.at/Yvw6H" alt="">
            <img class="eninrac-content" src="https://shorturl.at/hQNrv" alt="">
            <img class="ecosystem-content" src="https://shorturl.at/Yvw6H" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const accordions = document.querySelectorAll(".single-about-icon-box");

      accordions.forEach(accordion => {
        accordion.addEventListener("click", () => {
          accordions.forEach(item => {
            item.classList.remove("is-open");
            item.querySelector(".accordion-expand").classList.remove("active");
          });

          accordion.classList.add("is-open");
          accordion.querySelector(".accordion-expand").classList.add("active");

          document.querySelectorAll(".image-container img").forEach(img => {
            img.classList.remove("active");
          });

          const relatedImage = document.querySelector(".image-container img." + accordion.classList[2]);
          if (relatedImage) {
            relatedImage.classList.add("active");
          }
        });
      });
    });
  </script>

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


  <script src="<?= base_url('assets/js/footer.js') ?>"></script>
</body>

</html>