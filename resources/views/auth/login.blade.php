@extends('app')

@section('conteudo')
<div class="container mt-5">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- usuario -->
        <div class="form-floating mb-3">
            <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-label for="email" value="{{ __('Email') }}" />
        </div>

        <!-- senha -->
        <div class="mt-4 form-floating">
            <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
            <x-label for="password" value="{{ __('Senha') }}" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('cadastre-se') }}
            </a>

            &nbsp;&nbsp;

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('esqueceu sua senha?') }}
            </a>

            @endif
            &nbsp;&nbsp;
            <x-button class="ml-4 btn btn-primary">
                {{ __('Login') }}
            </x-button>
        </div>


    </form>
   
</div>