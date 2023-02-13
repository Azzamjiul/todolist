<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration Page</title>
</head>
<body>
  <h1>Please register first</h1>
  <form action="{{ route('register') }}" method="POST">
    @csrf

    <div>
      <label for="">Name</label>
      <input type="name" name="name">
    </div>

    <div>
      <label for="">Email</label>
      <input type="email" name="email">
    </div>

    <div>
      <label for="">Password</label>
      <input type="password" name="password">
    </div>

    <button type="submit">Register</button>
  </form>
</body>
</html>