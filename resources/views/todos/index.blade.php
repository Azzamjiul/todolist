<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List TODOs</title>
  <style>
    table, th, td {
      border: 1px solid;
    }
  </style>
</head>
<body>
  <h1>All Todos</h1>

  <table>
    <thead>
      <th>No</th>
      <th>Name</th>
      <th>Status</th>
      <th>Action</th>
    </thead>
    <tbody>
      @foreach ($todos as $k => $todo)
      <tr>
        <td> {{ $k + 1 }} </td>
        <td> {{ $todo->name }} </td>
        <td> {{ $todo->status }} </td>
        <td> 
          <a href="{{ route('todo.edit', $todo->id) }}">edit</a>

          <a href="javascript:void(0);" onclick="document.getElementById('form-{{$todo->id}}').submit()">delete</a>

          <form id="form-{{$todo->id}}" action="{{ route('todo.delete', $todo->id) }}" method="POST">
            @csrf
            @method('delete')
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>