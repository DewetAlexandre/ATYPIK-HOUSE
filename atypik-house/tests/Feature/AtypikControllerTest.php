<?php

namespace Tests\Feature;

use App\Models\Avis;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AtypikControllerTest extends TestCase
{
    use RefreshDatabase;
/*
    public function test_an_user_can_be_add_to_database()
    {
        $response = $this->post('/auth/inscription',[
            'prenom' => 'johan',
            'nom' => 'Marfil',
            'email' => 'marfiljojo62@hotmail.com',
            'password' => 'Jojo_070901'
        ]);

        $this->assertCount(1, User::all());

    }
    */
}
