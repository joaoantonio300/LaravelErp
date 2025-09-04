# 🌟 Laravel Erp

Um projeto Laravel buscando entender os principais conceitos e tecnicas
para se construir um sistema de gerenciamento de itens (produtos), com controle
de estoque, controle de permissoes e com acesso a relatorios

---

## 🚀 Tecnologias Utilizadas

- PHP 8.2 + Apache
- Laravel 10
- MySQL 8
- Composer

---

## 💻 Executando Pelo terminal

```bash
# Clonar o repositório e entrar na pasta do projeto
  git clone https://github.com/joaoantonio300/LaravelErp.git
  
# Copiar o arquivo de exemplo .env e configurar banco
  cp .env.example .env 

# Baixar dependencias
  composer install

# Gerar a chave da aplicação Laravel
  php artisan key:generate

# Executar as migrations
  php artisan migrate
 
# Executar a seed para ter acesso a um usuario central para adesao ao sistema
  php artisan db:seed
 
# Caso nao suba o container e queira rodar localmente
  php artisan serve
 
