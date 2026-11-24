CREATE USER 'dwes_tienda'@'localhost' IDENTIFIED BY '123456';
GRANT SELECT, INSERT, UPDATE, DELETE ON dwes_tienda.* TO 'dwes_tienda'@'localhost';
flush privileges;