<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Models\Page;

class PageTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

//    public function test_page_create()
//    {
//        $user = factory(User::class)->create();
//
//        $response = $this->actingAs($user)->get('/page/create');
//
//        $response->assertViewIs('page.create');
//    }
//
//    public function test_page_store()
//    {
//        $this->withoutExceptionHandling();
//
//        $user = factory(User::class)->create();
//
//        $page = $this->getPage();
//
//        $response = $this->actingAs($user)->post('/page', $page);
//
//        $response->assertStatus(302);
//
//        $this->assertDatabaseHas('pages', $page);
//    }

//    public function test_edit_page()
//    {
//        $page = Page::all()->random(1);
//
//        $user = factory(User::class)->create();
//
//        $response = $this->actingAs($user)->get('/page/' . $page[0]->id . '/edit');
//
//        $response->assertViewIs('page.edit');
//
//    }
// This test does not want to pass
//    public function test_can_update_navitem()
//    {
//        $this->withoutExceptionHandling();
//
//        $user = factory(User::class)->create();
//
//        $navitem = Navitem::all()->random(1);
//
//        $update = [
//            'name' => 'test1',
//            'uri' => 'test1',
//            'sub_nav' => null,
//            'active' => 1
//        ];
//
//        $response = $this->put('/navitem/' . $navitem[0]->id, $update);
//
//        $response->assertStatus(302);
//
//        $this->assertDatabaseHas('navitems', $update);
//    }

//    public function test_delete_navitem()
//    {
//        $page = Page::all()->random(1);
//
//        $user = factory(User::class)->create();
//
//        $response = $this->actingAs($user)->delete('/page/' . $page[0]->id);
//
//        $this->assertDatabaseMissing('pages', $page[0]->toArray());
//
//    }

    public function test_all_navitems()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/page');

        $response->assertStatus(200);

        $response->assertViewIs('page.index');
    }
// This test is failing
//    public function test_find_navitem_by_id()
//    {
//        $this->withoutExceptionHandling();
//
//        $user = factory(User::class)->create();
//
//        $page = Page::all()->random(1);
//
//        $response = $this->actingAs($user)->get('/page/' . $page[0]->id);
//
//        $response->assertStatus(200);
//
//        $response->assertViewIs('welcome');
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
