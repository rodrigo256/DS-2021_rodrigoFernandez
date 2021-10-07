<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class CardTest extends TestCase
{
    public function test_a_user_has_many_cards()
    {
        $user = new User;
        
        $this->assertInstanceOf(Collection::class, $user->cards);
    }
}
