<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloProductos extends Model
{

    public function listarTodo()
    {
        $query = $this->db->table('tbl_productos pd');
        $query->select('*');
        $query->join('tbl_proveedor p', 'p.prov_id=pd.prov_id');
        $query->join('tbl_categorias c', 'c.cat_id=pd.cat_id');
        $query->orderBy('pd.prod_nombre', 'ASC');
        $valor = $query->get();
        $respuesta = $valor->getResultArray();

        return $respuesta;
    }

    public function actualizar($proveedor, $id){
        $query = $this->db->table('tbl_productos pd');
        $query->set('pd.prov_id', $proveedor);
        $query->where('pd.prod_id', $id);
        $query->update();
    }
}
