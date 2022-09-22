<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demo website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  body{
    font-family: kantumruy,sans-serif;
    font-size: 12px;
  }
  .header-content{
    width: 100%;
    height: 400px;
    background-image: url('https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
  .nav-link{
    color:white;
    font-size:20px;
  }
  .sidebar{
    overflow: hidden;
  }
  .box{
    box-sizing: border-box;
    border: 10px solid transparent;
    background-clip:padding-box;
}

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  border-radius:0;
}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
  color:black;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
  content: "";
  position: relative;
  bottom: -60px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: #e74c3c ;
  }
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    padding:30px 25px;
  }

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
  {
  border: none;
    background: #e74c3c;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
  }
  .menu-left{
    width:100%;
    height: 500px;
  }
  .img-read{
    width:100%;
  }
</style>
<body style="background-color:#e9eaed">

<div class="container" >
  <div class="header-content">
    <div class="top-menu" style="padding:20px">
      <ul class="nav nav-pills float-left">
        <li class="nav-item">
          <img src="{{asset('images/logo.jpg')}}" style="width:50px">
        </li>
      </ul>
      <ul class="nav  float-right">
        <li class="nav-item">
          <a class="nav-link" href="#">NEW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ARTICLE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COLLECTION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PICTURE</a>
        </li>
      </ul>
    </div>
  </div>
  <br>

  <div class="content-lission">
    <div class="row">
      <div class="col-md-4 box" style="background-color:white;padding:10px;">
        <div class="row">
          <div class="col-sm-2" style="border-right: solid 1px red">
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

        <div class="menu-left">
          dsds
        </div>
        <br>
        <div class="menu-keyword">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-refresh"></i>  Keyword</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;">
              <div>
                <span class="badge badge-secondary" style="padding:5px;">ព្រះគុណពុកម៉ែ</span>
                <span class="badge badge-secondary" style="padding:5px;">ទ្រង់ប្រារព្ធលោលភិក្ខុម</span>
                <span class="badge badge-secondary" style="padding:5px;">ទំនួញប្រែត</span>
                <span class="badge badge-secondary" style="padding:5px;">ទំនួញសុវណ្ណសាម</span>
                <span class="badge badge-secondary" style="padding:5px;">ធម្មទេសនា</span>
              </div>
            </div>
          </div>
        </div>

        <br>

        <!-- ==================================Recently Read================================== -->

        <div class="menu-recently-read">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-refresh"></i>  Recently List / Read</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;">
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-5">
                  <div class="img-read">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-7" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        
        <!-- ================================advertisement ========================================== -->
        <div class="card" style="width:100%;height:auto;">
          <div class="card-body" style="padding:0px;">
            <div>
              <img src="https://iotcdn.oss-ap-southeast-1.aliyuncs.com/shampoo.jpg"/ style="width:100%">
            </div>
          </div>
        </div>

        <!-- =================================Live Radio ====================================-->
        <br>
        <div class="Live-radio">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-refresh"></i> Live Radio</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;padding-top:10px;">
              <div class="row" >
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
        
              <div class="row">
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
              <hr/>
              <div class="readmore text-center">
                <a href="readmore" class="text-danger "><i class="fa fa-download"></i>មើលម្ដងទៀត</a>
              </div>
            </div>
          </div>
        </div>

        <!--====================================== notification =========================== -->

        <div class="notification">
          <div class="card">
            <div class="card-header">
              <div class="float-left text-danger"><h5><i class="fa fa-notification"></i> All Visitors</h5></div>
              <div class="refresh-icons float-right text-danger"><i class="fa fa-refresh fa-lg"></i></div>
            </div>
            <div class="card-body" style="padding:5px;padding-top:10px;">
              <div class="row" >
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <div class="img-read" style="width:80px;height:auto;border:1px solid lightgrey;padding:5px;">
                  <img class="card-img-bottom" src="{{asset('images/logo.jpg')}}" alt="Card image" style="width:100%;">
                  
                  </div>
                </div>
                <div class="col-sm-8" style="padding-left: 0px;">
                  <h5 class="text-danger"><a>ererererer</a></h5>
                  <p>inside the box. Note that this will add a scrollbar both horizontally and vertically</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Content right side -->

      <div class="col-md-8 box" style="background-color:white;padding:5px;">
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
          <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body" style="padding:0px;">
                    <div class="image">
                      <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:180px;">
                    </div>
                    <div class="text" style="padding:5px;">
                      <h5 class="card-title"><a href="" style="color:red">ចក្ដវាកជាតក</a></h5>
                      <p class="card-text">Public Date: 2022-09-20 <br>ព្រះសាស្ដាកាលស្ដេចគង់នៅវត្តជេតពន ទ្រង់ប្រារព្ធលោលភិក្ខុ (ភិក្ខុល្មោភ) មួយរូប បានត្រាស់ព្រះ</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" >
      <div class="col-sm-12" style="padding-left:15px;padding-right:15px;">
      <div class="card">
        <div class="card-body">
        <div class="row">
          <div class="col-sm-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                   <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="row">
              <div class="row">
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                   <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="row">
              <div class="row">
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                   <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('images/logo.jpg')}}" alt="Chicago" style="width:100%">
                  </div>
                </div>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
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
              <a class="nav-link active" data-toggle="tab" href="#home">Recomment Website</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content" style="margin-top:-40px;">
            <div id="home" class="container tab-pane active"><br>
              <div class="row">
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
              </div>
<br>
              <div class="row">
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
                <div class="col-sm-2">
                  <img class="card-img-bottom" src="{{asset('images/placeholder.png')}}" alt="Card image" style="width:100%;height:100px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <br>
    <!-- footer -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-center">
          <div class="card-body" style="padding:10px;background-color:red;color:white;">
          © Founded in June B.E.2555 by 5000-years.org (Khmer Buddhist).
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

</body>
</html>
