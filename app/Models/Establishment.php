<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
      'cnpj',
      'trading_name',
      'company_name',
      'address',
      'phone',
    ];

    public function users()
    {
      return $this->hasMany(user::class);
    }

    public function menus()
   {
     return $this->hasMany(menu::class);
   }

   public function products()
  {
    return $this->hasMany(product::class);
  }

  public function orders()
 {
   return $this->hasMany(order::class);
 }
}
