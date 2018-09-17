namespace interno;

$testName = null;
$testValue = null;
$testExpires = null;
$resultado = null;

function setcookie($name, $value, $expires = 0) {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $resultado = $testName == $name && $testValue == $value && $testExpires == $expires;
  
  return true;
}

function time() {
  return 1537192345;
}