<?php

namespace App\Controllers;

use App\Models\modeloProductos;

class Home extends BaseController
{
    public function index(): string
    {
        $objProductos = new modeloProductos();

        $productosResp = $objProductos->listarTodo();

        $data = [

            'productos' => $productosResp,
        ];

        return view('index', $data);
    }

    public function actualizar()
    {

        $objProductos = new modeloProductos();

        $nombreNuevo = $_POST['editProv'];
        $id = $_POST['ediID'];

        $objProductos->actualizar($nombreNuevo, $id);

        $productosResp = $objProductos->listarTodo();

        $data = [
            'productos' => $productosResp,
        ];

        return view('index', $data);
    }
}
