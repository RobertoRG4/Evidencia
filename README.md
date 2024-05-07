# Evidencia

Crear base de datos 'Round Wear' - 'Productos'

```sql
-- Crear una base de datos llamada "RoundWear"
CREATE DATABASE IF NOT EXISTS RoundWear;
USE RoundWear;

-- Crear la tabla de tallas (antes de productos)
CREATE TABLE tallas (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    talla VARCHAR(5) NOT NULL
);

-- Crear la tabla de colores (antes de productos)
CREATE TABLE colores (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    color VARCHAR(20) NOT NULL
);

-- Crear la tabla de productos
CREATE TABLE productos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    talla_id INT,
    color_id INT,
    precio DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (talla_id) REFERENCES tallas(id),
    FOREIGN KEY (color_id) REFERENCES colores(id)
);

-- Crear la tabla de imágenes (URLs de imágenes de productos)
CREATE TABLE imagenes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    producto_id INT(11) NOT NULL,
    url VARCHAR(255) NOT NULL,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Insertar ejemplos para tallas
INSERT INTO tallas (talla) VALUES ('S'), ('M'), ('L'), ('XL');

-- Insertar ejemplos para colores
INSERT INTO colores (color) VALUES ('Rojo'), ('Azul'), ('Verde'), ('Negro');

-- Insertar ejemplos para productos
INSERT INTO productos (nombre, talla_id, color_id, precio)
VALUES
    ('Air Jordan 1 Low', 3, 2, 129.99),
    ('Tatum 2 Vortex', 2, 1, 149.99),
    ('Air Jordan 1 Mid SE Craft', 1, 3, 159.99);

-- Insertar imágenes para productos con las URLs proporcionadas
INSERT INTO imagenes (producto_id, url)
VALUES
    (1, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ab3ec819-7808-4cd8-ba1c-b1e9386c8540/calzado-air-jordan-1-low-KJDjGc.png'),
    (2, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/cf805f5a-eab7-46ac-acdc-91d3912744c1/tenis-de-basquetbol-tatum-2-vortex-r29tPK.png'),
    (3, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4cd8-ba1c-b1e9386c8540/c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/92899ed9-7f09-48f4-b566-600f02d6ffdd/calzado-air-jordan-1-mid-se-craft-5Sq1hK.png');

```
