<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <form action="store" method="post">
        <label for="name">name</label>
        <input type="text" name="name"><br/><br/>
        <label for="email">email</label>
        <input type="text" name="email"><br/>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <label for=""></label>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>