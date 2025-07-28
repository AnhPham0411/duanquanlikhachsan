@include('layouts.user-header')

<div class="site-blocks-cover overlay" style="background-image: url({{ asset('hotel/images/hero_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <span class="caption mb-3">Booking Now</span>
                <h1 class="mb-4">Reserve Your Room</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="{{ route('booking.store') }}" method="POST" class="p-5 bg-white">
                    @csrf

                    <!-- Customer Name -->
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="full_name" class="form-control" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>


                    <!-- Room Information (Hidden Field) -->
                    <input type="hidden" name="room_id" value="{{ $room->id }}">

                    <div class="row form-group">
                        <div class="col-md-12">
                            <h3>{{ $room->name }}</h3>
                            <p>{{ $room->description }}</p>
                            <p><strong>Price:</strong> {{ $room->price }} VNĐ/1 night</p>
                            <img src="{{ asset($room->images->first()->image_path ?? 'images/default-room.jpg') }}" alt="Room Image" style="height:280px;">
                        </div>
                    </div>

                    <!-- Check-in and Check-out Date -->
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="check_in">Check-in Date</label>
                            <input type="date" id="check_in" name="check_in" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold" for="check_out">Check-out Date</label>
                            <input type="date" id="check_out" name="check_out" class="form-control" required>
                        </div>
                    </div>

                    <!-- Total Price (Auto-calculated) -->
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="total_price">Total Price</label>
                            <input type="text" id="total_price" name="total_price" class="form-control" readonly>
                        </div>
                    </div>

                    <!-- Booking Status -->
                    {{-- <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="status">Booking Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div> --}}

                    <!-- Submit Button -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Reserve Now" class="btn btn-primary pill px-4 py-2">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Contact Info Sidebar -->
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">94 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+84 388930958</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">Bintuananh2003@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.user-footer')

<script>
    // Tính toán tổng giá phòng dựa trên số ngày và giá phòng, và giới hạn ngày hợp lệ
    document.addEventListener('DOMContentLoaded', function () {
        const checkInInput = document.getElementById('check_in');
        const checkOutInput = document.getElementById('check_out');
        const totalPriceInput = document.getElementById('total_price');
        const pricePerNight = {{ $room->price }};
        const today = new Date().toISOString().split('T')[0]; // Ngày hôm nay ở định dạng YYYY-MM-DD

        // Đặt ngày check-in không thể trước hôm nay
        checkInInput.setAttribute('min', today);

        function calculateTotalPrice() {
            const checkInDate = new Date(checkInInput.value);
            const checkOutDate = new Date(checkOutInput.value);

            if (checkInDate && checkOutDate && checkOutDate >= checkInDate) {
                // Tính toán số đêm
                const timeDiff = checkOutDate - checkInDate;
                let daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));

                // Nếu ngày check-in và check-out giống nhau, tính ít nhất là 1 đêm
                daysDiff = daysDiff || 1;

                const totalPrice = daysDiff * pricePerNight;
                totalPriceInput.value = totalPrice.toFixed(2);
            } else {
                totalPriceInput.value = '';
            }
        }

        // Kiểm tra và giới hạn ngày hợp lệ cho ngày check-in và check-out
        checkInInput.addEventListener('change', function () {
            const checkInDate = checkInInput.value;
            checkOutInput.min = checkInDate; // Ngày check-out không thể trước ngày check-in
            calculateTotalPrice();
        });

        checkOutInput.addEventListener('change', function () {
            const checkOutDate = checkOutInput.value;
            checkInInput.max = checkOutDate; // Ngày check-in không thể sau ngày check-out
            calculateTotalPrice();
        });
    });
</script>
