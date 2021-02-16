@extends('layouts.master')
@section('title')
    <title>{{ __('lang.profile') }}</title>
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
                                {{ __('lang.profile') }}
                            </h4>
                            @if (session('status'))
                                <div class="alert alert-success" role="success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form enctype="multipart/form-data" 
                                autocomplete="off">                                
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="text" name="name" value="{{ $user->name }}" disabled required class="input-field"
                                    placeholder="{{ __('lang.name') }}">
                                <input disabled type="tel" name="phone_number"  class="input-field" id="phone"
                                    placeholder="+(998){{ substr($user->phone_number, 3) }}" autocomplete="off"
                                    value="{{ substr($user->phone_number, 3) }}">
                                @error('phone_number')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
