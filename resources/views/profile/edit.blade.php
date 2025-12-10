@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white dark:bg-gray-800 rounded shadow">

        <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Modifier mon profil</h2>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200">Nom</label>
                <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200">Mot de passe (laisser vide si inchangé)</label>
                <input type="password" name="password" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-200">Confirmer mot de passe</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded">
            </div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Enregistrer
            </button>
        </form>

    </div>
@endsection





