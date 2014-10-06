<?php
// a test view that is not named correctly

class View {

  public function __construct() {
    // syntax error below...
    $a = $_POST['a']
		$a = $_GET['a'];
		$a = $_REQUEST['a'];
  }
}

?>
