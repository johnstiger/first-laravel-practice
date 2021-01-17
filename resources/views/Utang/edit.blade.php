<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listahan sa mga Utang</title>
</head>
<body>
@foreach($utangs as $utang)
<h4>{{ $utang->name }} => {{ $utang->amount }}</h4>
<hr>
@endforeach
</body>
</html>