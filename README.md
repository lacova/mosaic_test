Mosaic Access Test
==================
### Requisitos previos
* Tener instalado PHP > 5.4
* Tener instaladas las extensiones php-sqlite3, php-xml, php-mbstring

### Recomendaciones
* Utilizar el built-in PHP web server: php bin/console ...
* En la carpeta bin se encuentran todos los ejecutables necesarios (Windows / Linux)
* En la carpeta app/Resources/csv se encuentra el archivo CSV a importar
* Las tareas están identificadas en el código mediante el tag ToDo XX
* Al lado de cada tarea se indica el ámbito de referencia

### Tareas
1. Descargar dependencias necesarias via composer. [1] [Composer]
2. Añadir código que falta para guardar un producto en la base de datos. [2] [Doctrine]
3. Implementar la función de búsqueda de producto por EAN. [2] [Doctrine]
4. Implementar función para obtener los productos activos de la base de datos. [2] [Doctrine]
5. Añadir el constructor del servicio de importación de productos. [2] [Symfony]
6. Invocar la función para recuperar productos desde el servicio "get products". [2] [Doctrine]
7. Pasar los productos al template. [2] [Twig]
8. Implementar el constructor de la clase Product. [2] [Model]
9. Renderizar el listado de productos con toda la información en el template. [3] [Twig]
10. Añadir la ruta para la acción de importar productos. [3] [Routing]
11. Definir e invocar un servicio para obtener los productos activos. [3] [Services]
12. Implementar función para leer el contenido del CSV y completar el proceso de importación de productos [4] [PHP]
13. Implementar el servicio StringFormat y pasar los test. [5] [PHPunit]
14. Restringir la importación de productos para que solamente admita método POST [3] [Routing]