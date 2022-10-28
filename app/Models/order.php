<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
      'tables_cents',
      'status',
      'total_cents',
      'menus_id',
      'establishment_id',
    ];
    public function establishment()
    {
      return $this->belongsTo(Establishment::class);
    }
}
