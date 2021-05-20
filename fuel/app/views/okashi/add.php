<?php
  $indexOkashiLink = html_tag('a', array(
    'href' => Uri::create('okashi'),
  ), 'トップページ');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>お菓子コンビ</title>
  </head>
  <body>
    <h1>おかしセット登録</h1>
    <?php echo $indexOkashiLink; ?>
    <?php echo Form::open(array('action' => 'okashi/add', 'method' => 'POST')); ?>

    <div>
      <label>おかし１</label><?php echo Form::input('name1'); ?>
      <label>おかし２</label><?php echo Form::input('name2'); ?>
    </div>
    <div><label>味</label><?php echo Form::input('taste'); ?></div>
    <div><label>値段</label><?php echo Form::input('price'); ?></div>
    <div><label>驚き</label><?php echo Form::input('surprise'); ?></div>
    <div><label>コメント</label><?php echo Form::input('comment'); ?></div>


    <div><?php echo Form::submit('post', 'セット投稿'); ?></div>
  <?php echo Form::close(); ?>
  </body>
</html>
