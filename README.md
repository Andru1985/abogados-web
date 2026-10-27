# Bufete Jurídico Camilo & Asociados

## Descripción

Sitio web para el bufete jurídico **Camilo & Asociados**, desarrollado con el objetivo de presentar los servicios legales, facilitar el contacto con los clientes y apoyar la gestión de consultas y citas.

El proyecto integra una interfaz web con funcionalidades de atención al cliente y herramientas administrativas.

## Funcionalidades

- **Página de inicio:** presentación del bufete jurídico.
- **Nosotros:** información institucional.
- **Servicios jurídicos:** descripción de los servicios ofrecidos.
- **Contacto:** formulario y canales de comunicación.
- **Inicio de sesión y recuperación:** acceso de usuarios y recuperación de cuenta.
- **Gestión de citas:** funcionalidades relacionadas con las citas jurídicas.
- **Chatbot:** atención automatizada y respuestas a consultas frecuentes.
- **Panel administrativo:** gestión de usuarios, citas, pagos y respuestas del chatbot.
- **Pagos:** integración de funcionalidades relacionadas con el procesamiento de pagos.
- **Contenido multimedia:** imágenes y videos informativos.

## Tecnologías utilizadas

- PHP
- HTML y CSS
- JavaScript
- MySQL
- Composer
- Git y GitHub

## Requisitos

Para ejecutar el proyecto localmente, se recomienda contar con:

- Windows.
- [Laragon](https://laragon.org/) o un entorno equivalente con Apache y PHP.
- MySQL o MariaDB.
- Composer, si se necesitan las dependencias PHP del proyecto.

## Instalación y ejecución local

1. Clona el repositorio:

   ```bash
   git clone https://github.com/Andru1985/abogados-web.git
   ```

2. Copia o ubica la carpeta del proyecto dentro del directorio web de Laragon.

3. Inicia Apache y MySQL desde Laragon.

4. Crea la base de datos `bufete` en MySQL.

5. Configura los datos de conexión en `conexion.php`, de acuerdo con tu entorno local.

6. Configura las credenciales y servicios externos que utilice la aplicación. No publiques claves API ni contraseñas.

7. Si el proyecto requiere las dependencias de Composer, ejecuta desde la carpeta del proyecto:

   ```bash
   composer install
   ```

8. Abre el navegador y visita:

   `http://localhost/abogados-web/`

**Nota:** la base de datos debe contar con las tablas requeridas por la aplicación. Si el proyecto no incluye un archivo SQL de instalación, será necesario preparar o importar la estructura correspondiente antes de utilizar todas las funcionalidades.

## Seguridad

- No subir claves API, contraseñas ni credenciales privadas al repositorio.
- Mantener los archivos de configuración sensibles fuera del control de versiones.
- Configurar correctamente los permisos y las credenciales antes de desplegar el sitio en un servidor público.

## Estado del proyecto

Proyecto en desarrollo.

## Autor

Desarrollado como proyecto de software para la gestión y presentación de servicios de un bufete jurídico.

## Repositorio

[GitHub: abogados-web](https://github.com/Andru1985/abogados-web)
