<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return response()->json("test");
    }

    public function books()
    {

        $books = \DB::table('book')->select('book.*', 'penerbit.name as nama_penerbit')->join('penerbit','penerbit.id','=','book.penerbit_id')->get();
        //$books = Book::join('penerbit','penerbit.id','=','book.penerbit_id')->get();

        return response()->json($books);
    }

    public function create(Request $request)
    {
        $books = Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'penerbit_id' => $request->penerbit_id,
            'status' => $request->status
        ]);

        return response()->json($books);
    }

    public function update($id, Request $request)
    {
        $books = Book::find($request->id)->update($request->except('id'));

        return response()->json($books);
    }

    public function delete($id, Request $request)
    {
        $books = Book::find($request->id)->delete();

        return response()->json($books);
    }
}

