@extends('layouts.master')
@section('title')
    <title> {{ __('lang.title', ['name' => 'TEST']) }}</title>
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
                                New Crypto Game
                            </h5>
                            <h1 class="title">
                                PLay To WIN
                            </h1>
                            <p class="text">
                                Play, Invest,Exchange and Join the
                                Contest with high rewards at Dooplo!
                            </p>
                            <div class="links">
                                <a href="index.html#" class="mybtn1 link1">Get Started Now!</a>
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
                                                    Exclusive Offer
                                                </h4>
                                                <a href="index.html#" class="link">read more <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-feature">
                                            <div class="icon two">
                                                <img src="assets/images/feature/icon2.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Provably Fair
                                                </h4>
                                                <a href="index.html#" class="link">read more <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-feature">
                                            <div class="icon three">
                                                <img src="assets/images/feature/icon3.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    24/7 Support
                                                </h4>
                                                <a href="index.html#" class="link">read more <i
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
                            {{ __('lang.games') }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="game-slider">
                        @foreach ($games as $game)
                            <div class="item">
                                <div class="single-game">
                                    <img src="{{ asset(str_replace('public', 'storage', $game->picture)) }}" alt="">
                                    <a href="{{ route('game.show', $game->slug) }}"
                                        class="mybtn2">{{ \Illuminate\Support\Str::limit($game->name, 10, '...') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bonus-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">
                            Try to check out our
                        </h5>
                        <h2 class="title">
                            Dooplo Bonuses
                        </h2>
                        <p class="text">
                            We update our site regularly; more and more winners are added every day! To locate the most
                            recent winner's information
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic1.png" alt="">
                            <h4 class="title">
                                Lucky Bet bonus
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic2.png" alt="">
                            <h4 class="title">
                                Progressive jackpot
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic3.png" alt="">
                            <h4 class="title">
                                Affiliate program
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic4.png" alt="">
                            <h4 class="title">
                                Bitcoin Faucet
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic5.png" alt="">
                            <h4 class="title">
                                GOLDEN STAR
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bonus">
                        <div class="content">
                            <img src="assets/images/bonus/ic6.png" alt="">
                            <h4 class="title">
                                Challenger
                            </h4>
                        </div>
                        <a href="bonus.html#" class="mybtn2">PLay NoW !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

