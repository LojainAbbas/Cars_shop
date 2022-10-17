<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

   // public $timestamps = false;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'found', 'description', 'image_path'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    //Define a has many through relationship
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class, // name of model we want to access
            CarModel::class, // name of intermediate model to access
            'car_id', //Foreign key on CarModel table
            'model_id' //Foreign key on Engine table
        );
    }

//Define a has one through relationship
    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
