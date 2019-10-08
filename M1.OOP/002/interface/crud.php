<?php
/**
 * Created by PhpStorm.
 * User: os
 * Date: 9/6/2019
 * Time: 8:00 PM
 */

interface Crud
{
    public function create();

    public function update();

    public function read();

    public function delete();
}