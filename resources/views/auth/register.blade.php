@extends('layouts.master')

@section('content')
    <section class="contact">
        <div class="container-fluid pt-5">
            {{-- <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">
                            Aloqa Qilish
                        </h5>
                        <h2 class="title">
                            Xabar Qoldirish
                        </h2>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-wrapper">
                        <div class="contact-box">
                            <h4 class="title">
                                {{ __('lang.sign_up') }}
                            </h4>
                            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}"
                                autocomplete="off">
                                @csrf
                                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                <input type="tel" name="phone_number" required class="input-field" id="phone"
                                    placeholder="+(998)__-___-____" autocomplete="off" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="text" name="name" required class="input-field" 
                                    placeholder="{{__('lang.name')}}" autocomplete="off" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror

                                <input type="password" name="password" required class="input-field"
                                    placeholder="{{ __('lang.password') }}" autocomplete="off">
                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="password" name="password_confirmation" required class="input-field"
                                    placeholder="{{ __('lang.confirm_password') }}" autocomplete="off">                                

                                <button type="submit" class="mybtn1">{{ __('lang.sign_up') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
