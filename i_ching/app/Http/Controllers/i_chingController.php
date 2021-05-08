<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class i_chingController extends Controller
{
   // インデックスへの指示
   public function index(){
       return view('i_ching.index');
   }


   // 占い結果ページ表示指示
   public function result(){
       return view('i_ching.result');
   }

   // 履歴ページの表示指示
   public function history(){
       return view('i_ching.history');
   }

}

