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
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel"
                                aria-labelledby="pills-tab1-tab">
                                <div class="embed-responsive embed-responsive-1by1" id="panel-fullscreen">
                                    <iframe class="embed-responsive-item" frameborder="0"
                                         src="{{ $game->url }}"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
