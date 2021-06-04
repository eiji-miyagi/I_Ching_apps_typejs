
@extends('layouts.layouts')

@section('title', 'i_Ching')
@section('content')
<body>

    <img src= "{{ asset('/img/gif/top.gif')}}" alt= "トップイメージ" class="d-block mx-auto">


    <p　class="text-center">易経占いとは</p>
    <P>「易経」とは中国周代に成立した占いの書である。</p>
　      <p>古来から教養の基本とされる「四書五経」のうちの「五経」に数えられ、日本でも戦国武将や軍師と呼ばれる人々の教養とされ、実際に作戦立案や出陣の際にも使われていた占いである。</p>
　      一般的な占いとは違い易経に示される結果は神秘的な「神託」のような変えられない運命の提示ではなく、従うべき法則を示すことによって、運命開拓の努力を示す者とされており。
　      読む者の能動的行動をもって成立するという哲学、倫理を内包した内容となっている。
     </p>
         <h2>占う際の注意事項</h2>
        <ul>
            <li>占う問題は十分に考えた上で行う</li>
            <li>同じことを二度占わない</li>
         <li>不正な事柄を占ってはならない</li>

        </ul>

        <p>では、占うテーマを選んでボタンを押してください</p>

        <form method="POST" action="/result/{{rand(1,12)}}">
            @csrf
            <select name= 'question'class="form-control mb-2" required>
                <option value="仕事">仕事</option>
                <option value="恋愛">恋愛</option>
                <option value="行動">行動</option>
                <option value="商売">商売</option>
                <option value="健康">仕事</option>
                <option value="学業">学業</option>
         </select> 

           
            <input type="submit" value="占う"class="btn btn-primary">
        </form>
    

       

</body>
     
@endsection
