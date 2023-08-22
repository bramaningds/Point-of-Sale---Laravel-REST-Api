<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'last_purchased_at'
    ];

    public function sales() : HasMany {
        return $this->hasMany(Sale::class);
    }

    public function last_order() {
        return $this->hasOne(Sale::class)->ofMany('created_at', 'max');
    }

}
