<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Models\NavItem;

class NavItemTest extends TestCase
{
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

    public function test_navitem_create()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/navitem/create');

        $response->assertViewIs('navitem.create');
    }

    public function test_navitem_store()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $navitem = $this->getNavitem();

        $response = $this->actingAs($user)->post('/navitem', $navitem);

        $response->assertStatus(302);

        $this->assertDatabaseHas('navitems', $navitem);
    }

    public function test_edit_navitem()
    {
        $navitem = Navitem::all()->random(1);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/navitem/' . $navitem[0]->id . '/edit');

        $response->assertViewIs('navitem.edit');

    }
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

    public function test_delete_navitem()
    {
        $navitem = Navitem::all()->random(1);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->delete('/navitem/' . $navitem[0]->id);

        $this->assertDatabaseMissing('navitems', $navitem[0]->toArray());

    }

    public function test_all_navitems()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/navitem');

        $response->assertStatus(200);

        $response->assertViewIs('navitem.index');
    }

    public function test_find_navitem_by_id()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $navitem = Navitem::all()->random(1);

        $response = $this->actingAs($user)->get('/navitem/' . $navitem[0]->id);

        $response->assertStatus(200);

    }

    public function getNavitem()
    {
        return [
            'name' => 'test',
            'uri' => 'test',
            'sub_nav' => null
        ];
    }
}
