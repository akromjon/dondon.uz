@extends('layouts.master')
@section('title')
    <title>{{ __('lang.verify_code') }}</title>
    <meta property="og:title" content="{{ __('lang.all_games') }}" />
    <meta property="og:description" content="{{ __('lang.title') }}." />
    <meta property="og:image" content="{{ asset('assets/images/h-shapes/phone.png') }}" />
@endsection
@section('content')
    <section class="contact">
        <div class="container-fluid pt-5">           
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form-wrapper">
                        <div class="contact-box">
                            <h4 class="title">
                                {{ __('lang.verify_code') }}
                            </h4>
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('phone.verification.verify') }}" autocomplete="off">
                                @csrf
                                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                <input type="tel" name="verification_code" required class="input-field" id="verification"
                                    placeholder="#" autocomplete="off">
                                @if (session('status'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @error('verification_code')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <button type="submit" class="mybtn1">{{ __('lang.verify') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
