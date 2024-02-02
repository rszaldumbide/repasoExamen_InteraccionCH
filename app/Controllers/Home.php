<?php

namespace App\Controllers;

use App\Models\modeloProductos;


class Home extends BaseController
{
    public function index(): string
    {
        $objProductos = new modeloProductos();
        $respuesta = $objProductos->listarDatos();

        $datos = [
            'productos' => $respuesta
        ];

        return view('productos', $datos);
    }

    public function editar($id)
    {
        $objProductos = new modeloProductos();
        $respuesta2 = $objProductos->listarxID($id);

        $datos = [
            'producto' => $respuesta2[0]

        ];

        return view('editar', $datos);
    }

    public function actualizar($id)
    {
        $objProductos = new modeloProductos();

        $nuevoValor = $this->request->getPost('nombre_proveedor');

        $objProductos->actualizar($id, $nuevoValor);

        $respuesta = $objProductos->listarDatos();

        $datos = [
            'productos' => $respuesta
        ];

        return view('productos', $datos);
    }
}
