<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvidedService extends Model
{
    use HasFactory;
    public function session()
   {
       return $this->belongsTo(Session::class);
   }
   public function service()
   {
       return $this->belongsTo(Service::class);
   }

}
