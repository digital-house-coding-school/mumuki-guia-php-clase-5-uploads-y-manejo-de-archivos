public function testHash(): void {
  $texto = "monito123";
  
  $resultado = $this->encriptar($texto);
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $this->assertTrue(password_verify($texto, $resultado), "El hash retornado no parecería ser correcto");
}

public /*...content...*/