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

                                <button type="submit" class="mybtn1">{{ __('lang.verify_code') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
