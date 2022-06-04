<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ReservationControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_goto_menu()
    {
        $response = $this->get('/menu');
        $response->assertStatus(200);
    }

    public function test_goto_reservation()
    {
        $response = $this->get('/reservation');
        $response->assertStatus(302);
    }

    public function test_store_data()
    {

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'dua@annd.dev',
            'role' => 'user'
        ]);

        $response = $this->actingAs($user)->post('/reservation', [
            'name' => 'Dias Tri',
            'email' => 'dias@gmail.com',
            'phone' => '085257123456',
            'date' => '2022-06-22',
            'table' => 8,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_goto_cart()
    {
        $response = $this->get('/cart');
        $response->assertStatus(302);
    }
}
