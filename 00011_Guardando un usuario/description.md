Llegó la hora del **Desafío final** :sunglasses:

Dado que el usuario completa un formulario con el siguiente código:

``` html
<form method="POST">
  <input type="email" name="email" required>
  <input type="text" name="username" required>
  <input type="password" name="password" required>
</form>
```

Tu trabajo será tomar esta información y almacenarla!!!
No solo eso, sino agregarla a la base de usuarios existente en **usuarios.json**!

Una buena idea para comenzar es armar un array del siguiente estilo:

``` php
$usuario = [
  "email" => "jon@snow.com",
  "username" => "jonsnow",
  "password" => "rxh321fxaw123"
];
```

Donde la información provendrá del formulario y el campo password debe estar encriptado. **Es fundamental para el ejercicio utilizar los nombres correctos para las posiciones del array**

Entonces, los pasos a seguir serían:

1. Armar un array que (`$usuario`) tenga la información final del usuario. Esto debe incluir la contraseña **encriptada**
2. Leer el archivo **usuarios.json**
3. Transformar el contenido de **usuarios.json** a un array
4. Agregarle al array de todos los usuario el nuevo usuario (`$usuario`)
5. Transformar el array final de nuevo a JSON.
6. Sobreescribir **usuarios.json** con el contenido final.

¡Muchisimos éxitos!

Dado que el ejercicio es complejo, te dejamos una base de laburo acá abajo si no encontrás por donde empezar :point_down:

