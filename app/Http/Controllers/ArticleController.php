<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index($id = 1): string
    {
        return "Halaman Artikel dengan ID $id";
    }

    public function create(Request $request)
    {
        return view('articles.create')->with('title', 'Create Article');
    }

    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        ArticleModel::create([
            'title' => $request->title,
            'isi' => $request->isi,
            'featured_image' => $image_name ?? null
        ]);

        return 'Artikel berhasil disimpan';
    }

    public function edit($id)
    {
        $article = ArticleModel::find($id);

        return view('articles.edit')->with('article', $article)->with('title', 'Edit Article');
    }

    public function update(Request $request, $id)
    {
        $article = ArticleModel::find($id);

        $article->title = $request->title;
        $article->isi = $request->isi;

        if ($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image))) {
            Storage::delete('public/' . $article->featured_image);
        }


        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return 'Article berhasil diubah';
    }

    public function printPDF() {
        $articles = ArticleModel::all();
//        $pdf = Pdf::loadview('articles.articles_pdf', ['articles' => $articles]);
//        return $pdf->stream();
        return view('articles.articles_pdf', ['articles' => $articles]);
    }
}
