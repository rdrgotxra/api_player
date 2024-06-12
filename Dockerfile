# imagem padrão do php
FROM php:8.3

# atualiza o debian
RUN apt-get update &&\
    apt-get install unzip

# cria variável "root"
ARG root=/var/www/html

# define pasta de trabalho
WORKDIR ${root}

# copia arquivos para o container
COPY /player ${root}

# instala composer a partir de imagem no docker hub
COPY --from=composer /usr/bin/composer /usr/bin/composer

    # instala dependências php
CMD composer update &&\
    # gera arquivo .env
    mv .env.example .env &&\
    # # inicia nova chave para teste
    php artisan key:generate &&\
    # inicia servidor do próprio php
    php artisan serve --host 0.0.0.0 

# lembra de conectar a porta ao iniciar o container
EXPOSE 8000
