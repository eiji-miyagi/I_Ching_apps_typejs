
@extends('layouts.layouts')

@section('title', 'history')
@section('content')
 
  <h1 class=history_title>占いの履歴</h1>
  
    <div class=log>
        
        @foreach($historys as $history)
            <div class=log_line>
                

       
                <h1>{{$history->question}}について</h1>
            
                
                
                <a href="show/{{$history->koji_no}}">結果</a>
                
            </div>
        
        @endforeach
           
    </div>
    <a href="/i_ching"class="link_history">topへ</a>
    

@endsection
