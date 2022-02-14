<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        .blink_me {
        animation: blinker 2s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

        .container-fluid {
            padding-left: 2px;
            padding-right: 2px;
        }
    </style>
    <title>ModContatto</title>
</head>

<body style="background-color:cornflowerblue; border: 1px solid #000000;">
    <div style="margin-left:150px; margin-right:150px; margin-top: 50px;">
        <div style="background-color:#DDD; border: 1px solid #000000;">
            <div class="container-fluid; border: 1px solid #000000;">
                <h4 class="display-3" style="font-family:verdana">Modifica</h4>
            </div>
        </div>
        <br>
       
        
        <div style="width: 100%;" style="white-space: nowrap;">
            <form id="imSearch_1" method="POST" action="{{ route('post.rubricamodificata', ['id' => $contatto['id']]) }}">
                @csrf 
                {{method_field('PUT')}}
                <table class="table table-striped  table-hover" width="100%">
                
                    <thead style="background-color:#DDD" >
                        <th scope="col">Nome</th>
                        <th scope="col"><input type="text" name="nome" value="{{$contatto['nome']}}" required></th>
                        </tr>
                        <tr>
                            <th scope="col">Cellulare</th>
                            <th scope="col"><input type="tel" name="cellulare" value="{{$contatto['cellulare']}}" required></th>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col"><input type="email" name="email" value="{{$contatto['email']}}" required></th>
                        </tr>
                        <tr>
                            <th scope="col">Indirizzo</th>
                            <th scope="col"><input type="text" name="indirizzo" value="{{$contatto['indirizzo']}}" required></th>
                        </tr>
                        <tr>
                            <th scope="col">Data di nascita</th>
                            <th scope="col"><input type="date" name="nascita" value="{{$contatto['nascita']}}" required></th>
                        </tr>
                        <tr>
                            <th scope="col">Note</th>
                            <th scope="col"><input type="text" name="note" value="{{$contatto['note']}}" required></th>
                        </tr>
                        
                    </thead>
                    
                </table>
                
                <span onclick="$('#imSearch_1').submit();" style="height: 21px; font: normal normal normal 8pt Tahoma; color: #000000; background-color: #D3D3D3; padding: 6px 6px 5px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">
                    <b>SALVA</b> </span>
                <span onclick="$('#imSearch_4').submit();" style="height: 21px; font: normal normal normal 8pt Tahoma; color: #000000; background-color: #D3D3D3; margin-left: 7px; padding: 6px 6px 5px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer;">
                    <b>TORNA ALLA RUBRICA</b> </span>
            </form>
            
            <form id="imSearch_4" method="GET" action="{{ route('get.rubrica') }}">
                @csrf
            

        </div>
        
    </div>
    </form>
</body>

</html>