<html>
    <head>
        <title>todo</title>
         <h2>To-Do Input</h2>
    </head>
    <body>
        <form method=post action='/dbsave'>
            Task <input type="text" name='stuff'><br>
            Description<textarea type="text" name='texty'></textarea><br>
            <input type="submit" value='Button'><br>
            {{csrf_field()}}
        <form>
        <a href ='/dbshow'><input type=button value=View></a><br>
    </body>
</html>