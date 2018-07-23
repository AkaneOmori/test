<DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
 <title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="4each_keijiban_style.css">
</head>
    
<body>

<?php
    
mb_internal_encoding("utf8");
$pdo= new PDO("mysql:dbname=test_db_1st;host=localhost;","root","mysql");
$stmt =$pdo->query("select*from 4each_keijiban");
   
?>    
    
    
   <div class="blog_logo">
    <img src="4eachblog_logo.jpg">
   </div>
<header>
    <div class="header_menu">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
    
<main> 
  <div class="left">
    
    
<h1>プログラミングに役立つ掲示板</h1>

    <div class="nyuryoku_form">
     <div class="nyuryoku_title">入力フォーム</div>
     <form method="post" action="4each_keijiban_insert.php">
      <div>ハンドルネーム</div>
        <input type="text" class="text" name="handlename" size="45">
        <br>
        <br>
        
      <div>タイトル</div>
        <input type="text" class="text" name="title" size="45"> 
        <br>
        <br>
      
      <div>コメント</div>
        <textarea name="comments" class="textarea" rows="8" cols="100">
        </textarea>
        <br>
        <br>
 
        <input type="submit" class="submit" value="投稿する">
         
      </form>  
    </div>
      
    <?php
      
    while($row=$stmt->fetch()){
        
    echo "<div class='kiji_toko'>";
        echo "<div class='kiji_title_1'>".$row['title']."</div>";
        echo "<div class='kiji_nakami'>";
         echo $row['comments'];
        echo "<div class='posted'>posted by".$row['handlename']."</div>";
     echo "</div>"; 
     echo "</div>"; 
       } 
    ?>

 </div>   
    <div class="right">
        <h3>人気の記事</h3>
          <ul>
            <li>PHP オススメ本</li>
            <li>PHP Myadminの使い方</li>
            <li>今人気のエディタ TOP5</li>
            <li>HTMLの基礎</li>
          </ul>
        <h3>オススメリンク</h3>
          <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
          </ul>
        <h3>カテゴリ</h3>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
    </div>
    
</main>    
    
    
<footer>copylight (c) internous | 4each blog is the one which provides A to Z  about programming.
</footer>    
</body>


</html>
</DOCTYPE>