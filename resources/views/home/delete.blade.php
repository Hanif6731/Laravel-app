<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>

<h1>Delete user page</h1>
<a href="{{route('home.index')}}">Back</a>
<form method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
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
    <h3>Are you sure?</h3>
    <input type="submit" name="submit" value="Confirm">
</form>
</body>
</html>
