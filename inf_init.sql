DROP DATABASE IF EXISTS  inflearnDB;
DROP USER IF EXISTS  201901709user@localhost;
create user 201901709user@localhost identified WITH mysql_native_password  by '201901709pw';
create database inflearnDB;
grant all privileges on inflearnDB.* to 201901709user@localhost with grant option;
commit;