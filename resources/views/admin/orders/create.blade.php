<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Thêm Hóa Đơn - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('NiceAdmin/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('NiceAdmin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('NiceAdmin/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Thêm Hóa Đơn</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Home</a></li>
          <li class="breadcrumb-item">Order</li>
          <li class="breadcrumb-item active">Thêm Hóa Đơn</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Thêm Hóa Đơn</h5>

              <!-- General Form Elements -->
              <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                {{-- <div class="row mb-3">
                  <label for="customer_id" class="col-sm-2 col-form-label">Chọn Khách Hàng</label>
                  <div class="col-sm-10">
                    <select name="customer_id" class="form-select" required>
                      <option value="" selected disabled>Chọn khách hàng</option>
                      @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div> --}}

                <div class="row mb-3">
                    <label for="booking_id" class="col-sm-2 col-form-label">Đặt Phòng</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Đặt phòng #{{ $booking->id }} - {{ $booking->name }}" disabled>
                      <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                    </div>
                  </div>

                <div class="row mb-3">
                    <label for="total_amount" class="col-sm-2 col-form-label">Số Tiền Thanh Toán</label>
                    <div class="col-sm-10">
                        <input type="number" name="total_amount" class="form-control" value="{{ old('total_amount') }}" required>
                        @error('total_amount')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="transaction_if" class="col-sm-2 col-form-label">Danh mục thanh toán</label>
                    <div class="col-sm-10">
                        <input type="text" name="transaction_if" class="form-control" value="{{ old('transaction_if') }}" required>
                        @error('transaction_if')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                  <label for="payment_status" class="col-sm-2 col-form-label">Trạng Thái Thanh Toán</label>
                  <div class="col-sm-10">
                    <select name="payment_status" class="form-select" required>
                      <option value="" selected disabled>Chọn trạng thái</option>
                      <option value="paid">Đã thanh toán</option>
                      <option value="pending">Chưa thanh toán</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Thêm Hóa Đơn</button>
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
  <script src="{{ asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('NiceAdmin/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('NiceAdmin/assets/js/main.js')}}"></script>

</body>

</html>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
    const amountInput = document.querySelector('input[name="amount"]');
    const amount = parseFloat(amountInput.value);

    if (isNaN(amount) || amount < 0) {
        e.preventDefault(); // Ngăn không cho form gửi
        alert("Vui lòng nhập số tiền hợp lệ và không âm!");
    }
});

    </script>
