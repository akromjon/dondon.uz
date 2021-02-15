@extends('layouts.master')
@section('title')
@section('title')
    <title>{{ __('lang.title') }}</title>
    <meta property="og:title" content="{{ __('lang.all_games') }}" />
    <meta property="og:description" content="{{ __('lang.title') }}." />
    <meta property="og:image" content="{{ asset('assets/images/h-shapes/phone.png') }}" />
@endsection
@endsection
@section('hero')
<!-- Hero Area Start -->
<div class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex align-self-center">
                <div class="left-content">
                    <div class="content">
                        <h5 class="subtitle">
                            {{ __('lang.online_games') }}
                        </h5>
                        <h1 class="title">
                            {{ __('lang.play_to_win') }}
                        </h1>
                        <p class="text">
                            {{ __('lang.game_content') }}
                        </p>
                        <div class="links">
                            <a href="#games" class="mybtn1 link1">{{ __('lang.start') }}!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img2 d-block d-md-none">
                    <img src="assets/images/heroarea.png" alt="">
                </div>
                <div class="hero-img d-none d-md-block">
                    <img class="img-fluid full-image" src="assets/images/heroarea.png" alt="">
                    <img class="shape phone" src="assets/images/h-shapes/phone.png" alt="">
                    <img class="shape man" src="assets/images/h-shapes/man222.png" alt="">
                    <img class="shape ripple" src="assets/images/h-shapes/ripple.png" alt="">
                    <img class="shape ripple2" src="assets/images/h-shapes/ripple1.png" alt="">
                    <img class="shape bitcoin1" src="assets/images/h-shapes/bitcoin1.png" alt="">
                    <img class="shape bitcoin2" src="assets/images/h-shapes/bitcoin2.png" alt="">
                    <img class="shape shape-icon" src="assets/images/h-shapes/shape.png" alt="">
                    <img class="shape award-bg" src="assets/images/h-shapes/award/bg.png" alt="">
                    <img class="shape award" src="assets/images/h-shapes/award/award.png" alt="">
                    <img class="shape gift-bg" src="assets/images/h-shapes/giftbox/bg.png" alt="">
                    <img class="shape gift" src="assets/images/h-shapes/giftbox/gift.png" alt="">
                    <img class="shape shield-bg" src="assets/images/h-shapes/shield/bg.png" alt="">
                    <img class="shape shield" src="assets/images/h-shapes/shield/shield.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
@endsection
@section('content')
<section class="featured-game">
    <!-- Features Area Start -->
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-box">
                        <div class="feature-box-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon one">
                                            <img src="assets/images/feature/icon1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                {{ __('lang.more20games') }}
                                            </h4>
                                            <a href="{{ route('game.index') }}" class="link">{{ __('lang.start') }}
                                                <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon two">
                                            <img src="{{ asset('assets/images/feature/icon2.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                {{ __('lang.difgames') }}
                                            </h4>
                                            <a href="{{ route('game.index') }}"
                                                class="link">{{ __('lang.start') }}
                                                <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon three">
                                            <img src="{{ asset('assets/images/feature/icon3.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                24/7 {{ __('lang.support') }}
                                            </h4>
                                            <a href="{{ route('contact') }}"
                                                class="link">{{ __('lang.approach') }} <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Area End -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h2 class="title">
                        {{ __('lang.top_games') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="game-slider">
                    @foreach ($games->take(20) as $game)
                        <div class="item">
                            <div class="single-game">
                                <img src="{{ asset(str_replace('public', 'storage', $game->picture)) }}" alt="">
                                <a title="{{$game->name}}" href="{{ route('game.show', $game->slug) }}"
                                    class="mybtn2">{{ \Illuminate\Support\Str::limit($game->name, 10, '...') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bonus-area" id="games">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h2 class="title">
                        {{ __('lang.game_collection') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($games as $game)
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="{{ asset(str_replace('public', 'storage', $game->picture)) }}" alt="">
                            <h4 class="title">
                                {{ $game->name }}
                            </h4>
                        </div>
                        <a href="{{ route('game.show', $game->slug) }}" class="mybtn2">{{ __('lang.play') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $games->links() }}
    </div>
</section>
@endsection
