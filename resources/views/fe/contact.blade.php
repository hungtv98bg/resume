@extends('layouts.fe.base')
@section('title', 'Kontak Kami')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('fe') }}/css/swipe.min.css">
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('fe') }}/js/swipe.js"></script>
@endsection

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Liên hệ</h3>
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
            <div class="panel" id="lokasi">
                <div class="panel-header">
                    <span class="ion-map"></span>&nbsp; Ho Chi Minh City
                </div>
                <div class="panel-body">
                    <div class="col-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.4614620941!2d106.41435661202327!3d10.754665790973942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1675996342013!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-2">
                        <h4><u>Thành phố Hồ Chí Minh</u></h4>
                        <p>
                            Telephone : 038 366 5744
                            <br>
                            Email : tahung98svtybg@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Contact with me
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('fe.contact_post') }}" method="POST">
                        @csrf
                        <div class="input-form">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <label>Telephone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Telephone" required>
                            <label>Message</label>
                            <textarea class="form-control" name="body" rows="5" placeholder="Please enter your message" required></textarea>
                            <button type="submit" class="btn btn-ticket btn-orange btn-contact"><span class="ion-paper-airplane"></span>&nbsp; Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
