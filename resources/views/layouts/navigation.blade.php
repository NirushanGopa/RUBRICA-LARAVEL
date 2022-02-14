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

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        

        <!-- Responsive Settings Options -->
        
                <h1>Le tue credenziali sono:</h1>
                <b>Nome</b><br>{{ Auth::user()->name }}
                <br><br>
                <b>Email</b><br>
                {{ Auth::user()->email }}
                <br><br>
            

            
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-button>
                    {{ __('Log out') }}
                    </x-button>
                    
                </form>
                

                <form method="GET" action="{{ route('get.rubrica') }}">
                    @csrf
                    <x-button>
                    {{ __('Rubrica') }}
                    </x-button>
                    
                </form>
        
        

</nav>
