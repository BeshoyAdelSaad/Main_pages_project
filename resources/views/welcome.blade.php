

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap-theme.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet">



    <title>Education Meeting HTML5 Template</title>
</head>
<body>
      <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              <nav>
                <div id="menu-toggle">
                  <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                  <div class="cross">
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <ul class="main-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <div class="hero-text">
                <h1><span>Hi, I am</span><br>Maria Ferrero.</h1>
                <h3>Freelance designer from Melbourne</h3>
                <a href="#" class="btn btn-lg btn-primary">Know More</a>
                <ul class="social-links">
                  <li class="label">Join me here</li>
                  <li><a href="#"><img src="{{asset('assets/behance.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('assets/dribbble.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('assets/twitter.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('assets/github.png')}}"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="case-study">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Exclusively</h4>
              <h1 class="heading purple"><span class="purple">works</span> with <br>Startups and founders</h1>
              <!-- Swiper -->
              <div class="swiper-container client-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide client-box">
                    <img src="{{asset('assets/logo-1.png')}}" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="{{asset('assets/logo-2.png')}}" class="client-logo">
                    <h3 class="text-left title">User Experience design for the AI</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="{{asset('assets/logo-3.png')}}" class="client-logo">
                    <h3 class="text-left title">Rebranding of the best motion studio</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="{{asset('assets/logo-1.png')}}" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="{{asset('assets/logo-2.png')}}" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, UI, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                </div>
                
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Happy</h4>
              <h1 class="heading pink"><span class="pink">Client's</span> hello <br>testimonials</h1>
            </div>
          </div>  
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Swiper -->
              <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Built with Bootstrap</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Responsive template</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
 <!-- Some Javascript -->
      <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
      <script src="{{asset('assets/js/swiper.jquery.min.js')}}"></script>
      <!-- Initialize Client Swiper -->
      <script>
      var swiper1 = new Swiper('.client-swiper', {
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 60,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: '.swiper-pagination'
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });
      // Initialize Testimonial Swiper
      var swiper2 = new Swiper('.testimonial-swiper', {
        slidesPerView: 3,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      });
      </script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
      <script>
      // Counterup
      $('.counter').counterUp({
        time: 1000
      });

      // Main Navigation
      $('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      })
      </script>

      <!-- Google Analytics - You should remove this -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');

      </script>

</body>
</html>