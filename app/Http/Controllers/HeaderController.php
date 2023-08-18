<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headers = Header::all();

        return view('header.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $headerfile = '';
        if($request->hasFile('image')){
            $headerfile = $request->getSchemeAndHttpHost() . '/assets/header/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/header/'), $headerfile);
        }

        $header = new Header;
        $header->image = $headerfile;
        $header->title = $request->title;
        $header->message = $request->message;
        $header->action = $request->action;
        $header->save();

        return redirect('header')->with('message', 'header created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
