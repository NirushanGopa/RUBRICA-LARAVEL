<!DOCTYPE html>
<html style="background-color:cornflowerblue">
    
    <head>
        <title>Login</title>
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
    
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors  :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            

            <!-- Password -->
            
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
        
                <x-button>
                    {{ __('Log in') }}
                </x-button>
                
            
        </form>
        <form method="GET" action="{{ route('register') }}">
                <x-button>
                    {{ __('Registrati') }}
                </x-button>
                </form>
    
</x-guest-layout>
    </body>
</html>