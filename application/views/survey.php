<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveys</title>
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
    <div class="container-xxl p-4">
        <div class="text-center p-4">
            <p>DASHBOARD</p>
            <P class="fw-bold fs-30">Eninrac’s Survey</P>
        </div>


        <div class="d-flex flex-row justify-content-around p-5">
            <div class="survey-card ev">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/ev-line.svg') ?>" alt="">
                        <p class="p-1">EV</p>
                    </div>
                </a>
            </div>

            <div class="solar survey-card">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/solar-line.svg') ?>" alt="">
                        <p class="p-1">Solar</p>
                    </div>
                </a>

            </div>
            <div class="wind survey-card">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/oa-line.svg') ?>" alt="">
                        <p class="p-1">Open Access</p>
                    </div>
                </a>

            </div>

        </div>
        <div class="d-flex flex-row justify-content-around p-5">
            <div class="survey-card ev">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/ev-line.svg') ?>" alt="">
                        <p class="p-1">EV</p>
                    </div>
                </a>
            </div>
            <div class="solar survey-card">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/tariff-line.svg') ?>" alt="">
                        <p class="p-1">Tariff</p>
                    </div>
                </a>

            </div>
            <div class="wind survey-card">
                <a href="">

                    <div class="text-center">
                        <img src="<?= base_url('assets/images/power-line.svg') ?>" alt="">
                        <p class="p-1">Power</p>
                    </div>
                </a>

            </div>

        </div>


    </div>


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


    <script src="<?= base_url('assets/js/footer.js') ?>"></script>
</body>

</html>