<?php

namespace Tests\Unit;

use App\Models\FavoritesProducts;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class FavoritesTest extends TestCase
{
    /** @test */
    public function FavoritesRelationsUser()
    {
        $favorite = new FavoritesProducts();
        
        $user = new User();

        $user['id'] = 1 ;

        $favorite['user']= $user;

        $this->assertInstanceOf(User::class, $favorite->user);
        
    }
}
