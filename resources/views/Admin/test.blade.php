<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route('create')}}" method="post">
  @csrf
  <div class="mb-3">
    <input type="text" name="email" placeholder="username">
  </div>
  <div class="mb-3">
    <input type="tel" name="password" placeholder="password">
  </div>
  <div class="mb-3">
    <input type="submit" name="submit">
  </div>
  </form>
</body>
</html>
