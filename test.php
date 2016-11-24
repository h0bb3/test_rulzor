<?php
// a test view that is not named correctly

class TestView {

  public function __construct() {
    // push again! and again
    $a = $_POST['a'];
		$a = $_GET['a'];
		$a = $_REQUEST['a'];
  }
}

?>
