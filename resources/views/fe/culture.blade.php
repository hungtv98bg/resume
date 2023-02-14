@extends('layouts.fe.base')
@section('title', 'Culture')

@section('content')

    <section class="section-header-single">
        <img src="{{ asset('fe') }}/img/bg-culture.jpg">
        <div class="overlay">
            <div class="header-title">
                <h3>Blog</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        <li>Culture</li>
    </ul>

    <section class="section section-archive">
        <div class="container">
            <div class="row">
                <div class="content">
                    @foreach ($items as $item)
                        <div class="col">
                            <div class="content-img">
                                <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                                <span class="label-img"> {{ $item->category }}</span>
                            </div>
                            <div class="content-desc">
                                <div class="content-desc-title">
                                    <a href="{{ route('fe.detail_news', $item->id) }}">
                                        <h3>{{ $item->name }}</h3>
                                    </a>
                                </div>
                                <div class="content-desc-text">
                                    <ul class="breadcrumb-post">
                                        <li><i class="ion-calendar"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} &nbsp; / &nbsp;</li>
                                        <li><i class="ion-person"></i> {{ $item->viewer }} lượt xem</li>
                                    </ul>
                                    <p>
                                        {!! Str::limit($item->body, 200, $end='.......') !!}
                                    </p>
                                    <a href="{{ route('fe.detail_culture', $item->id) }}" class="btn btn-md btn-orange" style="margin-top: 10px;">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="aside">
                    <div class="row">
                        <div class="aside-content">
                            <div class="content-title">
                                <b>KATEGORI</b>
                            </div>
                            <div class="content-body">
                                <ul style="padding: 0;list-style: none;">
                                    <li><a href="{{ route('fe.news') }}">Address</a></li>
                                    <li><a href="{{ route('fe.culture') }}">Culture</a></li>
                                    <li><a href="{{ route('fe.event') }}">Event</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
