<?php

namespace Model;
class Information extends \Model\Model
{
    function testInsert(array $datos)
    {
        //echo 'desde clase Book metodo pruebaInsert';
        $conn = \Model\Model::getConnection();
        return $conn->insert('information', $datos);
    }

    function getAll()
    {
        return $theVariable = array(
            "Search Engines" =>
            array(
                0 => "http//google.com",
                1 => "http//yahoo.com",
                2 => "http//msn.com/"),
            "Social Networking Sites" =>
            array(
                0 => "http//www.facebook.com",
                1 => "http//www.myspace.com",
                2 => "http//vkontakte.ru",)
        );
    }
}
