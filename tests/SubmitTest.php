<?php

require_once("formlets.php");
require_once("tests/FormletTest.php");

class SubmitTest extends PHPUnit_Framework_TestCase {
    use FormletTestTrait;

    public function formlets() {
        return array
            ( array(_submit("SUBMIT"))
            );
    }
}

?>