<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloProductos extends Model
{

    public function listarProductos()
    {
        $query = $this->db->table('tbl_productos pd');
        $query->select('*');
        $query->join('tbl_categorias c', 'c.cat_id=pd.cat_id');
        $query->join('tbl_proveedor p', 'p.prov_id=pd.prov_id');
        $valor = $query->get();
        $respuesta = $valor->getResultArray();

        return $respuesta;
    }

    public function agregarProductos($datos){
        $query = $this->db->table('tbl_productos');
        $query->insert($datos);
    }

    public function actualizarProveedor($id, $datos)
    {
        $query = $this->db->table('tbl_productos');
        $query->set('prov_id', $datos);
        $query->where('prod_id', $id);
        $query->update();
    }

    public function eliminarProducto($id)
    {
        $query = $this->db->table('tbl_productos');
        $query->where('prod_id', $id);
        $query->delete();
    }
}
