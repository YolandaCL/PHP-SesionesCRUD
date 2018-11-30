# PHP - Session - Create Read Update Remove
Esta una librería que se creó from-scracth, en la FP de Desarrollo de Aplicaciones Web. 
Fue uno de los primeros ejercicios para aprender a hacer con PHP: Una web que intentase ser responsive y que sobre todo fuera Programación Orientada a Objetos. 
Aunque hoy la hubiera hecho de forma más lógica y sencilla, es una web a la que le tengo cariño. Con pocos conocimientos en PHP pudo hacerse. Y me permitió entender lo que es Programación Orientada a Objetos. Gracias por la ayuda de recursos, que te permiten aprender-y-avanzar y avanzar-aprendiendo. 
### Recursos utilizados
Para el HTML, CSS y ejemplo del uso de Clases :
* con ayuda del tutorial "PHP Tutorials: Register&Login"

Para mejorar el aspecto visual de este README.md : 
* con ayuda de 
https://gist.github.com/PurpleBooth/109311bb0361f32d87a2#file-readme-template-md

Para configurarla para Github y subirla : 
* con ayuda del curso "Short and Sweet: Get Started with Git and GitHub Right Now".
### AVISO SOBRE USUARIOS CON FUNCIONALIDADES DE ESTA WEB:
Sólo gestionan la Librería > los Empleados.
## NOMBRES Y CLAVES:
```
Es colegio "nombre-clave": Pepe-pepe
```
```
Son empleados "nombre-clave": Alex-alex, Alicia-alicia, Daniel-daniel, David-david y Diego-diego
```
```
Son proveedores "nombre-clave": Eduardo-eduardo, Guillermo-guillermo
```
```
Son clientes "nombre-clave": Jaime-jaime, Joaquin-joaquin, Juan-juan
```
```Son suscriptores "nombre-clave": Mario-mario, Paula-paula, Yolanda-yolanda
```
## "Libreria" -> carpetas y archivos 
* consultar.php
* ContenidoLibreria.pages
* gestionarCatalogo.php
* gestionarUsuarios.php
* index.php
* libroBorrar.php
* libroInsertar.php
* libroInsertarFormulario.php
* libroModificar.php
* libroModificarFormulario.php
* login.php
* logout.php
* README.md
* register.php
* soyCliente.php
* soyColegio.php
* soyEmpleado_Catalogo.php
* soyEmpleado_Register.php , solo un empleado puede registrar a otro
* soyEmpleado_Usuarios.php  
* soyProveedor.php
* soySuscriptor.php
* usuarioModificar.php
* usuarioModificarFormulario.php
.
core : 
* classes(book.php, user.php) -> para POO
* database(connect.php, libreria.sql) 
* functions(books.php, users.php)
* ini.php
.
css : 
* estilo.css
.
includes: 
* widgets(formlogin.php)
* overall"(overallheader.php, overallfooter.php)
* foot.php
* footer.php
* head.php
* header.php
* menuGeneral.php
* menuEspecifico.php (permisos)
* lateral.php
.
widgets : 
* login.php
## Base Datos "libreria.sql" (en "Core") 
### tabla usuarios :
* id_usuario, 
* nombre_usuario, 
* clave, 
* nombre, 
* ape1, 
* ape2, 
* email, 
* calle, 
* localidad, 
* codigo_postal
* pais, 
* perfil
### tabla libros :
* id_libro, 
* autor,
* titulo, 
* isbn, 
* editorial,
* idioma,
* year, 
* cubierta (blanda, dura),
* tipo (libro, coleccion, material), paginas, 
* unidades, (stock)
* disponibilidad (sí o no por defecto es sí)
### tabla pedidos :
* id_pedido,
* cantidad (de id_pedido)
* lote, (aaaammdd_lote)
* nombre,
* ape1,
* ape2
* email,
* envio (sí o no por defecto es no)
* calle,
* localidad,
* codigo_postal
* pais
## Funcionalidades :
El "menuGeneral" (menu superior) : Menú disponible en todo momento para todos los usuarios
* inicio
* ayuda

El "menuEspecifico" (aside, lateral) : Sesiones
* login/logout: para todos
* registrarse: para rol empleado, solo un empleado puede registrar a otro

En "aside" (lateral): Disponible en todo momento 
* login/register
### ROL : clientes | colegios | suscriptores
catalogo 
* consultar catalogo
* listar catalogo
pedidos
* hacer pedido catalogo
* consultar pedido catalogo
### ROL : empleados 
catalogo
* consultar catalogo
* listar catalogo
* insertar en catalogo
* eliminar en catalogo
* modificar catalogo
.
stock 
* sumar: aÒadir unidades catalogo
* restar : quitar unidades catalogo
.
usuarios, empleados
* consultar usuarios
* listar usuarios
* registrar usuario o empleado
* eliminar usuario o empleado
* modificar usuario o empleado
.
pedidos
* listar pedidos
* consultar pedidos
* modificar pedidos
* hacer pedido catalogo
* eliminar pedidos
