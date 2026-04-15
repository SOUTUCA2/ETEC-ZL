


Instalação:

# 1. Clone o repositório
git clone https://github.com/SOUTUCA2/ETEC-ZL.git
cd ETEC-ZL

# 2. Instale as dependências do PHP
composer install

# 3. Configure o arquivo de ambiente
cp .env.example .env

# 4. Gere a chave da aplicação
php artisan key:generate

# 5. Configure o banco de dados no seu .env e rode as migrations
php artisan migrate

# 6. Instale as dependências do Front-end
npm install

# 7. Compile os assets (Mantenha este terminal aberto)
npm run dev

# Abre um segundo terminal e execute o servidor PHP
php artisan serve

# TERMINAL 1:
```bash
git clone https://github.com/SOUTUCA2/ETEC-ZL.git
cd ETEC-ZL
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

# TERMINAL 2

``` bash
php artisan serve
```






Video:

https://youtu.be/bAy9Xu5odLo
