# DockerGrafanaInflux for weight monitoring

Link to the related article: 
https://www.blazemeter.com/blog/how-to-create-a-lightweight-performance-monitoring-solution-with-docker-grafana-and-influxdb

## Application URL

http://localhost:8080 

## Grafana URL

http://localhost:3000 

## Grafana Access

user name: admin
password: admin

## InfluxDb Access

$ docker exec -it [YOUR_INFLUXDB_CONTAINER_ID] influx

Host address: ip address of your machine
Database port: 8086
Database name: influx
Database user name: admin
Database password: admin

## HTTP InfluxDb API
Creating a DB named mydb:

$ curl -G http://localhost:8086/query --data-urlencode "q=CREATE DATABASE mydb"
Inserting into the DB:

$ curl -i -XPOST 'http://localhost:8086/write?db=mydb' --data-binary 'cpu_load_short,host=server01,region=us-west value=0.64 1434055562000000000'
Read more about this in the official documentation