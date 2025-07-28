<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chỉnh Sửa Hóa Đơn</title>

  <!-- Các link CSS, JS, và tài nguyên khác -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Chỉnh Sửa Hóa Đơn</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Home</a></li>
          <li class="breadcrumb-item">Order</li>
          <li class="breadcrumb-item active">Chỉnh Sửa Hóa Đơn</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Chỉnh Sửa Hóa Đơn</h5>

              <!-- General Form Elements -->
              <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Thông tin đặt phòng -->
                <div class="row mb-3">
                  <label for="booking_id" class="col-sm-2 col-form-label">Đặt Phòng</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Đặt phòng #{{ $booking->id }} - {{ $booking->name }}" disabled>
                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                  </div>
                </div>

                <!-- Số tiền thanh toán -->
                <div class="row mb-3">
                  <label for="amount" class="col-sm-2 col-form-label">Số Tiền Thanh Toán</label>
                  <div class="col-sm-10">
                    <input type="number" name="amount" class="form-control" value="{{ old('amount', $order->amount) }}" required>
                    @error('amount')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Danh mục thanh toán -->
                <div class="row mb-3">
                  <label for="transaction_if" class="col-sm-2 col-form-label">Danh mục thanh toán</label>
                  <div class="col-sm-10">
                    <input type="text" name="transaction_if" class="form-control" value="{{ old('transaction_if', $order->transaction_if) }}" required>
                    @error('transaction_if')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Trạng thái thanh toán -->
                <div class="row mb-3">
                  <label for="payment_status" class="col-sm-2 col-form-label">Trạng Thái Thanh Toán</label>
                  <div class="col-sm-10">
                    <select name="payment_status" class="form-select" required>
                      <option value="" disabled>Chọn trạng thái</option>
                      <option value="paid" {{ $order->payment_status == 'paid' ? 'selected' : '' }}>Đã thanh toán</option>
                      <option value="pending" {{ $order->payment_status == 'pending' ? 'selected' : '' }}>Chưa thanh toán</option>
                    </select>
                  </div>
                </div>

                <!-- Submit button -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cập nhật Hóa Đơn</button>
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
