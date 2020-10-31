@extends('layouts.app')
@section('syousai')

  <form action="" method="post">
   @csrf
  
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mae.css">
</head>
<body>
 <!-- ここからヘッダー -->
 <header id="header">
    <h1>メンターマッチングサイト</h1>
    <nav>
        <ul class="gnav">
            <li class="gnav-item"><a href="">メンター紹介</a></li>
            <li class="gnav-item"><a href="">コース・料金</a></li>
            <li class="gnav-item"><a href="">ユーザーの声</a></li>
            <li class="gnav-item"><a href="">メンター募集について</a></li>
            <li class="gnav-item"><a href="">新規会員登録</a></li>
        </ul>
    </nav>
</header>
<!-- ここからmain -->
<main>
    <nav class="s-nav">
        <div class="s-nav-item">
            <p>プログラミング学習が初めての方にはこちらがオススメ！　➡︎ キャリア面談付きのオンラインプログラミングスクール</p>
            <a href=""><img class="saitech-logo" src="images/saitech-logo_0.png" alt=""></a>
        </div>
    </nav>
    <section class="a">
            <h2 >- 講師紹介 -</h2>
    </section>
    <section class="b">
        <a href=""><img class="people" src="images/people.png"　 alt="" width="350" height="350"></a>
    </section>
    <div class="main-box">
        <h6>シルバーランク</h6>
        <h3>佐藤太郎（Sato Taro）</h3>
        <h5>年齢:30歳<br>
            職種:フリーランスエンジニア<br>
            得意な業務:laravelを使用したアプリ開発<br>
            実績:Qiitaで書いた記事,作成したサイト<br>
            対応可能エリア:オンラインまたは東京都内
        </h5>
    </div>
    <div class="speech">
        <a href=""><img class="speech-logo" src="images/speech.png"　 alt="" width="760" height="180"></a>
        <h4>フリーエンジニアの佐藤と申します。普段は依頼を頂いてWebサイトを作成したり<br>
            社内アプリケーションの作成などをしています。フロントエンド、バックエンドどちら側も経験があり<br>
            知識は豊富であると自負しております。フリーランスとして働いている為、時間帯を気にせずに質問、<br>
            相談していただいて大丈夫です。御縁がありましたら宜しくお願いいたします。
        </h4>
    </div>
    
    <input  class="button" type="submit"name="button1" value="申込申請をする"　class="button">

</main>
<!-- ここからfooter -->
<footer id="footer">
    <div class="footer-box">
        <ul class="footer-nav">
            <li class="footer-nav-item"><a class="footer-text" href="">講師紹介</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">コース・料金</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">ユーザーの声</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">メンター募集について</a></li>
        </ul>
        <ul class="footer-nav">
            <li class="footer-nav-item"><a class="footer-text" href="">運営会社について</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">利用規約</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">プライバシーポリシー</a></li>
            <li class="footer-nav-item"><a class="footer-text" href="">特定商取引法に基づく表記</a></li>
        </ul>
        <div>
            <dl class="sns">
                <dt class="sns-title">SNS |</dt>
                <dd class="sns-item"><a class="footer-text" href="">Twitter</a></dd>
                <dd class="sns-item"><a class="footer-text" href="">Instagram</a></dd>
                <dd class="sns-item"><a class="footer-text" href="">Facebook</a></dd>
            </dl>
            <p><a class="footer-text" href="">お問い合わせ窓口</a></p>
        </div>
     </div>
     <p class="copyright">&copy;SAi Tech All Rights Reserved</p>
</footer>
</body>
</html>
   
 @endsection