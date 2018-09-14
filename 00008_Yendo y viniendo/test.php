public function testAgregarUsuario1(): void {
  $usuarios = [
    0 => [
      "nombre" => "Dario",
      "apellido" => "Susnisky"
    ],
    1 => [
      "nombre" => "Alejandro",
      "apellido" => "Vivone"
    ]
  ];
  
  $usuariosJSON = json_encode($usuarios);
  
  $usuarioNuevo = [
    "nombre" => "Javier",
    "apellido" => "Herrera"
  ];
  
  $resultado = agregarUsuario($usuariosJSON, $usuarioNuevo);
  
  $this->assertTrue(is_string($resultado), "El resultado de la función debería ser un string");
  
  $usuarios[] = $usuarioNuevo;
  $usuariosJSON = json_encode($usuarios);
  
  $this->assertTrue($usuariosJSON === $resultado, "El resultado no es el esperado");
}

public function testAgregarUsuario2(): void {
  $usuarios = [

  ];
  
  $usuariosJSON = json_encode($usuarios);
  
  $usuarioNuevo = [
    "nombre" => "Javier",
    "apellido" => "Herrera"
  ];
  
  $resultado = agregarUsuario($usuariosJSON, $usuarioNuevo);
  
  $this->assertTrue(is_string($resultado), "El resultado de la función debería ser un string");
  
  $usuarios[] = $usuarioNuevo;
  $usuariosJSON = json_encode($usuarios);
  
  $this->assertTrue($usuariosJSON === $resultado, "El resultado no es el esperado");
}

public function testAgregarUsuario3(): void {
  $usuarios = [
    0 => [
      "nombre" => "Dario",
      "apellido" => "Susnisky"
    ],
    1 => [
      "nombre" => "Alejandro",
      "apellido" => "Vivone"
    ],
    2 => [
      "nombre" => "Nick",
      "apellido" => "Damico"
    ]
  ];
  
  $usuariosJSON = json_encode($usuarios);
  
  $usuarioNuevo = [
    "nombre" => "Javier",
    "apellido" => "Herrera"
  ];
  
  $resultado = agregarUsuario($usuariosJSON, $usuarioNuevo);
  
  $this->assertTrue(is_string($resultado), "El resultado de la función debería ser un string");
  
  $usuarios[] = $usuarioNuevo;
  $usuariosJSON = json_encode($usuarios);
  
  $this->assertTrue($usuariosJSON === $resultado, "El resultado no es el esperado");
}