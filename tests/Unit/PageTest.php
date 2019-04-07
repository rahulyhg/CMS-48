<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Page;

class PageTest extends TestCase
{
    use WithFaker;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_page()
    {
        $new_page = Page::create($this->getPage());

        $this->assertDatabaseHas('pages', $new_page->toArray());
    }

    public function test_can_update_page()
    {
        $new_page = Page::create($this->getPage());

        $update = $this->getPage();

        $new_page->update($update);

        $this->assertDatabaseHas('pages', $update);
    }

//    public function test_can_delete_page()
//    {
//        $page = Page::all()->random(1);
//
//        $find = Page::find($page[0]->id);
//        $find->delete();
//
//        $this->assertDatabaseMissing('pages', $page->toArray());
//
//
//    }

    public function getPage()
    {
        return [
            'navitem_id' => 1,
            'content' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
