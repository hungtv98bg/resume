@extends('layouts.fe.base')
@section('title', 'About')

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Viet Nam</h3>
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
            <div class="panel" id="struktural">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Địa lý
                </div>
                <div class="panel-body">
                    <p><b><u>Diện tích</u></b> : {!! $bupati->name !!} <br> <b><u>Dân số</u></b> : {!! $wakil_bupati->name !!}</p>
                </div>
            </div>
            <div class="panel" id="visi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Tài nguyên thiên nhiên
                </div>
                <div class="panel-body">
                    <p>{!! $visi->body !!}</p>
                </div>
            </div>
            <div class="panel" id="misi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Phong tục tập quán
                </div>
                <div class="panel-body">
                    <p>{!! $misi->body !!}</p>
                </div>
            </div>
            <div class="panel" id="opd">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Ẩm thực
                </div>
                <div class="panel-body">
                    {!! $opd->name !!}
                </div>
            </div>
            <div class="panel" id="deskripsi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Trang phục
                </div>
                <div class="panel-body">
                    <p style="text-align:justify;">
                        {!! $about->body !!}
                    </p>
                </div>
            </div>
            <div class="panel" id="lokasi">
                <div class="panel-header">
                    <span class="ion-map"></span>&nbsp; Location
                </div>
                <div class="panel-body">
                    <div class="col-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7864458.867504674!2d101.40517223283447!3d15.74755183158204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2zVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1676002504655!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
