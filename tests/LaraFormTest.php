<?php

namespace LaraForm\Tests;

use PHPUnit_Framework_TestCase;
use LaraForm\Form;

class LaraformTest extends PHPUnit_Framework_TestCase
{
    public function testLaraFormFoo()
    {
        $form = new Form;
        $foo = $form->foo();
        
        $this->assertEquals(true, $foo);
    }
}