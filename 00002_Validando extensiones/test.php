public function testJPG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtension();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función esta fallando si el archivo se llama 'avatar.jpg'");
}

public function testPNG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.png",
      "type" => "image/png",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtension();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función esta fallando si el archivo se llama 'avatar.png'");
}

public function testJPEG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.jpeg",
      "type" => "image/jpeg",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarExtension();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función esta fallando si el archivo se llama 'avatar.jpeg'");
}

public function testTXT(): void {
  $_FILES = [
    "avatar" => [
      "name" => "notas.txt",
      "type" => "text/plain",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarAvatar();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertFalse($resultado, "La función esta fallando si el archivo se llama 'notas.txt'");
}

public function testTXT(): void {
  $_FILES = [
    "avatar" => [
      "name" => "home.html",
      "type" => "text/html",
      "tmp_name" => "/tmp/img/php6hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  $resultado = $this->validarAvatar();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertFalse($resultado, "La función esta fallando si el archivo se llama 'home.html'");
}

public /*...content...*/