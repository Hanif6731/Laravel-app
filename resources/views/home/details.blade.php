<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>

<h1>Details Page </h1>
<a href="{{route('home.index')}}">Home</a> | <a href="{{route('home.edit',$user['userId'])}}">Edit User</a> | <a href="{{route('home.delete',$user['userId'])}}">Delete User</a>

    <table>
        <tr style="text-align: left"><th colspan="2">User info:</th></tr>
        <tr>
            <td>ID</td>
            <td>: {{$user['userId']}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>: {{$user['name']}}</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>: {{$user['username']}}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: {{$user['password']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{$user['type']}}</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>: {{$user['dept']}}</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>: {{$user['cgpa']}}</td>
        </tr>
    </table>

</body>
</html>
