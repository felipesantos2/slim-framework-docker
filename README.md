## SLIM FRAMEWORK COM DOCKER

docker exec -it php84 bash npm -v

docker exec -d php84 touchnpm -v

docker exec -it php84 sh -c "echo a && echo b"

docker exec -it php84 bash -c "npm -v"
docker exec -it php84 bash -c "node -v"
docker exec -it php84 bash -c "composer -v"


docker build -t php_image_84_alpine .
docker run -d --name php84 php_image_84_alpine
apk add --update nodejs npm