<html>
    <head>
        <title>todo</title>
        <h2>To-Do View</h2>
    </head>
    <body>
       <table border=1>
       <th>ID</th>
       <th>Tag</th>
       <th>About</th>
        @foreach($asdf as $a)
            <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->task}}</td>
            <td>{{$a->description}}</td>
            </tr>
        @endforeach
       </table>
    </body>

</html>