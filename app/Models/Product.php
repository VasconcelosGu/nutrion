<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    const nome = 'name';
    const cal = 'calories';
    const prot = 'proteins';
    const carbs = 'carbs';
    const gord = 'lipideos';

    protected $fillable = [
        Product::nome,
        Product::cal,
        Product::prot,
        Product::gord,
        Product::carbs,
    ];

    public function getCaloriesAttribute(float $calories)
    {
        return $calories / 100;
    }

    public function getProteinsAttribute(float $proteins)
    {
        return $proteins / 100;
    }

    public function getCarbsAttribute(float $carbs)
    {
        return $carbs / 100;
    }

    public function getLipideosAttribute(float $lipideos)
    {
        return $lipideos / 100;
    }
}
