<html>
    <head>
        <title>todo</title>
        To-Do
    </head>
    <body>
        <form method=post action='/dbsave'>
            <input type="text" name='stuff'><br>
            <input type="submit" value='Button'><br>
            {{csrf_field()}}
        <form>
    </body>
</html>