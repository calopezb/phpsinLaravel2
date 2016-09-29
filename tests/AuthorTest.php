<?php

use PhpsinLaravel2\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {
        $author = new \PhpsinLaravel2\Author(
            'anemail@foo.dev',
            'platzi',
            'AUTOR_DE_PLATZI'
        );

        $this->assertInstanceOf(\PhpsinLaravel2\Author::class, $author);
    }

    /** @test */
    function it_should_fail_when_no_key_is_given()
    {
        $this->setExpectedException(\InvalidArgumentException::class);

        $author = new \PhpsinLaravel2\Author(
            'anemail@foo.dev',
            '1234',
            'GUIDO'
        );
    }
}