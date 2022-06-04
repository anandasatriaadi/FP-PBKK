<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\User;
use Tests\TestCase;

class ReservationControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store_data()
    {

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'enam@annd.dev',
            'role' => 'user'
        ]);

        $response = $this->actingAs($user)->post('/reservation', [
            'name' => 'Dias',
            'email' => 'dias@gmail.com',
            'phone' => '085257123456',
            'date' => '2022-06-22',
            'table' => 7,
        ]);

        $this->assertTrue(True);
    }
}
