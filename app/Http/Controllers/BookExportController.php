<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use App\Models\Book;
use Maatwebsite\Excel\Facades\Excel;

class BookExportController extends Controller 
{
    public function exportBooks()
    {
        $books = Book::all();
        
        if(count($books)!=0)
            return Excel::download(new BookExport, 'daftar-buku-' . date('d-m-Y') . '.xlsx');
        return redirect()->back()->withInput()->withErrors('Tidak ada Buku');
    }
}