<?php
include 'InformationModel.php';

class Prueba extends Controller
{
    function __construct()
    {
      //  echo 'se ejecuto el constructor de Prueba controller';
    }

    public function metodo()
    {
      

       $objetoBook = new Model\Information();
       
       /*
         * paso de variables a la vista
         */
        $data = array(
            'saludo' => 'hola todos',
            'datos' => $objetoBook->getAll()
        );

        return $this->render('pruebaSaludar.php', $data);
    }

}
