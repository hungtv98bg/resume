@extends('layouts.fe.base')
@section('title', 'News')

@section('content')

    <section class="section-header-single">
        @if (isset($des) && $des != '')
            <img src="{{ asset('fe/img/post/' . $des->thumbnail) }}">
        @endif
        <div class="overlay">
            <div class="header-title">
                @if (isset($des) && $des != '')
                    <h3>{{ $des->name }}</h3>
                @else
                    <h3>Blog</h3>
                @endif
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        @if (isset($des) && $des != '')
            <li>{{ $des->name }}</li>
        @else
            <li>Blog</li>
        @endif

    </ul>

    <section class="section section-archive">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="content-single">
                        <div class="content-single-title">
                            <h3>{{ $item->name }}</h3>
                            <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}" class="image">
                        </div>
                        <div class="content-single-body">
                            {!! $item->body !!}

                            {{-- <div class="label">
                                <a href=""><span class="ion-pricetags"></span> &nbsp; News</a>
                                <a href=""><span class="ion-android-share-alt"></span> &nbsp; Share</a>
                                <a href=""><span class="ion-heart"></span> &nbsp; Like</a>
                            </div> --}}
                        </div>
                        @if (isset($des) && $des != '')
                            <div class="content-single-footer">
                                <h3 class="text-center">Địa điểm liên quan</h3>
                                <div class="terkait">
                                    <div class="col">
                                        @foreach ($nearbys as $nearby)
                                            <img src="{{ asset('fe') }}/img/post/{{ $nearby->thumbnail }}"> <br><br>
                                            <a href="{{ route('fe.detail_news', $nearby->id) }}">
                                                <h3 class="text-center">
                                                    {{ $nearby->name }}
                                                </h3>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="aside">
                    <div class="row">
                        <div class="aside-content">
                            <div class="content-title">
                                <b>TỈNH THÀNH</b>
                            </div>
                            <div class="content-body">
                                <ul style="padding: 0;list-style: none;">
                                    @foreach ($destinations as $des)
                                        <li><a
                                                href="{{ route('fe.news', ['des_id' => $des->id]) }}">{{ $des->name }}</a>
                                        </li>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

@endsection
