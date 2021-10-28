@extends('layouts.portal.app')
@section('content')

</head>

<body>

@include('layouts.portal.students.navbar')

@include('layouts.portal.students.sidebar')

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
              <img src="{{asset('portal/images/profiles/'.auth()->user()->profile_photo)}}" alt="Profile" class="rounded-circle">
              <h2>{{auth()->user()->sir_name}}. {{auth()->user()->other_names}}</h2>
              <h3>{{auth()->user()->admission_number}}</h3>
            </div>
            <div class="card-footer text-muted">
                For technical support contact 0791747252
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Course</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
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
                    <div class="col-lg-9 col-md-8">{{auth()->user()->sir_name}} {{auth()->user()->other_names}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Admission number</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->admission_number}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->phone_number}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Born</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->dob->diffForHumans()}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->gender}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Residence</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->residence}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Home place</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->home_address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Identity Document</div>
                    <div class="col-lg-9 col-md-8">@if(auth()->user()->national_id !== NULL)<a href="{{asset('portal/images/national_ids/'.auth()->user()->national_id)}}">DOWNLOAD HERE</a>@endif</div>
                  </div>
                    

                </div>
                @if(auth()->user()->national_id == NULL)
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <p class="small fst-italic text-danger">Images should be less than 2mb and should be of type png or jpeg.</p>
                  <!-- Profile Edit Form -->

                  <form action="{{ route('student.settings.profile') }}" method="post" enctype="multipart/form-data" >
                  @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image (Must not be larger than 2MB)</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="pt-2">
                        <input type="file" name="profile_photo" accept="image/png, image/jpeg" />
                        </div>
                      </div>
                      @error('profile_photo')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">School ID/National ID/Birth Certificate(COMPULSORY!)</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="pt-2">
                        <input type="file" name="national_id"  />
                        </div>
                      </div>
                        @error('school_id')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                    </div>

                  

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Residence</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="residence" type="text" class="form-control" id="fullName" >
                      </div>
                      @error('residence')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Home place</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="home_address" type="text" class="form-control" id="company" >
                      </div>
                      @error('home_address')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                @endif

                <div class="tab-pane fade pt-3" id="profile-settings">
                @if(auth()->user()->national_id !== NULL)
                  @if(auth()->user()->course == NULL)
                  <p class="small fst-italic">Kindly take your time and give us the correct information</p>
                  <!-- Settings Form -->
                  <form action="{{ route('student.settings.course') }}" method="post" enctype="multipart/form-data" >
                  @csrf
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Faculty</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="faculty" type="text" class="form-control" id="fullName" required>
                      </div>
                      @error('faculty')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Department</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="department" type="text" class="form-control" id="company" required>
                      </div>
                      @error('department')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Course</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="course" type="text" class="form-control" id="fullName" required>
                      </div>
                      @error('course')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>


                 
                      <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Year of study</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select"  name="year" aria-label="Default select example" required>
                            <option value="">Select year of study</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="5">Six</option>
                          </select>
                        </div>
                      @error('year')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Semister</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select"  name="semister" aria-label="Default select example" required>
                            <option value="">Semister</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                          </select>
                        </div>
                      @error('semister')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form><!-- End settings Form -->
                @else
                <h5 class="card-title">Course Information</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Faculty</div>
                  <div class="col-lg-9 col-md-8">{{auth()->user()->course->faculty}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Department</div>
                  <div class="col-lg-9 col-md-8">{{auth()->user()->course->department}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Course</div>
                  <div class="col-lg-9 col-md-8">{{auth()->user()->course->course}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Academic year</div>
                  <div class="col-lg-9 col-md-8">{{auth()->user()->course->year}}.{{auth()->user()->course->semister}}</div>
                </div>
                @endif

                @else
                 Kindly update your Profile Information in the profile tab  before coming to this step
                 
                @endif
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="{{ route('student.settings.password') }}" method="post" role="form" class="form">
                    @csrf
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="current_password" type="password" class="form-control" id="currentPassword">
                      </div>
                      @error('current_password')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="newPassword">
                      </div>
                      @error('password')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

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