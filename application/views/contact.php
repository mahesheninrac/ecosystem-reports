<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact us</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />


</head>

<body>
  <!-- navbar section -->
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

  <section class="contact-us-form">
    <div class="con-wrapper">
      <div class="container-fluid">
        <div class="row text-start">
          <!-- Left Column -->
          <div class="col-md-5 bg-sky-blue-4 d-flex  justify-content-center position-relative    contact-us-left">
          
            <div>
              <h2>Our offices</h2>
              <p>Eninrac Consulting Private Limited,<br> 2nd Floor B-130, B-Block<br> Sector 65, Noida - 201301, Uttar Pradesh</p>
              <p>
                <a href="tel:(+91) 9319048963,">(+91) 9319048963</a><br>
                <a href="mailto:connect@eninrac.com">connect@eninrac.com</a>
              </p>
              <div class="py-1">
                <h2>Press Enquiries</h2>
                <p>
                  <a href="mailto:press@rhomotion.com">connect@eninrac.com</a>
                </p>
              </div>
              <div class="py-1">
                <h2>Want to work with us?</h2>
                <p style="  max-width: 300px;">We're always looking for new talent and would love to hear from you.</p>
                <p>
                  <a href="mailto:careers@rhomotion.com">careers@rhomotion.com</a>
                </p>
              </div>

              <a href="https://www.google.com/" class="btn border border-dark btn-md rounded-md px-3 py-2 font-medium" style="background-color: #bad0f6; border:1px solid black !important;">See open positions</a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-7  bg-primary-200 contact-us-right">
            <div class="container-xxl ">
              <h2>Get in touch</h2>
              <p>Contact us to discuss our products and how they can support you.</p>
              <form enctype="multipart/form-data" method="post" class="contact-us-form">
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
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="xxxxxxxxxx" required>
                  </div>
                </div>
               
                <button type="submit" class="btn text-white bg-primary-700  px-2 py-2">Register interest</button>
                <p class="py-4 fs-14">By submitting this form, you agree to Eninrac&#39;s <u>privacy policy</u>.</p>
              </form>
            </div>
          </div>
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


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/js/footer.js') ?>"></script>
</body>

</html>