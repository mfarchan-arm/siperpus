<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Member;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd( Transaction::first());
        return view('dashboard.transactions.index', [
            'active' => 'transactions',
            'transactions' => Transaction::latest()->paginate(7),
            'count' => Transaction::get()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transactions.create', [
            'books' => Book::all(),
            'members' => Member::all(),
            'active' => 'transactions',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        Transaction::create([
            'book_id' => $request->book_id,
            'user_nip' => $request->user_id,
            'member_nisn' => $request->member_id,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'jml_pinjam' => $request->jml_pinjam,
            'status' => $request->status,
        ]);
        Book::find($request->book_id)->decrement('eksemplar', $request->jml_pinjam);
        return redirect('/dashboard/transactions')->with('success', 'Transaksi baru telah ditambahkan.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function prosespengembalian(Request $request)
    {
        Transaction::where('id', $request['id'])->update([
            'status' => $request->status,
            'tgl_pengembalian' => $request->tgl_pengembalian,
            'jml_hari' => $request->jml_hari,
            'denda' => $request->denda,
        ]);
        Book::find($request->book_id)->increment('eksemplar', $request['jml_pinjam']);
        return redirect('/dashboard/transactions')->with('success', 'Transaksi telah selesai.');
    }

    public function proseshapus(Request $request)
    {
        Transaction::where('id', $request['id'])->update([]);
        Book::find($request->book_id)->increment('eksemplar', $request['jml_pinjam']);
        Transaction::where('id', $request['id'])->delete([]);
        return redirect('/dashboard/transactions')->with('success', 'Transaksi berhasil dihapus.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function pengembalian(Request $request)
    {
        return view('dashboard.transactions.return', [
            'books' => Book::all(),
            'members' => Member::all(),
            'transaction' => Transaction::where('id', $request->id)->first(),
            'active' => 'transactions',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function hapus(Request $request)
    {
        return view('dashboard.transactions.delete', [
            'books' => Book::all(),
            'members' => Member::all(),
            'transaction' => Transaction::where('id', $request->id)->first(),
            'active' => 'transactions',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('dashboard.transactions.edit', [
            'books' => Book::all(),
            'members' => Member::all(),
            'transaction' => $transaction,
            'active' => 'transactions',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        if ($request->status == 'PEMINJAMAN') {
            Transaction::where('id', $request['id'])->update([
                'book_id' => $request->book_id,
                'user_nip' => $request->user_id,
                'member_nisn' => $request->member_id,
                'tgl_pinjam' => $request->tgl_pinjam,
                'tgl_kembali' => $request->tgl_kembali,
                'jml_pinjam' => $request->jml_pinjam,
                'status' => $request->status,
            ]);
            Book::find($request->book_id)->increment('eksemplar', $transaction['jml_pinjam']);
            Book::find($request->book_id)->decrement('eksemplar', $request['jml_pinjam']);
            return redirect('/dashboard/transactions')->with('success', 'Transaksi telah diubah.');
        } else {
            Transaction::where('id', $request['id'])->update([
                'book_id' => $request->book_id,
                'user_nip' => $request->user_id,
                'member_nisn' => $request->member_id,
                'tgl_pinjam' => $request->tgl_pinjam,
                'tgl_kembali' => $request->tgl_kembali,
                'jml_pinjam' => $request->jml_pinjam,
                'status' => $request->status,
                'tgl_pengembalian' => $request->tgl_pengembalian,
                'jml_hari' => $request->jml_hari,
                'denda' => $request->denda,
            ]);
            Book::find($request->book_id)->increment('eksemplar', $transaction['jml_pinjam']);
            Book::find($request->book_id)->decrement('eksemplar', $request['jml_pinjam']);
            return redirect('/dashboard/transactions')->with('success', 'Transaksi telah diubah.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);
        return redirect('/dashboard/transactions')->with('success', 'Transaksi telah dihapus.');
    }
}
