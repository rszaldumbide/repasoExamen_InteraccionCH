<?php

namespace App\Controllers;

use App\Models\modeloProductos;

class Home extends BaseController
{
    public function index(): string
    {
        $objProductos = new modeloProductos();
        $productos = $objProductos->listarProductos();

        $data = [
            'productos' => $productos,
        ];

        return view('productos', $data);
    }

    public function agregar()
    {
        $objProductos = new modeloProductos();

        $agregarDatos = [

            'PROV_ID' => $_POST['provedorADD'],
            'CAT_ID' => $_POST['categoriaADD'],
            'PROD_NOMBRE' => $_POST['productoADD'],
        ];

        $objProductos->agregarProductos($agregarDatos);

        return redirect()->to(base_url('/'));
    }

    public function actualizar()
    {
        $objProductos = new modeloProductos();

        $valor = $_POST['provNombre'];
        $id = $_POST['idProducto'];

        $objProductos->actualizarProveedor($id, $valor);

        return redirect()->to(base_url('/'));
    }

    public function eliminar($id)
    {
        $objProductos = new modeloProductos();
        $objProductos->eliminarProducto($id);

        return redirect()->to(base_url('/'));
    }
}
