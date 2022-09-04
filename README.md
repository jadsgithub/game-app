# Documentação - Game App

## Passo 1 - Realize o clone do projeto

Acesse o terminal e execute o seguinte comando:

```
git clone https://github.com/jadsgithub/game-app.git
```
## Passo 2 - Instalar e configurar o Docker

Caso ainda não possua o docker instalado, realizar a instalação através do link: [Docker](https://www.docker.com/).
Caso não tenha familiaridade com o docker, siga alguns passos para configuração no Windows [Config-Docker](https://docs.docker.com/desktop/install/windows-install/)

## Passo 3 - Criar arquivo .env
```
cp .env.example .env
```
## Passo 4 - Executar o Docker

Após a instalação do docker, acesse a raiz do projeto e execute o seguinte comando para realizar a configuração dos containers:

```
docker-compose up -d
```
## Passo 5 - Instalar as dependências do projeto e Migrations

Após a configuração dos containers, acesse a raiz do projeto no container, instale as dependências e rode as migrations:

```
docker exec -it game /bin/bash 
```
```
composer install
```
```
php artisan migrate
```

## Passo 6 - Acesso

Após a configuração do projeto, o mesmo poderá ser acessado em https://localhost:8989
