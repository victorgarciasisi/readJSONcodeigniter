<?php class Datos_model extends CI_Model
{
    public function leerJson()
    {
        // ubicacion JSON online
        define('JSON', 'http://datos.gijon.es/doc/turismo/recetas.json');

        // leemos JSON y convertimos
        $data = file_get_contents(JSON);
        $items = json_decode($data, true);

        return $items;
    }

    public function obtenerTodos()
    {
        //leemos json
        $items=$this->leerJson();

        //lista de items a recorrer
        $listaItems = $items["recetas"]["receta"];

        return $listaItems;
    }

    public function obtenerPorId($id)
    {
        //leemos json
        $items=$this->leerJson();

        //lista de items a recorrer
        $item = $items["recetas"]["receta"][($id - 1)];

        return $item;
    }
} //Fin class Datos_model
