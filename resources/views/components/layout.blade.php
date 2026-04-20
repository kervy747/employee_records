<!DOCTYPE html>
<html lang="en">
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="flex">
  <header class="font-bold text-5xl mt-4 block">
    <h1>{{$headings}}</h1>
  </header>   

  <div>
  {{ $slot }}
  </div>
</body>
</html> 