#!/bin/sh -e
if grep -Fqe "Image is up to date" << EOF
`docker pull sudarko/simdondar:master`
EOF
then
	echo 'No new Update'
else
	docker-compose up -d --no-deps webserver
 	docker rmi `docker images |grep none |awk '{print $3}'`
fi
