<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = 'menu';

    public function parent()
    {
        return $this->belongsTo(menu::class, 'menu_type');
    }

    public function children()
    {
        return $this->hasMany(menu::class, 'menu_type');
    }
}
