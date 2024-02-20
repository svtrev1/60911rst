<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    public function client()
{
    return $this->belongsTo(Client::class, 'client_id');
}

public function cosmetologist()
{
    return $this->belongsTo(Cosmetologist::class, 'cosmetologist_id');
}
   public function providedServices()
   {
       return $this->hasMany(ProvidedService::class);
   }

   public function services()
   {
       return $this->belongsToMany(Service::class, 'provided_services');
   }


}
