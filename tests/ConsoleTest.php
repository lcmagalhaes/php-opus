<?php

namespace capesesp;

use capesesp\Console;

class ConsoleTest extends \PHPUnit_Framework_TestCase
{
    public function testRed()
    {
        $this->assertAnsiEnclosing(Console::red('text'), Console::RED);
    }

    public function testGreen()
    {
        $this->assertAnsiEnclosing(Console::green('text'), Console::GREEN);
    }

    public function testBlue()
    {
        $this->assertAnsiEnclosing(Console::blue('text'), Console::BLUE);
    }

    public function testYellow()
    {
        $this->assertAnsiEnclosing(Console::yellow('text'), Console::YELLOW);
    }

    public function testBold()
    {
        $this->assertAnsiEnclosing(Console::bold('text'), Console::BOLD);
    }

    public function assertAnsiEnclosing($string, $code)
    {
        $this->assertTrue(strpos($string, "$code") > 0, "Codigo da cor nao corresponde ao esperado");
        $this->assertTrue(strpos($string, '0m') >= 0, "Não encontrado codigo para encerrar a formatacao.");
    }
}
