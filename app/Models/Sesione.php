<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sesione
 *
 * @property $id
 * @property $tema
 * @property $fecha
 * @property $ubicacion
 * @property $instructor
 * @property $sesionescol
 * @property $nivel_dificultades_id
 * @property $talleres_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property NivelDificultade $nivelDificultade
 * @property Tallere $tallere
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sesione extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tema', 'fecha', 'ubicacion', 'instructor', 'sesionescol', 'nivel_dificultades_id', 'talleres_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivelDificultade()
    {
        return $this->belongsTo(\App\Models\NivelDificultade::class, 'nivel_dificultades_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tallere()
    {
        return $this->belongsTo(\App\Models\Tallere::class, 'talleres_id', 'id');
    }
    
}
