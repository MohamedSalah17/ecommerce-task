@extends('front.layouts.master')
@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp

@section('title')
    {{ __('lang.home') }}
@endsection

@section('css')
    <style>
        .home {
            position: relative;
            text-align: center;
            color: white;
        }

       .bg-sec-color{
        background: transparent linear-gradient(81deg, #374BAA 0%, #647CF3 100%) 0% 0% no-repeat padding-box;
       }


        .box-body {
            background: #ffffff6b 0% 0% no-repeat padding-box;
            border-radius: 8px;
            color: black;
            padding: 20px;
        }


        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            /* padding: 6rem 11rem !important; */
            border-radius: calc(0.25rem - 1px);
        }




    </style>
@endsection

@section('content')

<section class="home-content">
    <div class="home-section-box">
        <div class="centered">
            <div class="content-box ">
                <div class="header text-center">
                    <img src="{{ asset('front/images/b.png') }}"
                    class="{{ App\Models\Helper::isMobile() ? 'img-30' : 'img-50' }}" alt=""><br>
                </div>
                <div class="content-body text-center pt-4 fw-bold">
                    <p>
                        {{ __('lang.welcome_to_our_store') }}
                    </p>
                </div><br>
            </div>
            <br>
            <br>

        </div>
    </div>
</section>

<section class="products-section container" >
    @if (count($products) > 0)
        <div class="row mt-3">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card round-18 border-0" style="overflow: hidden;padding: 10px;">
                    <img src="{{ asset(optional($product)->img) }}" style="width: 100%;height: 250px; position: relative;" class="card-img-top" alt="...">
                    <div class="card-body p-0 pt-4 {{ isRtl()?'text-right':'text-left' }}">
                        <h4 class="card-title main-color"><b>{{optional($product)->name}}</b></h4>
                        <p class="card-text w3-small text-muted">{{substr(optional($product)->description , 0 , 50)}}</p>
                        <span class="sec-color "> EGP {{ optional($product)->price }}</span>
                        <br> <br>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

    @else
    <div class="alert alert-warning text-center mt-5 mb-5" role="alert">
        {{__('lang.there_is_no_data')}}
    </div>
    @endif
</section>

@endsection




@section('js')
    <script>

    </script>
@endsection
