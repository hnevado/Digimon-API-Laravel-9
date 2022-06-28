 <html>
    <head>
        <title>Digimon</title>
    </head>
    <body>
    @foreach ($digimons as $digimon)

        <div style="width:365px;margin:0px auto;text-align:center;border:1px solid black;margin-top:50px;">
            
            <p><img src="{{$digimon['img']}}"></p>
            <p style="background:black;color:white;margin-bottom:0px;padding:5px;"><strong>{{$digimon['name']}}</strong><br/>
            {{$digimon['level']}}</p>
        </div>

    @endforeach
    </body>
 </html>

