# APIRest-Laravel# APIRest-Laravel
## Enunciado:
Crea una nueva aplicación Laravel que gestione las entradas de un blog. En ella implementa una APIRest que tenga dos endpoints que permitan:

+ Consultar todas las entradas del blog.
+ Consultar una entrada determinada del blog (a partir de su ID).

Las entradas del blog se deben almacenar en una tabla llamada “posts”, con los campos “title”, “slug” y “body”. Para poder hacer pruebas, inserta en la base de datos varios registros (al menos, tres). 

En caso de que la consulta se realice exitosamente, debes devolver una respuesta en formato JSON con los campos:

+ data: con los datos de las entradas
+ message: “Succeed”
+ Código HTTP: 200 - OK

Si no se encuentra el registro solicitado, debes devolver una respuesta en formato JSON con los campos:

+ data: array vacío
+ message: Mensaje de error de la excepción
+ Código HTTP: 404 - Not found

También debes crear una página informativa que muestre al programador cómo debe utilizar la API.

Prueba ambos endpoints utilizando “POSTMAN”. También implementa un script utilizando el código PHP-curl generado Postman, un PHP que te permita mostrar en una tabla HTML (con una columna por campo y una fila por registro) todas las entradas publicadas en el blog. 
