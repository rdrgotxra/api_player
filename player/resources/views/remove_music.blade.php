<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove music</title>
</head>
<body>
    <form action="/api/music/remove" method="POST">
        <input type="hidden" name="_method" value="delete">
        <label for="id">music id</label>
        <input name="id" type="text">
        <input type="submit" value="remove music">
    </form>
</body>
</html>