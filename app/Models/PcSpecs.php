<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PcSpecs extends Model
{
    protected $table = 'pc_specs';
    protected $primaryKey = 'id';
    protected $fillable = ['description', 'component'];

}
