<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Milon\Barcode\DNS1D;

class BookExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $books = Book::all();

        return collect([
            $this->customProcessDataBooksToExcel($books)
        ]);
    }

    public function headings(): array
    {
        return [
            'No.',
            'Kategori',
            'Judul',
            'No Barcode',
            'Pengarang',
            'Penerbit',
            'Tahun Terbit',
            'Eksemplar'
        ];
    }

    public function registerEvents(): array
    {

        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1';
                $event->sheet->setAllBorders('thin')->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            }
        ];
    }

    public function customProcessDataBooksToExcel($model)
    {
        foreach ($model as $key => $book) {
            $data[$key]['no'] = $key + 1;
            $data[$key]['rak_id'] = $book->rak->kategori ?? 'None' ;
            $data[$key]['judul'] = $book->judul;
            $data[$key]['no_barcode'] = $book->no_barcode;
            $data[$key]['pengarang'] = $book->pengarang;
            $data[$key]['penerbit'] = $book->penerbit;
            $data[$key]['thn_terbit'] = $book->thn_terbit;
            $data[$key]['eksemplar'] = $book->eksemplar;
        }

        return $data;
    }
}
