@extends('layouts.layout')

@section('content')
  <title>{{$notice->title}} | TUMSA</title>
</head>

<body>

  @include('layouts.nav')

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog mt-5">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
              <!--
              <div class="entry-img">
                <img src="/img/blog-1.jpg" alt="" class="img-fluid">
              </div>
              -->

              <h2 class="entry-title">
                <a href="blog-single.html">{{$notice->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$notice->created_at->format('d - M - Y')}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p style="white-space: pre-wrap; margin-top: -1em; white-space: pre-line;">
                  {{$notice->message}}
                </p>

              </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  @endsection