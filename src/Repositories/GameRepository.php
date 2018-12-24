<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/9/30
 * Time: 下午8:08
 */

namespace Repositories;


class GameRepository
{
    public function findByUserId($id)
    {
        $games = [];
        for ($i = 0 ; $i < 6 ; $i ++){
            $game = new Game();
            $game->setTitle("foo".$i);
            $game->setImagePath("somewhere".$i);
            $game->setRating(mt_rand(1,9));
            $games[] = $game;
        }

        return $games;
    }

}