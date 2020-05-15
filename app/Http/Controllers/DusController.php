<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\CreateDiscussionRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DusController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth')->only(['create','store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('discussions.index',[
            Discussion::paginate(5)
         ]);
        // return 'hai';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscussionRequest $request)
    {
        // dd($request->all);
        // return 'it wopr';
        // $title = str_slug($request->title);
        auth()->user()->discussions()->create([
            'title'=>$request->title,
            'content'=>$request->content,
            'channel_id'=>$request->channel,
            // 'slug' => SlugService::createSlug(Discussion::class, 'slug',$request->title)
            'slug' => Str::slug($request->title) // jangan lupa tambahkan Str class di atasnya
         ]);

        session()->flash('success','Discussion posted');
        return redirect()->route('dus.index');
        // return 'hai';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($discussion);
        $discussion = Discussion::findOrFail($id);
        return view('discussions.show', compact('discussion'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
