<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Thêm đặt phòng - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('NiceAdmin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Thêm đặt phòng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('bookings.index') }}">Home</a></li>
          <li class="breadcrumb-item">Đặt phòng</li>
          <li class="breadcrumb-item active">Thêm đặt phòng</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form thêm đặt phòng</h5>

              <!-- General Form Elements -->
              <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="customer_name" class="col-sm-2 col-form-label">Tên khách hàng</label>
                  <div class="col-sm-10">
                    <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="hotel_id" class="col-sm-2 col-form-label">Khách Sạn</label>
                  <div class="col-sm-10">
                    <select name="hotel_id" id="hotel_id" class="form-select" required>
                      <option value="" selected disabled>Chọn khách sạn</option>
                      @foreach($hotels as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="room_id" class="col-sm-2 col-form-label">Phòng</label>
                  <div class="col-sm-10">
                    <select name="room_id" id="room_id" class="form-select" required>
                      <option value="" selected disabled>Chọn phòng</option>
                      <!-- Phòng sẽ được điền dựa vào khách sạn đã chọn -->
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="check_in" class="col-sm-2 col-form-label">Ngày nhận phòng</label>
                  <div class="col-sm-10">
                    <input type="date" name="check_in" class="form-control" value="{{ old('check_in') }}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="check_out" class="col-sm-2 col-form-label">Ngày trả phòng</label>
                  <div class="col-sm-10">
                    <input type="date" name="check_out" class="form-control" value="{{ old('check_out') }}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Thêm đặt phòng</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('NiceAdmin/assets/js/main.js') }}"></script>

  <script>
    document.getElementById('hotel_id').addEventListener('change', function() {
      const hotelId = this.value;
      const roomSelect = document.getElementById('room_id');

      // Xóa các tùy chọn hiện tại
      roomSelect.innerHTML = '<option value="" selected disabled>Chọn phòng</option>';

      if (hotelId) {
        fetch(`/api/rooms?hotel_id=${hotelId}`)
          .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
          })
          .then(data => {
            if (data.length === 0) {
              const option = document.createElement('option');
              option.value = '';
              option.text = 'Không có phòng khả dụng';
              roomSelect.appendChild(option);
            } else {
              data.forEach(room => {
                const option = document.createElement('option');
                option.value = room.id;
                option.text = room.room_number;
                roomSelect.appendChild(option);
              });
            }
          })
          .catch(error => console.error('There was a problem with the fetch operation:', error));
      }
    });
  </script>

</body>

</html>
