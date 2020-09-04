<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h1>Create user page</h1>
<a href="{{route('home.index')}}">Back</a>
<form method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" ></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" ></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" ></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><input type="text" name="dept" ></td>
        </tr>
        <tr>
            <td>CGPA</td>
            <td><input type="text" name="cgpa" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Create"></td>
        </tr>
    </table>
</form>
</body>
</html>
