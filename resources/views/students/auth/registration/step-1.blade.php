@extends('layouts.portal.app')
@section('content')

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('portal/assets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">TUMSA</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register to Apply for Bursary</h5>
                    <p class="text-center small">Enter your email</p>
                  </div>
                  @if (session('fail'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ session('fail') }}!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <form action="{{ route('student.register.step-1') }}" method="post" class="row g-3 needs-validation" novalidate>
                  @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your email</div>
                      </div>
                      @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Next</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already got accout?  <a href="{{ route('student.login') }}">Login</a></p>
                    </div>
                    <p class="fst-italic">For Technical Support Contact:  <a class="fst-italic" href="tel:+254791747252">0791747252</a></p>
                  </form>

                </div>
              </div>

              <div class="credits">
                Developed by <a href="https://www.facebook.com/awalatechincorporation">AwalaTech Incorporation</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
@endsection



