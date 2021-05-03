<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function all()
    {
        return response([
            'news' => News::all(),
            'message' => 'Success',
        ]);
    }

    public function latest()
    {
        return response([
            'news' => News::limit(4)->get(),
            'message' => 'Success',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:4096',
        ]);

        $input = $request->only(['title', 'body']);
        $input['user_id'] = $request->user()->id;
        $input['image'] = self::upload($request);

        $news = News::create($input);

        return response([
            'news' => $news,
            'message' => 'Success',
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:4096',
        ]);

        $input = $request->only(['title', 'body']);
        $input['user_id'] = $request->user()->id;

        if ($request->hasFile('image'))
            $input['image'] = self::upload($request);

        $news = News::find($id);
        $news->update($input);

        return response([
            'news' => $news,
            'message' => 'Success',
        ]);
    }

    public function delete(int $id)
    {
        News::destroy($id);

        return response([
            'message' => 'Success',
        ]);
    }

    public static function upload(Request $request)
    {
        $name = Str::random() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $name);
        return $name;
    }
}
