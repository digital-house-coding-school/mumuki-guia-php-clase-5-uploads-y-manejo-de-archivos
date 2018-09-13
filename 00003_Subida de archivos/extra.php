namespace sarasa;

$resultado = false;
$dest = "";

function move_uploaded_file($a, $b) {
  global $resultado;
  global $dest;
  $resultado = ($a == $_FILES["avatar"]["tmp_name"] && $b == $dest);
}