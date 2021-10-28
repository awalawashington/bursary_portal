@extends('layouts.portal.app')
@section('content')

</head>

<body>

@include('layouts.portal.students.navbar')

@include('layouts.portal.students.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Bursary</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Bursary</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Background</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">More Information</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Apply TUMSA Bursary</button>
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
                @if(auth()->user()->course !== NULL)
                    @if(auth()->user()->parent_status == NULL)
                    <p class="small fst-italic text-danger">Images should be less than 2mb and should be of type png or jpeg</p>
                    <form action="{{ route('student.bursary.family') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="row">
                            <fieldset class="row mb-3 col-lg-6">
                                <legend class="col-form-label col-sm-2 pt-0">Mother</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mother" id="gridRadios1" value="1" onclick="ml()" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Alive
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mother" id="gridRadios2" value="0" onclick="md()">
                                    <label class="form-check-label" for="gridRadios2">
                                        Departed
                                    </label>
                                    </div>
                                </div>
                                    @error('mother')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                            </fieldset>
                            <div class=" col-lg-6">
                                <div id="ml">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input name="mother_occupation" type="text" class="form-control" id="mother_occupation" placeholder="Mothers Occupation" required/>
                                        </div>
                                        @error('mother_occupation')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input name="mother_income" type="text" class="form-control" id="mother_income" placeholder="Mothers Income" required/>
                                        </div>
                                        @error('mother_income')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div id="md" style="display:none">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Proof i.e death certificate</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="pt-2">
                                            <input type="file" name="mother_dc" id="mother_dc" accept="">
                                            </div>
                                        </div>
                                        @error('mother_dc')
                                            <div class="my-3">
                                                <div class="error-message">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                        </div>


                        <div class="row">
                            <fieldset class="row mb-3 col-lg-6">
                                <legend class="col-form-label col-sm-2 pt-0">Father</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="father" id="gridRadios1" value="1" onclick="fl()" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Alive
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="father" id="gridRadios2" value="0" onclick="fd()">
                                    <label class="form-check-label" for="gridRadios2">
                                        Departed
                                    </label>
                                    </div>
                                </div>
                                @error('father')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                            </fieldset>
                            <div class=" col-lg-6">
                                <div id="fl">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input name="father_occupation" type="text" class="form-control" id="father_occupation" placeholder="Fathers Occupation" required/>
                                        </div>
                                        @error('father_occupation')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input name="father_income" type="text" class="form-control" id="father_income" placeholder="Fathers Income" required/>
                                        </div>
                                        @error('father_income')
                                            <div class="my-3">
                                                <div class="text-danger">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div id="fd" style="display:none">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Proof i.e death certificate</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="pt-2">
                                            <input type="file" name="father_dc" accept="" id="father_dc" >
                                            </div>
                                        </div>
                                        @error('father_dc')
                                            <div class="my-3">
                                                <div class="error-message">{{ $message }}</div>
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                        </div>


                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form><!-- End -->
                    @else
                        @if(auth()->user()->parent_status->mother == TRUE)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Mothers Occupation</div>
                                <div class="col-lg-9 col-md-8">{{auth()->user()->family_status->mother_occupation}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Mothers Monthly Income</div>
                                <div class="col-lg-9 col-md-8">{{auth()->user()->family_status->mother_income}}</div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Mothers Departure Evidence</div>
                                <div class="col-lg-9 col-md-8">
                                    @if(auth()->user()->parent_status->mother_dc == NULL)
                                        <span class="text-danger">Not Submitted</span>
                                    @else
                                    <span class="text-success">Submitted</span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if(auth()->user()->parent_status->father == TRUE)
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Fathers Occupation</div>
                                <div class="col-lg-9 col-md-8">{{auth()->user()->family_status->father_occupation}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Mothers Monthly Income</div>
                                <div class="col-lg-9 col-md-8">{{auth()->user()->family_status->father_income}}</div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Fathers Departure Evidence</div>
                                <div class="col-lg-9 col-md-8">
                                    @if(auth()->user()->parent_status->father_dc == NULL)
                                        <span class="text-danger">Not Submitted</span>
                                    @else
                                    <span class="text-success">Submitted</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                        

                    @endif
                @else
                    Kindly provide your course information <a href="{{route('student.settings')}}">Here!</a> before this step is open for you
                @endif
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
            @if(auth()->user()->parent_status !== NULL)
                @if(auth()->user()->other_info == NULL || auth()->user()->bursary == NULL)
                  <p class="small fst-italic">Kindly take your time and give us the correct information</p>
                  <!-- Profile Edit Form -->

                  <form action="{{ route('student.bursary.other_info') }}" method="post" enctype="multipart/form-data" >
                  @csrf
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">HELB</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="helb" type="text" class="form-control" id="fullName" >
                      </div>
                      @error('helb')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">CDF</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cdf" type="text" class="form-control" id="company" >
                      </div>
                      @error('cdf')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Any Other Bursary</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="other_sponsors" type="text" class="form-control" id="company" >
                      </div>
                      @error('other_sponsors')
                          <div class="my-3">
                              <div class="text-danger">{{ $message }}</div>
                          </div>
                      @enderror
                    </div>

                    <fieldset class="row mb-3 col-lg-6">
                        <legend class="col-form-label col-sm-10 pt-0">Have you ever differed for financial reasons?</legend>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="differment" id="gridRadios1" value="0"  checked>
                            <label class="form-check-label" for="gridRadios1">
                                No
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="differment" id="gridRadios2" value="1" >
                            <label class="form-check-label" for="gridRadios2">
                                Yes
                            </label>
                            </div>
                        </div>
                        @error('differment')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                    </fieldset>

                    <fieldset class="row mb-3 col-lg-6">
                        <legend class="col-form-label col-sm-10 pt-0">Are you a beneficiary of bursary or sponsorship before?</legend>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="sponsored_before" id="gridRadios1" value="0"  checked>
                            <label class="form-check-label" for="gridRadios1">
                                No
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="sponsored_before" id="gridRadios2" value="1" >
                            <label class="form-check-label" for="gridRadios2">
                                Yes
                            </label>
                            </div>
                        </div>
                        @error('sponsored_before')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                    </fieldset>

                    <fieldset class="row mb-3 col-lg-6">
                        <legend class="col-form-label col-sm-10 pt-0">Are you a beneficiary of school program</legend>
                        <div class="col-sm-2">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="school_program" id="gridRadios1" value="0"  checked>
                            <label class="form-check-label" for="gridRadios1">
                                No
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="school_program" id="gridRadios2" value="1" >
                            <label class="form-check-label" for="gridRadios2">
                                Yes
                            </label>
                            </div>
                        </div>
                        @error('school_program')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                    </fieldset>




                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                @else

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">HELB</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->bursary->helb}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">CDF</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->bursary->cdf}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">OTHER BURSARY</div>
                    <div class="col-lg-9 col-md-8">{{auth()->user()->bursary->other_sponsors}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">EVER DIFFERED BECAUSE OF FEES?</div>
                    <div class="col-lg-9 col-md-8">
                        @if(auth()->user()->other_info->differment == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ARE YOU A BENEFICIARY OF SCHOOL PROGRAM?</div>
                    <div class="col-lg-9 col-md-8">
                        @if(auth()->user()->other_info->school_program == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ARE YOU A BENERICIARY OF BURSARY OR SPONSORSHIP BEFORE?</div>
                    <div class="col-lg-9 col-md-8">
                        @if(auth()->user()->other_info->sponsored_before == TRUE)
                            YES
                        @else
                            NO
                        @endif

                    </div>
                </div>

                @endif

                @else

                This step is closed unless you provide background information in the previous tab

                @endif
                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">
                    @if(auth()->user()->other_info == NULL || auth()->user()->bursary == NULL)
                     This step is closed unless you provide information about you in the previous
                    @else
                    @if(auth()->user()->tumsa_bursary == NULL)
                    
             
                    
                    <p class="small fst-italic">Kindly take your time and give us the correct information</p>
                    <!-- Settings Form -->
                    <form action="{{ route('student.bursary.tumsa') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Ammount Requested</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="ammount_requested" type="text" class="form-control" id="fullName" >
                        </div>
                        @error('ammount_requested')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                        </div>

                        <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Fee Balance</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="fee_balance" type="text" class="form-control" id="fullName" >
                        </div>
                        @error('fee_balance')
                            <div class="my-3">
                                <div class="text-danger">{{ $message }}</div>
                            </div>
                        @enderror
                        </div>
                        
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Stamped fees statement</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="pt-2">
                            <input type="file" name="fee_statement" accept="" />
                            </div>
                        </div>
                        @error('fee_statement')
                            <div class="my-3">
                                <div class="error-message">{{ $message }}</div>
                            </div>
                        @enderror
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                        </form>
                     
                        
                        
                        
                    @else
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">AMMOUNT REQUESTED</div>
                            <div class="col-lg-9 col-md-8">{{auth()->user()->tumsa_bursary->ammount_requested}}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">FEE BALANCE</div>
                            <div class="col-lg-9 col-md-8">{{auth()->user()->tumsa_bursary->fee_balance}}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">FEE STAEMENT</div>
                            <div class="col-lg-9 col-md-8">
                                <a href="{{asset('/bursary/satements/'.auth()->user()->tumsa_bursary->fee_statement)}}">DOWNLOAD HERE</a>
                            </div>
                        </div>

                    @endif
                @endif
                </div>
               
                </div>

            

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <script>
        function md() {
            var x = document.getElementById("ml");
            var y = document.getElementById("md");
            
            y.style.display = "block";
            x.style.display = "none";
            document.getElementById("mother_income").required = false;
            document.getElementById("mother_occupation").required = false;
    
        }

        function ml() {
            var x = document.getElementById("ml");
            var y = document.getElementById("md");
            x.style.display = "block";
            y.style.display = "none";
            document.getElementById("mother_dc").required = false;
            
            
    
        }
        function fd() {
            var x = document.getElementById("fl");
            var y = document.getElementById("fd");  
            y.style.display = "block";
            x.style.display = "none";
            document.getElementById("father_income").required = false;
            document.getElementById("father_occupation").required = false;
            
    
        }

        function fl() {
            var x = document.getElementById("fl");
            var y = document.getElementById("fd");
            x.style.display = "block";
            y.style.display = "none";
            document.getElementById("father_dc").required = false;
    
        }
    </script>
  </main><!-- End #main -->
  @include('layouts.portal.footer')
@endsection
