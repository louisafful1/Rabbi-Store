<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- head -->
<head>
  <?php  $pageTitle = "Home"; include "include/head.php";?> 
</head>
<!-- End of head -->


  <!-- Body -->
  <body>

    <!-- Customizer offcanvas -->
    <div class="offcanvas offcanvas-end" id="customizer" tabindex="-1">
      <div class="offcanvas-header border-bottom">
        <h4 class="h5 offcanvas-title">Customize theme</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <!-- Customizer settings -->
        <div class="customizer-collapse collapse show" id="customizerSettings">

          <!-- Colors -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center mb-3">
              <i class="ci-paint text-body-tertiary fs-5 me-2"></i>
              <h5 class="fs-lg mb-0">Colors</h5>
            </div>
            <div class="row row-cols-2 g-3" id="theme-colors">
              <div class="col">
                <h6 class="fs-sm mb-2">Primary</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-primary" data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f55266">
                  <label for="primary" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f55266"></label>
                  <input type="color" class="visually-hidden" id="primary" value="#f55266">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Success</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-success" data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#33b36b">
                  <label for="success" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #33b36b"></label>
                  <input type="color" class="visually-hidden" id="success" value="#33b36b">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Warning</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-warning" data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#fc9231">
                  <label for="warning" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #fc9231"></label>
                  <input type="color" class="visually-hidden" id="warning" value="#fc9231">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Danger</h6>
                <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-danger" data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f03d3d">
                  <label for="danger" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f03d3d"></label>
                  <input type="color" class="visually-hidden" id="danger" value="#f03d3d">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Info</h6>
                <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-info" data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#2f6ed5">
                  <label for="info" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #2f6ed5"></label>
                  <input type="color" class="visually-hidden" id="info" value="#2f6ed5">
                </div>
              </div>
            </div>
          </div>

          <!-- Direction -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center pb-1 mb-2">
              <i class="ci-sort text-body-tertiary fs-lg me-2" style="transform: rotate(90deg)"></i>
              <h5 class="fs-lg mb-0">Direction</h5>
            </div>
            <div class="d-flex align-items-center justify-content-between border rounded p-3">
              <div class="me-3">
                <h6 class="mb-1">RTL</h6>
                <p class="fs-sm mb-0">Change text direction</p>
              </div>
              <div class="form-check form-switch m-0">
                <input type="checkbox" class="form-check-input" role="switch" id="rtl-switch">
              </div>
            </div>
            <div class="alert alert-info p-2 mt-2 mb-0">
              <div class="d-flex text-body-emphasis fs-xs py-1 pe-1">
                <i class="ci-info text-info fs-lg mb-2 mb-sm-0" style="margin-top: .125rem"></i>
                <div class="ps-2">To switch the text direction of your webpage from LTR to RTL, please consult the detailed instructions provided in the relevant section of our documentation.</div>
              </div>
            </div>
          </div>

          <!-- Border width -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center pb-1 mb-2">
              <i class="ci-menu text-body-tertiary fs-lg me-2"></i>
              <h5 class="fs-lg mb-0">Border width, px</h5>
            </div>
            <div class="slider-input d-flex align-items-center gap-3 border rounded p-3" id="border-input">
              <input type="range" class="form-range" min="0" max="10" step="1" value="1">
              <input type="number" class="form-control" id="border-width" min="0" max="10" value="1" style="max-width: 5.5rem">
            </div>
          </div>

          <!-- Rounding -->
          <div class="d-flex align-items-center pb-1 mb-2">
            <i class="ci-maximize text-body-tertiary fs-lg me-2"></i>
            <h5 class="fs-lg mb-0">Rounding, rem</h5>
          </div>
          <div class="slider-input d-flex align-items-center gap-3 border rounded p-3">
            <input type="range" class="form-range" min="0" max="5" step=".05" value="0.5">
            <input type="number" class="form-control" id="border-radius" min="0" max="5" step=".05" value="0.5" style="max-width: 5.5rem">
          </div>
        </div>

        <!-- Customizer code -->
        <div class="customizer-collapse collapse" id="customizerCode">
          <div class="nav mb-3">
            <a class="nav-link animate-underline fs-base p-0" href=".html" data-bs-toggle="collapse" aria-expanded="true" aria-controls="customizerSettings customizerCode">
              <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
              <span class="animate-target">Back to settings</span>
            </a>
          </div>
          <p class="fs-sm pb-1">To apply the provided styles to your webpage, enclose them within a <code>&lt;style&gt;</code> tag and insert this tag into the <code>&lt;head&gt;</code> section of your HTML document after the following link to the main stylesheet:<br><code>&lt;link href="assets/css/theme.min.css"&gt;</code></p>
          <div class="position-relative bg-body-tertiary rounded overflow-hidden pt-3">
            <div class="position-absolute top-0 start-0 w-100 p-3">
              <button type="button" class="btn btn-sm btn-outline-dark w-100" data-copy-text-from="#generated-styles" data-done-label="Code copied">
                <i class="ci-copy fs-sm me-1"></i>
                Copy code
              </button>
            </div>
            <pre class="text-wrap bg-transparent border-0 fs-xs text-body-emphasis p-4 pt-5" id="generated-styles"></pre>
          </div>
        </div>
      </div>

      <!-- Offcanvas footer (Action buttons) -->
      <div class="offcanvas-header border-top gap-3 d-none" id="customizer-btns">
        <button type="button" class="btn btn-lg btn-secondary w-100 fs-sm" id="customizer-reset">
          <i class="ci-trash fs-lg me-2 ms-n1"></i>
          Reset
        </button>
        <button class="btn btn-lg btn-primary hiding-collapse-toggle w-100 fs-sm collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".customizer-collapse" aria-expanded="false" aria-controls="customizerSettings customizerCode">
          <i class="ci-code fs-lg me-2 ms-n1"></i>
          Show code
        </button>
      </div>
    </div>


    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
        </div>
      </div>

      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-general-electronics.html">
            <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
            </h5>
            <div class="h6 pb-1 mb-2">$899.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="position-relative flex-shrink-0" href="shop-product-general-electronics.html">
            <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
            <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
            </h5>
            <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-general-electronics.html">
            <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
            </h5>
            <div class="h6 pb-1 mb-2">$429.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header flex-column align-items-start">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
          <span class="text-light-emphasis">Subtotal:</span>
          <span class="h6 mb-0">$2,317.00</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
          <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
        </div>
      </div>
    </div>


  <!-- Header -->
 <?php include "include/header.php";?>
<!-- End of Header -->


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>


      <!-- Hero -->
      <section class="container">
        <div class="row">

          <!-- Cover image -->
          <div class="col-md-7 order-md-2 mb-4 mb-md-0">
            <div class="position-relative h-100">
              <div class="ratio ratio-16x9"></div>
              <img src="assets/img/about/v1/hero.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
            </div>
          </div>

          <!-- Text + button -->
          <div class="col-md-5 order-md-1">
            <div class="position-relative py-5 px-4 px-sm-5">
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="position-relative z-1 py-md-2 py-lg-4 py-xl-5 px-xl-2 px-xxl-4 my-xxl-3">
                <h1 class="pb-1 pb-md-2 pb-lg-3">Cartzilla - More than a retailer</h1>
                <p class="text-dark-emphasis pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Since 2015, we have been fulfilling the small dreams and big plans of millions of people. You can find literally everything here.</p>
                <a class="btn btn-lg btn-outline-dark animate-slide-down" href="#mission">
                  Learn more
                  <i class="ci-arrow-down fs-lg animate-target ms-2 me-n1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Stats -->
      <section class="container py-5 mt-md-2 mt-lg-4">
        <div class="row row-cols-2 row-cols-md-4 g-4">
          <div class="col text-center">
            <div class="display-4 text-dark-emphasis mb-2">14k</div>
            <p class="fs-sm mb-0">products available for purchase</p>
          </div>
          <div class="col text-center">
            <div class="display-4 text-dark-emphasis mb-2">120m</div>
            <p class="fs-sm mb-0">users visited site from 2015</p>
          </div>
          <div class="col text-center">
            <div class="display-4 text-dark-emphasis mb-2">800+</div>
            <p class="fs-sm mb-0">employees around the world </p>
          </div>
          <div class="col text-center">
            <div class="display-4 text-dark-emphasis mb-2">92%</div>
            <p class="fs-sm mb-0">of our customers return</p>
          </div>
        </div>
      </section>


      <!-- CEO quotation (Mission) -->
      <section class="container pt-3 pt-sm-4 pt-lg-5 mt-lg-2 mt-xl-4 mt-xxl-5" id="mission" style="scroll-margin-top: 60px">
        <div class="text-center mx-auto" style="max-width: 690px">
          <h2 class="text-body fs-sm fw-normal">Mission</h2>
          <h3 class="h1 pb-2 pb-md-3 mx-auto" style="max-width: 400px">The best products at fair prices</h3>
          <p class="fs-xl pb-2 pb-md-3 pb-lg-4">"We believe that things exist to make life easier, more pleasant and kinder. That's why the search for the right thing should be quick, convenient and enjoyable. We do not just sell household appliances and electronics, but comfort and accessibility."</p>
          <img src="assets/img/about/v1/avatar.jpg" width="64" class="d-block rounded-circle mx-auto mb-3" alt="Avatar">
          <h6 class="mb-0">William Lacker, Cartzilla CEO</h6>
        </div>
      </section>


      <!-- Principles -->
      <section class="container pt-5">
        <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-5">
          <div class="col-md-5 col-lg-6 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
            <div class="ratio ratio-1x1">
              <img src="assets/img/about/v1/delivery.jpg" class="rounded-5" alt="Image">
            </div>
          </div>
          <div class="col-md-7 col-lg-6 pt-md-3 pt-xl-4 pt-xxl-5">
            <div class="ps-md-3 ps-lg-4 ps-xl-5 ms-xxl-4">
              <h2 class="text-body fs-sm fw-normal">Principles</h2>
              <h3 class="h1 pb-1 pb-sm-2 pb-lg-3">The main principles that will allow us to grow</h3>
              <p class="pb-xl-3">Cartzilla is a comprehensive solution to fulfill any customer's needs, serving as both the starting point and end destination of their search. It operates as a reliable assistant, dedicated to eliminating the need for any unpleasant compromises, making their dreams a reality, and empowering them to think big.</p>

              <!-- Accordion -->
              <div class="accordion accordion-alt-icon" id="principles">

                <!-- Item (expanded) -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingFocus">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#focus" aria-expanded="false" aria-controls="focus">
                      <span class="animate-target me-2">Customer focus</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="focus" aria-labelledby="headingFocus" data-bs-parent="#principles">
                    <div class="accordion-body">We prioritize understanding and anticipating our customers' needs, delivering an exceptional and personalized experience from start to finish.</div>
                  </div>
                </div>

                <!-- Item -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingReputation">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#reputation" aria-expanded="false" aria-controls="reputation">
                      <span class="animate-target me-2">Betting on reputation</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="reputation" aria-labelledby="headingReputation" data-bs-parent="#principles">
                    <div class="accordion-body">We value a solid reputation built on integrity, transparency, and quality - ensuring our customers trust and rely on our brand.</div>
                  </div>
                </div>

                <!-- Item -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingFast">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#fast" aria-expanded="false" aria-controls="fast">
                      <span class="animate-target me-2">Fast, convenient and enjoyable</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="fast" aria-labelledby="headingFast" data-bs-parent="#principles">
                    <div class="accordion-body">We've streamlined our process for speed, convenience, and an enjoyable shopping experience, redefining online standards for our delighted customers.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Values (Carousel of icon boxes) -->
      <section class="container-start pt-5">
        <div class="row align-items-center g-0 pt-2 pt-sm-3 pt-md-4 pt-lg-5">
          <div class="col-md-4 col-lg-3 pb-1 pb-md-0 pe-3 ps-md-0 mb-4 mb-md-0">
            <div class="d-flex flex-md-column align-items-end align-items-md-start">
              <div class="mb-md-5 me-3 me-md-0">
                <h2 class="text-body fs-sm fw-normal">Values</h2>
                <h3 class="h1 mb-0">Simple values to achieve goals</h3>
              </div>

              <!-- External slider prev/next buttons -->
              <div class="d-flex gap-2">
                <button type="button" id="prev-values" class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1" aria-label="Prev">
                  <i class="ci-chevron-left fs-xl animate-target"></i>
                </button>
                <button type="button" id="next-values" class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
                  <i class="ci-chevron-right fs-xl animate-target"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-9">
            <div class="ps-md-4 ps-lg-5">
              <div class="swiper" data-swiper="{
                &quot;slidesPerView&quot;: &quot;auto&quot;,
                &quot;spaceBetween&quot;: 24,
                &quot;loop&quot;: true,
                &quot;navigation&quot;: {
                  &quot;prevEl&quot;: &quot;#prev-values&quot;,
                  &quot;nextEl&quot;: &quot;#next-values&quot;
                }
              }">
                <div class="swiper-wrapper">

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-user-plus fs-4 me-3"></i>
                          People
                        </div>
                        <p class="mb-0">The most important value of the Company is people (employees, partners, clients). Behind any success there is, first and foremost, a specific person. It is he who creates the product, technology, and innovation.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-shopping-bag fs-4 me-3"></i>
                          Service
                        </div>
                        <p class="mb-0">Care, attention, desire and ability to be helpful (to a colleague in his department, other departments, clients, customers and all other people who surround us).</p>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-trending-up fs-4 me-3"></i>
                          Responsibility
                        </div>
                        <p class="mb-0">Responsibility is our key quality. We don't shift it to external circumstances or other people. If we see something that could be improved, we don't just criticize, but offer our own options.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-rocket fs-4 me-3"></i>
                          Innovation
                        </div>
                        <p class="mb-0">We foster a culture of continuous improvement and innovation. Embracing change and staying ahead of the curve are essential for our success. We encourage creative thinking, experimentation, and the pursuit of new ideas.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-star fs-4 me-3"></i>
                          Leadership
                        </div>
                        <p class="mb-0">Cartzilla people are young, ambitious and energetic individuals. With identified leadership qualities, with a desire to be the best at what they do.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide w-auto h-auto">
                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                      <div class="card-body py-5 px-3">
                        <div class="h4 h5 d-flex align-items-center">
                          <i class="ci-leaf fs-4 me-3"></i>
                          Sustainability
                        </div>
                        <p class="mb-0">We are committed to minimizing our environmental impact and promoting sustainable practices. From responsible sourcing to eco-friendly packaging, we aim to make a positive contribution to the well-being of our planet.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Video + Blog post -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-md-4 mt-lg-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="position-relative h-100">
              <div class="ratio ratio-16x9"></div>
              <img src="assets/img/about/v1/video-cover.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
              <div class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
                <a class="btn btn-lg btn-light rounded-pill m-md-2" href="https://www.youtube.com/watch?v=Sqqj_14wBxU" data-glightbox="">
                  <i class="ci-play fs-lg ms-n1 me-2"></i>
                  Play
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="bg-body-tertiary rounded-5 py-5 px-4 px-sm-5">
              <div class="py-md-3 py-lg-4 py-xl-5 px-lg-4 px-xl-5 my-lg-2 my-xl-4 my-xxl-5">
                <h2 class="h3 pb-sm-1 pb-lg-2">The role of philanthropy in building a better world</h2>
                <p class="pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Charitable contributions are a vital aspect of building a better world. These contributions come in various forms, including monetary donations...</p>
                <a class="btn btn-lg btn-outline-dark" href="#!">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Open positions (Carousel of cards) -->
      <section class="container py-5 mt-2 mb-1 my-sm-3 my-md-4 my-lg-5">
        <div class="d-flex align-items-end justify-content-between pb-3 mb-1 mb-md-3">
          <div class="me-4">
            <h2 class="text-body fs-sm fw-normal">Career</h2>
            <h3 class="h1 mb-0">Open positions</h3>
          </div>

          <!-- External slider prev/next buttons -->
          <div class="d-flex justify-content-center justify-content-md-start gap-2">
            <button type="button" id="prev-positions" class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-xl animate-target"></i>
            </button>
            <button type="button" id="next-positions" class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-xl animate-target"></i>
            </button>
          </div>
        </div>

        <!-- Slider -->
        <div class="swiper" data-swiper="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;navigation&quot;: {
            &quot;prevEl&quot;: &quot;#prev-positions&quot;,
            &quot;nextEl&quot;: &quot;#next-positions&quot;
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;800&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;1080&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
          <div class="swiper-wrapper py-2">

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5" href="#!">
                <div class="card-body pb-0 pt-3 pt-xl-0">
                  <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                  <h4 class="h5 py-3 my-2 my-xl-3">Supply Chain and Logistics Coordinator</h4>
                </div>
                <div class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">New York</div>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5" href="#!">
                <div class="card-body pb-0 pt-3 pt-xl-0">
                  <span class="badge bg-success fs-xs rounded-pill">Part time</span>
                  <h4 class="h5 py-3 my-2 my-xl-3">Content Manager for Social Networks</h4>
                </div>
                <div class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">Remote</div>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5" href="#!">
                <div class="card-body pb-0 pt-3 pt-xl-0">
                  <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                  <h4 class="h5 py-3 my-2 my-xl-3">Customer Service Representative</h4>
                </div>
                <div class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">London</div>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5" href="#!">
                <div class="card-body pb-0 pt-3 pt-xl-0">
                  <span class="badge bg-warning fs-xs rounded-pill">Freelance</span>
                  <h4 class="h5 py-3 my-2 my-xl-3">Data Analyst/Analytics Specialist</h4>
                </div>
                <div class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">Remote</div>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5" href="#!">
                <div class="card-body pb-0 pt-3 pt-xl-0">
                  <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                  <h4 class="h5 py-3 my-2 my-xl-3">E-commerce Manager/Director</h4>
                </div>
                <div class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">In house</div>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Subscription form + Vlog -->
      <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
              <h2 class="h4 mb-2">Sign up to our newsletter</h2>
              <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
              <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate="">
                <div class="position-relative w-100 me-2">
                  <input type="email" class="form-control form-control-lg" placeholder="Your email" required="">
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
              </form>
              <div class="d-flex gap-3">
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                  <i class="ci-instagram fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                  <i class="ci-facebook fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                  <i class="ci-youtube fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                  <i class="ci-telegram fs-base"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
              <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                  </div>
                </li>
              </ul>
              <div class="nav ps-md-4 ps-lg-0">
                <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                  <span class="animate-target">View all</span>
                  <i class="ci-chevron-right fs-base ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Page footer -->
    <footer class="footer position-relative bg-dark">
      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
      <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

        <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
        <div class="accordion py-5" id="footerLinks">
          <div class="row">
            <div class="col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start pb-3 mb-sm-4">
              <h4 class="mb-sm-0 mb-md-4 me-4">
                <a class="text-dark-emphasis text-decoration-none" href="home-electronics.html">Cartzilla</a>
              </h4>
              <p class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">Got questions? Contact us 24/7</p>
              <div class="dropdown" style="max-width: 250px">
                <button type="button" class="btn btn-light dropdown-toggle justify-content-between w-100 d-none-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help and consultation
                </button>
                <button type="button" class="btn btn-secondary dropdown-toggle justify-content-between w-100 d-none d-flex-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help and consultation
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Help center &amp; FAQ</a></li>
                  <li><a class="dropdown-item" href="#!">Support chat</a></li>
                  <li><a class="dropdown-item" href="#!">Open support ticket</a></li>
                  <li><a class="dropdown-item" href="#!">Call center</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4">
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="companyHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false" aria-controls="companyLinks">Company</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="companyLinks" aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">About company</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Our team</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Careers</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Contact us</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">News</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="accountHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Your account</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping rates &amp; policies</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Taxes &amp; fees</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="customerHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Payment methods</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Money back guarantee</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Product returns</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Support center</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Terms &amp; conditions</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Category / tag links -->
        <div class="d-flex flex-column gap-3 pb-3 pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0 mb-4">
          <ul class="nav align-items-center text-body-tertiary gap-2">
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Computers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Smartphones</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">TV, Video</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Speakers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Cameras</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Printers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Video Games</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Headphones</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Wearable</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">HDD/SSD</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Smart Home</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Apple Devices</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Tablets</a>
            </li>
          </ul>
          <ul class="nav align-items-center text-body-tertiary gap-2">
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Monitors</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Scanners</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Servers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Heating and Cooling</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">E-readers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Data Storage</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Networking</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Power Strips</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Plugs and Outlets</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Detectors and Sensors</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Accessories</a>
            </li>
          </ul>
        </div>

        <!-- Copyright + Payment methods -->
        <div class="d-md-flex align-items-center border-top py-4">
          <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-md-auto mb-4 mb-md-0 order-md-2">
            <div>
              <img src="assets/img/payment-methods/visa-dark-mode.svg" alt="Visa">
            </div>
            <div>
              <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
            </div>
            <div>
              <img src="assets/img/payment-methods/paypal-dark-mode.svg" alt="PayPal">
            </div>
            <div>
              <img src="assets/img/payment-methods/google-pay-dark-mode.svg" alt="Google Pay">
            </div>
            <div>
              <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" alt="Apple Pay">
            </div>
          </div>
          <p class="text-body fs-xs text-center text-md-start mb-0 me-4 order-md-1">© All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis fw-medium text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span></p>
        </div>
      </div>
    </footer>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
      <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Customize<i class="ci-settings fs-base ms-1 me-n2 animate-target"></i>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/glightbox.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  

</body>
<!-- Mirrored from cartzilla.createx.studio/about-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 05:35:47 GMT -->
</html>