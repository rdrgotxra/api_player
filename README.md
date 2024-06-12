# API Player

## configuração

1. clonar repositório
2. construir a image: "docker build -t player ."
3. construir o container: "docker run --rm -p 8000:8000 --name=player player"
4. ctrl click no link que aparecer no terminal

## form

/test/add => interface gráfica para testar api
/test/remove => interface gráfica para testar api
/test/play => interface gráfica para testar api

## rotas da api

GET /api/music => retorna informações de todas as músicas
GET /api/music/{id} => retorna informações de uma música com base no id
GET /api/music/{id}/audio => retorna o arquivo mp3 com base no id
GET /api/music/{id}/image => retorna a imagem de capa com base no id

POST /api/music/add => adiciona nova música (name, album, artist, year, audio_path, image_path)
DELETE /api/music/remove => remove uma música ao fornecer o seu id