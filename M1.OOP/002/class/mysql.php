<?php
/**
 * Created by PhpStorm.
 * User: os
 * Date: 9/6/2019
 * Time: 8:03 PM
 */
class Mysql extends Database implements Crud, Log, Search
{
    public function connect()
    {
        // TODO: Implement connect() method.
        $connection = mysqli_connect("", "", "");
    }

    public function insert()
    {

    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function search()
    {
    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }
}