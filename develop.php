<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポートフォリオ</title>
    <link rel="stylesheet" href="./css/style-dev.css">
</head>
<body>
  <h3>▼ポートフォリオ</h3>
  <p class="sen1">
  インシデント管理のデスクトップアプリを開発をしました。<br>
  日々の業務の記録を更新したり、検索や削除が簡単にできます。<br>
  前職で使用していた「顧客対応記録」が使いづらく、自分なりに作ってみたいと思ったことがきっかけでした。学んだ技術を随時反映していきます。
  </p> 

  <h3>▼開発環境</h3>
  <?php 
        $tool = ['C#',
                 'Visual Studio Community 2022',
                 'Microsoft SQL Server 2019'];
        ?>
        <?php foreach($tool as $value){?>

        <li class="dev"><?php  echo $value;}; ?></li>
   <h3 class="syousai">▼詳細情報(下記の画像クリック)</h3>
    <p class="incident">☆インシデント管理_説明書(PDF形式)</p>
    <a href = 'https://drive.google.com/file/d/1ay9NbWx7J4sdHstIiuI-xif8Zq2UMk23/view?usp=sharing' alt="インシデント管理_説明書のリンクになっています。"  target="_blank" rel = “noopener”>
        <img src="./images/siryo.png" width="350px" height="200px" hspace="">
    </a>
    <p class="GitHub">☆ソースコード(GitHub掲載)
    </p>
    <a href = 'https://github.com/Naoki-0302/incidentApp' alt="GitHubへのリンクになっています。" target="_blank" rel = “noopener”>
        <img src="./images/github.jpg"インシデント管理_説明書 width="300px" height="200px"hspace="">
    </a>
    <br>
    <a href="#" onclick="history.back()">メニュー画面へ</a>
  
    
</body>

</html>