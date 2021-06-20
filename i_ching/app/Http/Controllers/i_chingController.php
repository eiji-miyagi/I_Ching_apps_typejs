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
    public function i_ching()
    {
         
    
        return view('i_ching.i_ching');
    }
       
// /historyにquesiton,time,結果noを送る
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {   
        // i_chingで選択した質問を取得
        $data = $request->question;
        
        $id = $request->oracle;
        // データベースkojiとoraclesのテーブルを内部結合して＄resltへ入れる
        $reslt = DB::table('koji')
        ->where('id',$id)
        ->join('oracles','koji.oracles_id','=','oracles.oracles_id')
        ->first();
        // ヒストリーテーブルに占った履歴をパラメーターに変換して記録

        $param = [
            'question'=>$request->question,
            'koji_no'=>$request->oracle
        ];

        DB::table('history_tab')->insert($param);
        return view('i_ching.result',['reslt'=>$reslt],)
        ->with('data',$data);
    }
    
  
   public function history(){
     //     ヒストリーテーブルから抽出
       $historys = DB::table('history_tab')->orderBy('history_id','desc')->limit(50)->get();
       
       
        return view('i_ching.history',['historys'=>$historys],);
   }

   public function show(Request $request)
   {   
    //   履歴ページからの出力コントローラー、こちらでは履歴が残らない 
       $data = '以前の質問';
       
       $id = $request->oracle;
       // データベースkojiとoraclesのテーブルを内部結合して＄resltへ入れる
       $reslt = DB::table('koji')
       ->where('id',$id)
       ->join('oracles','koji.oracles_id','=','oracles.oracles_id')
       ->first();
      
       

       return view('i_ching.result',['reslt'=>$reslt],)
       ->with('data',$data);
   }

  
   
    
}
