<?php
include_once 'Point2D.php';
include 'Point3D.php';

$point = new Point3D(1,2,3);
print_r($point->getXYZ());