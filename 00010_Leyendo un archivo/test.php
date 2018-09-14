public function testLeer1(): void {
  $archivo = "prueba.txt";
  
  $contenido = "Prueba 1";
  
  file_put_contents($archivo, $contenido);
  
  $respuesta = leerArchivo($archivo);
  
  $this->assertTrue(is_string($respuesta), "La función no esta retornando un string");
  
  $this->assertTrue($respuesta === $contenido, "La función esta retornando '$respuesta' en vez del contenido del archivo");
}

public function testLeer2(): void {
  $archivo = "saludo.txt";
  
  $contenido = "Hola Mundo!";
  
  file_put_contents($archivo, $contenido);
  
  $respuesta = leerArchivo($archivo);
  
  $this->assertTrue(is_string($respuesta), "La función no esta retornando un string");
  
  $this->assertTrue($respuesta === $contenido, "La función esta retornando '$respuesta' en vez del contenido del archivo");
}