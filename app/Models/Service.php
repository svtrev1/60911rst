<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'picture_url', 'price'];

    public function providedServices()
   {
       return $this->hasMany(ProvidedService::class);
   }

   public function sessions()
    {
        return $this->belongsToMany(Session::class, 'provided_services');
    }

}
