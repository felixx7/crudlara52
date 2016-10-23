<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    {{Form :: model($user, ['method' => 'patch', 'action' => ['testing@update', $user->id]])}}
    
    <label for="name">name</label>
    <input type="text" name="name" value="{{$user->name}}"><br/><br/>
    <label for="email">email</label>
    <input type="text" name="email" value="{{$user->email}}"><br/><br/>
    <input type="submit" name="submit" value="Submit">
    {{Form :: close()}}
</body>
</html>