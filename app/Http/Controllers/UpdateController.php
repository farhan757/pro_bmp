<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class UpdateController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
        $nopol = Auth::user()->nopol;
        $data = DB::table('data_master')->where('nopol',$nopol)->first();
        $cekqa = DB::table('pempol_to_answer')->where('pempol_to_answer.nopol','=',$nopol)->exists();
        $cekdu = DB::table('data_master_update')->where('nopol',$nopol)->exists();
        
        if($cekdu && $cekqa){
            return redirect()->route('home');
        }else if($cekdu == true && $cekqa == false){
            $kand = DB::table('kandidat')->get();
            $data = DB::table('question')->get();
            return view('question.quest')->with('data',$data)->with('kand',$kand); 
        }else if($cekdu == false && $cekqa == true){
            return view('data.data')->with('data',$data); 
        }else{
            return view('data.data')->with('data',$data);
        }
    }

    public function step2(Request $r)
    {
        # code...
        $nopol = Auth::user()->nopol;
        $dm = DB::table('data_master')->where('nopol',$nopol)->first();
        if($r->update){
            DB::beginTransaction();
            try{
                DB::table('data_master_update')->insert([
                    'alamat' => $r->alamat,
                    'kota' => $r->kota,                    
                    'email' => $r->email,
                    'nohp' => $r->nohp,
                    'nopol' => $dm->nopol,
                    'nama_p' => $dm->nama_p,
                    'product' => $dm->product,
                    'premi' => $dm->premi,
                    'nama_t' => $dm->nama_t,
                    'tmp_lahir' => $dm->tmp_lahir,
                    'tgl_lahir' => $dm->tgl_lahir,
                    'jk' => $dm->jk,
                    'wilayah' => $dm->wilayah,
                    'created_at' => Carbon::now()                    
                ]);
                DB::commit();
    
                $cek = DB::table('pempol_to_answer')->where('pempol_to_answer.nopol','=',$nopol)->exists();
                $data = DB::table('question')->get();
                $kand = DB::table('kandidat')->get();
                if($cek){
                    return redirect()->route('home');
                }else{
                    return view('question.quest')->with('data',$data)->with('kand',$kand);  
                }  
    
            }catch(Exception $e){
                DB::rollBack();
    
                return redirect()->back();
            }
        }else{
                $cek = DB::table('pempol_to_answer')->where('pempol_to_answer.nopol','=',$nopol)->exists();
                $data = DB::table('question')->get();
                $kand = DB::table('kandidat')->get();
                if($cek){
                    return redirect()->route('home');
                }else{
                    return view('question.quest')->with('data',$data)->with('kand',$kand);  
                }  
        }
    }

    public function savequest(Request $r)
    {
        # code...
        $nopol = Auth::user()->nopol;
        DB::beginTransaction();
        try{
            for($i=0; $i<count($r->idquestion); $i++){
                if($r->input($r->idquestion[$i])[0] == 1){
                    DB::table('pempol_to_answer')->insert([
                        'nopol' => $nopol,
                        'question_id' => $r->idquestion[$i],
                        'ya' => $r->input($r->idquestion[$i])[0],
                        'tidak' => 0
                    ]);
                }else{
                    DB::table('pempol_to_answer')->insert([
                        'nopol' => $nopol,
                        'question_id' => $r->idquestion[$i],
                        'ya' => $r->input($r->idquestion[$i])[0],
                        'tidak' => 1
                    ]);
                }
            }
            DB::commit();
            //return redirect()->route('kandidat.index');
            return redirect()->route('home');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back();
            //return $e;
        }
    }

    public function getPas($id)
    {
        # code...
        return Hash::make($id);
    }
}
