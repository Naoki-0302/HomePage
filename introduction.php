<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/style-intro.css">
</head>
<body>
    <h3>▼私について</h3>
    <?php 
    $test = ['皆川 直輝(ミナカワ ナオキ)',
             '茨城県出身の27歳',
             '社会人になってから愛知県で３年間過ごし、東京に来て2年目になります！',
             '好きなことは音楽鑑賞とハイボールを飲むことです◎',
             'プライベートではC#、PHP、SQLを触っていますが、まだまだ学習中です'
             ]
            ;
    ?>
    <?php foreach($test as $value){ ?>
    <p>
    <ul style="list-style:none;padding-left: 0;">
      <li class="list"><?php echo '◆'.$value;}; ?></li>
    </ul>
    </p>
   
    <div class="sikaku">
    <?php $date = ['2013年2月',
                   '2015年3月',
                   '2015年3月',
                   '2017年3月',
                   '2021年12月',
                   '2022年9月',
                   '学習中'];   
    ?>
    <?php $qualification = ['日本商工会議所簿記検定2級',
                            '第1種運転免許普通自動車',
                            'ITパスポート試験',
                            '2級ファイナンシャル・プランニング技能士',
                            '基本情報技術者試験',
                            '運行管理者試験(貨物)',
                            '応用情報技術者試験'] 
    ?>
    <h3>▼取得資格</h3>
     <table border='1'>
        <tr align="center">
            <th>取得年月</th>
            <th>資格名</th>
        </tr>
        <?php 
        $cnt=count($date);
        $cnt = $cnt-1;
        for($num=0; $num<=$cnt; $num++){ ;
        ?>
        <tr>
            <td align="center"><?php echo $date[$num]; ?></td>
            <td class="sikakumei"><?php echo $qualification[$num];}; ?></td>
        </tr>
    </table>
    </div>
    <a href="#" onclick="history.back()">メニュー画面へ</a>
</body>
</html>