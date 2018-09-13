En este caso recibimos un formulario de login que tiene al menos el campo:

``` html
<input type="password" name="password">
```

A su vez, la función `verificarPass` recibe el hash almacenado en la base de datos cuando el usuario se registró.

Tu desafío es retornar **true** si la contraseña enviada coincide con `$hash` o **false** si no verifica.