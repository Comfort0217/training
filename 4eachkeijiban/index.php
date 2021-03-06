<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style01.css">
</head>

<body>
    
<?php      
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$stmt = $pdo->query("select*from 4each_keijiban");  
    

?>    
 
    
<header>
    <img src="4eachblog_logo.jpg">
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォームについて</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>
    
    
<main>
    <div class="left">
        <div class="thema">
            <h1>プログラミングに役立つ掲示板</h1>
        </div>    
        <div class="form">   
            <div class="nyuryoku">
                <h2>入力フォーム</h2>  
            </div>                    
            <form method="post" action="insert.php">
        
                
                
                <div class="sentence">
                <p>ハンドルネーム</p>
                <br>
                <input type="text" class="text" size="35" name="handlename">
                <p>タイトル</p>
                <br>
                <input type="text" class="text" size="35" name="title">
                <p>コメント</p>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>

              
                <input type="submit" class="submit" value="投稿する">
                </div>
            </form> 
        </div>    
        
        <?php
        
        /*
        echo"<div class='title1'>";
        echo"<h3>タイトル</h3>";
        echo"<div class='contents'>";
        echo"記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身<br>
        記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身<br>
        記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身<br>";
        echo"<div class='handlename'>posted by 通りすがり</div>";
        echo"</div>";
        echo"</div>";*/
        ?>
        
        
         <?php
        while($row = $stmt->fetch()){
            
            echo "<div class='title1'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";        
        }
        
        ?>
    </div>    
    
    <div class="right">
        
      <div class=box3>    
        <ul>
            <h2>人気の記事</h2>
            <li>phpオススメ本</li>
            <li>いま人気のエディタtop5</li>
            <li>HTMLの基礎</li>
        </ul>
      </div>     
        
      <div class=box3>    
        <ul>
            <h2>オススメリンク</h2>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
      </div>
        
      <div class=box3>    
        <ul>
            <h2>カテゴリ</h2>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
      </div>  
        
    </div>
</main>
   
<footer>
    <p>copyright internous|4each blog is the one which provides A to Z about programming</p>
</footer>    
    
</body>