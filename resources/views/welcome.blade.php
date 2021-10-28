@extends('layouts.layout')

@section('content')
  <title>TUMSA | TECHNICAL UNIVERSITY OF MOMBASA STUDENTS ASSOCIATION</title>
</head>

<body>

  @include('layouts.nav')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/slide/slide-1.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">TUMSA BURSARY</h2>
               <p class="animate__animated animate__fadeInUp">TUMSA is an umbrella that is composed of all bonafide students of TUM</p>
              <a href="{{ route('student.register.step-1') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Apply Now!!!</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Best Students Union In Africa</h2>
                <p class="animate__animated animate__fadeInUp">Our aim is to protect individual and collective rights of the Technical University of
                Mombasa students by use of all lawful, proper and prudent means to
                ensure that students’ aspirations and interests are protected, promoted,
                 enhanced and realized.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(/img/slide/slide-3.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Our Work is to Serve Comrades</h2>
              <p class="animate__animated animate__fadeInUp">We are focused to promote the enjoyment of freedoms, rights, and privileges through
              seeking to enhance and maintain the freedom of conscience, expression,
              association, academic liberty and all the rights and privileges accruing
              to students owing to their humanity, age, status, sex, citizenship, and
              any other relevant criteria. </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>TECHNICAL UNIVERSITY OF MOMBASA STUDENTS ASSOCIATION</h2>
            <h3>The Technical University of Mombasa Students Association is oblidged to serve the pursuit of academic and social welfare, peace, prosperity,
            integrity, and dignity of the students of Technical University of Mombasa. </h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              The TUMSA Council is composed of:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> The President</li>
              <li><i class="ri-check-double-line"></i> The Deputy President</li>
              <li><i class="ri-check-double-line"></i> The Secretary General</li>
              <li><i class="ri-check-double-line"></i> The Finance Secretary</li>
              <li><i class="ri-check-double-line"></i> The Academics Secretary</li>
              <li><i class="ri-check-double-line"></i> The Sports and Entertainment Secretary</li>
              <li><i class="ri-check-double-line"></i> The Health, Water and Acomodation Secretary</li>
              <li><i class="ri-check-double-line"></i> The Gender and Special Needs Secretary</li>
              <li><i class="ri-check-double-line"></i> The Governor - Kwale Campus & Lamu Campus</li>
              <li><i class="ri-check-double-line"></i> The Deputy Governor - Kwale Campus & Lamu Campus</li>
              <li><i class="ri-check-double-line"></i> The Sports Secretary - Kwale Campus & Lamu Campus</li>

            </ul>
            <p class="font-italic">
              Kindly Visit <a href="/executives">TUMSA council</a> to learn more about 2020/2021 TUMSA Council
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
   
      
   

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Achievements</h2>
          <p>Recent Works</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Some Of Our Achievements</li>
            </ul>
          </div>
        </div>
        
        
        
        <div class="row portfolio-container">
         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/freshersday.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TUMSA FRESHERS DAY</h4>
                <p>Guest: Khaligraph Jones</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/freshersday.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/website.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TUMSA WEBSITE</h4>
                <p>TUMSA Website development</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/website.JPG" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/smart_tv.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SMART TV LAUNCH</h4>
                <p>Office of sports & entertainment</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/smart_tv.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/stc.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>STUDENTS CENTER RENOVATION</h4>
                <p>Office of the President</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/stc.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/office.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TUMSA OFFICES RENOVATION</h4>
                <p>TUMSA OFFICES RENOVATION</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/office.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/sports.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>INTER-DEPARTMENT TOURNAMENT</h4>
                <p>Sports & Entertainment office</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/sports.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/pads.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PADS DISTRIBUTION</h4>
                <p>Deputy Presidents Office</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/pads.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
            
        <!--extra achievements go here
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
           more achievements -->
            
            
        </div>
       
        
        
       <!-- <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/website.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>TUMSA WEBSITE</h4>
                <p>TUMSA Website Development</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/website.JPG" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/smart_tv.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Smart TV</h4>
                <p>Sports & Entertainment</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/smart_tv.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/img/portfolio/stc.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Students Center Renovation</h4>
                <p>Office of the President</p>
                <div class="portfolio-links">
                  <a href="/img/portfolio/stc.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection  