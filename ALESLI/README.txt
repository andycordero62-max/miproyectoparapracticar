========================================
  ALESLI — Sistema de Gestión de Pedidos
  Versión PHP + SQLite
========================================

REQUISITOS
----------
- PHP 8.0 o superior
- Extensiones PHP: pdo, pdo_sqlite (vienen activadas por defecto en PHP 8)
- Navegador web moderno

CÓMO EJECUTAR EN VS CODE
-------------------------
1. Abrí la carpeta "alesli-php" en VS Code

2. Abrí una terminal (Terminal → New Terminal)

3. Ejecutá el servidor PHP integrado:
      php -S localhost:8000

4. Abrí tu navegador en:
      http://localhost:8000

¡Listo! La base de datos SQLite se crea automáticamente en db/alesli.sqlite
con datos de prueba la primera vez que cargás la app.

USUARIOS DE PRUEBA
------------------
  Admin:    admin@alesli.com     / admin123
  Empleado: florencia@alesli.com / empleado123
  Cliente:  maria@gmail.com      / cliente123

PÁGINAS DISPONIBLES
--------------------
  /index.php        — Login
  /dashboard.php    — Panel principal (empleado/admin)
  /pedidos.php      — Listado de pedidos con filtros
  /pedido.php?id=1  — Detalle y gestión de un pedido
  /nuevo-pedido.php — Crear nuevo pedido
  /catalogo.php     — Catálogo de arreglos
  /admin.php        — Gestión de usuarios (solo admin)
  /cliente.php      — Portal de tienda del cliente
  /logout.php       — Cerrar sesión

NOTAS TÉCNICAS
--------------
- Base de datos: SQLite (se crea sola en db/alesli.sqlite)
- Sin Composer, sin npm, sin dependencias externas
- Bootstrap 5 y estilos se cargan desde CDN (necesita internet)
- Para uso offline: descargá Bootstrap 5 y actualizá los links en
  includes/layout.php y cliente.php

ESTRUCTURA DE ARCHIVOS
-----------------------
  index.php           — Login
  dashboard.php       — Dashboard
  pedidos.php         — Lista de pedidos
  pedido.php          — Detalle de pedido
  nuevo-pedido.php    — Nuevo pedido
  catalogo.php        — Catálogo
  admin.php           — Administración
  cliente.php         — Portal cliente
  logout.php          — Logout
  includes/
    db.php            — Base de datos SQLite (schema + seed)
    auth.php          — Sesiones y autenticación
    layout.php        — Sidebar y header compartidos
  css/
    style.css         — Estilos personalizados
  db/
    alesli.sqlite     — Base de datos (se crea automáticamente)
