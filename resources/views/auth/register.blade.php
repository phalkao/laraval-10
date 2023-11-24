@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex flex-wrap items-center">
            {{-- Logo --}}
            <div class="w-full xl:block xl:w-1/2">
                @include('auth.partials.logo')
            </div>

            {{-- formulario --}}
            <div class="w-full xl:block xl:w-1/2">
                @include('auth.partials.form-register')
            </div>
        </div>
    </div>
@endsection