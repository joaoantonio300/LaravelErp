# 🌟 Laravel App 

Um projeto Laravel pronto para desenvolvimento e deploy usando **Docker**.  

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

# Gerar a chave da aplicação Laravel
 app php artisan key:generate

# Executar as migrations para criar o banco de dados
 app php artisan migrate

# Caso nao suba o container e queira rodar localmente
 php artisan serve
 
