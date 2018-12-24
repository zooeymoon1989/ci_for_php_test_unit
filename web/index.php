<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/9/30
 * Time: 下午8:05
 */

require __DIR__.'/../vendor/autoload.php';

use Repositories\GameRepository;

$gameRepository = new GameRepository();
$result = $gameRepository->findByUserId(12);
echo "<pre>";
var_dump($result);
echo "</pre>";


