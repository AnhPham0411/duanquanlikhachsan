<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chỉnh sửa Hóa Đơn - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('NiceAdmin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('NiceAdmin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS -->
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('NiceAdmin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  @include('admin.header')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Chỉnh sửa Hóa Đơn</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Home</a></li>
          <li class="breadcrumb-item">Order</li>
          <li class="breadcrumb-item active">Chỉnh sửa Hóa Đơn</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Chỉnh sửa Hóa Đơn</h5>

              <!-- Form -->
              <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Booking -->
                <div class="row mb-3">
                  <label for="booking_id" class="col-sm-2 col-form-label">Đặt Phòng</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Đặt phòng #{{ $order->booking->id }} - {{ $order->booking->name }}" disabled>
                    <input type="hidden" name="booking_id" value="{{ $order->booking->id }}">
                  </div>
                </div>

                <!-- Total Amount -->
                <div class="row mb-3">
                  <label for="total_amount" class="col-sm-2 col-form-label">Số Tiền Thanh Toán</label>
                  <div class="col-sm-10">
                    <input type="number" name="total_amount" class="form-control" value="{{ old('total_amount', $order->total_amount) }}" required>
                    @error('total_amount')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Payment Info -->
                <div class="row mb-3">
                  <label for="transaction_if" class="col-sm-2 col-form-label">Danh mục thanh toán</label>
                  <div class="col-sm-10">
                    <input type="text" name="transaction_if" class="form-control" value="{{ old('transaction_if', $order->transaction_if) }}" required>
                    @error('transaction_if')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Payment Status -->
                <div class="row mb-3">
                  <label for="payment_status" class="col-sm-2 col-form-label">Trạng Thái Thanh Toán</label>
                  <div class="col-sm-10">
                    <select name="payment_status" class="form-select" required>
                      <option value="paid" {{ old('payment_status', $order->payment_status) == 'paid' ? 'selected' : '' }}>Đã thanh toán</option>
                      <option value="pending" {{ old('payment_status', $order->payment_status) == 'pending' ? 'selected' : '' }}>Chưa thanh toán</option>
                    </select>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <!-- JS -->
  <script src="{{ asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    // Kiểm tra dữ liệu
    document.querySelector('form').addEventListener('submit', function (e) {
      const amountInput = document.querySelector('input[name="total_amount"]');
      const amount = parseFloat(amountInput.value);

      if (isNaN(amount) || amount < 0) {
        e.preventDefault(); // Ngăn gửi form
        alert("Vui lòng nhập số tiền hợp lệ và không âm!");
      }
    });
  </script>
</body>
</html>
