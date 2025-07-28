<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hoang Hon &mdash; Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('hotel/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('hotel/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel/css/animate.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="{{ asset('hotel/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('hotel/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('hotel/css/style.css') }}">

  </head>
  <body>

    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
          </div> <!-- .site-mobile-menu -->


          <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container">
              <div class="site-navbar bg-light">
                <div class="py-1">
                  <div class="row align-items-center">
                    <div class="col-2">
                      <h2 class="mb-0 site-logo"><a href="{{ route('user.index') }}">Tuan Anh</a></h2>
                    </div>
                    <div class="col-10">
                      <nav class="site-navigation text-right" role="navigation">
                        <div class="container">

                          <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                          <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                              <a href="{{ route('user.index') }}">Trang chủ</a>
                            </li>
                            <li class="has-children">
                              <a href="rooms.html">Phòng</a>
                              <ul class="dropdown arrow-top">
                                {{-- <li><a href="{{ route('rooms.byType', 'available') }}">Hiện có</a></li> --}}
                                <li><a href="{{ route('rooms.byType', 'single') }}">Phòng đơn</a></li>
                                <li><a href="{{ route('rooms.byType', 'double') }}">Phòng đôi</a></li>
                                <li><a href="{{ route('rooms.byType', 'suite') }}">Phòng hạng sang</a></li>


                                <li class="has-children">
                                  <a href="rooms.html">Dịch vụ</a>
                                  <ul class="dropdown">

                                    <li><a href="rooms.html">Ăn uống</a></li>

                                  </ul>
                                </li>

                              </ul>
                            </li>
                            <li><a href="events.html">Sự kiện</a></li>
                            <li><a href="about.html">Thông tin</a></li>
                            <li><a href="contact.html">Liên hệ</a></li>
                            <li><a href="login.html">Login</a></li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
