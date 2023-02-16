@extends('layouts.fe.base')
@section('title', 'Home')

@section('content')
    <style type="text/css">
        .navbar .navbar-item ul li a {
            color: black !important;
        }
    </style>
    <!-- Section Header -->
    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset('fe') }}/img/banner-2.png" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">VIỆT <br> NAM <br>ĐÓ <br>ĐÂY</h3>
                    <p>Khám phá vẻ đẹp của <br>63 tỉnh thành trải dài khắp đất nước Việt Nam.</p>
                    <a href="{{ route('fe.destination') }}" class="btn btn-round btn-orange">Chi tiết</a>
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT ART OF MIMIKA</h3>
                    <p>Telusuri Keindahan Mimika Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="{{ route('fe.destination') }}" class="btn btn-round btn-orange">See Our Destination</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section class="section section-about">
        <div class="about-head slides">
            <h3>{{ config('app.name2', 'Việt nam đó đây') }}</h3>
            <p>
                <b>Việt Nam</b> trong mắt thi sĩ luôn phảng phất nét đẹp bình dị, từ cánh đồng lúa bát ngát đến cánh cò bay
                mỏi cánh hay đỉnh Trường Sơn mây mù che phủ ngày đên.
                Thế nhưng không chỉ trong con mắt của người làm thơ, <b>Việt Nam</b> mới hiện lên chân thực và sống động đến
                thế, mà trong mắt bè bạn quốc tế và du khách nước ngoài, đất nước của chúng ta cũng không kém phần xinh đẹp
                và rạng rỡ.
            </p>
        </div>
        <div class="about-body">
            <div class="row slides">
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/035-trekking.png">
                    <h2>ADVENTURE</h2>
                    <p>Không chỉ với chúng ta, du khách nước ngoài cũng có cảm nhận bằng chính trải nghiệm bản thân khi đặt
                        chân tới Việt Nam đó là đất nước này có rất nhiều cảnh đẹp. Cảnh đẹp ở đây không chỉ thể hiện qua
                        những danh lam, thắng cảnh nổi tiếng, mà còn xuất phát từ chính nét bình dị trong cuộc sống hàng
                        ngày của người dân địa phương: những gánh hàng rong, tiệm café đường tàu, một ngày mưu sinh tất bật…
                    </p>
                </div>
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/028-book.png">
                    <h2>GUIDE</h2>
                    <p>Bên cạnh đó là nụ cười rạng rỡ của những lao động ở Việt Nam đem đến cái nhìn thật khác cho du khách.
                        Trong hoàn cảnh khó khăn, cơm ăn không no, áo mặc không đủ nhưng vẫn nở nụ cười thật trong trẻo,
                        tươi vui khiến họ cảm thấy bản thân thật may mắn, cứ như vậy thiện cảm về con người Việt Nam lấp đầy
                        tâm trí của họ - một người ở xứ khác.
                    </p>
                </div>
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/024-tent.png">
                    <h2>STAY</h2>
                    <p>Người Việt thì mong muốn bơi ra biển lớn để mưu sinh, nhưng lại là điểm đến được nhiều du khách lựa
                        chọn nhất trên thế giới. Bởi lẽ Việt Nam là quốc gia nằm trong số những quốc gia an toàn và dễ sống
                        hơn cả.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Explore -->
    <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h2>ĐẾN VỚI VẺ ĐẸP VÀ SỰ THÂN THIỆN CỦA</h2> <br>
                <img src="{{ asset('fe') }}/img/vietnam.png" alt="Việt Nam">
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section>

    <!-- Section Discover -->
    <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY VIETNAM</h3>
            <p class="section-subtitle">Cuộc sống ở khắp mọi miền đất nước Việt Nam từ Bắc đến Nam hiện lên khác lạ với vẻ
                đẹp thanh bình của núi non, ruộng đồng xen lẫn sôi động của các tòa nhà lớn</p>
        </div>
        <div class="section-discover-body slides">
            <div class="col">
                <a href="{{ route('fe.destination') }}">
                    <img src="{{ asset('fe') }}/img/selfie.jpg" alt="Destination">
                    <div class="caption">
                        <p>DESTINATION</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Một bức tranh phong cảnh tuyệt đẹp với những ngọn núi và cánh đồng lúa ở huyện Trùng Khánh,
                                tỉnh Cao Bằng, Việt Nam. Nơi đây nổi tiếng với đặc sản hạt dẻ Trùng Khánh nhờ điều kiện
                                không khí mát lành cùng thổ nhưỡng trời ban.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.event') }}">
                    <img src="{{ asset('fe') }}/img/culture.jpg">
                    <div class="caption" alt="Culture">
                        <p>EVENT</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Bến cá nhộn nhịp và sầm uất ở Cẩm Phả, Quảng Ninh.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.culture') }}">
                    <img src="{{ asset('fe') }}/img/event.jpg">
                    <div class="caption" alt="Event">
                        <p>CULTURE</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Thiền viện Trúc Lâm Bạch Mã nằm giữa hồ Truồi, gần núi Bạch Mã thuộc huyện Phú Lộc, Thừa
                                Thiên Huế được xây dựng năm 2006 trong bức ảnh chụp từ trên cao.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.news') }}">
                    <img src="{{ asset('fe') }}/img/stay.jpg">
                    <div class="caption" alt="Stay">
                        <p>ADDRESS</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Một góc thành phố mang tên Bác trong một bức ảnh được chụp bằng thiết bị bay không người lái.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Mimika -->
    <section class="section section-gallery">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">OUR GALLERY</h3>
            <p class="section-subtitle">Việt Nam đâu chỉ có Hạ Long, phố cổ Hội An, động Sơn Đoòng nổi tiếng thế giới. Các
                địa danh thác như thác Bản Giốc, vịnh Lan Hạ, Lăng Cô, đèo Hải Vân cũng rất mê hoặc lòng người.
            </p>
        </div>
        <div class="section-gallery-body">
            <div class="row">
                <div class="col-video">
                    <video controls autoplay muted>
                        <source src="{{ asset('fe') }}/img/vietnam.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col">
                            <a href="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                                <img
                                    src="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ asset('fe') }}/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg">
                                <img
                                    src="{{ asset('fe') }}/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <a href="{{ asset('fe') }}/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg">
                                <img
                                    src="{{ asset('fe') }}/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <a href="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                                <img
                                    src="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tours -->
    <section class="section section-tour">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">5 RECOMENDED DESTINATION</h3>
            <p class="section-subtitle">Wisata, kuliner dan sovenir terbaik berdasarkan tingkat ketertarikan wisatawan
                Mimika dan kepopuleran tempat tersebut</p>
        </div>
        <div class="section-tour-body">
            <div class="row">
                @foreach ($item1 as $item)
                    <div class="col-1 slides slideanim">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->name }}</p>
                                    <span class="ion-location big"></span> &nbsp;
                                    <b>{{ $item->category }}</b> <br>
                                    <a href="{{ route('fe.detail_destination', $item->id) }}"
                                        class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @forelse ($item2 as $item)
                    <div class="col-2 slides slideanim">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->name }}</p>
                                    <span class="ion-pizza big"></span> &nbsp;
                                    <b>{{ $item->category }}</b> <br>
                                    <a href="{{ route('fe.detail_destination', $item->id) }}"
                                        class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse ($item3 as $item)
                    <div class="col-2 slides slideanim">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->name }}</p>
                                    <span class="ion-bag big"></span> &nbsp;
                                    <b>{{ $item->category }}</b> <br>
                                    <a href="{{ route('fe.detail_destination', $item->id) }}"
                                        class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- Section News -->
    <section class="section section-news">
        <div class="section-news-head">
            <h3 class="section-title">WHAT'S HAPPENING</h3>
            <p class="section-subtitle">Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Mimika</p>
        </div>
        <div class="section-news-body">
            <div class="row slides">
                @foreach ($items as $item)
                    <div class="col" style="margin:5px">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <a href="{{ route('fe.detail_news', $item->id) }}">
                                <p class="text-top">{{ $item->name }}</p>
                            </a>
                            <p class="text-bottom">{{ $item->created_at }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
