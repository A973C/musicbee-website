<?php
/**
 * Copyright (c) 2017 AvikB, some rights reserved.
 *  Copyright under Creative Commons Attribution-ShareAlike 3.0 Unported,
 *  for details visit: https://creativecommons.org/licenses/by-sa/3.0/
 *
 * @Contributors:
 * Created by AvikB for noncommercial MusicBee project.
 *  Spelling mistakes and fixes from community members.
 *
 */


namespace App\Lib;

class Controller
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->modle = $model;
    }
    public function index()
    {
    }
    public function getData()
    {
    }
    public function setData()
    {
    }

}
