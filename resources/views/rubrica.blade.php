<html>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
   
    .container-fluid {
        padding-left: 2px;
        padding-right: 2px;
    }

    button {
        font: 14px 'Open Sans', sans-serif;
        background-color: cornflowerblue;
        color: white;
        padding: 1px;
        cursor: pointer;
        border: none;
        margin-top: 3px;
        text-transform: uppercase;
        width: 57px;
    }
    .ciao{
        height: 21px; 
        font: normal normal normal 8pt Tahoma; 
        color: #000000; 
        background-color: #D3D3D3; 
        margin-right: auto; 
        margin-left: auto; 
        padding-left: 6px;
        padding-right: 6px;
        border: 1px solid #000000; 
        vertical-align: middle; 
        cursor: pointer;
        width: auto;
    }
</style>
<title>Rubrica</title>
</head>

<body style="background-color:cornflowerblue; border: 1px solid #000000;">
    <div style="margin-left:150px; margin-right:150px; margin-top: 50px;">
        <div style="background-color:#DDD;  border: 1px solid #000000;">
            <div class="container-fluid,  border: 1px solid #000000;">
                <h1 class="display-3" style="font-family:verdana">La tua Rubrica<span class="blink_me"><b>:</b></span></h1>
            </div>
        </div>
        <br>

        <div style="width: 100%;">
            <form id="imSearch_1" style="white-space: nowrap" method="POST" action="{{ route('post.rubricasearch') }}">
                @csrf
                <fieldset>
                    <x-input id="cercamail" style="width: 79%;" class="block mt-1 w-full" type="text" name="email" :value="old('email')" autofocus />
                    <button><span style="height: 21px; font: normal normal normal 8pt Tahoma; color: #000000; background-color: #D3D3D3; margin-left: 8px; padding: 6px 6px 5px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">
                            <b>{{ __('CERCA') }}</b>
                        </span>
                    </button>

                    <a href="{{ route('get.addcontatto') }}"> <span style="height: 21px; font: normal normal normal 8pt Tahoma; color: #000000; background-color: #D3D3D3; margin-left: 7px; padding: 6px 6px 5px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">
                            <b>{{ __('AGGIUNGI') }}</b>
                        </span>
                    </a>
                    <a href="{{ route('dashboard') }}"><span style="height: 21px; font: normal normal normal 8pt Tahoma; color: #000000; background-color: #D3D3D3; margin-right: 3px; margin-left: 8px; padding: 6px 6px 5px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">
                            <b>{{ __('HOME') }}</b>
                        </span>
                    </a>

                </fieldset>
            </form>

        </div>

        <table class="table table-striped table-dark table-hover" width="100%">




            <thead class="thead-dark">

                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cellulare</th>
                    <th scope="col">Email</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Data di nascita</th>
                    <th scope="col">Note</th>
                </tr>
                @foreach($contatti as $contatto)
                <tr>
                    <td>{{$contatto['nome']}}</td>
                    <td>{{$contatto['cellulare']}}</td>
                    <td>{{$contatto['email']}}</td>
                    <td>{{$contatto['indirizzo']}}</td>
                    <td>{{$contatto['nascita']}}</td>
                    <td>{{$contatto['note']}}</td>
                    <td>
                    <th>
                        <form id="id" name='id' style="white-space: nowrap" method="POST" action="{{ route('modifica.rubrica', ['id' => $contatto['id']]) }}">
                            @csrf
                            <button class="ciao"><b>MODIFICA</b></button>
                        </form>
                    </th>
                    <th>
                        <form id="id" name='id' style="white-space: nowrap" method="POST" action="{{ route('delete.rubrica', ['id' => $contatto['id']]) }}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="ciao"><b>Delete</b></button>
                        </form>
                    </th>
                    </td>

                </tr>
                @endforeach

            </thead>
        </table>

        {{$contatti->links()}}



</body>

</html>