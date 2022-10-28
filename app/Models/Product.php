<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'price_cents',
      'it_available',
      'establishment_id',
      'image_path',
  ];
  public function establishment()
  {
    return $this->belongsTo(Establishment::class);
  }

  public function menus()
{
   return $this->belongsToMany(menu::class);
}

}
