<?php

namespace checkoutweb\sdk\Tests;

use stonkeep\ModelFields\Tests\User;

class initialTest extends TestCase
{
    /** @test */
    public function test_trait()
    {
        //Get User fields
        $resposta = User::metodoTeste();
        $this->assertSame($resposta, 'tudo ok');
    }
}
