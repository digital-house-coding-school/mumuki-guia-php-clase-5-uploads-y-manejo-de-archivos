public function testDescriptionExample(): void {
  $this->assertTrue(file_exists("prueba.txt"), "No parecería existir el archivo 'prueba.txt'");
  
  $text = file_get_contents("prueba.txt");
  $text = strtolower($text);
  
  $this->assertTrue($text === "mi primer archivo!", "El contenido del archivo es '$text' y debería ser 'Mi primer archivo!'");
}