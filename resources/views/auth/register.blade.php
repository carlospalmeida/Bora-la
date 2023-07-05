@extends('app')


@section('conteudo')

<div class="container mt-5">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-floating">
            <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-label for="name" value="{{ __('Nome') }}" />
        </div>

        <div class="mt-4 form-floating">
            <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-label for="email" value="{{ __('Email') }}" />
        </div>

        <div class="mt-4 form-floating">
            <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
            <x-label for="password" value="{{ __('Senha') }}" />
        </div>

        <div class="mt-4 form-floating">
            <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
        </div>

        <h5 class="mt-5">Opções para quem deseja ser motorista:</h5>

        <div class="mt-4 form-floating">
            <x-input id="cnh" class="block mt-1 w-full form-control" type="number" name="cnh" />
            <x-label for="cnh" value="{{ __('CNH') }}" />
        </div>

        <div class="mt-4 form-floating">
            <x-input id="crlv" class="block mt-1 w-full form-control" type="text" name="crlv" />
            <x-label for="crlv" value="{{ __('CRLV') }}" />
        </div>

        <div class="mt-4 form-floating">
            <x-input id="reg" class="block mt-1 w-full form-control" type="text" name="reg" />
            <x-label for="reg" value="{{ __('Região de serviço') }}" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-label for="terms">
                <div class="flex items-center">
                    <x-checkbox name="terms" id="terms" required />

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-label>
        </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já é registrado!') }}
            </a>

            &nbsp;&nbsp;&nbsp;                    

            <x-button class="ml-4">
                {{ __('Registrar') }}
            </x-button>
        </div>
    </form>
</div>