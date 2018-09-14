public function testCreacionUsuario(): void {
  $_POST = [
    "email" => "arya@stark.com",
    "username" => "aryastark",
    "password" => "Nymeria123"
  ];
  
  $usuarios = [
    [
      "email" => "jon@snow.com",
      "username" => "jonsnow",
      "password" => password_hash("Ghost123", PASSWORD_DEFAULT)
    ]
  ];
  
  $usuariosJSON = json_encode($usuarios);
  
  file_put_contents("usuarios.json", $usuariosJSON);
  
  crearUsuario();
  
  $this->assertTrue(file_exists("usuarios.json"), "¿Borraste el archivo usuarios.json?");
  
  $resultado = file_get_contents("usuarios.json");
  
  $this->assertTrue($resultado != "", "El archivo usuarios.json parecería estar vacío...");
  
  $resultado = json_decode($resultado, true);
  
  $this->assertTrue($resultado, "El archivo parecería no tener un JSON válido");
  
  $this->assertTrue(is_array($resultado), "Hay algo raro en el JSON resultado");
  
  if (count($resultado) == 1) {
    $usuario = $resultado[0];
    
    $this->assertTrue(is_array($usuario), "Hay algo raro en el JSON resultado");
    
    $this->assertTrue(array_key_exists("username", $usuario), "Hay un solo elemento en el archivo final y debería haber 2. Además, no tiene nombre de usuario");
    
    if ($usuario["username"] == "jonsnow") {
      $this->assertTrue(false, "Solamente esta el usuario original en el resultado pero falta el usuario nuevo!");
    } else if ($usuario["username"] == "aryastark") {
      $this->assertTrue(false, "Solamente esta el usuario nuevo en el resultado pero se perdieron los anteriores!!");
    }
  }
  
  $this->assertTrue(count($resultado) == 2, "La cantidad de usuarios en el resultado no es correcta");
  
  $usuario1 = $resultado[0];
  
  $this->assertTrue(array_key_exists("email", $usuario1), "El primer usuario no tiene almacenado email");
  
  $this->assertTrue(array_key_exists("username", $usuario1), "El primer usuario no tiene almacenado nombre de usuario");
  
  $this->assertTrue(array_key_exists("password", $usuario1), "El primer usuario no tiene almacenada contraseña");
  
  $this->assertTrue($usuario1["email"] == "jon@snow.com", "El email del primer usuario no es correcto");
  
  $this->assertTrue($usuario1["username"] == "jonsnow", "El email del primer usuario no es correcto");
  
  $this->assertTrue(password_verify("Ghost123", $usuario1["password"]), "La contraseña del primer usuario no es correcta");
  
  $usuario2 = $resultado[1];
  
  $this->assertTrue(array_key_exists("email", $usuario2), "El segundo usuario no tiene almacenado email");
  
  $this->assertTrue(array_key_exists("username", $usuario2), "El segundo usuario no tiene almacenado nombre de usuario");
  
  $this->assertTrue(array_key_exists("password", $usuario2), "El segundo usuario no tiene almacenada contraseña");
  
  $this->assertTrue($usuario2["email"] == "arya@stark.com", "El email del segundo usuario no es correcto");
  
  $this->assertTrue($usuario2["username"] == "aryastark", "El email del segundo usuario no es correcto");
  
  $this->assertTrue(password_verify("Nymeria123", $usuario2["password"]), "La contraseña del segundo usuario no es correcta");
}