<!-- I have already typed all of this code, no need to make any changes, copy paste this code inside a new html file and start write the code from where i have 
indicated -->

<!DOCTYPE html>
<html>
  <head>
    <title>Insert ur title</title>
    <link
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
      type="text/css"
      rel="stylesheet"
    />

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link
      href="vendor/select2/select2.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link
      href="css/main.css"
      rel="stylesheet"
      media="all"
    />
  </head>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <body
    style="background-color: rgb(247, 247, 247); margin: 0%"
  >
    <div class="container-fluid">
      <div class="row">
        <div class="col-1">
          <!-- //nav starts here -->
          <nav class="navbar bg-light" style="z-index: 1">
            <div
              class="container-fluid justify-content-start"
            >
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
              >
                <div class="offcanvas-header">
                  <h5
                    class="offcanvas-title"
                    id="offcanvasNavbarLabel"
                  >
                    Services
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <ul
                    class="navbar-nav justify-content-end flex-grow-4 pe-6"
                    style="
                      font-family: 'Segoe UI', Tahoma,
                        Geneva, Verdana, sans-serif;
                      font-size: larger;
                    "
                  >
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        aria-current="page"
                        href="layout.html"
                      >
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Models
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Servicing
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="PlaceOrder.html"
                      >
                        Register For Test Drive
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <!-- nav ends here -->
        </div>
        <div class="col-11" style="z-index: 0">
          <div class="container-fluid" id="logo">
            <div class="row" style="height: 20rem">
              <div class="col">
                <img
                  src="VASY-logos/VASY-logos.jpeg"
                  height="30%"
                  class="mx-auto fixed-top my-3"
                  style="border-radius: 20%"
                />
              </div>
            </div>
          </div>
          <!-- //logo ends here -->
        </div>
      </div>

      <!-- Okay, so, this is where you start typing your code, keep everything that is above intact, DO NOT make any changes in the code above. We are
    going for audi website's aesthetic, but of course, what ever is below is really your creativity. Do not try too hard and waste time on this. Keep it minimalistic.
    Complete this for now, we will start backend soon after ADA lab test-->
    </div>
    <div class="page-wrapper p-b-100 font-poppins mx-auto">
      <div class="wrapper wrapper--w680">
        <div class="card card-4">
          <div class="card-body">
            <h2 class="title">Registration Form</h2>
            <form method="POST" action="connect.php">
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">first name</label>
                    <input
                      class="input--style-4"
                      type="text"
                      name="first_name"
                    />
                  </div>
                </div>
                <!-- <div class="col-2">
                  <div class="input-group">
                    <label class="label">last name</label>
                    <input
                      class="input--style-4"
                      type="text"
                      name="last_name"
                    />
                  </div>
                </div> -->
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">
                      Date for Servies
                    </label>
                    <div class="input-group-icon">
                      <input
                        class="input--style-4 js-datepicker"
                        type="text"
                        name="dateForService"
                      />
                      <i
                        class="zmdi zmdi-calendar-note input-icon js-btn-calendar"
                      ></i>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Warranty</label>
                    <div class="p-t-10">
                      <label class="radio-container m-r-45">
                        In Warranty
                        <input
                          type="radio"
                          checked="checked"
                          name="warranty"
                        />
                        <span class="checkmark"></span>
                      </label>
                      <label class="radio-container">
                        Not In Warranty
                        <input
                          type="radio"
                          name="warranty"
                        />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Email</label>
                    <input
                      class="input--style-4"
                      type="email"
                      name="email"
                    />
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">
                      Phone Number
                    </label>
                    <input
                      class="input--style-4"
                      type="text"
                      name="phone_no"
                    />
                  </div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">Type Of Model</label>
                <div
                  class="rs-select2 js-select-simple select--no-search"
                >
                  <select name="model">
                    <option
                      disabled="disabled"
                      selected="selected"
                    >
                      Choose option
                    </option>
                    <option>Model V</option>
                    <option>Model A</option>
                    <option>Model S</option>
                    <option>Model Y</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="input-group">
                <!-- <label class="label">Type Of Service</label>
                <div
                  class="rs-select2 js-select-simple select--no-search"
                >
                  <select name="subject">
                    <option
                      disabled="disabled"
                      selected="selected"
                    >
                      Choose option
                    </option>
                    <option>Service 1</option>
                    <option>Service 2</option>
                    <option>Service 3</option>
                    <option>Service 4</option>
                    <option>Service 5</option>
                    <option>Service 6</option>
                    <option>Service 7</option>
                    <option>Service 8</option>
                    <option>Service 9</option>
                  </select> -->
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="p-t-15 text-center p-4">
                <input
                  class="btn btn--radius-2 btn--blue mx-auto"
                  type="submit"
                >
                  Submit</input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <!-- End your code here. Below this, we will probably have a footer, we can do all of that later. -->
  </body>
</html>
