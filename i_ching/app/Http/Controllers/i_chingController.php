<?php

namespace App\Http\Controllers;


use App\i_ching;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class i_chingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    
        return view('i_ching.index');
    }
       
// /historyにquesiton,time,結果noを送る
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {   
        // indexで選択した質問を定義
        $data = $request->question;
        

        $id = $request->oracle;
        
        $reslt = DB::table('koji')
        ->where('id',$id)
        ->join('oracles','koji.oracles_id','=','oracles.oracles_id')
        
        ->first();

      return view('i_ching.result',['reslt'=>$reslt],)
        ->with('data',$data);
    }
    
  // 


// /oraclesから画像パス１画像パス２　テキスト１　/kojiからテキストデータを受け取る
    // * Show the form for creating a new resource.
    // *
    // * @return \Illuminate\Http\Response
    // */
   public function history()
   {
        return view('i_ching.history');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\i_ching  $i_ching
     * @return \Illuminate\Http\Response
     */
    public function show(i_ching $i_ching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\i_ching  $i_ching
     * @return \Illuminate\Http\Response
     */
    public function edit(i_ching $i_ching)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\i_ching  $i_ching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, i_ching $i_ching)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\i_ching  $i_ching
     * @return \Illuminate\Http\Response
     */
    public function destroy(i_ching $i_ching)
    {
        //
    }
}
