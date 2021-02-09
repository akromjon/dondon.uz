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
                                {{ __('lang.profile') }}
                            </h4>
                            @if (session('status'))
                                <div class="alert alert-success" role="success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" enctype="multipart/form-data" action="{{ route('user.update') }}"
                                autocomplete="off">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="text" name="name" value="{{ $user->name }}" required class="input-field"
                                    placeholder="{{ __('lang.name') }}">
                                <input type="tel" name="phone_number"  class="input-field" id="phone"
                                    placeholder="+(998){{ substr($user->phone_number, 3) }}" autocomplete="off"
                                    value="{{ substr($user->phone_number, 3) }}">
                                @error('phone_number')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button type="submit" class="mybtn1">{{ __('lang.update_profile') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
