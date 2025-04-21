# PHP COM DOCKER

## Ambiente simples para desenvolvimento de projetos com PHP

### PROJETO BASE COM O `SLIM FRAMEWORK`

## Notas

> `GIT, BASH, NODE, NPM e o COMPOSER` já estão instalados e protos para uso.

## Como executar comandos no container sem acessa-ló diretamente?

### 1° Forma

```
    docker exec -it php84 bash -c "npm -v"
    docker exec -it php84 bash -c "node -v"
    docker exec -it php84 bash -c "composer -v"
    docker exec -it php84 bash -c "composer dump-autoload"
```

### 2° Forma (utilizando nossos scripts de shell)

```
    sh exec composer dump-autoload
    sh exec composer du

    sh exec composer require --dev package
    sh exec composer require package
    
    sh exec composer require laravel/pint --dev
    sh exec ./vendor/bin/pint

    sh exec composer require --dev phpstan/phpstan
    sh exec vendor/bin/phpstan analyse
```

```
    sh down
    sh down -v
```

```
    sh up
```

```
    sh build
```


#### Claro, ainda é possível acessar o container (contêiner) diretamente

```
    docker exec -it php84 bash
    docker exec -it php84 sh
```

#### Utilizamos o laravel Pint para o linting

###### Referências

[laravel-pint](https://laravel-news.com/laravel-pint)
<br>
[configuring-laravel-pint](https://laravel-news.com/configuring-laravel-pint)

```
{
    "preset": "laravel",
    "rules": {
        "simplified_null_return": true,
        "function_declaration": true,
        "no_whitespace_in_blank_line": true,
        "single_line_after_imports": true,
        "visibility_required": true,
        "ternary_operator_spaces": true,
        "unary_operator_spaces": true,
        "switch_case_semicolon_to_colon": true,
        "statement_indentation": true,
        "no_blank_lines_after_class_opening": true,
        "new_with_parentheses": true,
        "array_indentation": true,
        "binary_operator_spaces": {
            "default": "single_space",
            "operators": {
                "=>": "align_single_space_minimal"
            }
        },
        "declare_strict_types": true,
        "no_useless_return": true,
        "no_closing_tag": true,
        "void_return": true
    },
    "exclude": [
        "vendor",
        "docker"
    ]
}
```

```
  	PINT
	RECTOR
	PHPSTAN
    PHPUNIT
    VARDUMPER
    DOTENV
```

<!-- 

sh exec vendor/bin/pint

docker exec -it php84 bash npm -v

docker exec -d php84 touchnpm -v

docker exec -it php84 sh -c "echo a && echo b"

docker exec -it php84 bash -c "npm -v"
docker exec -it php84 bash -c "node -v"
docker exec -it php84 bash -c "composer -v"


docker build -t php_image_84_alpine .
docker run -d --name php84 php_image_84_alpine
apk add --update nodejs npm


chmod +x -->
