<html>
    <head>
        <title>todo</title>
        <h2>To-Do View</h2>
    </head>
    <body>
       
        @foreach($asdf as $a)
            {{ $a->id." ".$a->task." ".$a->description }}<br>
        @endforeach
    
    </body>

</html>