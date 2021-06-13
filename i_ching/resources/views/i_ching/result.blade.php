
@extends('layouts.layouts')

@section('title', 'result')
@section('content')

    
    <div>
        <h1>{{$data}}についての占い</h1>


    
        <img src="{{$reslt->keji1_img_path}}" alt=""class="d-block mx-auto">
        <img src="{{$reslt->keji2_img_path}}" alt=""class="d-block mx-auto">
        <p>{{$reslt->keji_name}}</p>
    </div>
    <div class="font_oracle">
    
        <h2>{{$reslt->keji_detail}}</h2>
        <h3>爻辞<h3>
        <h2>{{$reslt->koji_datail}}</h2>
    </div>

<ul>
    <li>吉・・・・幸がある</li>
    <li>凶・・・・災いがある</li>
    <li>悔・・・・後悔するようなことになる</li>
    <li>吝・・・・人の非難を受けて行き詰まる</li>
    <li>咎なし・・欠点はあっても人に咎めを受けるようなことはない</li>

 </ul>

        <a href="/i_ching"class="btn btn--yellow btn--cubic">topへ</a>
    
@endsection    
