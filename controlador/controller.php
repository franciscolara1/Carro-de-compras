<?php

require('modelo/Juegos.php');

class JuegoController{

    public function getJuegos()
    {
        $juegos = new Juego();
        $lista = $juegos->obtenerJuegos();

        return $lista;
    }
}
?>