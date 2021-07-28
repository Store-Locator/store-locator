<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h4>STAFF</h4>
    <table class="table table-hover">
    <thead>
    <th>Name</th>
    <th>E-mail</th>

    </thead>
    <tbody>
    <tr>
    <td>{{ $LoggedUserInfo['name'] }}</td>
    <td>{{ $LoggedUserInfo['email'] }}</td>
    <td><a href="{{ route('logout') }}">LOGOUT</a></td>

    </tr>
    </tbody>
    </table>
    <ul>
        <li><a href="/dashboard">dashboard</a></li>
        <li><a href="/setting">setting</a></li>
        <li><a href="/profile">profile</a></li>
        <li><a href="/staff">staff</a></li>
    </ul>
    </col-md-offset-3>
    </div>
    </div>
</body>
</html>