<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api instructions</title>
</head>
<body>
    <h1>player</h1>

    <h2>html forms</h2>

    <p>/test/add => interface gráfica para testar api</p>
    <p>/test/remove => interface gráfica para testar api</p>
    <p>/test/play => interface gráfica para testar api</p>

    <h2>api routes</h2>

    <p>GET /api/music => retorna informações de todas as músicas</p>
    <p>GET /api/music/{id} => retorna informações de uma música com base no id</p>
    <p>GET /api/music/{id}/audio => retorna o arquivo mp3 com base no id</p>
    <p>GET /api/music/{id}/image => retorna a imagem de capa com base no id</p>

    <p>POST /api/music/add => adiciona nova música (name, album, artist, year, audio_path, image_path)</p>
    <p>DELETE /api/music/remove => remove uma música ao fornecer o seu id</p>

</body>
</html>