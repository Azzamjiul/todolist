<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Todo</title>
</head>
<body>
  <h1>Add new todo</h1>

  <form action="{{ route('todo.store') }}" method="POST">
    @csrf

    <div>
      <label for="">Name</label>
      <input type="text" name="name">
    </div>

    <button type="submit">Add</button>
  </form>
</body>
</html>