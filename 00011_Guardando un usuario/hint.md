Te dejamos un boceto de como debería verse la función con varios huecos a completar:

``` php
function crearUsuario() {
  $usuario = [
    "email" => EMAIL_DESDE_EL_FORM,
    "username" => USERNAME_DESDE_EL_FORM,
    "password" => PASSWORD_DESDE_EL_FORM_ENCRIPTADA
  ];
  
  $usuarios = LEER_ARCHIVO_usuarios.json;
  $usuariosArray = TRANSFORMAR_$USUARIOS_EN_UN_ARRAY;
  
  AGREGARLE_A_$usuariosArray_$usuario
  
  $usuariosFinal = TRANSFORMAR_$usuariosArray_A_JSON;
  
  ESCRIBIR_EL_ARCHIVO
}
```
