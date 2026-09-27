Coreui - Sistema de Gestión Empresarial

Sistema web desarrollado en PHP y MySQL para la gestión de usuarios, clientes, productos y proveedores, con autenticación por roles y operaciones CRUD completas.

Descripción

Coreui es una aplicación web que permite administrar de forma centralizada los datos de una empresa: clientes, usuarios, productos y proveedores. Incluye un sistema de login con tres niveles de acceso (Administrador, Operador y Visualizador), lo que permite controlar qué acciones puede realizar cada tipo de usuario dentro del sistema.

Fue desarrollado como proyecto académico para poner en práctica los conceptos de desarrollo web del lado del servidor, manejo de bases de datos y control de accesos basado en roles.

## 🚀 Tecnologías utilizadas

- **PHP** – Lógica del servidor y conexión con la base de datos
- **MySQL** – Almacenamiento y gestión de datos
- **Bootstrap** – Diseño responsive de la interfaz
- **Font Awesome** – Iconografía del sistema
- **XAMPP / Apache** – Entorno de ejecución local

Funcionalidades

- Login de usuarios con sesiones
- Gestión de roles: **A** (Administrador), **O** (Operador), **V** (Visualizador)
- CRUD completo de:
  - Clientes
  - Usuarios
  - Productos
  - Proveedores
- Control de permisos según el rol del usuario
- Interfaz responsive con Bootstrap
- Validaciones básicas de formularios

Roles del sistema

| Rol | Código | Permisos |
|-----|--------|----------|
| Administrador | A | Acceso total: crear, leer, actualizar y eliminar registros, y gestionar usuarios |
| Operador | O | Puede crear, leer y actualizar registros, pero no eliminarlos ni gestionar usuarios |
| Visualizador | V | Solo puede consultar la información, sin modificar datos |

Capturas de pantalla
<img width="744" height="762" alt="imagen_2026-09-26_231942545" src="https://github.com/user-attachments/assets/b8165c5c-4b61-4319-9e02-e3b52e3a30ef" />

<img width="1620" height="733" alt="imagen_2026-09-26_232127116" src="https://github.com/user-attachments/assets/3ea275d2-bef2-43fa-b148-fa39ce175e2d" />

Cómo ejecutar el proyecto

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/coreui.git
  
