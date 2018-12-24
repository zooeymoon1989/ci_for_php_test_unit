<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/9/30
 * Time: 下午8:10
 */

namespace Repositories;


class Game
{
    protected $title;
    protected $imagePath;
    protected $rating;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {

        if ($this->imagePath == ""){
            return $this->imagePath = "somewhere";
        }

        return $this->imagePath;
    }

    /**
     * @param mixed $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

}