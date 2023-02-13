<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List TODOs</title>
</head>
<body>
  <h1>All Todos</h1>

  <ol>
    @foreach ($todos as $todo)
      <li>{{ $todo->name }} - Status: {{ $todo->status }}</li>  
    @endforeach
  </ol>
</body>
</html>