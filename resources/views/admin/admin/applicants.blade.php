@extends('layouts.portal.app')
@section('content')
</head>

<body>

@include('layouts.portal.admin.navbar')

@include('layouts.portal.admin.sidebar')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

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
                  <h5 class="card-title">Total Registered Students {{$users->count()}} <span></span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Admission No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Ammount(Ksh)</th>
                        <th scope="col">Balance(Ksh)</th>
                        <<th scope="col">Statement</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tumsa_bursary as $bursary)
                      <tr>
                        <th scope="row"><a href="{{ route('admin.student',[$bursary->user->id]) }}">{{$bursary->user->admission_number}}</a></th>
                        <td>{{$bursary->user->other_names}} {{$bursary->user->sir_name}}</td>
                        <td><a href="{{ route('admin.student',[$bursary->user->id]) }}" class="text-primary">{{$bursary->user->phone_number}}</a></td>
                        <td>{{$bursary->ammount_requested}}</td>
                        @if($bursary->fee_balance > 1000)
                        <td class="fw-bold text-danger">
                            {{$bursary->fee_balance}}
                        </td>
                        @else
                        <td class="fw-bold text-success">
                            {{$bursary->fee_balance}}
                        </td>
                        @endif
                        <td> <a href="{{asset('portal/images/bursary/satements/'.$bursary->fee_statement)}}" class="text-primary" target="_blank">View</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@end('section')