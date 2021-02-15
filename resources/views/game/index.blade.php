@extends('layouts.master')
@section('title')
    <title>{{ __('lang.all_games') }}</title>
    <meta property="og:title" content="{{ __('lang.all_games') }}" />
    <meta property="og:description" content="{{ __('lang.title') }}." />
    <meta property="og:image" content="{{ asset('assets/images/h-shapes/phone.png') }}" />
@endsection
@section('content')
    <section class="breadcrumb-area play">
        <img class="bc-img" src="{{asset('assets/images/breadcrumb/play.png')}}" alt="">
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
                            <a href="#" style="color: #ff344d">{{ __('lang.GAMES') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="play-games">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gaming-activities">
                        <div class="gaming-activities-inner">
                            <div class="row">
                                @foreach ($gameStatics as $static)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-activities">
                                            <div class="top-area">
                                                <div class="left">
                                                    <div class="icon">
                                                        <img src="{{ asset(str_replace('public', 'storage', $static->game_picture)) }}" alt="">
                                                        <span>
                                                            {{ $static->game_statics_game_play_count }} <i
                                                                class="fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <a href="{{route('game.show',$static->game_slug)}}"><h4 class="title">
                                                        {{ $static->game_name }}
                                                    </h4></a>
                                                    
                                                </div>
                                            </div>
                                            <div class="bottom-area">
                                                <h4 class="title">{{ __('lang.people_are_playing') }}</h4>
                                                <div class="players-count">
                                                    <ul class="players-list">
                                                        @if ($static->game_statics_game_play_count > 10)
                                                            @for ($ten = 0; $ten < 10; $ten++)
                                                                <li>
                                                                    <img src="assets/images/play/people.png" alt="">
                                                                </li>
                                                            @endfor
                                                        @else
                                                            @for ($start = 0; $start < $static->game_statics_game_play_count; $start++)
                                                                <li>
                                                                    <img src="assets/images/play/people.png" alt="">
                                                                </li>
                                                            @endfor
                                                        @endif
                                                    </ul>
                                                    <div class="count-num">
                                                        {{ $static->game_statics_game_play_count > 10 ? '10+' : $static->game_statics_game_play_count }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-games">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="nav" role="tablist">
                            @foreach ($gameCategories as $key => $gameCategory)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('game.categories.show', $gameCategory->slug) }}">
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
                                                    class="mybtn2">{{ \Illuminate\Support\Str::limit($game->name, 10, '...') }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        {{ $games->links() }}
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
