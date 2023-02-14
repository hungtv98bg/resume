@extends('layouts.fe.base')
@section('title', 'Destination')

@section('content')

<section class="section-header-single">
	<img src="{{ asset('fe') }}/img/bg-destination.jpg">
	<div class="overlay">
		<div class="header-title">
			<h3>Điểm đến du lịch</h3>
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
	</section>
</section>

<ul class="breadcrumb">
  <li><a href="{{ route('fe.index') }}">Home</a></li>
  <li>Destination</li>
</ul>

<section class="section section-single">
	<div class="container-fluid">
		<div class="single-head">
			<div class="col">
				<img src="{{ asset('fe') }}/img/icon/destination.png">
				<h3>find your destination right now !</h3>
				<p>The following is a list of provinces and cities stretching across Vietnam, please choose as you like</p>
			</div>
		</div>
		<div class="single-body">
            @foreach ($items as $item)
                <div class="col">
                    <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>{{ $item->name }}</p>
                                @if ($item->category == 'Wisata')
                                <span class="ion-location big"></span> &nbsp;
                                @elseif ($item->category == 'Kuliner')
                                <span class="ion-pizza big"></span> &nbsp;
                                @else
                                <span class="ion-bag big"></span> &nbsp;
                                @endif
                                <b>{{ $item->category }}</b> <br>
                                <a href="{{ route('fe.news', ['des_id' => $item->id]) }}" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>

@endsection
