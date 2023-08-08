#!/bin/sh -e
if grep -Fqe "Image is up to date" << EOF
`docker pull sudarko/simdondar:latest`
EOF
then
	echo 'No new Update'
else
	docker-compose restart webserver
fi
