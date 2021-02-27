
<?php

namespace App;

class Product extends Model
{
    public function inStock()
    {
        return $this->stock()->where('in_stock', true)->exists();
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function track()
    {
        return $this->stock->each->track();
    }
}