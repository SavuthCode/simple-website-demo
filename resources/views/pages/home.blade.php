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

<div class="container" >
  @include('pages.header')

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
      @include('pages.sidebar-left')
        
      <!-- Content right side -->

      <div class="col-md-8 box" style="background-color:white;padding:5px;">
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row" style="padding:10px;">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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
                  <div class="card-body">
                    <div class="image-content">
                      <img src="{{asset('images/image-content.jpg')}}" alt="Card image" style="width:100%;height:200px;" />
                    </div>
                    <div class="social">
                      <div class="float-right">
                        <img src="{{asset('images/download-removebg-preview.png')}}" style="width:20px;height:20px;"/>
                        <img src="{{asset('images/Twitter-logo-png.png')}}" style="width:20px;height:20px;"/>
                      </div>
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

    @include('pages.footer')
  </div>
</div>

</body>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px";
    document.getElementById("logo").style.fontSize = "10px";
  } else {
    document.getElementById("navbar").style.padding = "5px";
    document.getElementById("logo").style.fontSize = "10px";
  }
}
</script>
</html>
