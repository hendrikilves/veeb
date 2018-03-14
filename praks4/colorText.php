<?php
/**
 * Created by PhpStorm.
 * User: hendrik.ilves
 * Date: 14.03.2018
 * Time: 10:55
 */

require_once 'text.php';
class colorText extends text
{
    private $color;
    /**
     * colorText constructor.
     * @param $color
     */
    public function __construct($str, $color=false)
    {
        text::__construct($str);
        $this->setColor($color);
    }
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function showText()
    {
        if(is_null($this->getColor())){
            parent::showText();
        } else {
            echo '<font color="'.$this->getColor().'">'.$this->getStr().'</font>';
        }
    }
}