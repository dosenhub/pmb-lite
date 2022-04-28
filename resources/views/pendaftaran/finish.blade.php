@extends('fe-layouts.app')
@section('content')
<section class="section">

    <div class="section-body">
        <div id="output-status"></div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
                    <div class="hero-inner text-center">
                        <h2>Selamat, Ujang!</h2>
                        <p class="lead">Kamu sudah menyelesaikan pendaftaran, silahkan Login untuk melanjutkan dengan username dan password yang telah kamu daftarkan.</p>
                        <div class="mt-4">
                            <a href="{{ url('/login') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('customStyle')
    <link rel="stylesheet" href="/assets/css/select2.min.css">
@endpush

@push('customScript')
    <script src="/assets/js/select2.min.js"></script>
@endpush

