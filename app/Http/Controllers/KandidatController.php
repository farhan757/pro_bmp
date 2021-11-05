<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Symfony\Component\Console\Input\Input;

class KandidatController extends Controller
{
    //
    public function index()
    {
        # code...
        $nopol = Auth::user()->nopol;
        $kandidat = DB::table('kandidat')->get();
        $setuju = DB::table('pempol_to_answer')->where('nopol','=',$nopol)
                 ->where('ya','=',1)->exists();
        
        if($setuju){
            return view('kandidat.data')->with('kandidat',$kandidat);
        }else{
            //return redirect()->route('home');
            return view('kandidat.data')->with('kandidat',$kandidat);
        }
    }

    public function savequestkand(Request $r)
    {
        # code...
        $nopol = Auth::user()->nopol;
        DB::beginTransaction();
        try{
            for($i=0; $i<count($r->idkandidat); $i++){
                if($r->kandidat[0] == $r->idkandidat[$i]){
                    DB::table('pempol_to_kandidat')->insert([
                        'nopol' => $nopol,
                        'kandidat_id' => $r->kandidat[0]
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('home');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back();
        }
        //print_r($r->kandidat);
    }
}
