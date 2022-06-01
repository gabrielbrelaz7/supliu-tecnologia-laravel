@section('title', 'Esqueceu a Senha? | Tião Carreiro e Pardinho')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="Logotipo">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Apenas deixe-nos saber seu endereço de email e nós enviaremos um email com link de redefinição de senha.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar link de redefinição de senha') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
