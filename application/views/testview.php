<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecosystem Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

  <style>
    /* report page */












    /* Content section */









    .report-types li {
      border-bottom: 1px solid black !important;
    }






    /* changes */






    .icofont-arrow-right {
      color: blue !important;

    }

   
  </style>

</head>

<body>

  <!-- navbar section  -->
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



  <!-- header -->
  <header class="report-header report-header-lg text-center px-2 px-lg-5">
    <img src="https://res.cloudinary.com/dkklqdsqc/image/upload/q_auto,f_auto/v1702262499/assets/magazine/hn4cpe8bbs7ponn1bch4.svg" alt="Background Image">


    <div class="relative">
      <h1 class="display-4"> Reports</h1>
      <p>Actionable intelligence to inform your strategic and commercial decision making</p>
    </div>
  </header>




  <!-- testing ribbon -->
  <div class="container-fluid  text-center p-4 pointer w-blue">


    <div class="ribbon-content">
      <ul class="vb-res list-style-none d-flex p-0 width-500 justify-content-around m-auto">

        <li id="btn-ev" class="tab">
          <div class="text-center ">
            <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">EV</p>
          </div>
        </li>
        <li id="btn-solar" class="highlight tab">
          <div class="text-center ">
            <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">Solar</p>
          </div>
        </li>

        <li id="btn-wind" class="tab">
          <div class="text-center">
            <img src="<?= base_url('assets/images/oa-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">Wind</p>
          </div>

        </li>


        <li id="btn-hydro" class="tab">
          <div class="text-center ">
            <img src="<?= base_url('assets/images/solar-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">Hydrogen</p>
          </div>
        </li>

        <li id="btn-bess" class="tab">
          <div class="text-center">
            <img src="<?= base_url('assets/images/ev-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">BESS</p>
          </div>
        </li>

        <li id="btn-power" class="tab">
          <div class="text-center">
            <img src="<?= base_url('assets/images/ev-line.svg') ?>" class="product-ribbon-svg">
            <p class="text-center  c-light-gray mt-2">Power</p>
          </div>
        </li>

      </ul>
    </div>


  </div>

  <div class="main d-flex flex gap-2  w-blue" style="padding-top:1rem;">
    <div class=" py-1" style="width: 30%; position: sticky; top: 0px; min-width: 300px; min-height: 100vh">
      <!-- justify-content-between -->
      <ul class=" fw-normal text-start d-flex flex-column gap-4 " style="position: sticky; top: 0px; min-width: 300px; min-height: 100vh;">
        <li class="border-top border-bottom  d-flex  justify-content-between py-2 side-list" target="first" id="market-sizing">
          <p class=" v-list">Market Sizing</p>
          <div class="arrow align-items-center" id="first"><i class="icofont-arrow-right fs-40"></i></div>

        </li>
        <li class=" border-bottom  d-flex  justify-content-between side-list" target="second" id="future-outlook">
          <p class="  v-list">Future Outlook</p>
          <div class="arrow " id="second"><i class="icofont-arrow-right fs-40"></i></div>
        </li>
        <li class="  border-bottom  d-flex  justify-content-between side-list" target="third" id="focus-reports">
          <p class="  v-list">Focus Reports</p>
          <div class="arrow " id="third"><i class="icofont-arrow-right fs-40"></i></div>
        </li>
        <li class=" border-bottom  d-flex  justify-content-between side-list" target="four" id="thematic-reports">
          <p class="  v-list">Thematic Reports</p>
          <div class="arrow " id="four"><i class="icofont-arrow-right fs-40"></i></div>
        </li>
        <li class="  border-bottom d-flex  justify-content-between side-list" target="five" id="databases">
          <p class="  v-list">Databases</p>
          <div class="arrow " id="five"><i class="icofont-arrow-right fs-40"></i></div>
        </li>
        <li class="  d-flex  justify-content-between side-list" target="six" id="survey">
          <p class="  v-list">Survey</p>
          <div class="arrow " id="six"><i class="icofont-arrow-right fs-40"></i></div>
        </li>
      </ul>
    </div>
    <div>
      <div class=" moving-content mx-4" style=" min-width: 50%;">
        <!-- Placeholder for other content -->
        <div class="p-1 mx-4 ">
          <!-- Content sections -->
          <div id="content-solar" class="content-section active">

            <h1 class="py-4 h5 fw-bold text-uppercase">Market Sizing</h1>


            <div id="report1" class="report-content">
              <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
                <img src="https://placehold.co/25" class="">
                <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 1</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div id="report2" class="report-content" style="display: none;">
              <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
                <img src="https://placehold.co/25" class="">
                <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 2</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
                <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="d-flex flex-column py-1 gap-4 mx-4 align-items-start">
              <label for="evReportDropdown" class="h5">Choose EV Report:</label>
              <select id="evReportDropdown" class="form-select">
                <option value="report1">EV & Battery Quarterly Outlook 1</option>
                <option value="report2">EV & Battery Quarterly Outlook 2</option>
              </select>
            </div>
            <div class="contentsection future-outlook">
              <div class="future-outlook">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase ">Future Outlook</h1>

                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>


            </div>
            <div class="contentsection focus-reports">
              <div class="focus-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Focus Reports</h1>

                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>

            <div class="contentsection thematic-reports">
              <div class="thematic-reports">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase ">thematic reports</h1>

                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="<?= base_url("product_page") ?>">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>

            <div class="contentsection databases">
              <div class="databases">
                <div class=" py-4 ">
                  <h1 class="h5 fw-bold text-uppercase  ">Databases</h1>

                </div>
                <div class="info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class=" info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>
            </div>

            <div class="contentsection survey pb-4">
              <div class="survey">
                <div class=" py-4">
                  <h1 class="h5 fw-bold text-uppercase  ">Survey</h1>

                </div>
                <div class="info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>
                <div class="info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                  <img src="https://placehold.co/25" class="">

                  <div class="text-content d-flex flex-column">
                    <p class="h5
                ">EV & Battery Quarterly Outlook</p>
                    <p class="">Quarterly report • PDF & Excel • Includes access to our analysts</p>
                  </div>
                  <a href="">Learn More <i class="icofont-long-arrow-right "></i></a>
                </div>

              </div>

            </div>


          </div>




        </div>



        <div id="content-ev" class="content-section">
          <div class="market-sizing">

          </div>

          <div class="future-outtlook">

          </div>

          <div class="focus-reports">

          </div>

          <div class="thematic-reports">

          </div>

          <div class="databases">

          </div>

          <div class="surveys">

          </div>

        </div>
        <div id="content-wind" class="content-section">
          <div class="market-sizing">

          </div>

          <div class="future-outtlook">

          </div>

          <div class="focus-reports">

          </div>

          <div class="thematic-reports">

          </div>

          <div class="databases">

          </div>

          <div class="surveys">

          </div>



        </div>

        <div id="content-bess" class="content-section">
          <div class="market-sizing">

          </div>

          <div class="future-outtlook">

          </div>

          <div class="focus-reports">

          </div>

          <div class="thematic-reports">

          </div>

          <div class="databases">

          </div>

          <div class="surveys">

          </div>


        </div>
        <div id="content-hydro" class="content-section ">

        </div>

        <div id="content-power" class="content-section">
          <div class="market-sizing">
            <div class="content-section-title">
              <h1>Market Sizing</h1>
            </div>
          </div>

          <div class="future-outtlook">

          </div>

          <div class="focus-reports">

          </div>

          <div class="thematic-reports">

          </div>

          <div class="databases">

          </div>

          <div class="surveys">

          </div>

        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- Footer -->
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
                <input type="email" name="" id="" class="mb-2 " placeholder="your work email">
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
      <div class="row " style="padding: 0rem 2rem;">

        <p class="copyright mb-0" style="font-size: 1.3rem;">&copy; 2024 Eninrac. All rights reserved.</p>


        <p class="privacy  "><a href="">Privacy Policy</a> • <a href="">Terms & Conditions</a></p>

      </div>
    </div>
  </footer>


  <script src="<?= base_url() ?>assets/js/renderReports.js"></script>
  <script>
    document.getElementById('evReportDropdown').addEventListener('change', function() {
      document.querySelectorAll('.report-content').forEach(function(content) {
        content.style.display = 'none';
      });
      document.getElementById(this.value).style.display = 'block';
    });

    function getScreenPosition(element) {
      const rect = element.getBoundingClientRect();
      const screenX = rect.left + window.screenX;
      const screenY = rect.top;
      return {
        screenX,
        screenY
      };
    }

    function topCheck(element) {
      let currentPosition = getScreenPosition(element);
      // console.log(currentPosition.screenY);

      if (currentPosition.screenY > -180 && currentPosition.screenY < 35) {

        return true;
      }
      return false;


    }

    function showContent(contentId) {


      var contents = document.querySelectorAll('.content-section');
      contents.forEach(function(content) {
        content.classList.remove('active');
      });


      document.getElementById(contentId).classList.add('active');
    }

    function highlight(element) {
      var tabs = document.querySelectorAll('.tab');
      tabs.forEach(function(tab) {
        tab.classList.remove('highlight');
      });
      element.classList.add('highlight');
    }



    window.addEventListener('scroll', function(e) {
      if (topCheck(document.querySelectorAll('.contentsection')[0])) {
        showArrow("first");



      }
      if (topCheck(document.querySelectorAll('.contentsection')[1])) {
        showArrow("second")

      }
      if (topCheck(document.querySelectorAll('.contentsection')[2])) {
        showArrow("third")

      }
      if (topCheck(document.querySelectorAll('.contentsection')[3])) {
        showArrow("four")

      }
      if (topCheck(document.querySelectorAll('.contentsection')[4])) {
        showArrow("five")

      }
      if (topCheck(document.querySelectorAll('.contentsection')[5])) {
        showArrow("six")

      }



    })

    // For arrow
    function showArrow(id) {
      // Hide all content sections
      var contents = document.querySelectorAll('.arrow');

      contents.forEach(function(content) {

        content.classList.remove('active');
      });
      let ele = document.getElementById(id);

      ele.classList.add('active');
    }



    document.getElementById('btn-ev').addEventListener('click', function() {

      highlight(this);
      showContent('content-ev');

    });

    document.getElementById('btn-solar').addEventListener('click', function() {
      highlight(this);
      showContent('content-solar');

    });

    document.getElementById('btn-wind').addEventListener('click', function() {
      highlight(this);
      showContent('content-wind');

    });



    document.getElementById('btn-hydro').addEventListener('click', function() {
      highlight(this);
      showContent('content-hydro');

    });

    document.getElementById('btn-bess').addEventListener('click', function() {
      highlight(this);
      showContent('content-bess');

    });
    document.getElementById('btn-power').addEventListener('click', function() {
      highlight(this);
      showContent('content-power');

    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>