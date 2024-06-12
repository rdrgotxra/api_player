<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add music</title>
</head>
<body>
    <form action="/api/music/add" method="post">

        <label for="name">name</label><br/>
        <input name="name" type="text"><br/><br/>

        <label for="name">album</label><br/>
        <input name="album" type="text"><br/><br/>

        <label for="artist">artist</label><br/>
        <input name="artist" type="text"><br/><br/>

        <label for="year">year</label> <br/>
        <input name="year" type="text"> <br/><br/>

        <label for="audio_path">audio path</label> <br/>
        <input name="audio_path" type="text"> <br/><br/>

        <label for="image_path">image path</label> <br/>
        <input name="image_path" type="text"> <br/><br/>

        <input type="submit" value="add music">

    </form>
</body>
</html>