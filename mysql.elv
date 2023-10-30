#/usr/bin/env -S elvish

CREATE DATABASE phpdb;
CREATE USER 'aurele' IDENTIFIED BY 'IAmFreeNow!411';
GRANT ALL PRIVILEGES ON phpdb.* TO 'aurele'@'localhost';
FLUSH PRIVILEGES;