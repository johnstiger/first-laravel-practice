<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/utang" method = "post">
    @csrf
    <input type="text" name ="name" placeholder="name">
    <input type="text" name = "amount" placeholder="amount">
    <button>Submit</button>
    </form>
</body>
</html>