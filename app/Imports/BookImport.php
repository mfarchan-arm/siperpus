<?php

namespace App\Imports;

use App\Models\Book;
use App\Models\Rak;
use Maatwebsite\Excel\Concerns\ToModel;

class BookImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $kategori = Rak::where('kategori', $row[0])->first();
        return new Book([
            'rak_id' => $kategori->id,
            'judul' => $row[1],
            'no_barcode' => $row[2],
            'pengarang' => $row[3],
            'penerbit' => $row[4],
            'thn_terbit' => $row[5],
            'eksemplar' => $row[6],
        ]);
    }
}
