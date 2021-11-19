<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function UserHasFavorites()
    {
        $product = new Product();

        $this->assertInstanceOf(Collection::class, $product->favoritesProducts);
    }
}
