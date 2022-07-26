<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    public $timestamps = false;

    protected $table      = 'prestaciones';

    protected $primaryKey ='idPrestamo';

    protected $fillable   = ['idPrestamo',
                            'montoPrestamo',
                            'montoSeguro',
                            'montoRecibido',
                            'interesCalculado',
                            'cuotasPrestamo',
                            'montoCuota',
                            'montoTotalPago',
                            'idUsuario'];
}
