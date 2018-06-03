<?php

namespace App\Http\Controllers;


use App\News;
use App\Upload;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $news = News::all();
        $upload = Upload::all();
        return view('dash.forms')->with(compact('news'))
            ->with(compact('upload'));
//        return view()->share(compact('news'), ['dash.forms', 'home.index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.add_news');
    }

    public function delete($id)
    {
        $new = News::find($id);
        $new->delete();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storee(Request $request)
    {

        $new = new News();
        $file = $request->file('file');
        $name = time() . "." . $file->getClientOriginalExtension();
        $size = $file->getClientSize();
        $type = $file->getClientMimeType();
        $file->move('news/photos', $name);
        $new->title = $request->title;
        $new->body = $request->text;
        $new->save();
        $new->uploads()->create([
            'name' => "{$name}",
            'size' => "{$size}",
            'type' => "{$type}"
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function showw(News $news)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $upload = Upload::find($id);
        return view('dash.adit_new')
            ->with(compact('news'))
            ->with(compact('upload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $file = $request->file('file');
        $news->title = $request->title;
        $news->body = $request->body;
        $news->save();

        if ($file != null) {
            $name = time() . "." . $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $type = $file->getClientMimeType();
            $file->move('news/photos', $name);
            $news->uploads()->update([
                'name' => "{$name}",
                'size' => "{$size}",
                'type' => "{$type}"
            ]);
        }

        return redirect('/dashboard/froms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroyy(News $news)
    {

    }
}
