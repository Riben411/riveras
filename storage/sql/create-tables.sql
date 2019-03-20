-- BASE DE DATOS PARA UN PUNTO DE VENTAS

-- TABLA USUARIOS
CREATE TABLE usuarios (
    `id`        INT(11) NOT NULL AUTO_INCREMENT,
    `username`  VARCHAR(200) NOT NULL UNIQUE,
    `pass`      VARCHAR(200) NOT NULL,
    `fecha`     DATE NOT NULL,
    `rol`       VARCHAR(200) NOT NULL DEFAULT 'invitado',
    CONSTRAINT `pk_usuario` PRIMARY KEY(`id`)
) ENGINE=InnoDB;

-- TABLA CLIENTES
CREATE TABLE clientes (
    `id`        INT(11) NOT NULL AUTO_INCREMENT,
    `nombre`    VARCHAR(200) NOT NULL,
    `apellido`  VARCHAR(200) NOT NULL,
    `correo`    VARCHAR(200) NULL UNIQUE,
    `telefono`  VARCHAR(200) NULL,
    `fecha`     DATE NOT NULL,
    CONSTRAINT `pk_clientes` PRIMARY KEY(`id`)
) ENGINE=InnoDB;

-- TABLA CATEGORIAS
CREATE TABLE categorias (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(200) NOT NULL UNIQUE,
    CONSTRAINT `pk_categoria` PRIMARY KEY(`id`)
) ENGINE=InnoDB;

-- TABLA PRODUCTOS
CREATE TABLE productos (
    `id`            INT(11) NOT NULL AUTO_INCREMENT,
    `usuario_id`    INT(11) NOT NULL,
    `categoria_id`  INT(11) NOT NULL,
    `nombre`        VARCHAR(200) NOT NULL UNIQUE,
    `descripcion`   VARCHAR(200) NUll,
    `precio`        FLOAT(11,2) NOT NULL,
    `stock`         INT(11) NOT NULL,
    `fecha`         DATE NOT NULL,
    CONSTRAINT `pk_producto` PRIMARY KEY(`id`),
    CONSTRAINT `fk_usuario_producto` FOREIGN KEY(`usuario_id`)
    REFERENCES `usuarios`(`id`),
    CONSTRAINT `fk_categoria_producto` FOREIGN KEY(`categoria_id`)
    REFERENCES `categorias`(`id`)
) ENGINE=InnoDB;

-- TABLA CUENTAS
CREATE TABLE cuentas (
    `id`         INT(11) NOT NULL AUTO_INCREMENT,
    `folio`      VARCHAR(200) NOT NULL UNIQUE,
    `cliente_id` INT(11) NOT NULL,
    `usuario_id` INT(11) NOT NULL,
    `mesa`       INT(11) NOT NULL,
    `propina`    FLOAT(11,2) NOT NULL DEFAULT 0,
    `total`      FLOAT(11,2) NOT NULL DEFAULT 0,
    `estado`     VARCHAR(200) NOT NULL DEFAULT 'abierta',
    `fecha`      DATE NOT NULL,
    CONSTRAINT `pk_cuenta` PRIMARY KEY(`id`),
    CONSTRAINT `fk_cliente_cuenta` FOREIGN KEY(`cliente_id`)
    REFERENCES `clientes`(`id`),
    CONSTRAINT `fk_usuario_cliente` FOREIGN KEY(`usuario_id`)
    REFERENCES `usuarios`(`id`)
) ENGINE=InnoDB;

-- DETALLE CUENTA
CREATE TABLE detalle_cuenta (
    `id`           INT(11) NOT NULL AUTO_INCREMENT,
    `cuenta_id`    INT(11) NOT NULL,
    `producto_id`  INT(11) NOT NULL,
    `iva`          FLOAT(11,2) NOT NULL,
    `cantidad`     INT(11) NOT NULL,
    `subtotal`     FLOAT(11,2) NOT NULL,
    CONSTRAINT `pk_detalle_cuenta` PRIMARY KEY(`id`),
    CONSTRAINT `fk_cuenta_detalle_cuenta` FOREIGN KEY(`cuenta_id`)
    REFERENCES `cuentas`(`id`),
    CONSTRAINT `fk_producto_cuenta` FOREIGN KEY(`producto_id`)
    REFERENCES `productos`(`id`)
) ENGINE=InnoDB;

-- TABLA PROVEEDORES
CREATE TABLE proveedores (
    `id`                INT(11) NOT NULL AUTO_INCREMENT,
    `nombre`            VARCHAR(200) NOT NULL,
    `codigo_tributario` INT(11) NULL,
    `razon_social`      VARCHAR(200) NOT NULL,
    `direcion`          VARCHAR(200) NOT NULL,
    `telefono`          VARCHAR(20) NULL,
    CONSTRAINT `pk_proveedor` PRIMARY KEY(`id`)
) ENGINE=InnoDB;

-- TABLA COMPRAS
CREATE TABLE compras (
    `id`            INT(11) NOT NULL AUTO_INCREMENT,
    `folio`         VARCHAR(200) NOT NULL UNIQUE,
    `proveedor_id`  INT(11) NOT NULL,
    `cliente_id`    INT(11) NOT NULL,
    `usuario_id`    INT(11) NOT NULL,
    `plazos`        INT(11) NOT NULL DEFAULT 1,
    `particiacion`  FLOAT(11,2) NOT NULL,
    `fecha`         DATE NOT NULL,
    CONSTRAINT `pk_compra` PRIMARY KEY(`id`),
    CONSTRAINT `fk_proveedor_compra` FOREIGN KEY(`proveedor_id`)
    REFERENCES `proveedores`(`id`),
    CONSTRAINT `cliente_compra` FOREIGN KEY(`cliente_id`)
    REFERENCES `clientes`(`id`),
    CONSTRAINT `fk_usuario_compra` FOREIGN KEY(`usuario_id`)
    REFERENCES `usuarios`(`id`)
) ENGINE=InnoDB;

-- TABLA DETALLE COMPRAS
CREATE TABLE detalle_compra (
    `id`              INT(11) NOT NULL AUTO_INCREMENT,
    `compra_id`       INT(11) NOT NULL,
    `descripcion`     VARCHAR(200) NOT NULL,
    `precio_unitario` FLOAT(11,2) NOT NULL,
    `cantidad`        INT(11) NOT NULL,
    `descuento`       FLOAT(11,2) NOT NULL DEFAULT 0,
    `subtotal`        FLOAT(11,2) NOT NULL,
    CONSTRAINT `pk_detalle_compra` PRIMARY KEY(`id`),
    CONSTRAINT `fk_detalle_compra_compra` FOREIGN KEY(`compra_id`)
    REFERENCES `compras`(`id`)
) ENGINE=InnoDB;
