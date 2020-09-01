<?php
$question = $_POST;



 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="inowootan-form.css">
    <title></title>
  </head>
  <body>
  <div class="after-enter">
    <div class="left-up">
      <p>Channel</p>
      <h1>Inowootan</h1>
    </div>
    <div class="top">
      <h1>下記の内容で送信しました</h1>
    </div>
    <div class="confilm-container">
      <p>お名前: <?php  echo htmlspecialchars($question['name'],ENT_QUOTES,'UTF-8');?></p>
      <p>メールアドレス: <?php echo htmlspecialchars($question['adress'],ENT_QUOTES,'UTF-8');  ?></p>
      <p>題名: <?php echo htmlspecialchars($question['title'],ENT_QUOTES,'UTF-8');  ?></p>
      <p>内容: <?php echo nl2br(htmlspecialchars($question['content'],ENT_QUOTES,'UTF-8'));  ?></p>
    </div>
    <div class="back">
      <a href="inowootan420copy.html"><h1>トップへ戻る</h1></a>
    </div>
  </div>
  <?php
  mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['name'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      if(mb_send_mail($to, $title, $content)){
        echo "メールを送信しました";
      }
   ?>
  </body>
</html>
