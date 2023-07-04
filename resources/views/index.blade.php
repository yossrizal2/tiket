<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  
  <meta name="title" content="Yossrizal Ramadhan Page">
  <meta name="description" content="Portofolio Yossrizal Ramadhan | Freelance | Programmer | Web Developer | Full Stack Developer | Software Developer | System Analyst">
  <meta name="keywords" content="yossrizal, yossrizal blog, blog yossrizal, freelance">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yossrizal.my.id/" />
  <meta property="og:title" content="Yossrizal's Page" />
  <meta property="og:description" content="Portofolio Yossrizal Ramadhan | Freelance | Programmer | Web Developer | Full Stack Developer | Software Developer | System Analyst" />
  <meta property="og:image" content="{{ url('uploads/images').'/'.$data->profile_image }}" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yossrizal.my.id/" />
  <meta property="twitter:title" content="Yossrizal's Page" />
  <meta property="twitter:description" content="Portofolio Yossrizal Ramadhan | Freelance | Programmer | Web Developer | Full Stack Developer | Software Developer | System Analyst" />
  <meta property="twitter:image" content="{{ url('uploads/images').'/'.$data->profile_image }}" />


  
  <!-- Favicons -->
  <link href="{{ asset('iPortfolio') }}/assets/img/favicon.ico" rel="icon">
  <link href="{{ asset('iPortfolio') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('iPortfolio') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('iPortfolio') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('iPortfolio') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('iPortfolio') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('iPortfolio') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('iPortfolio') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('iPortfolio') }}/assets/css/style.css" rel="stylesheet">
  <style>
    #hero {
        background: url('https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/118496192_886197675242717_2176362443354776532_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHCTJcKY1hkTOQkGyDPEudRMv74XwrVXaUy_vhfCtVdpSzNi2TcnThATUhpgBu0ExVlegFxHgjyDMLqdA-V6EkP&_nc_ohc=vswlaie9YtAAX9EdWCX&_nc_ht=scontent.fbdo9-1.fna&oh=00_AfAPfEfTyF0K1TXW_D2YiWv9NNr-8H79O_j1Zu4qUdFq8w&oe=64C128DA') bottom center;
    }
  </style>

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ url('uploads/images').'/'.$data->profile_image }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $data->title }}</a></h1>
        <div class="social-links mt-3 text-center">
            @foreach($social_media AS $soc)
            <a href="{{ $soc->url_address }}" class="{{ $soc->title }}" target="_blank"><i class="bx bxl-{{ $soc->title }}"></i></a>
            @endforeach
          {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#pricelist" class="nav-link scrollto"><i class="bx bx-money"></i> <span>Pricelist</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="#"></a></li>
          <li><a href="document/letter-maker" target="_blank" class="nav-link scrollto"><i class="bx bx-file"></i> <span>Letter Maker</span></a></li>
          <li><a href="login" class="nav-link scrollto"><i class="bx bx-key"></i> <span>Login</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $data->title }}</h1>
      <p>I'm <span class="typed" data-typed-items="Software Developer, System Analyst, Designer"></span></p>
      <p style="text-decoration: none; color: white; margin: 0.2em; font-size: 1em;">
        <a href="#about" class="scrollto" ><span>About</span></a> | 
        <a href="#portfolio" class="scrollto" ><span>Portfolio</span></a> | 
        <a href="#pricelist" class="scrollto" ><span>Pricelist</span></a>
      </p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p style="text-align: justify;">
            {!! nl2br($data->description) !!}
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ url('uploads/images').'/'.$data->profile_image }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Full Stack Developer.</h3>
            <p class="fst-italic">
                Create and develop applications from the data design stage to coding. Perform installation on hosting servers and domains. Perform maintenance along with application scheduling, as well as connecting various required libraries and APIs such as marketplace and payment APIs..
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>17 January</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>yossrizal.my.id</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 83 XXX XXX XXX</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bandung. West Java, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ (intval(date('Y'))-1998) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Computer Science</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>yossrizalr@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>{{ $data->status }}</span></li>
                </ul>
              </div>
            </div>
            <p>
                Born in Temanggung, Central Java. Then he studied and worked in Bandung, West Java. Has worked freelance, such as computer repair services, design services and so on since school.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    {{-- <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section --> --}}

    <!-- ======= Skills Section ======= -->
    {{-- <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section --> --}}

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p style="text-align: justify;">
            Having knowledge in the field of application development, from application design analysis to the process of making and maintaining applications. Experienced as a full stack developer / programmer and application server design, familiar with server set-ups using Linux. Was on the design team at the organization students, familiar with image and video design applications. Also accepts computer and laptop repairs as well as freelance application website creation. Prefer to work remotely and hybrid. Currently working in full remote, WFO only during meetings or special events.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4>{{ $data->title }}</h4>
              <p><em>Innovative and time driven developer with more than 3 years of experience designing and developing various applications according to customer requirements.</em></p>
              <ul>
                <li>Bandung, West Java</li>
                <li>(62) 83 829 XXX XXX</li>
                <li>yossrizalr@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Information Systems</h4>
              <h5>2015 - 2019</h5>
              <p><em>Universitas Komputer Indonesia</em></p>
              {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> --}}
            </div>
            <div class="resume-item">
              <h4>Computer and Network Engineering</h4>
              <h5>2012 - 2015</h5>
              <p><em>Kabupaten Bandung 2 Vocational School</em></p>
              {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> --}}
            </div>

            <h3 class="resume-title">Certificate</h3>
            @foreach($certificate AS $cert)
            <div class="resume-item">
              <h4>{{ $cert->title }}</h4>
              <h5>{{ date_format(date_create($cert->due_date),"F Y")}}</h5>
              <p><em>{!! nl2br($cert->description) !!}</em></p>
            </div>
            @endforeach
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach($experience AS $exp)
            <div class="resume-item">
                <h4>{{ $exp->work_place }}</h4>
                <h5>{{ date_format(date_create($exp->start_date),"F Y") }} - {{ ($exp->end_date != null)? date_format(date_create($exp->end_date),"F Y") : 'Present' }}</h5>
                <p><em>{{ $exp->work_status }} as {{ $exp->work_role }}</em></p>
                <p>
                    {{ $exp->work_description }}
                </p>
                {{-- <ul>
                  <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                  <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                  <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                  <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                </ul> --}}
              </div>
            @endforeach
            {{-- <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div> --}}
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>I have various kinds of experience, have basic computer knowledge from computer networks, subnetting, routing and creating website-based information systems, mobile and desktop. I have also practiced design using various design applications such as Adobe Photoshop, Adobe Premiere, Adobe After Effects, GIMP, Davinci Resolve. I can manipulate images and create animated motion graphics..</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-project">Project</li>
              <li data-filter=".filter-others">Others</li>
              <li data-filter=".filter-hobby">Hobby</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

           @foreach($project AS $pro)
           <div class="col-lg-4 col-md-6 portfolio-item filter-project">
            <div class="portfolio-wrap">
              <img src="{{ url('uploads/images').'/'.$pro->image_url }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                {{-- <a href="{{ url('uploads/images').'/'.$pro->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $pro->title }}"><i class="bx bx-show"></i></a> --}}
                <a href="{{ url('uploads/images').'/'.$pro->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<b>{{ $pro->title }}</b><hr><em>Tools: {{ $pro->tools }}</em><br><br>{{ $pro->project_description }}">See Details</a>
              </div>
            </div>
          </div>
          @endforeach

          @foreach($hobby AS $hob)
          @if(strpos(strtolower($hob->title), 'hobi') === false)
           <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="{{ url('uploads/images').'/'.$hob->image_url }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                {{-- <a href="{{ url('uploads/images').'/'.$hob->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $hob->title }}"><i class="bx bx-show"></i></a> --}}
                <a href="{{ url('uploads/images').'/'.$hob->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<b>{{ $hob->title }}</b><hr>{{ $hob->description }}">See Details</a>
              </div>
            </div>
          </div>
          @endif
          @endforeach

          @foreach($hobby AS $hob)
          @if(strpos(strtolower($hob->title), 'hobi') !== false)
           <div class="col-lg-4 col-md-6 portfolio-item filter-hobby">
            <div class="portfolio-wrap">
              <img src="{{ url('uploads/images').'/'.$hob->image_url }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                {{-- <a href="{{ url('uploads/images').'/'.$hob->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $hob->title }}"><i class="bx bx-show"></i></a> --}}
                <a href="{{ url('uploads/images').'/'.$hob->image_url }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<b>{{ $hob->title }}</b><hr>{{ $hob->description }}">See Details</a>
              </div>
            </div>
          </div>
          @endif
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= pricelist Section ======= -->
    <section id="pricelist" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Price List</h2>
          <p style="text-align: justify;">
            The prices we provide are efficient and very cheap prices with periodic maintenance guarantees..
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up">
            <h3 class="resume-title">Prices</h3>
            @foreach($pricelist AS $price)
            <div class="resume-item">
              <h4>{{ $price->title }}</h4>
              <h5> Start from <b>Rp. {{ number_format($price->start_price, 0, ',','.') }}</b></h5>
              <p><em>{!! nl2br($price->description) !!}</em></p>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End pricelist Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>I have some skills that might be useful to you.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-globe-asia-australia"></i></div>
            <h4 class="title"><a href="">Web Application</a></h4>
            <p class="description">I can make a useful web based application for you. From simple applications to business.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-phone"></i></div>
            <h4 class="title"><a href="">Mobile Application</a></h4>
            <p class="description">I can make a useful mobile based application for you. From simple applications to business.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-headset"></i></div>
            <h4 class="title"><a href="">Installation Service</a></h4>
            <p class="description">I can help you install applications on hosting servers and domains.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-images"></i></div>
            <h4 class="title"><a href="">Image Editing</a></h4>
            <p class="description">I have the ability to edit images using Adobe Photoshop, GIMP and others. I am familiar with image manipulation, vector and flat design.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-camera-reels"></i></div>
            <h4 class="title"><a href="">Video Editing</a></h4>
            <p class="description">I have the ability to edit videos using Adobe After Effects, Davinci Resolve and others. I am familiar with motion graphics.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-pc-display"></i></div>
            <h4 class="title"><a href="">PC Building</a></h4>
            <p class="description">I can assemble a PC for you according to your needs.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Our customer experiences are always hilarious and helpful.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-mu-muridesuuuu.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('uploads/images/test-1.png') }}" class="testimonial-img" alt="">
                <h3>Bocchi</h3>
                <h4>Member of Kessoku Band</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Hinna, hinna!. He survives because he walks in the shadow of death, but never lets it consume him. That's why he is Sugimoto the Immortal!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('uploads/images/test-2.png') }}" class="testimonial-img" alt="">
                <h3>Kochoube Asuko</h3>
                <h4>Ainu from Japan</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As you can see, I have peeled away your petty facades and revealed you for what you truly are... fairly attractive twenty-somethings, apparently. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('uploads/images/test-3.png') }}" class="testimonial-img" alt="">
                <h3>Kayaba Akihiko</h3>
                <h4>GM of Sword Art Online</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  If you don't put on an act, you won't be loved. If you don't put on an act, you won't be loved. If you don't put on an act, you won't be loved
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('uploads/images/test-4.png') }}" class="testimonial-img" alt="">
                <h3>Hayasaka Ai</h3>
                <h4>Student</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nothing went right… I didn’t get the time to read. My butt hurts. I guess I’ll just have to call it curry soup. hehehe hehehe hehehe heh ehheheh
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('uploads/images/test-5.png') }}" class="testimonial-img" alt="">
                <h3>Shima Rin</h3>
                <h4>Traveler</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="row">
                {{-- <div class="col-6">
                  <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="yossrizal-ramadhan" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://id.linkedin.com/in/yossrizal-ramadhan?trk=profile-badge">Yossrizal Ramadhan</a></div>
              
                </div> --}}
                <div class="col-6">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Bandung Regency</p>
                  </div>
    
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>yossrizalr@gmail.com</p>
                  </div>
    
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Whatsapp:</h4>
                    <p><a href="https://wa.me/+6283829425899" target="_blank">+62 83 XXX XXX XXX</a></p>
                  </div>
                </div>

              </div>
              

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253410.4309536163!2d107.4260173943101!3d-7.063443452269794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eeb88c17d7b1%3A0x301e8f1fc28b8e0!2sBandung%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1687964446912!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yossrizal</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="#">iPortfolio BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('iPortfolio') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('iPortfolio') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('iPortfolio') }}/assets/js/main.js"></script>
  <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>

</body>

</html>