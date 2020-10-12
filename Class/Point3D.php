<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    public $z;

    public function __construct($_x, $_y, $_z)
    {
        parent::__construct($_x, $_y);
        $this->z = $_z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x,$y,$z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }

    public function toString()
    {
        return '('.$this->x.','.$this->y.','.$this->z.')';
    }

}