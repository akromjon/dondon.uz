<!-- Footer Area Start -->
@if(Route::currentRouteName()!='login' && Route::currentRouteName()!='register')
<footer class="footer" id="footer">
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-box">
                        <form action="{{route('contact.subscribe')}}" id="facts_form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading-area">
                                        <h5 class="sub-title">
                                            {{__('lang.facts_use')}}
                                        </h5>
                                        <h4 class="title">
                                            {{__('lang.subscribe')}}
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-4 d-flex align-self-center">
                                    <div class="icon">
                                        <img src="assets/images/mail-box.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-8 d-flex align-self-center">
                                    <div class="form-area">
                                        <input type="tel" required class="phone-mask" id="phone" placeholder="+(998)__-___-____" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-self-center">
                                    <div class="button-area">
                                        <button class="mybtn1" type="submit">{{__('lang.subscribe')}}
                                            <span><i class="fas fa-paper-plane"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    
</footer>
@endif
<!-- Footer Area End -->

<!-- Back to Top Start -->
<div class="bottomtotop">
    <i class="fas fa-chevron-right"></i>
</div>
<!-- Back to Top End -->
