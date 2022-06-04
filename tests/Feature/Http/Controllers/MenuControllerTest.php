<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class MenuControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_goto_reservation()
    {
        $response = $this->get('/dashboard/reservation');
        $response->assertStatus(302);
    }

    public function test_goto_order()
    {
        $response = $this->get('/dashboard/order');
        $response->assertStatus(302);
    }

    public function test_goto_menu()
    {
        $response = $this->get('/dashboard/menu-list');
        $response->assertStatus(302);
    }

    public function test_goto_add_menu()
    {
        $response = $this->get('/dashboard/add-menu');
        $response->assertStatus(302);
    }

    public function test_store_data()
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'satu@annd.dev',
            'role' => 'admin'
        ]);

        //Storage::fake('images');
        //$file = UploadedFile::fake()->image('image.jpg', $width, $height)->size(100);

        $response = $this->actingAs($user)->post('/dashboard/add-menu', [
            'name' => 'Bakwan',
            'description' => 'bakwan jagung isi 5 pcs',
            'price' => '10000',
            'image' => UploadedFile::fake()->create(name: 'bakwan.jpg', kilobytes: 500),
        ]);

        //Storage::disk('images')->assertExists($file->hashName());
        $response->assertValid();
        $response->assertStatus(302);
        //$response->assertRedirect('/');
    }
    
    /*public function test_delete_data()
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'adminn1@annd.dev',
            'role' => 'admin'
        ]);

        $response = $this->actingAs($user)->post('/dashboard/add-menu', [
            'name' => 'Bakwan',
            'description' => 'bakwan jagung isi 5 pcs',
            'price' => '10000',
            'image' => UploadedFile::fake()->create(name: 'bakwan.jpg', kilobytes: 500),
        ]);

        $response->delete('/dashboard/delete-menu/10');

        $response->assertStatus(403);
    }*/
}
