**Passo a passo**

- Para iniciar o projeto será necessário rodar os seguintes comandos:
    - `composer install`
    - `php artisan migrate`
    - `php artisan serve`

- Foram utilizados os seguintes headers para testar as requisições:
    - `Content-Type: application/json`
    - `X-Requested-With: XMLHttpRequest`

- A rota de acesso é: `http://localhost:8000/users`, a rota está sendo utilizada para os métodos defaults de uma api(post, put, get, delete).
    - cadastrar: `http://localhost:8000/users` - utilizando `POST`

    - atualizar: `http://localhost:8000/users/<id>:` - utilizando `PUT`

    - deletar: `http://localhost:8000/users/<id>:` - utilizando `DELETE`

    - buscar todos: `http://localhost:8000/users` - utilizando `GET`

    - buscar apenas um: `http://localhost:8000/users/<id>` - utilizando `GET`
