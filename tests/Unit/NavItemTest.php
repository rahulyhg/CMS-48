<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Models\Navitem;

class NavItemTest extends TestCase
{
//    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_navitem()
    {
        $new_navitem = Navitem::create($this->getNavitem());

        $this->assertDatabaseHas('navitems', $new_navitem->toArray());
    }

    public function test_can_update_navitem()
    {

        $new_navitem = Navitem::create($this->getNavitem());

        $update = [
            'name' => 'test1',
            'uri' => 'test1',
            'sub_nav' => null
        ];

        $new = NavItem::find($new_navitem->id);

        $new->update($update);

        $this->assertDatabaseHas('navitems', $update);
    }
// This won't run
//    public function test_can_delete_navitem()
//    {
//        $item = NavItem::all()->random(1);
//
//        NavItem::find($item[0]->id)->delete();
//
//        $this->assertDatabaseMissing('navitems', $item->toArray());
//    }

    public function getNavitem()
    {
        return [
            'name' => 'test',
            'uri' => 'test',
            'sub_nav' => null,
            'active' => 0
        ];
    }
}
