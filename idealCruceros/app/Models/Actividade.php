<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 *
 * @property $id_actividades
 * @property $id_crucero
 * @property $tematica
 * @property $horario_actividad
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Crucero $crucero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividade extends Model
{
    
    static $rules = [
		'id_actividades' => 'required',
		'id_crucero' => 'required',
		'tematica' => 'required',
		'horario_actividad' => 'required',
		'descripcion' => 'required',
    ];
    protected $primaryKey = "id_actividades";
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_actividades','id_crucero','tematica','horario_actividad','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function crucero()
    {
        return $this->hasOne('App\Models\Crucero', 'id_crucero', 'id_crucero');
    }
    

}
