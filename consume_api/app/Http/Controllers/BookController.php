<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BookController extends Controller
{
    public function index()
    {
        $client = new Client;
        
        $response =  $client->request('GET', 'http://localhost:8080/books');

        $result = json_decode($response->getBody());

        // dd($result);

        return view('Books.index')->with('data',$result);
    }

    public function create()
    {
        $client = new Client;

        $response = $client->request('GET', 'http://localhost:8080/getPenerbit');

        $result = json_decode($response->getBody());

        return view('Books.create')->with('penerbit', $result);
    }

    public function store(Request $request)
    {
        $client = new Client;

        $response = $client->request('POST', 'http://localhost:8080/books/create',[
            'form_params' => [
                    'name' => $request->name,
                    'price' => $request->price,
                    'desc' => $request->desc,
                    'penerbit_id' => $request->penerbit_id,
                    'status' => $request->status
            ]
        ]);

        $result = $response->getStatusCode();

        return redirect(route('book.index'));
    }
}
