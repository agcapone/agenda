1- git clone https://github.com/agcapone/agenda.git

 Genera el siguiente arbol:

myapp/
├── docker-compose.yml
├── php/
│   └── index.php
│   └── guardar.php
│   └── db_connect.php
└── mariadb/
    └── init.sql

2- Ejecutar el siguiente comando:

docker-compose up -d   # Volver a iniciar los contenedores

3- Probar aplicacion:

http://localhost:8080/



 Si desea detener y eliminar los contenedores existentes
docker-compose down   

 Troubleshoting de la BBDD
docker exec -it agenda_mariadb_1 mysql -u alejandro -p123456

USE agenda;
SHOW TABLES;
SELECT * FROM usuarios;

Troubleshooting de red

docker network ls
docker network inspect agenda_default

