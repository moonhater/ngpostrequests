
<?php

namespace Tests\Feature;

use App\Product;
use App\Retailer;
use App\Stock;

it('checks stock for products at retailers', function () {
        $switch = Product::create(['name' => 'Nintendo Switch']);

        $bestBuy = Retailer::create(['name' => 'Best Buy']);

        assertFalse($switch->inStock());

        $stock = new Stock([
            'price' => 10000,
            'url' => 'https://foo.com',
            'sku' => '12345',
            'in_stock' => true
        ]);

        $bestBuy->addStock($switch, $stock);

        assertTrue($switch->inStock());
});