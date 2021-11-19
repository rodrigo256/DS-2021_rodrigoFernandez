<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function UserHasCards()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->cards);
    }
    
    /** @test */
    public function UserHasShops()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->shops);
    }

    /** @test */
    public function UserHasFavorites()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->favoritesProducts);
    }
}
