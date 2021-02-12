@extends('layouts.master')
@section('title')
    <title>{{ $game->name }}</title>
    <meta property="og:title" content="{{ $game->name }}" />
    <meta property="og:description" content="{{ $game->name }}." />
    <meta property="og:image" content="{{ asset(str_replace('public', 'storage', $game->picture)) }}" />
@endsection
@section('content')
    <section class="breadcrumb-area play" style="padding: 180px 0px 80px!important;">
        <img class="bc-img" src="assets/images/breadcrumb/play.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title">
                        {{ $game->name }}
                    </h4>
                    <ul class="breadcrumb-list">
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                                {{ __('lang.home') }}
                            </a>
                        </li>
                        <li>
                            <span><i class="fas fa-chevron-right"></i> </span>
                        </li>
                        <li>
                            <a href="{{ route('game.index') }}">{{ __('lang.GAMES') }}</a>
                        </li>
                        <li>
                            <span><i class="fas fa-chevron-right"></i> </span>
                        </li>
                        <li>
                            <a href="#">{{ $game->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="play-games">
        <div class="all-games" style="padding: 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel"
                                aria-labelledby="pills-tab1-tab">

                                <div class="container" style="position: relative;
                                                width: 100%;
                                                overflow: hidden;
                                                padding-top: 66.66%;">
                                    <iframe style="position: absolute;
                                                    top: 0;
                                                    left: 0;
                                                    bottom: 0;
                                                    right: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                    border: none;" class="responsive-iframe"
                                        src="{!!  $game->url !!}"></iframe>
                                </div>
                                {{-- <div class="row justify-content-center" style="">
                                    <iframe src="{!!  $game->url !!}"
                                        style="height:{!!  $game->height !!};width:{!!  $game->width !!};"
                                        title="{{ $game->name }}">
                                    </iframe>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
