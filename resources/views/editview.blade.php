<html>
    <title>Edit View</title>
    <h2>Edit</h2>
    <body>
        <form method=post action='/edit'>
           Tag <input type=text name=evalu value='{{$ad->task}}'><br>
           Description <textarea name=text1 >{{$ad->description}}</textarea><br>
           <input type=hidden name=hdid value='{{$ad->id}}'>
           <input type='submit' value='Done'>
           {{csrf_field()}}
        </form>
    </body>
</html>
