<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'inventory_id');
    }
}
