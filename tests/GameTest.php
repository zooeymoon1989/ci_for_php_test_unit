<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/9/30
 * Time: 下午8:29
 */


use PHPUnit\Framework\TestCase;
use Repositories\Game;

class GameTest extends TestCase
{
    public function testImage_WithNull_ReturnPlaceHolder()
    {
        $game = new Game();
        $game->setImagePath("");
        $this->assertEquals("somewhere" , $game->getImagePath());
    }
}