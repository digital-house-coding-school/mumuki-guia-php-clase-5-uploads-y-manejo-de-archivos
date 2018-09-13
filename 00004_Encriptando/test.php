public function testHash(): void {
  $texto = "monito123";
  
  $resultado = $this->encriptar($texto);
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $hash = password_hash($texto, PASSWORD_DEFAULT);
  $this->assertTrue(password_verify($texto, $hash), "El hash retornado no parecería ser correcto");
}

public /*...content...*/