#! /bin/sh

echo "Starting docker container"
INSTANCE_NAME=`docker-compose run -d dev tail -f /dev/null`
echo "Connecting to container"
docker exec -it $INSTANCE_NAME /bin/ash
echo "Stopping container"
docker stop $INSTANCE_NAME
echo "Removing container"
docker rm $INSTANCE_NAME
echo "Done."