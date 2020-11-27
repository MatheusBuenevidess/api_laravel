# Criação de uma API utilizando Laravel

#### Criação do projeto
1. `composer create-project laravel/laravel hcode-api-users`
2. `cp .env.example .env`
3. `php artisan key:generate`
4. `php artisan serve`

####  No banco de dados:
1. `CREATE DATABASE hcodedb;`
2. `CREATE TABLE users (
	id SERIAL PRIMARY KEY,
	name VARCHAR(256) NOT NULL,
	email VARCHAR(256) NOT NULL`
);
3. I`NSERT INTO users (name, email) VALUES ('Teste1', 'teste1@gmail.com'), ('Teste2', 'teste2@gmail.com');`
4. `ALTER TABLE users
	ADD COLUMN updated_at TIMESTAMP DEFAULT NULL,
	ADD COLUMN created_at TIMESTAMP DEFAULT NULL;`