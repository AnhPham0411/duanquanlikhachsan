@include('layouts.user-header')

<div class="site-blocks-cover overlay" style="background-image: url({{ asset('hotel/images/hero_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <span class="caption mb-3">{{ ucfirst($type) }} Rooms</span>
                <h1 class="mb-4">Hotel Rooms - {{ ucfirst($type) }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Our {{ ucfirst($type) }} Rooms</h2>
            </div>
        </div>
        <div class="row">
            @foreach($rooms as $room)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="hotel-room text-center">
                    <a href="{{ route('rooms.booking', $room->id) }}" class="d-block mb-0 thumbnail">
                        <img src="{{ asset($room->images->first()->image_path ?? 'images/default-room.jpg') }}"
                        style="height:280px"
                        alt="Room Image" class="img-fluid">
                    </a>
                    <div class="hotel-room-body">
                        <h3 class="heading mb-0"><a href="{{ route('rooms.booking', $room->id) }}">{{ $room->room_number }}</a></h3>
                        <strong class="price">{{ number_format($room->price, 2) }} VND / per night</strong>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <!-- Hiển thị phân trang -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    {{ $rooms->links('pagination::bootstrap-4') }} <!-- Hiển thị phân trang -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.user-footer')
