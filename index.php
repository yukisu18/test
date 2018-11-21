<!DOCTYPE html>
<html lang="ja">
  
<head>
  <meta charset="utf-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

  <?php
   mb_internal_encoding("utf8");
   $pdo=new PDO("mysql:dbname=lesson_sugimoto;host=localhost;","root","mysql");
   $stmt=$pdo->query("select*from 4each_keijiban");
  ?>
  
  
  <div class="logo">
    <img src="4eachblog_logo.jpg">
  </div>
  
  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>
  
  
  <main>
    <div class="main-container">
      
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        
       <div class="left1">  
        <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>
          
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>
          
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="50" rows="10" name="comments"></textarea>
          </div>
          
          <div>
            <input type="submit" class="submit" value="投稿する">
           </div>
        </form>
      </div> 
        
     
        <!-- ここから記事一覧  -->
        
     <?php
        
      while($row=$stmt->fetch()){
        
        
     echo"<div class='abc'>";
     
     echo "<h3>".$row['title']."</h3>"; 
     echo "<div class='contents'>";
     echo $row['comments'];
     echo "<div class='handlename'>posted by".$row['handlename']. "</div>"; 
     echo "</div>"; 
     echo "</div>"; 
      }
        
     ?> 
         
        
        
        
        <!-- 記事一覧ここまで  -->
        
        
      </div>
      
      
      <div class="right">
       <h2>人気の記事</h2>
         
       <ul>PHPオススメ本</ul>
       <ul>PHP Myadminの使い方</ul>
       <ul>今人気のエディタTop5</ul>
         
       <h2>オススメリンク</h2>
       <ul>インターノウス株式会社</ul>
       <ul>XAMPPのダウンロード</ul>
       <ul>Edipseのダウンロード</ul>
       <ul>Braketsのダウンロード</ul>
         
       <h2>カテゴリ</h2>
       <ul>HTML</ul>
       <ul>PHP</ul>
       <ul>MySQL</ul>
       <ul>JavaScript</ul>  
      </div>
      
    </div> 
    
  </main>
  
  <footer>
    <p>copyright(c) internous | 4each blog is the one which provides A to Z about programming</p>
  </footer>
  
  
  
  
</body>  
</html>