<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\Category;  
use App\Models\Perpus;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use PDF;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function error()
     {
         return view('error');
     }

    //  public function sampul()
    //  {
    //     $books = Perpus::where('id', $id)->first();  
    //     return view('admin.sampul');
    //  }

    public function printuser() {
        $users = User::all();
        $pdf = PDF::loadView('admin.cetakuser', compact('users'));
        return $pdf->download('datauser.pdf');
    }

    public function printbooks() {
        $books = Perpus::all();
        $categories = Category::all();
        $pdf = PDF::loadView('admin.cetakbuku', compact('categories' , 'books'));
        return $pdf->download('databuku.pdf');
    }

     public function datauser()
     {
        $users = User::all();
        return view('admin.datauser', compact('users'));
      }

     public function users()
    {
        $categories = Category::all();
        return view('public.dashboard_user' , compact('categories'));
    }

    public function admin()
    {
        return view('admin.dashboard_admin');
    }

    public function books()
    {
        $books = Perpus::all();
        $categories = Category::all();
        return view('admin.books', compact('categories' , 'books'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        return view('landing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'no_isbn' => 'required',
            'category_book' => 'required',
            'synopsis' => 'required',
            'cover_book' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);

        $image = $request->file('cover_book');
         $imgName = time().rand().'.'.$image->extension();
         if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
             $destinationPath = public_path('/assets/img/');
             $image->move($destinationPath, $imgName);
             $uploaded = $imgName;
         }else{
             $uploaded = $image->getClientOriginalName();
         }

        Perpus::create([
            'title' =>  $request->title,
            'writer' =>  $request->writer,
            'publisher' =>  $request->publisher,
            'no_isbn' =>  $request->no_isbn,
            'category_book' =>  $request->category_book,
            'synopsis' =>  $request->synopsis,
            'cover_book' =>  $uploaded,
        ]);

        return redirect()->route('books')->with('success', 'Buku Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpus  $Perpus
     * @return \Illuminate\Http\Response
     */
    public function show(Perpus $Perpus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpus  $Perpus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $books = Perpus::where('id', $id)->first();
        return view('admin.edit_books' , compact('books' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perpus  $Perpus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'no_isbn' => 'required',
            'category_book' => 'required',
            'synopsis' => 'required',
            'cover_book' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);

        $image = $request->file('cover_book');
         $imgName = time().rand().'.'.$image->extension();
         if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
             $destinationPath = public_path('/assets/img/');
             $image->move($destinationPath, $imgName);
             $uploaded = $imgName;
         }else{
             $uploaded = $image->getClientOriginalName();
         }

        Perpus::where('id', $id)->update([
            'title' =>  $request->title,
            'writer' =>  $request->writer,
            'publisher' =>  $request->publisher,
            'no_isbn' =>  $request->no_isbn,
            'category_book' =>  $request->category_book,
            'synopsis' =>  $request->synopsis,
            'cover_book' =>  $uploaded,
        ]);

        return redirect()->route('books')->with('success', 'Data Buku Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpus  $Perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perpus::where('id', $id)->delete();
        return redirect()->route('books')->with('successDelete', 'Berhasil menghapus data Peminjaman Laptop!');
    }
}
