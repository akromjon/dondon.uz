<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>
<!-- preloader area end -->
<!-- Header Area Start  -->
<header class="header">
    <!-- Top Header Area Start -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="left-content">
                            <ul class="left-list">
                                <li>
                                    <p>
                                        <i class="fas fa-headset"></i> <a href="tel:998990005303">+998 99 000 53 03</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-envelope"></i> <a href="email: info@dondon.uz">info@dondon.uz</a>
                                    </p>
                                </li>
                                <li>
                                    <div class="language-selector">
                                        {{-- <select name="language"  class="language"> --}}
                                             {{-- <option value="1">English</option>
                                            <option value="2">France</option>
                                            <option value="3">Japan</option> --}}
                                            @foreach ($languages as $lang)
                                            @if($lang=='uz')
                                            <a href="{{ url()->current() . '/?language=' . $lang }}">O'zbek</a>
                                            @else
                                            <a href="{{ url()->current() . '/?language=' . $lang }}">Русский</a> |
                                            @endif
                                            @endforeach                                           
                                        {{-- </select> --}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right-content">
                            <ul class="right-list">                                
                                <li>
                                    @guest
                                    <a href="{{route('login')}}" class="sign-in">
                                        <i class="fas fa-sign-in-alt"></i> {{__('lang.sign_in')}}
                                    </a>
                                    @if (Route::has('register'))
                                    <a href="{{route('register')}}" class="sign-in">
                                        <i class="fas fa-user-plus"></i> {{__('lang.sign_up')}}
                                    </a>
                                    @endif
                                    @else
                                    <a href="{{route('user.show',Auth::user()->phone_number)}}" class="sign-in">
                                        <i class="fas fa-user"></i> {{__('lang.profile')}}
                                    </a>
                                    <a class="sign-in " data-toggle="modal" data-target="#login" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i> {{ __('lang.logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Header Area End -->
    <!--Main-Menu Area Start-->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand " style="color: white; font-size:25px;" href="{{route('home')}}">
                            <span style="color:#ff344d;">D</span>on<span style="color:#ff344d;">D</span>on.uz
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                            aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()=='home'){{'active'}}@endif" href="{{route('home')}}">
                                        {{__('lang.home')}}
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()=='game.index'){{'active'}}@endif" href="{{route('game.index')}}">
                                        {{__('lang.GAMES')}}
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>                        
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()=='contact'){{'active'}}@endif" href="{{route('contact')}}">
                                        {{__('lang.contact')}}
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>                               
                            </ul>
                            <a href="#" class="mybtn1" data-toggle="modal" data-target="#signin"> {{__('lang.telegram')}}</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Main-Menu Area Start-->
</header>
<!-- Header Area End  -->
