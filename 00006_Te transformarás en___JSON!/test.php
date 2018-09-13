public function testArray1(): void {
  $unArray = [
    "Dario",
    "Alejandro",
    "Javier"
  ];
  
  $resultado = aJSON($array);
  
  $this->assertTrue(is_string($resultado), "La función no retorna un string");
  
  $this->assertTrue($resultado === json_encode($unArray), "La función no retorna un string");
}

public function testArray2(): void {
  $unArray = [
    0 => [
      "nombre" => "Dario",
      "apellido" => "Susnisky"
    ],
    1 => [
      "nombre" => "Alejandro",
      "apellido" => "Vivone"
    ],
    2 => [
      "nombre" => "Javier",
      "apellido" => "Herrera"
    ]
  ];
  
  $resultado = aJSON($array);
  
  $this->assertTrue(is_string($resultado), "La función no retorna un string");
  
  $this->assertTrue($resultado === json_encode($unArray), "La función no retorna un string");
}