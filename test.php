<?php
// a test view that is not named correctly

class Test {

  public function __construct() {
    $a = $_POST['a'];
		$a = $_GET['a'];
		$a = $_REQUEST['a'];
  }
}

?>
