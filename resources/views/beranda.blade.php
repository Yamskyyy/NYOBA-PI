<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ini adalah halaman beranda</h1>
    @foreach ($users as $key => $item)
        <p>{{ $key }} | {{ $item->email }}</p>
    @endforeach
</body>

</html>
