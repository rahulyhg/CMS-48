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
    public function store(PageRequest $request)
    {
        if ($new_page = Page::create($request->validated())) {
//            $navitem = NavItem::find($new_page->navitem_id);
            $new_page->navitem->toggleActive();
        }


//        $new_page->navitem->update(['active' => 1]);

        return redirect()->route('page.index');
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
        $pages = $page->navitem;
        $navitems = NavItem::all();

        return view('page.edit', compact('pages', 'navitems', 'page'));
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
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return back();
    }

    public function getPage(Request $request)
    {
        $navItem = NavItem::where('uri', $request->path())->get();
        $page = Page::where('navitem_id', $navItem[0]->id)->get();

        if(isset($page[0])) {
            return view('welcome', compact('page'));
        }

        abort(404);
    }
}
