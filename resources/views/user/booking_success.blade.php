@include('layouts.user-header')

<div class="site-blocks-cover overlay" style="background-image: url({{ asset('hotel/images/hero_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
                <span class="caption mb-3">Booking Now</span>
                <h1 class="mb-4">Booking Successful!</h1>
                <a href="{{ route('rooms.index') }}" class="btn btn-primary">Back to main</a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="alert alert-success">
                <h2>Booking Successful!</h2>
                <p>Your room has been reserved successfully. We look forward to welcoming you!</p>
            </div>
            <a href="{{ route('rooms.index') }}" class="btn btn-primary">Register Now</a>
        </div>

    </div>
</div> --}}

@include('layouts.user-footer')

