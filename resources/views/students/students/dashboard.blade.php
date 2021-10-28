@extends('layouts.portal.app')
@section('content')

<body>

  @include('layouts.portal.students.navbar')

  @include('layouts.portal.students.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Profile</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        @if(auth()->user()->national_id == NULL)
                          70%
                        @else
                          100%
                        @endif
                      </h6>
                     
                        @if(auth()->user()->national_id == NULL)
                        <a href="{{route('student.settings')}}" class="text-danger small pt-1 fw-bold">
                          Update here to make 100%
                        </a>
                        @else
                        <span href="{{route('student.settings')}}" class="text-success small pt-1 fw-bold">
                          COMPLETE
                        </span>
                        @endif
                        
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Course</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                    @if(auth()->user()->course == NULL)
                      <h6>0%</h6>

                    @else
                    <h6>100%</h6>
                    @endif

                      @if(auth()->user()->course == NULL)
                        <a href="{{route('student.settings')}}" class="text-danger small pt-1 fw-bold">
                           Kindly provide course info
                        </a>
                        @else
                        <span href="{{route('student.settings')}}" class="text-success small pt-1 fw-bold">
                          COMPLETE
                        </span>
                        @endif
                    
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Bursary </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                    @if(auth()->user()->parent_status == NULL )
                    <h6>0%</h6>
                    @elseif(auth()->user()->other_info == NULL)
                    <h6>40%</h6>
                    @elseif(auth()->user()->tumsa_bursary == NULL)
                    <h6>80%</h6>
                    @else
                    <h6>100%</h6>
                    @endif

                    @if(auth()->user()->parent_status == NULL)
                    <span class="text-danger small pt-1 fw-bold">OF APPLICATION COMPLETE</span>
                    @elseif(auth()->user()->other_info == NULL)
                    <span class="text-danger small pt-1 fw-bold">OF APPLICATION COMPLETE</span>
                    @elseif(auth()->user()->tumsa_bursary == NULL)
                    <span class="text-danger small pt-1 fw-bold">OF APPLICATION COMPLETE</span>
                    @else
                    <span class="text-success small pt-1 fw-bold">SUCCESSFULLY APPLIED</span>
                    @endif
                      
                      

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Activities <span>|@if(auth()->user()->tumsa_bursary !== NULL) {{auth()->user()->tumsa_bursary->created_at->diffForHumans();}} @endif</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(auth()->user()->tumsa_bursary !== NULL)
                      <tr>
                        <th scope="row">1</th>
                        <td>Bursary</td>
                        <td><a href="#" class="text-primary">Application</a></td>
                        <td>{{auth()->user()->tumsa_bursary->ammount_requested}}/=</td>
                        <td><span class="badge bg-success">Under Review</span></td>
                      </tr>
                    @endif
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            

            <div class="card-body">
              <h5 class="card-title">Bursary Application <span>| Procedure</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">Step 1</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Make sure your <a href="#" class="fw-bold text-dark">profile </a> is 100% complete (National ID/Passport/Birth Certificate and profile photo are mandatory)
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Step 2</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Make sure your <a href="#" class="fw-bold text-dark">Course </a> is 100% filled
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Step 3</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Provide your family information
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Step 4</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Provide us more information loan that will help us determine if you qualify for the bursary.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Step 5</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    How much are you applying for? What is yor fee balance? Upload your stamped fee statement as evidence
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Final Step</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Submit your information and wait to hear from us
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@include('layouts.portal.footer')
@endsection


