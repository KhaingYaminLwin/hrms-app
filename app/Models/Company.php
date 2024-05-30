<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = ['name','cities_id'];
    use HasFactory;

    public function cities(){
        return $this->belongsTo(Cities::class);
    }
}
