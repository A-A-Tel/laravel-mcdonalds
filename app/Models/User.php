<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $guarded = ['admin'];

    public function contact_requests(): HasMany
    {
        return $this->hasMany(ContactRequest::class);
    }

    public function reservation_requests(): HasMany
    {
        return $this->hasMany(ReservationRequest::class);
    }

}
