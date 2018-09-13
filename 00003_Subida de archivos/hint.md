Para esto tendrás que utilizar la función `move_uploaded_file`

Esta función recibe dos parámetros:

1. El archivo en sí. Esto podrás obtenerlo de `$_FILES["avatar"]["tmp_name"]`
2. La ruta destino. En este caso te pedimos dentro de la carpeta "img" con el nombre "avatar" y la extensión correcta

¿Cómo obtener la extensión? Esto podes reutilizarlo del ejercicio anterior :wink: