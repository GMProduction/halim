<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataTransaksi(Request $request)
    {
//        $fawal = DateTime::createFromFormat('m/d/Y', );
//        $fakhir = DateTime::createFromFormat('m/d/Y', $request->get('akhir'));
        $awal = $request->get('awal');
        $akhir = $request->get('akhir');

        $date = Carbon::createFromFormat('Y-m-d', $request->get('akhir'));
        $ahkirplus = $date->addDays(1);

        $transaksi = Transaction::whereBetween('created_at',[$awal,$ahkirplus])->with(['lastPayment','cart.product','user'])->get();
        $data['awal'] = $awal;
        $data['akhir'] = $akhir;
        $data['transaksi'] = $transaksi;
        return view('admin.transaksi.cetak')->with($data);
    }

    public function cetakAdminDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataTransaksi($request))->setPaper('b4','potrait');
        return $pdf->stream();
//        return $this->adminDataTransaksi($request);
    }

//USER

    public function userDataTransaksi(Request $request)
    {
//        $caridata = $request->caridata;
//        $status = $request->status;
//        $mitra = mitraModel::where('status', 'LIKE', '%' . $status . '%')
//            ->where(function ($q) use ($caridata) {
//                $q->where('username', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('email', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('noHp', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('alamat', 'LIKE', '%' . $caridata . '%');
//            })
//            ->get();
        return view('user.transaksi.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakUserDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataTransaksi($request))->setPaper('b4','potrait');
        return $pdf->stream();
    }

}
