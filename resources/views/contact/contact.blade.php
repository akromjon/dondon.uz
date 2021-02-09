@extends('layouts.master')
@section('title')
    <title>{{ __('lang.contact') }}</title>
@endsection
@section('content')
    <section class="breadcrumb-area bc-contact">
        <img class="bc-img" src="assets/images/breadcrumb/contact.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="title">
                        {{ __('lang.contact') }}
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
                            <a href="{{ route('contact') }}"> {{ __('lang.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Area End -->
    <section class="contact">
        <img class="left-img" src="assets/images/contact-left.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">
                            {{ __('lang.contact_us') }}
                        </h5>
                        <h2 class="title">
                            {{ __('lang.leave_message') }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <div class="contact-box">
                            <h4 class="title">
                                {{ __('lang.send_message') }}
                            </h4>
                            <form method="POST" enctype="multipart/form-data" action="{{ route('contact.store') }}">
                                @csrf
                                <input type="text" name="name" class="input-field" placeholder="{{ __('lang.name') }}"
                                    required>
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input type="tel" name="phone_number" required class="input-field" id="phone"
                                    placeholder="+(998)__-___-____" autocomplete="off">
                                @error('phone_number')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <textarea class="input-field textarea" name="message" placeholder="{{ __('lang.message') }}"></textarea required>
                                @error('message')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button type="submit" class="mybtn1">{{ __('lang.submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
