namespace sarasa;

$resultado = false;

function move_uploaded_file($a, $b) {
  global $resultado;
  global $dest;
  return ($a == $_FILES["avatar"]["tmp_name"] && $b == $dest);
}