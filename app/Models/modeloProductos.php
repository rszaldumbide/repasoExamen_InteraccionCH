<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloProductos extends Model
{

    public function listarDatos()
    {

        $sentencia = $this->db->table('tbl_productos pd');
        $sentencia->select('*');
        $sentencia->join('tbl_categorias cat', 'cat.cat_id=pd.cat_id');
        $sentencia->join('tbl_proveedor pv', 'pv.prov_id=pd.prov_id');
        $sentencia->orderBy('cat.cat_nombre', 'ASC');
        $valor = $sentencia->get();
        $respuesta = $valor->getResultArray();

        return $respuesta;
    }

    public function listarxID($id)
    {
        $sentencia = $this->db->table('tbl_productos pd');
        $sentencia->select('*');
        $sentencia->join('tbl_categorias cat', 'cat.cat_id=pd.cat_id');
        $sentencia->join('tbl_proveedor pv', 'pv.prov_id=pd.prov_id');
        $sentencia->where('pd.prod_id', $id);

        $valor = $sentencia->get();
        $respuesta = $valor->getResultArray();

        return $respuesta;
    }

    public function actualizar($id, $valor)
    {
        $sentencia = $this->db->table('tbl_productos pd');
        $sentencia->where('pd.prod_id', $id);
        $sentencia->update(['PROV_ID' => $valor]);
    }
}
