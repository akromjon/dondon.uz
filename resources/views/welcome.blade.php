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
                        <h5 class="subtitle">
                            Try to check out our
                        </h5>
                        <h2 class="title">
                            featured games
                        </h2>
                        <p class="text">
                            Check out our latest featured game! To meet today's challenges & earn cryptocurrency. Top 10
                            players receive prizes every hour!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="game-slider">
                        <div class="item">
                            <div class="single-game">
                                <img src="assets/images/game/icon1.png" alt="">
                                <a href="index.html#" class="mybtn2">PLay NoW !</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-game">
                                <img src="assets/images/game/icon2.png" alt="">
                                <a href="index.html#" class="mybtn2">PLay NoW !</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-game">
                                <img src="assets/images/game/icon3.png" alt="">
                                <a href="index.html#" class="mybtn2">PLay NoW !</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-game">
                                <img src="assets/images/game/icon2.png" alt="">
                                <a href="index.html#" class="mybtn2">PLay NoW !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('winners')
    <section class="activities">
        <img class="shape shape1" src="assets/images/people/shape1.png" alt="">
        <img class="shape shape2" src="assets/images/people/shape2.png" alt="">
        <img class="shape shape3" src="assets/images/people/shape3.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">
                            The Smarter Way
                        </h5>
                        <h2 class="title">
                            Lend and Borrow
                        </h2>
                        <p class="text">
                            The World's First Crypto Lending Marketplace and
                            Affordable and competitive interest rates
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-menu-area">
                        <ul class="nav nav-lend mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-all-bets-tab" data-toggle="pill"
                                    href="index.html#pills-all-bets" role="tab" aria-controls="pills-all-bets"
                                    aria-selected="true">All bets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-my-bets-tab" data-toggle="pill"
                                    href="index.html#pills-my-bets" role="tab" aria-controls="pills-my-bets"
                                    aria-selected="false">my bets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-my-jackpots-tab" data-toggle="pill"
                                    href="index.html#pills-my-jackpots" role="tab" aria-controls="pills-my-jackpots"
                                    aria-selected="false">jackpots</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all-bets" role="tabpanel"
                            aria-labelledby="pills-all-bets-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">BET ID</th>
                                            <th scope="col">BET AMOUNT</th>
                                            <th scope="col">CHANCE</th>
                                            <th scope="col">GAME</th>
                                            <th scope="col">PROFIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-my-bets" role="tabpanel" aria-labelledby="pills-my-bets-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">BET ID</th>
                                            <th scope="col">BET AMOUNT</th>
                                            <th scope="col">CHANCE</th>
                                            <th scope="col">GAME</th>
                                            <th scope="col">PROFIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-my-jackpots" role="tabpanel"
                            aria-labelledby="pills-my-jackpots-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">BET ID</th>
                                            <th scope="col">BET AMOUNT</th>
                                            <th scope="col">CHANCE</th>
                                            <th scope="col">GAME</th>
                                            <th scope="col">PROFIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon1.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon2.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon3.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon4.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                b799b8724b
                                            </td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                            <td>70%</td>
                                            <td>Dice</td>
                                            <td>
                                                <img src="assets/images/icon5.png" alt="">
                                                0.00000051
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fun fact Area Start -->
        <div class="funfact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-fun">
                            <img src="assets/images/funfact/icon1.png" alt="">
                            <div class="count-area">
                                <div class="count">93K</div>
                            </div>
                            <p>
                                Players
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-fun">
                            <img src="assets/images/funfact/icon2.png" alt="">
                            <div class="count-area">
                                <div class="count">99+</div>
                            </div>
                            <p>
                                Games
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-fun">
                            <img src="assets/images/funfact/icon3.png" alt="">
                            <div class="count-area">
                                <div class="count">70+</div>
                            </div>
                            <p>
                                Winners
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fun fact Area End -->
    </section>
    <!-- Latest Activities Area End -->
    <!-- Get Start Area Start -->
    <section class="get-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex align-self-center">
                    <div class="left-area">
                        <div class="section-heading">
                            <h5 class="subtitle">
                                every day lots of wins
                            </h5>
                            <h2 class="title ">
                                be one of them
                            </h2>
                            <p class="text">
                                Get started in less than 5 min - no credit card
                                required.Gain early access to Dooplo and experience crypto like never before.
                            </p>
                            <a href="index.html#" class="mybtn1">Play Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right-image">
                        <img src="assets/images/get-start.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Start Area End -->
    <!-- Recent Winners Area Start -->
    <section class="recent-winners">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">
                            Try to Check out our
                        </h5>
                        <h2 class="title">
                            Recent Winners
                        </h2>
                        <p class="text">
                            We update our site regularly; more and more winners are added every day! To locate the most
                            recent winner's information
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-winer">
                        <div class="top-area">
                            <div class="left">
                                <h4 class="name">
                                    Leroy Roy
                                </h4>
                                <p class="date">
                                    01.08.2019
                                </p>
                            </div>
                            <div class="right">
                                <p class="id">#5747e75482</p>
                            </div>
                        </div>
                        <div class="bottom-area">
                            <div class="left">
                                0.099 ETH
                            </div>
                            <div class="right">
                                <img src="assets/images/icon2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-winer">
                        <div class="top-area">
                            <div class="left">
                                <h4 class="name">
                                    Jeff Mack
                                </h4>
                                <p class="date">
                                    01.08.2019
                                </p>
                            </div>
                            <div class="right">
                                <p class="id">#5747e75482</p>
                            </div>
                        </div>
                        <div class="bottom-area">
                            <div class="left">
                                0.099 ETH
                            </div>
                            <div class="right">
                                <img src="assets/images/icon2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-winer">
                        <div class="top-area">
                            <div class="left">
                                <h4 class="name">
                                    Neal Morris
                                </h4>
                                <p class="date">
                                    01.08.2019
                                </p>
                            </div>
                            <div class="right">
                                <p class="id">#5747e75482</p>
                            </div>
                        </div>
                        <div class="bottom-area">
                            <div class="left">
                                0.099 ETH
                            </div>
                            <div class="right">
                                <img src="assets/images/icon2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-xl-center">
                    <a class="mybtn2" href="index.html#">View All </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent Winners Area End -->
@endsection
