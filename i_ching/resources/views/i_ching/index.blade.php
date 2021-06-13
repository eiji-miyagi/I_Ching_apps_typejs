
@extends('layouts.layouts')

@section('title', 'i_Ching')
@section('content')


    <img src= "{{ asset('/img/gif/top.gif')}}" alt= "トップイメージ" class="d-block mx-auto">


    <p　class="text-center">易経占いとは</p>
    <P>「易経」とは中国周代に成立した占いの書である。</p>
　      <p>古来から教養の基本とされる「四書五経」のうちの「五経」に数えられ、日本でも戦国武将や軍師と呼ばれる人々の教養とされ、実際に作戦立案や出陣の際にも使われていた占いである。</p>
　      一般的な占いとは違い易経に示される結果は神秘的な「神託」のような変えられない運命の提示ではなく、従うべき法則を示すことによって、運命開拓の努力を示す者とされており。
　      読む者の能動的行動をもって成立するという哲学、倫理を内包した内容となっている。
    </p>
    <div class="caveat">
         <h2>占う際の注意事項</h2>
        <ul>
            <li>占う問題は十分に考えた上で行う</li>
            <li>同じことを二度占わない</li>
            <li>不正な事柄を占ってはならない</li>

        </ul>
    </div>

        <p>では、占うテーマを選んでボタンを押してください</p>
        
        <!-- ３８４分の１ランダムで結果のページへ -->
    <div class="from-area">
        <form method="POST" action="/result/{{rand(1,384)}}" >
        
            @csrf
            <select name= 'question'  required >
                <option value="未入力">占うテーマを選んでください</option>
                <option value="仕事">仕事</option>
                <option value="恋愛">恋愛</option>     
                <option value="商売">商売</option>
                <option value="健康">健康</option>
                <option value="学業">学業</option>
                <option value="今から行うこと">今から行うこと</option>
         </select> 

           
            <input type="submit" value="占う"class="btn btn--yellow btn--cubic">
        </form>
    </div>
    

       


     
@endsection
