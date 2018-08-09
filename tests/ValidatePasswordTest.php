<?php

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase{

    public function testValidaLength()
    {
        $valPass = new ValidatePassword();
        $this->assertFalse($valPass->validLength('1234'));
    }

}