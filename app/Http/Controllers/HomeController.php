<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nopol = Auth::user()->nopol;
        $cek = DB::table('pempol_to_answer')->where('pempol_to_answer.nopol', '=', $nopol)->exists();
        if ($cek) {
            return view('home2');
        } else {
            return redirect()->route('data');
        }
    }

    public function qa()
    {
        $dataseluruh = DB::table('data_master')->select(DB::raw('count(*) as jumlah'))->first();

        $setuju = DB::table('pempol_to_answer')->where('ya', 1)
            ->select('nopol')
            ->groupBy('nopol');

        $stj = DB::table(DB::raw("({$setuju->toSql()}) as setuju"))
            ->select(DB::raw('count(*) as jumlah'))
            ->mergeBindings($setuju)
            ->first();

        $tdksetuju = DB::table('pempol_to_answer')->where('tidak', 1)
            ->select('nopol')
            ->groupBy('nopol');

        $tdkstj = DB::table(DB::raw("({$tdksetuju->toSql()}) as tdksetuju"))
            ->select(DB::raw('count(*) as jumlah'))
            ->mergeBindings($tdksetuju)
            ->first();

        $persenupdate = round($stj->jumlah / $dataseluruh->jumlah * 100,1);
        $persentdkupdate = round($tdkstj->jumlah / $dataseluruh->jumlah * 100,1);

        $respon['data'] = array();
        $data['desc'] = "Tidak Setuju";
        $data['jumlah'] = $tdkstj->jumlah;
        $data['persen'] = $persentdkupdate . '%';
        $data['warnaprog'] = 'danger';
        $data['warnalabel'] = 'red';
        array_push($respon['data'], $data);

        $data['desc'] = "Setuju";
        $data['jumlah'] = $stj->jumlah;
        $data['persen'] = $persenupdate . '%';
        $data['warnaprog'] = 'success';
        $data['warnalabel'] = 'green';
        array_push($respon['data'], $data);

        return $respon;
    }

    public function infoupdate()
    {
        # code...
        $dataseluruh = DB::table('data_master')->select(DB::raw('count(*) as jumlah'))->first();
        $datatdkupdate = DB::table('data_master')
            ->leftJoin('data_master_update', 'data_master.nopol', '=', 'data_master_update.nopol')
            ->where('data_master_update.nopol', '=', null)->select(DB::raw('count(*) as jumlah_tidak_update'))->first();
        $dataupdate = DB::table('data_master_update')->select(DB::raw('count(*) as jumlah_update'))->first();

        $persenupdate = round($dataupdate->jumlah_update / $dataseluruh->jumlah * 100,1);
        $persentdkupdate = round($datatdkupdate->jumlah_tidak_update / $dataseluruh->jumlah * 100,1);

        $respon['data'] = array();
        $data['desc'] = "Tidak Update";
        $data['jumlah'] = $datatdkupdate->jumlah_tidak_update;
        $data['persen'] = $persentdkupdate . '%';
        $data['warnaprog'] = 'danger';
        $data['warnalabel'] = 'red';
        array_push($respon['data'], $data);

        $data['desc'] = "Update";
        $data['jumlah'] = $dataupdate->jumlah_update;
        $data['persen'] = $persenupdate . '%';
        $data['warnaprog'] = 'success';
        $data['warnalabel'] = 'green';
        array_push($respon['data'], $data);

        return $respon;
    }

    public function infowil()
    {
        # code...
        $mstupdate = DB::table('data_master')
        ->leftJoin('data_master_update','data_master.nopol','=','data_master_update.nopol')
        ->select('data_master.wilayah',DB::raw('COUNT(data_master.wilayah) AS jml_master, COUNT(data_master_update.wilayah) AS jml_update'))
        ->groupBy('data_master.wilayah')->get();

        $respon['data'] = array();
        //dd($mstupdate);
        //dd($mstsjt->get());
        foreach($mstupdate as $val){
            //$respon[$val->wilayah] = array();            
            $tdkupdate = 0;
            $tdkupdate = $val->jml_master - $val->jml_update;
            $groupNopol = DB::table('pempol_to_answer')
            ->select(DB::raw('pempol_to_answer.nopol, pempol_to_answer.ya, pempol_to_answer.tidak'))
            ->groupBy('pempol_to_answer.nopol');
    
            $mstsjt = DB::table('data_master')
                    ->leftJoin(DB::raw("({$groupNopol->toSql()}) as groupNopol"),'data_master.nopol','=','groupNopol.nopol')
                    ->select(DB::raw('data_master.wilayah, COUNT(data_master.wilayah) AS jml_master, ifnull(SUM(groupNopol.ya),0) AS setuju, ifnull(SUM(groupNopol.tidak),0) AS tdksetuju'))
                    ->groupBy('data_master.wilayah');

            $tmp = $mstsjt->where('wilayah','=',$val->wilayah)->first();
            //dd($tmp);
            $data['wilayah'] = $val->wilayah;
            $data['jml_master'] = $val->jml_master;
            $data['jml_update'] = $val->jml_update;
            $data['jml_tdkupdate'] = $tdkupdate;
            $data['jml_setuju'] = $tmp->setuju;
            $data['jml_tdksetuju'] = $tmp->tdksetuju;
            array_push($respon['data'], $data);
            //echo ($tmp[0]->setuju);
        }        
        //dd($respon['data']);     
        return $respon;
    }
}
