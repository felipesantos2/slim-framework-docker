## SLIM FRAMEWORK COM DOCKER

## Notas

> `GIT, BASH, NODE, NPM e o COMPOSER` já estão instalados e protos para uso.

## Como executar comandos no container sem acessa-ló diretamente?

### Primeira Forma

```
    docker exec -it php84 bash -c "npm -v"
    docker exec -it php84 bash -c "node -v"
    docker exec -it php84 bash -c "composer -v"
    docker exec -it php84 bash -c "composer dump-autoload"
```

### Segunda Forma (utilizando nossos scripts de shell)

```
    sh exec composer dump-autoload
    sh exec composer du
```

```
    sh exec composer require --dev package
    sh exec composer require package
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

<!-- 
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
