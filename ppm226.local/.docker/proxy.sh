hasproxy=$(docker network ls | grep nginx-proxy)

if [ $? -eq 1 ]
then
   echo creating network nginx-proxy
   docker network create nginx-proxy
fi

CID=$(docker ps -q -f status=running -f name=^/nginx-proxy$)

if [ ! "${CID}" ]
then
   echo running nginx-proxy
   docker run -d -p 80:80 --name nginx-proxy --net nginx-proxy -v /var/run/docker.sock:/tmp/docker.sock jwilder/nginx-proxy
fi

