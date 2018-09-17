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
  
  
  var_dump(1);exit;
  $resultado = $testName == $name && $testValue == $value && $testExpires == $expires;
  
  return true;
}

function time() {
  return 1537192345;
}