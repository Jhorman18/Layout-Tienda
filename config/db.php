<?php

class Database{
    //conexion local
    $db = new mysqly('localhost', 'root', '', 'tienda');
    $db->query("SET NAMES 'UTF8'")
    return $db
}