<html><center>
    <head>
        <title>ToDo</title>
         <h2>To-Do Input</h2>
    </head>
    <body>
        <form method=post action='/dbsave'>
            Tag <br><input type="text" name='stuff'><br>
            About<br><textarea name='texty'></textarea><br>
            <input type="submit" value='Save'><br>
            {{csrf_field()}}
        <form>
        <a href ='/dbshow'><input type=button value=View></a><br>
    </body></center>
</html>