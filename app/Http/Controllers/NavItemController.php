<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NavItemRequest;

use App\Models\NavItem;

class NavItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navitem = NavItem::all();
        return view('navitem.index', compact('navitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navitem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\NavItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NavItemRequest $request)
    {
        NavItem::create($request->merge(['active' => 0])->toArray());

        return redirect()->route('navitem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NavItem $navitem
     * @return \Illuminate\Http\Response
     */
    public function edit(NavItem $navitem)
    {
        return view('navitem.edit', compact('navitem'));
    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \App\Http\Requests\NavItemRequest $request
//     * @return \Illuminate\Http\Response
//     */
    public function update(NavItemRequest $request, NavItem $navitem)
    {
//        foreach($request->validated() as $item) {
//            NavItem::create([ 'name' => $item ]);
//        }
            dd($navitem);
//        dd($request->validated());
        $test = $navitem->update($request->validated());

        // Add uri to navitems
        // NavItem::create([ 'name' => $item, 'uri' => '/' . strtolower($item)]);

        return redirect()->route('navitem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NavItem  $navitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavItem $navitem)
    {
        $navitem->delete();

        return back();
    }

//    public function updateStatus(Navitem $navitem)
//    {
//        dd($navitem);
//    }
}
