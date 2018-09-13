$resultado = false;
$code = 'var_dump(true);exit;';

override_function("move_uploaded_file","$a,$b",$code);