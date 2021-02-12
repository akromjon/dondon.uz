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
                                {{ __('lang.sign_in') }}
                            </h4>
                            <form method="POST" enctype="multipart/form-data" action="{{ route('login') }}"
                                autocomplete="off">
                                @csrf

                                <input autocomplete="false" name="hidden" type="text" style="display:none;">


                                <input type="tel" name="phone_number" required class="input-field" id="phone"
                                    placeholder="+(998)__-___-____" autocomplete="off">
                                    @error('phone_number')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @if (session('status'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <input type="password" name="password" required class="input-field"
                                    placeholder="{{ __('lang.password') }}" autocomplete="off">

                                <a class="btn btn-link" style="margin-left: -10px;"
                                    href="{{ route('password.request') }}">
                                    {{ __('lang.forgot_password') }}
                                </a><br><br>

                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button type="submit" class="mybtn1">{{ __('lang.sign_in') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
