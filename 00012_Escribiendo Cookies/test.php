public function testCookie1(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $testName = "idioma";
  $testValue = "es";
  $testExpires = 0;
  
  guardarCookie();
  
  $this->assertTrue(is_bool($resultado), "Llamaste a la función setcookie?");
  
  $this->assertTrue($resultado, "La función no hace lo esperado");
}