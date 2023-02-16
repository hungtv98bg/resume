@extends('layouts.fe.base')
@section('title', 'News')

@section('content')

    <section class="section-header-single">
        @if (isset($des) && $des != '')
            <img src="{{ asset('fe/img/post/' . $des->thumbnail) }}">
        @else
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
        @endif
        <div class="overlay">
            <div class="header-title">
                @if (isset($des) && $des != '')
                    <h3>{{ $des->name }}</h3>
                @else
                    <h3>Điểm đến lý tưởng</h3>
                @endif
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        <li>Địa điểm</li>
        @if (isset($des) && $des != '')
            <li>{{ $des->name }}</li>
        @endif
    </ul>

    <section class="section section-archive">
        @if (isset($des) && $des != '')
            <h3>Descriptions</h3>
            <p>{{ $des->body }}</p>
        @endif
        <div class="container row">
                <div class="col-sm-6">
                    <div class="content" style="display:block;">
                        @foreach ($items as $item)
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                                    <span class="label-img"> {{ $item->provinces }}</span>
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="{{ route('fe.detail_news', $item->id) }}">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i
                                                    class="ion-calendar"></i>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                &nbsp; / &nbsp;</li>
                                            <li><i class="ion-person"></i> {{ $item->viewer }} lượt xem</li>
                                        </ul>
                                        <p>
                                            {!! Str::limit($item->body, 200, $end = '.......') !!}
                                        </p>
                                        <a href="{{ route('fe.detail_news', $item->id) }}" class="btn btn-md btn-orange"
                                            style="margin-top: 10px;">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="aside">
                        <div class="row">
                            <div class="aside-content">
                                <div class="content-title">
                                    <b>Tỉnh thành</b>
                                </div>
                                <div class="content-body">
                                    <ul style="padding: 0;list-style: none;">
                                        @foreach ($destinations as $des)
                                            <li><a
                                                    href="{{ route('fe.news', ['des_id' => $des->id]) }}">{{ $des->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

@endsection
