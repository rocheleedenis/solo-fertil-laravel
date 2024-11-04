# SoloFértil com Laravel

SoloFértil é um projeto desenvolvido em 2017 como parte do meu TCC utilizando tecnologias da época.

A intenção deste repositŕio é atualizar o projeto original utilizando Laravel 10, PHP 8.1 e aplicando conceitos de Clean Architecture e TDD.

## Instalação

-   Inicie os containers do projeto

```bash
docker compose up -d`
```

-   Entre no container do sistema

```bash
docker compose exec app bash
```

-   Instale as dependências

```bash
composer install
```

-   Instale as dependências

```bash
composer install
```

-   Finalise o start do projeto

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Abra no seu navegador http://localhost:80
