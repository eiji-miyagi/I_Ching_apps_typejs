<head>
<style>
h1{font-size:16pt}
h2{font-size:20px}
img{width:200px}
div{display: flex; flex-direction: column;align-items: center;}
ul{font-size:8px;}
</style>
</head>
<body>
    <div>
        <h1>{{$data}}についての占い</h1>


    
        <img src="{{$reslt->keji1_img_path}}" alt="">
        <img src="{{$reslt->keji2_img_path}}" alt="">
        <p>{{$reslt->keji_name}}</p>
    </div>
    
    
    <h2>{{$reslt->keji_detail}}</h2>
    <h2>{{$reslt->koji_datail}}</h2>

    <ul>
        <li>吉・・・・幸がある</li>
        <li>凶・・・・災いがある</li>
        <li>悔・・・・後悔するようなことになる</li>
        <li>吝・・・・人の非難を受けて行き詰まる</li>
        <li>咎なし・・欠点はあっても人に咎めを受けるようなことはない</li>

    </ul>
</body>
    
