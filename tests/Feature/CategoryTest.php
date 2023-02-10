<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_categories_table_is_empty()
    {
        $this->assertDatabaseCount('categories', 0);

    }

    public function test_create_category()
    {
        $this->assertDatabaseCount('categories', 0);

        $category = Category::create([
            'name' => 'Laptops',
        ]);

        $this->assertDatabaseCount('categories', 1);
        $this->assertDatabaseHas('categories', [
            'name' => 'Laptops',
        ]);
    }

}
