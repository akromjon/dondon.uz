@extends('layouts.master')
@section('title')
    <title>{{ __('lang.all_games') }}</title>
    <meta property="og:title" content="{{ __('lang.title') }}" />
    <meta property="og:description" content="{{ __('lang.description') }}." />
    <meta property="og:image" content="{{ 'img' }}" />
@endsection
@section('content')
    <section class="breadcrumb-area play" style="padding: 200px 0px 80px!important;">
        <img class="bc-img" src="assets/images/breadcrumb/play.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title">
                        {{ __('lang.all_games') }}
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
                            <a href="#">{{ __('lang.game_category') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="play-games">
        <div class="all-games" style="padding: 70px 0px 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="nav" role="tablist">
                            @foreach ($gameCategories as $gameCategory)
                                <li class="nav-item">
                                    <a class="nav-link  {{ request()->route('GameCategorySlug') == $gameCategory->slug ? 'active' : null }}"
                                        href="{{ route('game.categories.show', $gameCategory->slug) }}">
                                        <div class="icon">
                                            <img class="one"
                                                src="{{ asset(str_replace('public', 'storage', $gameCategory->picture)) }}"
                                                alt="">
                                            <img class="two"
                                                src="{{ asset(str_replace('public', 'storage', $gameCategory->picture)) }}"
                                                alt="">
                                        </div>
                                        <span>{{ \Illuminate\Support\Str::limit($gameCategory->name, 10, '...') }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel"
                                aria-labelledby="pills-tab1-tab">
                                <div class="row">
                                    @foreach ($games as $game)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-game">
                                                <img src="{{ asset(str_replace('public', 'storage', $game->picture)) }}"
                                                    alt="">
                                                <a href="{{ route('game.show', $game->slug) }}"
                                                    title="{{$game->name}}"
                                                    class="mybtn2">{{ \Illuminate\Support\Str::limit($game->name, 10, '...') }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
