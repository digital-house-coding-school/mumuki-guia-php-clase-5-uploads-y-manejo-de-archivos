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
  global $resultado;
  global $dest;
  
  $dest = "img/avatar.jpg";
  
  $this->subirAvatar();
  
  $this->assertTrue(is_bool($resultado), "¿Usaste move_uploaded_file?");
  
  $this->assertTrue($resultado, "La función esta fallando si el archivo se llama 'avatar.jpg'");
}

public function testPNG(): void {
  $_FILES = [
    "avatar" => [
      "name" => "avatar.png",
      "type" => "image/png",
      "tmp_name" => "/tmp/img/php7hst32",
      "error" => 0,
      "size" => 1024
    ]
  ];
  global $resultado;
  global $dest;
  
  $dest = "img/avatar.png";
  
  $this->subirAvatar();
  
  $this->assertTrue(is_bool($resultado), "¿Usaste move_uploaded_file?");
  
  $this->assertTrue($resultado, "La función esta fallando si el archivo se llama 'avatar.png'");
}

public /*...content...*/
