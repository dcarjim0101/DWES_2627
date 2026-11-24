DROP DATABASE IF EXISTS dwes_tienda;
CREATE DATABASE IF NOT EXISTS dwes_tienda
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE dwes_tienda;

DROP TABLE IF EXISTS categorias;
CREATE TABLE IF NOT EXISTS categorias (
    id     INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)  NOT NULL UNIQUE
) ENGINE=InnoDB;

DROP TABLE IF EXISTS productos;
CREATE TABLE IF NOT EXISTS productos (
    id           INT UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre       VARCHAR(100)  NOT NULL,
    descripcion  TEXT          NULL,
    precio       DECIMAL(8,2)  NOT NULL CHECK (precio >= 0),
    stock        INT UNSIGNED  NOT NULL DEFAULT 0,
    categoria_id INT UNSIGNED  NOT NULL,
    creado_en    TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    KEY idx_productos_categoria (categoria_id),
    FOREIGN KEY (categoria_id) REFERENCES categorias (id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios (
    id    INT UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(120)  NOT NULL UNIQUE,
    clave VARCHAR(255)  NOT NULL,
    saldo DECIMAL(10,2) NOT NULL DEFAULT 0 CHECK (saldo >= 0)
) ENGINE=InnoDB;


DROP TABLE IF EXISTS pedidos;
CREATE TABLE IF NOT EXISTS pedidos (
    id         INT UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED  NOT NULL,
    total      DECIMAL(10,2) NOT NULL CHECK (total >= 0),
    fecha      TIMESTAMP     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    KEY idx_pedidos_usuario (usuario_id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

DROP TABLE IF EXISTS linea_pedido;
CREATE TABLE IF NOT EXISTS linea_pedido (
    pedido_id       INT UNSIGNED NOT NULL,
    producto_id     INT UNSIGNED NOT NULL,
    cantidad        INT UNSIGNED NOT NULL CHECK (cantidad >= 1),
    precio_unitario DECIMAL(8,2) NOT NULL CHECK (precio_unitario >= 0),
    PRIMARY KEY (pedido_id, producto_id),
    KEY idx_linea_producto (producto_id),
    FOREIGN KEY (pedido_id) REFERENCES pedidos (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos (id)
        ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- Datos iniciales
INSERT INTO categorias (nombre) VALUES ('Informática'), ('Libros'), ('Hogar');

INSERT INTO productos (nombre, descripcion, precio, stock, categoria_id) VALUES
 ('Teclado mecánico',  'Teclado con switches rojos',     59.90, 15, 1),
 ('Ratón inalámbrico', 'Ratón ergonómico 2,4 GHz',       24.50, 40, 1),
 ('Monitor 24"',       'Monitor Full HD IPS',           139.00,  8, 1),
 ('Aprende PHP 8',     'Manual práctico de PHP moderno', 32.00, 25, 2),
 ('SQL sin miedo',     'Introducción a bases de datos',  27.50, 12, 2),
 ('Lámpara de mesa',   'Lámpara LED regulable',          18.90, 30, 3);

INSERT INTO usuarios (email, clave, saldo) VALUES
 ('ana@example.com',  'sin-hash-todavia', 500.00),
 ('luis@example.com', 'sin-hash-todavia', 120.00);