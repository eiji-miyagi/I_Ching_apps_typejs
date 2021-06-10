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
        $data = $request->question;
        $id = $request->oracle;
        
        $reslt = DB::table('koji')->where('id',$id)->first();
        // $data =['question'=>'占い内容は'. $id .'です',];

        // return view('i_ching.result',$msg,);

        return view('i_ching.result',['reslt'=>$reslt],)->with(['i_ching.result','data'=>$data]);
    }
    // public function question(Request $request)
    // {   
    //     $msg = $request->question;
        
        
        
    //     $data =['question'=>'占い内容は'. $msg .'です',];

        

    //     return view('i_ching.result',$data,);
    // }




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
