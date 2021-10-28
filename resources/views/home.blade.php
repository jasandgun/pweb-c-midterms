@extends('layout')

@section('title', "Job Portal")

@section('stylesheets')
<style>
    .img-logo {
        display: block;
        max-width: 52px;
        max-height: 52px;
        width: auto;
        height: auto;
    }

    .bg-seminar {
        background-image: url('{{ asset('img') }}/seminar.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        /* background-color: rgba(255,255,255,0.4);
        background-blend-mode: lighten; */
    }

    .bg-jasa {
        background-image: url('{{ asset('img') }}/jasa.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 300px;
        /* background-color: rgba(255,255,255,0.4);
        background-blend-mode: lighten; */
    }


    .highlight-biru-kuning {
        background: rgb(1, 56, 128);
        color: #ffc415;
        font-size: 30px;
        font-weight: 600;
        padding: 6px 17px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        margin-right: 10px;
    }
    .quote {
        color: rgb(0, 0, 0);
        font-size: 20px;
        font-weight: 500;
    }
    .boxed-btn3-home {
        position: absolute;
        /* left: 50%;
        margin-left: -50%; */
        bottom: 50px;
        max-width: 100%;
        display: block;
        right: 0;
        left: 0;
        margin: auto;
    }
    .highlight-kuning-biru {
        background: #ffc100;
        color: rgb(0, 0, 0);
        font-size: 30px;
        font-weight: 600;
        padding: 6px 17px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        margin-right: 10px;
        /* right: 0;
        left: 0;
        bottom: 0;
        margin: auto; */
    }

    div.slider_text div.slider_span p.highlight-kuning-biru {
        background: #ffc415;
        color: rgb(0, 0, 0);
        font-size: 30px;
        font-weight: 500;
        display: inline-block;
        /* border: red solid 1px; */
    }
    .highlight-kuning-biru-kecil {
        background: #ffc415;
        color: rgb(0, 0, 0);
        font-size: 17px;
        font-weight: 600;
        padding: 6px 17px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        margin-right: 10px;

        /* right: 0;
        left: 0;
        bottom: 0;
        margin: auto; */
    }

    .popular_catagory_area h3 {
        color: rgb(1, 56, 128);
    }

    .popular_catagory_area p {
        text-align: center;
        font-size: 22px;
    }

    .bg-img1 {
        background-image: url('{{ asset('img') }}/interview.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        min-height: 350px;
    }

    .bg-img2 {
        background-image: url('{{ asset('img') }}/jobseek.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        min-height: 350px;
    }
    .bg-img3{
        background-image: url('{{ asset('img') }}/workshop.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        min-height: 350px;
    }
    .bg-jumbotron {
        background-image: url('{{ asset('web_asset') }}/img/bg_jumbotron-1.jpg');
    }

</style>

@endsection

@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center bg-jumbotron">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Sharing Experiences</h3>
                            <div class="slider_span" data-wow-duration="1s" data-wow-delay=".5s">
                                <p class="highlight-kuning-biru">Ask your question!</p>
                                {{-- <br> --}}
                                <p class="highlight-kuning-biru">Be an expert, starts from now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area -->
    
    <!--/ catagory_area -->

    <!-- job_listing_area_start  -->
    
    


    <div class="popular_catagory_area" style="padding: 50px 0;">
        <div class="container">
            <h3>Ayo mulai dari sekarang</h3>
            <p class="quote">"Anda mungkin bisa menunda, tapi waktu tidak akan menunggu"</br> -Benjamin Franklin</p>
        </div>
    </div>


@endsection

@section('scripts')
    {{--  --}}
@endsection
