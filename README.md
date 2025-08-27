<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto CRUD Back-end PHP + Laravel Framework

> Este proyecto fue desarrollado con PHP version 8.3.16, utilizando el framework Laravel version 12.25.0 realizando el modulo clientes y mascotas, es un CRUD con conexion a base de datos haciendo uso de la suite de desarrollo Laragon, cuenta con las funciones de Crear, Leer, Modificar y Eliminar, dentro de una BD, Se realizo con el editor de codigo Visual Studio Code version 1.103.2, La base de datos se genera automaticamente desde laravel y se llena de datos aleatorios previmaente definidos, estos se guardan en el gestor HeidiSQL por tanto para hacer uso de la bd se debe crear una bd con el nombre apiAnimalCenter realizar la conexion y las tablas con el contenido se generara de forma automatica para la pruebas, este proyecto cuenta con filtros y permite anexar las mascotas al cliente que pertenecen

<p>Si desea realizar pruebas puede utilizar POSTMAN con el fin de conectarse a la API, las URL de mapeo son:</p>
<ul>
<li>Crear Cliente: http://127.0.0.1:8000/api/v1/customers
  Debe entregarle un JSON con los datos Requeridos Ejemplo:<br>
{<br>
    "nombre": "Arturo Londono",<br>
    "ciudad": "Zarzal",<br>
    "direccion": "Calle 4",<br>
    "telefono": "55555887"<br>
}
</li>
<li>Actualizar Cliente: http://127.0.0.1:8000/api/v1/customers/ID <- Cambiar el ID por el numero de cedula Debe entregar un JSON con los datos y usar el meotdo PUT Ejemplo: <br>
{ <br>
    "nombre": "Marcela Rios",<br>
    "ciudad": "Bogota",<br>
    "direccion": "Calle 9A",<br>
    "telefono": "8875556"<br>
}</li>
<li>Listar Cliente: http://127.0.0.1:8000/api/v1/customers (Trae una lista de todos lo cliente en la base de datos)</li>  
<li>Listar Cliente con las mascotas que poseen: http://127.0.0.1:8000/api/v1/customers?includePets=true</li>  
<li>Listar mascotas que poseen: http://127.0.0.1:8000/api/v1/pets</li>  
<li>Eliminar Cliente: http://127.0.0.1:8000/api/v1/customers/ID (Reemplazar el ID del cliente a borrar)</li>
</ul>

<h3>Tecnologias Usadas</h3>
<ul>
  <li>PHP + Laravel</li>
  <li>HeidiSQL </li>
</ul>
