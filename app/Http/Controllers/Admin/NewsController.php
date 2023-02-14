<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:news-C', ['only' => ['index','list','show']]);
        $this->middleware('permission:news-R', ['only' => ['create','store']]);
        $this->middleware('permission:news-U', ['only' => ['edit','update']]);
        $this->middleware('permission:news-D', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Địa điểm';
        $news = News::where('category', '<>', 'Blog')->where('category', '<>', 'Event')->get();
        foreach($news as $new)
        {
            $des = Destination::find($new->category);
            $new['provinces'] = $des->name ?? '';
        }
        $data['items'] = $news;
        return view('adm.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['title'] = 'Địa điểm';
        $data['destinations'] = Destination::get();
        return view('adm.news.add_edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);
        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/';
            $profileImage = $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        News::create($data);
        return redirect()->route('admin.news.index')->with('success', 'Created Data Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Địa điểm';
        $data['item'] = News::find($id);
        $des = Destination::find($data['item']->category);
        $data['provinces'] = $des->name;
        return view('adm.news.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['isEdit'] = true;
        $data['title'] = 'Địa điểm';
        $data['destinations'] = Destination::get();
        $data['item'] = News::find($id);
        return view('adm.news.add_edit', $data);
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
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/';
            $profileImage = $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        News::find($id)->update($data);
        return redirect()->route('admin.news.index')->with('success', 'Updated Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        // File::delete(public_path('fe/img/post/'.$data->thumbnail));
        $data->delete();

        return redirect()->route('admin.news.index')->with('success','Deleted Data Success!');
    }
}
