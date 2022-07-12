<?php

require_once 'Pao.php';


class Frances extends Pao
{
    public function __construct()
    {
        $this->nome = "Frances";
    }

    public function valor()
    {
        return 2;
    }
}