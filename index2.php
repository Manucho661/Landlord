<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE | Dashboard v2</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE | Dashboard v2" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="adminlte.css" />

    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">

  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      
      <!--end::Header-->
      <!--begin::Sidebar-->
       <?php include 'sidebar.php'?>
      <!--end::Sidebar-->
      <!-- start content -->
      <div id="content">
         <!--begin::App Main-->
      
        <main class="app-main">
          <!--begin::App Content Header-->
          <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="col-sm-6"><h3 class="mb-0"></h3></div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard v2</li>
                  </ol>
                </div>
              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!-- Info boxes -->
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-primary shadow-sm">
                      <i class="fas fa-home properties-icon"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">PROPERTIES</span>
                      <span class="info-box-number">
                        50
                        <small></small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-danger shadow-sm">
                      <i class="fas fa-tools maintenance-icon"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">MAINTENANCE REQUEST</span>
                      <span class="info-box-number">20</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm">
                      <i class="fas fa-users people-icon"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">REGISTERED TENANTS</span>
                      <span class="info-box-number">200</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon text-bg-warning shadow-sm">
                      <i class="bi bi-people-fill"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">ACTIVE TENANTS</span>
                      <span class="info-box-number">100</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


              <!-- Beginning Property row -->

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header" style="background-color:#00192D; color: white;" >
                    <h5 class="card-title bg-warning" style="padding:0.5rem; border-radius: 10px;">Properties</h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="btn btn-tool dropdown-toggle"
                          data-bs-toggle="dropdown"
                        >
                          <i class="bi bi-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" role="menu">
                          <a href="#" class="dropdown-item">Action</a>
                          <a href="#" class="dropdown-item">Another action</a>
                          <a href="#" class="dropdown-item"> Something else here </a>
                          <a class="dropdown-divider"></a>
                          <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!--begin::Row-->
                    <table id="myTableOne" class="display" style="">
                      <thead>
                        <tr>
                          <th>Property Name</th>
                          <th>Units</th>
                          <th>Location</th>
                          <th>No of Tenants</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Manucho Apartments</td>
                          <td>80</td>
                          <td>Kisumu</td>
                          <td>60</td>
                        </tr>
                        <tr>
                          <td>Ethical Apartments</td>
                          <td>69</td>
                          <td>Rongai</td>
                          <td>65</td>
                        </tr>
                        <!-- Add more rows as needed -->
                      </tbody>
            
                  </table>



                
                    <!--end::Row-->
                  </div>
                  <!-- ./card-body -->
                  <div class="card-footer">
                    <!--begin::Row-->
                    
                      <!-- /.col -->
                      
                    <!--end::Row-->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
         </div>
              <!-- End Property Row -->
              <!--begin::Row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header" style="background-color:#00192D; color: white;" >
                      <h5 class="card-title bg-warning" style="padding:0.5rem; border-radius: 10px;" >Rental Collections</h5>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-tool dropdown-toggle"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bi bi-wrench"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"> Something else here </a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                    <!-- /.card-header -->
                    <div class="card-body"> 
                      <!--begin::Row-->
                      <table id="myTable" class="display" style="">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>TYPE</th>
                                <th>Total Paid</th>
                                <th>Pending</th>
                                <th>No of Tenants</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Manucho Apartments</td>
                                <td>BEDSITTER</td>
                                <td>KSH 200,000</td>
                                <td>KSH 100,100</td>
                                <td>200</td>
                              
                            </tr>
                            <tr>
                                <td>Ebenezer Apartments</td>
                                <td>1 BEDROOM</td>
                                <td>KSH 200,000</td>
                                <td>KSH 100, 200</td>
                                <td>100</td>
                              
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table> 
                    </div>
          </div>

          <hr>
                      <!--end::Row-->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer"> 
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-md-6 col-6">
                          <div class="text-center border-end">
                            <span class="text-success">
                              <i class="bi bi-caret-up-fill"></i>80%
                            </span>
                            <h5 class="fw-bold mb-0">KSH 35,210.43</h5>
                            <span class="text-uppercase">TOTAL RENT</span>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-6">
                          <div class="text-center border-end">
                            <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 20% </span>
                            <h5 class="fw-bold mb-0">KSH 10,390.90</h5>
                            <span class="text-uppercase">TOTAL PENDING</span>
                          </div>
                        </div> 
                        <!-- /.col -->
                        
                      <!--end::Row-->
                    </div> 
                    <!-- /.card-footer -->
                  <!-- </div> -->
                  <!-- /.card -->
                <!-- </div> -->
                <!-- /.col -->
              <!-- </div> -->
              <!--end::Row-->
              </div>
              <!--begin::Row-->
              <div class="row g-4 mb-8">
                <!-- First Card -->
                <div class="col-md-6">
                  <!--begin::Row-->
                  <div class="row g-4 mb-4">
                    <div class="col-md-12">
                      <!-- DIRECT CHAT -->
                      <div class="card">
                        <div class="card-header" style="background-color:#FFC107; /* RGB */;">
                          <h3 class="card-title">RentalTrends</h3>
                        </div>

                        <div class="card-body">
                          <canvas id="rentalTrends" width="400" height="300"></canvas>
                        </div>
                      </div>

                  
                      <!-- /.direct-chat -->
                    </div>
                    <!-- /.col -->
                    
                    <!-- /.col -->
                  </div>
                  <!--end::Row-->
                  <!--begin::Latest Order Widget-->
                  
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <!-- Info Boxes Style 2 -->
                  <div class="card">

                    <div class="card-header" style="background-color:#FFC107; /* RGB */;">
                      <h3 class="card-title">Occupancy</h3>
                    </div>

                    <div class="card-body">
                    
                      <!--begin::Row-->
                      <div class="row">
                        <div class="col-12"><div id="pie-chart"></div></div>
                        <!-- /.col -->
                      </div>
                      <!--end::Row-->
                    </div>

                    </div>


                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->

              <!-- Begin Mantainance row -->

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header" style="background-color:#00192D; color: white;">
                      <h5 class="card-title bg-warning" style="padding:0.5rem; border-radius: 10px;">Maintenance Requests</h5>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-tool dropdown-toggle"
                            data-bs-toggle="dropdown"
                          >
                            <i class="bi bi-wrench"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item"> Something else here </a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                          <i class="bi bi-x-lg"></i>
                        </button>
                      </div>
                    </div> 
                    <!-- /.card-header -->
                    <div class="card-body">
                      <!--begin::Row-->
                      <table id="myTableThree" class="display" style="">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Residence</th>
                                <th>Request</th>
                                <th>Status</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Manucho</td>
                                <td>Manucho Apartments</td>
                                <td>Leaking Repair</td>
                                <td><span class="badge text-bg-success">!Completed </span></td>
                            </tr>
                            <tr>
                                <td>Ebenezer</td>
                                <td>Manucho Apartments</td>
                                <td>Water Sink Repair</td>
                                <td><span class="badge text-bg-danger">!Pending</span></td>
                            </tr>
                            <tr>
                              <td>Ebeni</td>
                              <td>Many Apartments</td>
                              <td>Balcony Painting</td>
                              <td><span class="badge text-bg-success"> !Completed </span></td>
                          </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>



                  
                      <!--end::Row-->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <!--begin::Row-->
                      
                        <!-- /.col -->
                        
                      <!--end::Row-->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>

          <!-- Begin Communications Row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-4">
                      <div class="card-header" style="background-color:#00192D; color: white;" >
                        <h5 class="card-title bg-warning" style="padding:0.5rem; border-radius: 10px;" >Communication</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                          </button>
                          <div class="btn-group">
                            <button
                              type="button"
                              class="btn btn-tool dropdown-toggle"
                              data-bs-toggle="dropdown"
                            >
                              <i class="bi bi-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" role="menu">
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item">Another action</a>
                              <a href="#" class="dropdown-item"> Something else here </a>
                              <a class="dropdown-divider"></a>
                              <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div>
                          <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                          <!-- Message. Default to the start -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-start"> Alexander Pierce </span>
                              <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img
                              class="direct-chat-img"
                              src="assets/img/user1-128x128.jpg"
                              alt="message user image"
                            />
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                          <!-- Message to the end -->
                          <div class="direct-chat-msg end">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-end"> Sarah Bullock </span>
                              <span class="direct-chat-timestamp float-start">
                                23 Jan 2:05 pm
                              </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img
                              class="direct-chat-img"
                              src="assets/img/user3-128x128.jpg"
                              alt="message user image"
                            />
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">You better believe it!</div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                          <!-- Message. Default to the start -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-start"> Alexander Pierce </span>
                              <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img
                              class="direct-chat-img"
                              src="assets/img/user1-128x128.jpg"
                              alt="message user image"
                            />
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Working with AdminLTE on a great new app! Wanna join?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                          <!-- Message to the end -->
                          <div class="direct-chat-msg end">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-end"> Sarah Bullock </span>
                              <span class="direct-chat-timestamp float-start">
                                23 Jan 6:10 pm
                              </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img
                              class="direct-chat-img"
                              src="../../dist/assets/img/user3-128x128.jpg"
                              alt="message user image"
                            />
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">I would love to.</div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                        </div>
                        <!-- /.direct-chat-messages-->
                        <!-- Contacts are loaded here -->
                      
                            <!-- End Contact Item -->
                          </ul>
                          <!-- /.contacts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input
                              type="text"
                              name="message"
                              placeholder="Type Message ..."
                              class="form-control"
                            />
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning">Send</button>
                            </span>
                          </div>
                        </form>
                      </div>
                      <!-- /.card-footer-->
                    </div>

                      <div class="card-footer">
                        <!--begin::Row-->
                        
                          <!-- /.col -->
                          
                        <!--end::Row-->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>


              
            </div>
            <!--end::Container-->
          </div>
          <!--end::App Content-->
        </main>

         <!--end::App Main-->
         <!--begin::Footer-->
        <footer class="app-footer">
          <!--begin::To the end-->
          <div class="float-end d-none d-sm-inline">Anything you want</div>
           <!--end::To the end-->
           <!--begin::Copyright-->
           <strong>
           Copyright &copy; 2014-2024&nbsp;
           <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
           </strong>
           All rights reserved.
          <!--end::Copyright-->
        </footer>

      </div>
      <!-- end content -->
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->


    <script src="main.js"></script>


    <script>
      const ctx = document.getElementById('rentalTrends').getContext('2d');
    
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [
            {
              label: 'Bedsitters',
              data: [35, 30, 32, 30, 33, 35, 34, 33, 34, 35, 34, 35],
              borderColor: 'cyan',
              backgroundColor: 'transparent',
              tension: 0.4
            },
            {
              label: 'Apartments',
              data: [15, 16, 17, 16, 18, 19, 20, 19, 18, 17, 19, 21],
              borderColor: 'green',
              backgroundColor: 'transparent',
              tension: 0.4
            },
            {
              label: 'The Mansion',
              data: [20, 25, 22, 26, 25, 30, 29, 28, 27, 30, 28, 31],
              borderColor: 'black',
              backgroundColor: 'transparent',
              tension: 0.4
            },
            {
              label: 'Villa Rosa Kempinski',
              data: [25, 30, 20, 24, 23, 26, 25, 26, 27, 26, 27, 28],
              borderColor: 'red',
              backgroundColor: 'transparent',
              tension: 0.4
            }
          ]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top'
            },
           
          },
          scales: {
            y: {
              beginAtZero: false
            }
          }
        }
      });
    </script>
    
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    
    
    <!-- datatable script -->
    <script>
      // Initialize DataTable
      $(document).ready(function () {
          $('#myTable').DataTable();
      });
      $(document).ready(function () {
          $('#myTableOne').DataTable();
      });
      $(document).ready(function () {
          $('#myTableThree').DataTable();
      });
      $(document).ready(function () {
          $('#myTableFour').DataTable();
      });
   </script>
    
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- apexcharts -->

   <script>


  
   </script>

    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      /* apexcharts
       * -------
       * Here we will create a few charts using apexcharts
       */

      //-----------------------
      // - MONTHLY SALES CHART -
      //-----------------------

      const sales_chart_options = {
        series: [
          {
            name: 'Digital Goods',
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: 'Electronics',
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 180,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2023-01-01',
            '2023-02-01',
            '2023-03-01',
            '2023-04-01',
            '2023-05-01',
            '2023-06-01',
            '2023-07-01',
          ],
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy',
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#sales-chart'),
        sales_chart_options,
      );
      sales_chart.render();

      //---------------------------
      // - END MONTHLY SALES CHART -
      //---------------------------

      function createSparklineChart(selector, data) {
        const options = {
          series: [{ data }],
          chart: {
            type: 'line',
            width: 150,
            height: 30,
            sparkline: {
              enabled: true,
            },
          },
          colors: ['var(--bs-primary)'],
          stroke: {
            width: 2,
          },
          tooltip: {
            fixed: {
              enabled: false,
            },
            x: {
              show: false,
            },
            y: {
              title: {
                formatter: function (seriesName) {
                  return '';
                },
              },
            },
            marker: {
              show: false,
            },
          },
        };

        const chart = new ApexCharts(document.querySelector(selector), options);
        chart.render();
      }

      const table_sparkline_1_data = [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54];
      const table_sparkline_2_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 44];
      const table_sparkline_3_data = [15, 46, 21, 59, 33, 15, 34, 42, 56, 19, 64];
      const table_sparkline_4_data = [30, 56, 31, 69, 43, 35, 24, 32, 46, 29, 64];
      const table_sparkline_5_data = [20, 76, 51, 79, 53, 35, 54, 22, 36, 49, 64];
      const table_sparkline_6_data = [5, 36, 11, 69, 23, 15, 14, 42, 26, 19, 44];
      const table_sparkline_7_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 74];

      createSparklineChart('#table-sparkline-1', table_sparkline_1_data);
      createSparklineChart('#table-sparkline-2', table_sparkline_2_data);
      createSparklineChart('#table-sparkline-3', table_sparkline_3_data);
      createSparklineChart('#table-sparkline-4', table_sparkline_4_data);
      createSparklineChart('#table-sparkline-5', table_sparkline_5_data);
      createSparklineChart('#table-sparkline-6', table_sparkline_6_data);
      createSparklineChart('#table-sparkline-7', table_sparkline_7_data);

      //-------------
      // - PIE CHART -
      //-------------

      const pie_chart_options = {
        series: [700, 500, 400, 600, 300, 100],
        chart: {
          type: 'donut',
        },
        labels: ['Manucho', 'Ebeneza', 'Alpha', 'Omega', 'Uzaji','Ubegu'],
        dataLabels: {
          enabled: false,
        },
        colors: ['#0d6efd', '#20c997', '#ffc107', '#d63384', '#6f42c1', '#adb5bd'],
      };

      const pie_chart = new ApexCharts(document.querySelector('#pie-chart'), pie_chart_options);
      pie_chart.render();

      //-----------------
      // - END PIE CHART -
      //-----------------
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
