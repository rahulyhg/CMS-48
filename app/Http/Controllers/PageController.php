<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Models\NavItem;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::with('navitem')->get();

        return view('page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navitems = NavItem::all();

        return view('page.create', compact('navitems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PAgeRequest $request)
    {
        Page::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // All navitems uris will hit this controller method
        $page = Page::where('navitem_id', $id)->get();

        return view('welcome', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $pages = Page::with('navitem')->get();
        $navitems = NavItem::all();

        return view('page.edit', compact('pages', 'navitems'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PageRequest  $request,
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->validated());

        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
