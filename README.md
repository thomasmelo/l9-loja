<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

## Projeto de Exemplo usando Laravel 9

Projeto para ensino de PHP avançado, utilizando Laravel 9, criando um sistema de cadastro de veículos

## Sistema de Cadastro de Veículos

O sistema de cadastro de veículos possui seguintes funcionalidades:

- Relação de acessórios.
- Relação de acessorios por modelo de veículo.
- Relação de marcas de veículos.
- Relação de modelos por marca.
- Relação de veículos

## Instalação

Ao baixar o repositório siga os passos abaixo:

- Execute o comando **composer install**, para isntalação dos pacotes do projeto
- Crie o banco de dados
- Crie o arquivo .env e gere a chave APP_KEY, com o comando **php artisan key:generate**
- Configure o arquivo .env com suas credendiais do bando de dados
- Crie as tabelas, executando o comando -  **php artisan migrate**
- Execute os comandos **npm install** e **npm run dev** para instalação dos pacotes do Breeze, Vite
