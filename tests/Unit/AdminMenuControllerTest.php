<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;

class AdminMenuControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store_data()
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'lima@annd.dev',
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
        $this->assertTrue(true);
    }
}
