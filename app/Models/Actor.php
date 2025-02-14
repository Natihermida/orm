<?php
namespace app\Models;//se define el espacio de nombre
use Illuminate\Database\Eloquent\Model;
class Actor extends Model{
    protected $table = "actor";//se define la tabla
    protected $primaryKey = "actor_id";//se define la llave primaria
    public $timestamps = false;//para que no se guarden las columnas de creacion y actualizacion de registros
}



?>