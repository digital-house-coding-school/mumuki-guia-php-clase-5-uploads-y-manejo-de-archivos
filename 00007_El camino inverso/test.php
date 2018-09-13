public function testArray1(): void {
  $unArray = [
    "Dario",
    "Alejandro",
    "Javier"
  ];
  
  $json = json_encode($unArray);
  
  $resultado = aArray($json);
  
  $this->assertTrue(is_array($resultado), "La función no retorna un array");
  
  $json2 = json_encode($resultado);
  
  $this->assertTrue($json == $json2, "La función no retorna el array esperado");
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
  
  $json = json_encode($unArray);
  
  $resultado = aArray($json);
  
  $this->assertTrue(is_array($resultado), "La función no retorna un array");
  
  $json2 = json_encode($resultado);
  
  $this->assertTrue($json == $json2, "La función no retorna el array esperado");
}