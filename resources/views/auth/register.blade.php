<!DOCTYPE html>
<html style="background-color:cornflowerblue">
    
    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        
    </head>
    <body>
        <style>
html,body {
    padding: 0;
    margin: 0;
    font: 14px 'Open sans', sans-serif;
    color: #333;
}
h2{
    text-align: center ;
}
h1 {
    margin: 0;
    margin-bottom: 20px;
	font-size: 24px;
}
div{
    padding: 40px;
    background: #DDD;
    border: 4px solid #AAA;
    width: 360px;
    margin: 30px auto;
}
input {
	font: 14px 'Open Sans', sans-serif;
    border: 2px solid #ccc;
    padding: 6px;
    display: block;
	margin-bottom: 10px;
    width: 96%;
}
button {
    font: 14px 'Open Sans', sans-serif;
    background-color: #4285f4;
    color: white;
    padding: 6px;
    cursor: pointer;
    border: none;
    margin-top: 10px;
	text-transform: uppercase;
    width: 100px;
}
</style>

<x-guest-layout>
    
        

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            

            <!-- Email Address -->
            
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            

            <!-- Password -->
            
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            

            <!-- Confirm Password -->
            
                <x-label for="password_confirmation" :value="__('Conferma Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sei già registrato?') }}
                </a>
                <br>
                <x-button class="ml-4">
                    {{ __('Registrati') }}
                </x-button>
            </div>
        </form>
    
</x-guest-layout>
