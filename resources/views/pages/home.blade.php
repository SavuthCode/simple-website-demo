<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('style.css')}}" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#e9eaed">
@include('pages.header')
<div class="container" >
  <div class="slid-content">

  </div>

  <div class="content-lission">
    <div class="row">
      <div class="col-md-4 box" style="background-color:white;padding:10px;">
        <div class="row">
          <div class="col-sm-2" style="border-right: solid 1px red;">
            <div class="icon" style="width:50px;height:40px;">
              <i class="fas fa-home fa-3x" style="color:red"></i>
            </div>
          </div>
          <div class="col-sm-10" style="margin-top:10px">
            <div class="list float-left">
            <h5 class="text-danger">Content</h5>
            </div>
            <div class="humberger float-right">
            <i class="fas fa-bars fa-2x" style="color:red"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8 box" style="background-color:white;padding:5px;">
      <div class="col-xs-12 ">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lastest News</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Book</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Mp3</a>
              <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Video</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="content" style="margin-top:-5px">
    <div class="row">
      <div class="col-md-4 box sidebar" style="background-color:white;padding:10px;">

      <!-- ==========================Menu side left=================================== -->
      @include('pages.sidebar-left')
        
      <!-- Content right side -->

      <div class="col-md-8 box" style="background-color:white;padding:5px;">
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <!--============================================= Tab last new===================================-->
              @include("pages.tabs.last-new.index")
          <!--=========================================== End Tab last new ================================-->

          <!-- ========================================= Tab Book ========================================= -->
            @include("pages.tabs.book.index")
          <!-- ========================================= End Tab Book =====================================-->

          <!-- ========================================= Tab MP3 ========================================= -->
            @include("pages.tabs.mp3.index")
          <!-- ========================================= End Tab MP3 =====================================-->

          <!-- ========================================= Tab videos ========================================= -->
            @include("pages.tabs.videos.index")
          <!-- ========================================= End Tab videos =====================================-->
        </div>
      </div>
    </div>

    <div class="row" >
      <div class="col-sm-12" style="padding-left:15px;padding-right:15px;">
      <div class="card">
        <div class="card-body">
        <div class="row">
          <div class="col-sm-12">
          <div id="myCarouselw" class="carouselww slidewwwww" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicatorsww">
              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
              <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li> -->
            </ul>

            <!-- The slideshow -->
            <div class="carousel-innewwr">
              <div class="carousel-itemw active">
                <div class="row" style="margin-left: 25px;margin-right: 24px;">
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                   <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="row" style="margin-left: 0px;margin-right: 0px;">
              <div class="row" style="margin-left: 0px;margin-right: 0px;">
              <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                   <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                  </div>
                </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="row" style="margin-left: 0px;margin-right: 0px;">
              <div class="row" style="margin-left: 0px;margin-right: 0px;">
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s1.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                   <img src="{{asset('images/new/s2.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s3.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s4.png')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s5.jpg')}}" alt="Chicago">
                  </div>
                  <div class="col-sm-2 col2-slide">
                    <img src="{{asset('images/new/s6.jpg')}}" alt="Chicago">
                  </div>
                </div>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" >
              <span class="carousel-control-prev-icon" ></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
<br>
    <div class="row recommend-website">
      <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home"><i class="fa fa-heart"></i>  Recomment Website</a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content" style="margin-top:-40px;">
            <div id="home" class="container tab-pane active"><br>
              <div class="row">
                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img1.jpg')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img1.jpg')}}" alt="" style="width:70%;margin-top:30px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>
                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img1.jpg')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img1.jpg')}}" alt="" style="width:70%;margin-top:30px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>
                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img5.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img5.png')}}" alt="" style="width:70%;height:100%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div> 
                      </div>
                    </span>
                  </a>
                </div>

                <div class="col-sm-2 clo2-recoment">
                  <a class="thumb" href="#"><img src="{{asset('images/img4.png')}}" alt="" style="width:100%;height:100%">
                    <span>
                      <div class="lightbox">
                          <div class="text-center">
                            <img src="{{asset('images/img4.png')}}" alt="" style="width:70%;margin-top:10px;">
                            <h5 style="color:white;margin-top:5px;">http://test-xom-rtete-rrrr.com</h5>
                          </div>
                      </div>
                    </span>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <br>

    @include('pages.footer')
  </div>
</div>

</body>

<script>

$(document).ready(function(){
  // $(".book-card").hover(function(){
  //   $('.book-social').css("display","block");
  // });
});
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px";
    document.getElementById("logo").style.fontSize = "10px";
  } else {
    document.getElementById("navbar").style.padding = "0px";
    document.getElementById("logo").style.fontSize = "10px";
  }
}
</script>
</html>
