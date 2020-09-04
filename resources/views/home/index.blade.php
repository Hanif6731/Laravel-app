<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h1>Welcome home!</h1>

<a href="{{route('home.create')}}">Create User</a> |
<a href="{{route('logout.index')}}">logout</a>


<h2>user list</h2>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Username</td>
        <td>Password</td>
        <td>Type</td>
        <td>Department</td>
        <td>CGPA</td>
        <td>Action</td>
    </tr>

    @foreach($users as $i=>$user)
        <tr>
            <td>{{$users[$i]['userId']}}</td>
            <td>{{$users[$i]['name']}}</td>
            <td>{{$users[$i]['username']}}</td>
            <td>{{$users[$i]['password']}}</td>
            <td>{{$users[$i]['type']}}</td>
            <td>{{$users[$i]['dept']}}</td>
            <td>{{$users[$i]['cgpa']}}</td>
            <td>
                <a href="{{route('home.edit',$users[$i]['userId'])}}">Edit</a> |
                <a href="{{route('home.delete',$users[$i]['userId'])}}">Delete</a> |
                <a href="{{route('home.details',$users[$i]['userId'])}}">Details</a> |
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
