@extends('layouts.principal')
@section('content')
   <div id="app">
  <!-- header navigation -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#!" class="left brand-logo"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person-min.png" alt="">
                        </div>
                        <h3>Academia Albert Einstein</h3>
                        <h5>Donde el trabajo y la perseverancia es más fuerte que el acero</h5>
                      </div>
                    </li><!-- mini profile end-->
                    <li><a href="www.academiaalberteinstein.com" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>Inicio</a>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header> <!-- header navigation end -->

    <!-- Banner start -->
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h2 class="title">BLOG</h2>
              <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.</p>
            </div>
          </div>
        </div>
      </div>
    </section> <!--./Banner end-->

    <!-- Blog Post Container-->
    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div id="blog-posts" class="clearfix all-blog-post blog-inner without-sidebar">
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="images/blog1.jpg" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Resultado del Exámen</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article> <!--./single blog post-->

            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="player" id="audio1" data-file-sec="audios/audio.mp3" data-height="40"></div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Las Fobias</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="images/blog2.jpg" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="thumb-slides-container">
                        <img class="activator" src="images/blog3.jpg" alt="">
                        <img class="activator" src="images/blog2.jpg" alt="">
                        <img class="activator" src="images/blog1.jpg" alt="">
                      </div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="single.html"><img class="activator" src="images/blog3.jpg" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <div class="thumb-slides-container">
                        <img class="activator" src="images/blog2.jpg" alt="">
                        <img class="activator" src="images/blog1.jpg" alt="">
                        <img class="activator" src="images/blog3.jpg" alt="">
                      </div>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb videoPost">
                      <iframe src="https://www.youtube.com/embed/hQfNtnKm5nA" allowfullscreen></iframe>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
            
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb videoPost">
                      <iframe src="https://www.youtube.com/embed/hQfNtnKm5nA" allowfullscreen></iframe>
                    </div>
                    <div class="post-body">
                      <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">La Cultura Chavín</h2></a>
                      <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">26</span></a>
                  <a href="single.html" class="brand-text right waves-effect">Leer más</a>
                </div>
              </div>
            </article><!--./single blog post-->
            
          </div>
        </div>
      </div><!--./container end-->
    </section> <!-- ./Blog Post Container end-->

    <!-- Footer start -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 center-align">
                <div class="clearfix footer-inner">
                  <ul class="social-icons ">
                    <li><a href="https://www.facebook.com/academiaalbert/" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://twitter.com/academiaalbert" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/academiaalbert/" class="tooltips tooltipped instagram" data-position="top" data-delay="50" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.pinterest.com/aeacademia/" class="tooltips tooltipped pinterest" data-position="top" data-delay="50" data-tooltip="Pinterest"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer> <!-- Footer end-->
  </div>



@stop