<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_72210471;
class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function simpan(Request $request){

        $jkel= implode(',', $request->hobi);
        echo "kamu memilih: ".$jkel;
        return view('simpan',['jkel'=>$jkel]);
    }
    
    public function tampil(){
        $tampil = tbl_72210471::orderBy('id','desc')->get();
        return view('tampil',['tampil'=>$tampil]);
    }

    public function waktu(){
        date_default_timezone_set('Asia/Bangkok');
        $wkt = date('H:i:s');
       
        if($wkt >='19:00' && $wkt <= '02:59')
        {
            $cetak = 'Selamat Malam ';
            return view('waktu',['hasil'=>$wkt,'cetak'=>$cetak]);
        }
        
        else if($wkt >='03:00' && $wkt <= '09:59')
        {
        $cetak = 'Selamat Pagi';
        return view('waktu',['hasil'=>$wkt,'cetak'=>$cetak]);
        }

        else if($wkt >='10:00' && $wkt <= '14:59')
        {
        $cetak = 'Selamat Siang';
        return view('waktu',['hasil'=>$wkt,'cetak'=>$cetak]);
        }
        
        else if($wkt >='15:00' && $wkt <= '17:59')
        {
        $cetak = 'Selamat Sore';
        return view('waktu',['hasil'=>$wkt,'cetak'=>$cetak]);
        }
        
        else if($wkt >='18:00' && $wkt <= '18:59')
        {
        $cetak = 'Selamat Petang';
        return view('waktu',['hasil'=>$wkt,'cetak'=>$cetak]);
        }

        return view('waktu');
    }
}

