<!-- Footer Area Start -->

<footer class="footer" id="footer"> 
    <div class="copy-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-area">
                        <p>Copyright © 2021
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="copright-area-links">
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
                </div>
            </div>
        </div>
    </div>
</footer> 

<!-- Footer Area End -->

<!-- Back to Top Start -->
<div class="bottomtotop">
    <i class="fas fa-chevron-right"></i>
</div>
<!-- Back to Top End -->
