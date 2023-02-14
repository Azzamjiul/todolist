<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Todo</title>
</head>
<body>
  <h1>Update todo</h1>

  <form action="{{ route('todo.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
      <label for="">Name</label>
      <input type="text" name="name" value="{{ $todo->name }}">
    </div>

    <div>
      <label for="">Status</label>
      <select name="status">
        <option @if($todo->status == 0) selected @endif value="0">0</option>
        <option @if($todo->status == 1) selected @endif value="1">1</option>
      </select>
    </div>

    <button type="submit">Update</button>
  </form>
</body>
</html>