<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('NiceAdmin/assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- Search Bar -->
<!-- Search Bar -->

<div class="search-bar ">
    <form class="search-form d-flex align-items-center" method="POST" action="{{ route('hotels.search') }}">
        @csrf
        <input type="text" name="query" placeholder="Tìm kiếm theo tên khách sạn" title="Enter search keyword" value="{{ request()->input('query') }}">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div><!-- End Search Bar -->





    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src=""/>
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hotels-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-building"></i><span>Hotels</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hotels-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <!-- Link đến danh sách khách sạn -->
            <li>
                <a href="{{ route('hotels.index') }}">
                    <i class="bi bi-circle"></i><span>Danh sách khách sạn</span>
                </a>
            </li>
            <!-- Link đến trang thêm khách sạn -->
            <li>
                <a href="{{ route('hotels.create') }}">
                    <i class="bi bi-circle"></i><span>Thêm khách sạn</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#rooms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-door-open"></i><span>Rooms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="rooms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <!-- Link đến danh sách phòng -->
            <li>
                <a href="{{ route('rooms.index') }}">
                    <i class="bi bi-circle"></i><span>Danh sách phòng</span>
                </a>
            </li>
            <!-- Link đến trang thêm phòng -->
            <li>
                <a href="{{ route('rooms.create') }}">
                    <i class="bi bi-circle"></i><span>Thêm phòng</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#amenities-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-lamp"></i><span>Amenities</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="amenities-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <!-- Link đến danh sách tiện nghi -->
            <li>
                <a href="{{ route('amenities.index') }}">
                    <i class="bi bi-circle"></i><span>Danh sách tiện nghi</span>
                </a>
            </li>
            <!-- Link đến trang thêm tiện nghi -->
            <li>
                <a href="{{ route('amenities.create') }}">
                    <i class="bi bi-circle"></i><span>Thêm tiện nghi</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Menu Order -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-receipt"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="order-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <!-- Link đến danh sách hóa đơn -->
        <li>
            <a href="{{ route('orders.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách hóa đơn</span>
            </a>
        </li>
        <!-- Link đến trang thêm hóa đơn, không cần bookingId -->
        <li>
            <a href="{{ route('orders.create', ['bookingId' => null]) }}">
                <i class="bi bi-circle"></i><span>Thêm hóa đơn</span>
            </a>
        </li>
    </ul>

</li>

<!-- Menu Booking -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#booking-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-calendar-check"></i><span>Booking</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="booking-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <!-- Link đến danh sách đặt phòng -->
        <li>
            <a href="{{ route('bookings.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách đặt phòng</span>
            </a>
        </li>
        <!-- Link đến trang thêm đặt phòng -->
        <li>
            <a href="{{ route('bookings.create') }}">
                <i class="bi bi-circle"></i><span>Thêm đặt phòng</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-circle"></i><span>Người dùng</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="user-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <!-- Link đến danh sách người dùng -->
        <li>
            <a href="{{ route('customers.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách người dùng</span>
            </a>
        </li>
        <!-- Link đến trang thêm người dùng -->
        <li>
            <a href="{{ route('customers.create') }}">
                <i class="bi bi-circle"></i><span>Thêm người dùng</span>
            </a>
        </li>
    </ul>
</li>





      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
