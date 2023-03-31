<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $primaryKey = 'id';
    protected $fillable = ['title'];

    //связь один ко многим с таблицей группы
    public function slides() {
        return $this->hasMany(Slider::class, 'group_id', 'id');
    }
}
