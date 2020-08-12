# Obtem o ubuntu
FROM ubuntu:latest

# Roda o Update
RUN apt update

# Instala o Nginx
RUN apt install nginx -y

# Copia os arquivos
COPY default.conf /etc/nginx/conf.d/default.conf
COPY index.php /usr/share/nginx/html/index.php

# Instalação do repositorio necessario para o PHP
RUN apt-get update
RUN apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php

# Roda o Update
RUN apt update

# Instalação do PHP
RUN apt install php7.4-fpm php7.4-cli php7.4-dev php7.4-mysql -y

# Verificar se o PHP foi instalado
RUN php --version

# Inicia o Nginx
CMD service php7.4-fpm start && nginx -g "daemon off;"