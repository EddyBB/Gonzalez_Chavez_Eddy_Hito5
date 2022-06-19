<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crucero
 *
 * @property $id_crucero
 * @property $nombre
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $puerto_origen
 * @property $puerto_fin
 * @property $descripcion
 * @property $precio
 * @property $img_crucero
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade[] $actividades
 * @property Reserva[] $reservas
 * @property Tripulacion[] $tripulacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crucero extends Model
{
    
    static $rules = [
		'id_crucero' => 'required',
		'nombre' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'puerto_origen' => 'required',
		'puerto_fin' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'img_crucero' => 'required',
    ];
    protected $primaryKey = "id_crucero";
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_crucero','nombre','fecha_inicio','fecha_fin','puerto_origen','puerto_fin','descripcion','precio','img_crucero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividade', 'id_crucero', 'id_crucero');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'id_crucero', 'id_crucero');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tripulacions()
    {
        return $this->hasMany('App\Models\Tripulacion', 'id_crucero', 'id_crucero');
    }
    

}
