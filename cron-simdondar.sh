#!/bin/sh -e
if grep -Fqe "Image is up to date" << EOF
`docker pull sudarko/simdondar:latest`
EOF
then
	echo 'No new Update'
else
	docker rmi `docker images |grep none |awk '{print $3}'`
	docker-compose up -d --no-deps webserver
fi
