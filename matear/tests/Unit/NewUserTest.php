<?php

namespace Tests\Unit;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class NewUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_new_user()
    {
       $newUser = new RegisterController();

       $newUser->create([
           
       ]);
       
    }
}
