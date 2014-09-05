<?php

namespace house\bedroom;

class Furnitures
{
    public function __construct()
    {
        echo __CLASS__." loaded\n";
    }

    public function getAll()
    {
        echo "bed\n";
        echo "closet\n";
    }
}
