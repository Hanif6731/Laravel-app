<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit user page</h1>

<a href="{{route('home.index')}}">Back</a>

<form method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{{$user['name']}}"  ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="{{$user['username']}}"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{{$user['password']}}"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="{{$user['type']}}"></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><input type="text" name="dept" value="{{$user['dept']}}"></td>
        </tr>
        <tr>
            <td>CGPA</td>
            <td><input type="text" name="cgpa" value="{{$user['cgpa']}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
