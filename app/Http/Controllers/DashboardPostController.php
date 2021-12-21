<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest();

    if (request('search')) {
        $books->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('no_hp', 'like', '%' . request('search') . '%')
            ->orWhere('lapangan', 'like', '%' . request('search') . '%')
            ->orWhere('tanggal', 'like', '%' . request('search') . '%')
            ->orWhere('jam', 'like', '%' . request('search') . '%')
            ->orWhere('uang_muka', 'like', '%' . request('search') . '%');            
    }

    return view('dashboard.posts.index', [
        'title' => 'Daftar Sewa',
        'books' => $books->get()->where('user_id', auth()->user()->id)
    ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Tambah Sewa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todayDate = date('m/d/y');

        $validatedData = $request->validate([
            'nama' => ['required', 'max:255'],
            'no_hp' => ['required', 'min:11', 'max:13'],
            'lapangan' => ['required'],
            'tanggal' => ['required', 'after_or_equal:'.$todayDate],
            'jam' => ['required'],
            'uang_muka' => ['required'],
            'image' => ['image', 'file', 'max:1024']
        ]);

        $validatedData['image'] = $request->file('image')->store('book-images');

        $validatedData['user_id'] = auth()->user()->id;

        Book::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Data Sewa Berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Book::find($id);
        return view('dashboard.posts.edit', compact(
            'model'
        ), [
            'title' => 'Ubah Data'
        ]);
        // return view('dashboard.posts.edit', [
        //     'book' => $book,
        //     'title' => 'Edit Data'
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todayDate = date('m/d/y');

        $validatedData = $request->validate([
            'nama' => ['required', 'max:255'],
            'no_hp' => ['required', 'min:11', 'max:13'],
            'lapangan' => ['required'],
            'tanggal' => ['required', 'after_or_equal:'.$todayDate],
            'jam' => ['required'],
            'uang_muka' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $model = Book::find($id);
        $model->nama = $request->nama;
        $model->no_hp = $request->no_hp;
        $model->lapangan = $request->lapangan;
        $model->tanggal = $request->tanggal;
        $model->jam = $request->jam;
        $model->uang_muka = $request->uang_muka;
        $model['image'] = $request->file('image')->store('book-images');
        // $model->image = $request->image;
        $model->save();

        return redirect('/dashboard/posts')->with('success', 'Data Sewa Berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Book::findOrFail($id);
        if ($item->image) {
            Storage::delete($item->image);
        }
        $item->delete();
        // Book::destroy($book->id);

        return redirect('/dashboard/posts')->with('success', 'Data Berhasil di Hapus!');
    }
}
