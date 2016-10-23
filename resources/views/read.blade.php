<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <style>
        table,thead,th,tr,td{
            border-collapse:collapse;
            border:1px solid black;
            padding-left:1.5em;
        }
    </style>
</head>
<body>
    <h1><a href="create">CREATE</a></h1><br/>
    <table style="width:100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        @foreach ($user as $users)
            <tr>
                <td><?=$no++;?></td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <a href="show/{{$users->id}}">Show</a> | 
                    <a href="edit/{{$users->id}}">Edit</a> | 
                    <a href="delete/{{$users->id}}">Delete</a> 
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>