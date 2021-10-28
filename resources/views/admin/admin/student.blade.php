@extends('layouts.portal.app')
@section('content')
</head>

<body>

@include('layouts.portal.admin.navbar')

@include('layouts.portal.admin.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="{{asset('portal/images/profiles/'.$user->profile_photo)}}" alt="Profile" class="rounded-circle">
              <h2>{{$user->sir_name}}. {{$user->other_names}}</h2>
              <h3>{{$user->admission_number}}</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>


                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Course Information</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Bursary Application</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
              @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                    {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-octagon me-1"></i>
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endforeach
              @endif
                

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$user->sir_name}} {{$user->other_names}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Admission number</div>
                    <div class="col-lg-9 col-md-8">{{$user->admission_number}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{$user->phone_number}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Born</div>
                    <div class="col-lg-9 col-md-8">{{$user->dob->diffForHumans()}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8">{{$user->gender}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Residence</div>
                    <div class="col-lg-9 col-md-8">{{$user->residence}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Home place</div>
                    <div class="col-lg-9 col-md-8">{{$user->home_address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Identity Document</div>
                    <div class="col-lg-9 col-md-8">@if($user->national_id !== NULL)<a href="{{asset('portal/images/national_ids/'.$user->national_id)}}" target="_blank">VIEW HERE</a>@endif</div>
                  </div>
                    

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">
                @if($user->course == NULL)
                  <p class="text-danger">{{$user->sir_name}} has not submited course details yet!</p>
                @else
                <h5 class="card-title">Course Information</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Faculty</div>
                  <div class="col-lg-9 col-md-8">{{$user->course->faculty}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Department</div>
                  <div class="col-lg-9 col-md-8">{{$user->course->department}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Course</div>
                  <div class="col-lg-9 col-md-8">{{$user->course->course}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Academic year</div>
                  <div class="col-lg-9 col-md-8">{{$user->course->year}}.{{$user->course->semister}}</div>
                </div>
                @endif

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                @if($user->tumsa_bursary == NULL)
                    <p class="text-danger">{{$user->sir_name}} has not submited applied for bursary yet!</p>
                @else

                
                @if($user->parent_status->mother == TRUE)
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Mothers Occupation</div>
                                <div class="col-lg-9 col-md-8 fw-bold">{{$user->family_status->mother_occupation}}</div>
                            </div>
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Mothers Monthly Income</div>
                                <div class="col-lg-9 col-md-8 fw-bold">{{$user->family_status->mother_income}}</div>
                            </div>
                        @else
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Mothers Departure Evidence</div>
                                <div class="col-lg-9 col-md-8 fw-bold">
                                    @if($user->parent_status->mother_dc == NULL)
                                        <span class="text-danger">Not Submitted</span>
                                    @else
                                    <span class="text-success">Submitted</span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($user->parent_status->father == TRUE)
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Fathers Occupation</div>
                                <div class="col-lg-9 col-md-8 fw-bold">{{$user->family_status->father_occupation}}</div>
                            </div>
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Mothers Monthly Income</div>
                                <div class="col-lg-9 col-md-8 fw-bold">{{$user->family_status->father_income}}</div>
                            </div>
                        @else
                            <div class="row border">
                                <div class="col-lg-3 col-md-4 label ">Fathers Departure Evidence</div>
                                <div class="col-lg-9 col-md-8 fw-bold">
                                    @if($user->parent_status->father_dc == NULL)
                                        <span class="text-danger">Not Submitted</span>
                                    @else
                                    <span class="text-success">Submitted</span>
                                    @endif
                                </div>
                            </div>
                        @endif




                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">HELB</div>
                    <div class="col-lg-9 col-md-8 fw-bold">{{$user->bursary->helb}}</div>
                </div>

                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">CDF</div>
                    <div class="col-lg-9 col-md-8 fw-bold">{{$user->bursary->cdf}}</div>
                </div>

                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">OTHER BURSARY</div>
                    <div class="col-lg-9 col-md-8 fw-bold">{{$user->bursary->other_sponsors}}</div>
                </div>

                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">EVER DIFFERED BECAUSE OF FEES?</div>
                    <div class="col-lg-9 col-md-8 fw-bold">
                        @if($user->other_info->differment == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>

                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">ARE YOU A BENEFICIARY OF SCHOOL PROGRAM?</div>
                    <div class="col-lg-9 col-md-8 fw-bold">
                        @if($user->other_info->school_program == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>

                <div class="row border">
                    <div class="col-lg-3 col-md-4 label ">ARE YOU A BENERICIARY OF BURSARY OR SPONSORSHIP BEFORE?</div>
                    <div class="col-lg-9 col-md-8 fw-bold">
                        @if($user->other_info->sponsored_before == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>


                    <div class="row border">
                        <div class="col-lg-3 col-md-4 label ">AMMOUNT REQUESTED</div>
                        <div class="col-lg-9 col-md-8 fw-bold">{{$user->tumsa_bursary->ammount_requested}}</div>
                    </div>
                    <div class="row border">
                        <div class="col-lg-3 col-md-4 label ">FEE BALANCE</div>
                        <div class="col-lg-9 col-md-8 fw-bold">{{$user->tumsa_bursary->fee_balance}}</div>
                    </div>
                    <div class="row border">
                        <div class="col-lg-3 col-md-4 label ">FEE STATEMENT</div>
                        <div class="col-lg-9 col-md-8">
                            <a href="{{asset('portal/images/bursary/satements/'.$user->tumsa_bursary->fee_statement)}}" target="_blank">VIEW HERE</a>
                        </div>
                    </div>
                @endif
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @include('layouts.portal.footer')
@endsection