
<?php

namespace Tests\Feature;

use App\Product;
use App\Retailer;
use App\Stock;
use Illuminate\Support\Facades\Http;
use function Pest\Laravel\artisan;

it('tracks product stock', function () {
    $switch = Product::create(['name' => 'Nintendo Switch']);

    $bestBuy = Retailer::create(['name' => 'Best Buy']);

    assertFalse($switch->inStock());

    $stock = new Stock([
        'price' => 10000,
        'url' => 'https://foo.com',
        'sku' => '12345',
        'in_stock' => false
    ]);

    $bestBuy->addStock($switch, $stock);

    assertFalse($stock->fresh()->in_stock);

    Http::fake(function () {
        return [
            'available' => true,
            'price' => 29900
        ];
    });

    artisan('track');

    assertTrue($stock->fresh()->in_stock);
});