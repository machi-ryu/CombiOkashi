<?php
  $addOkashiLink = html_tag('a', array(
    'href' => Uri::create('okashi/add'),
  ), 'おかしセット登録');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>お菓子コンビ</title>
  </head>
  <body>
    <h1>トップページ</h1>
    <?php echo $addOkashiLink; ?>
    <table>
      <thead>
        <tr>
          <th>No.1</th>
          <th>No.2</th>
          <th>味</th>
          <th>値段</th>
          <th>驚き</th>
          <th>コメント</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($okashis as $okashi): ?>
          <tr>
            <td>
              <?php echo $okashi->name1; ?>
              <?php echo $okashi->img1; ?>
            </td>
            <td>
              <?php echo $okashi->name2; ?>
              <?php echo $okashi->img2; ?>
            </td>
            <td><?php echo $okashi->taste; ?></td>
            <td><?php echo $okashi->price; ?></td>
            <td><?php echo $okashi->surprise; ?></td>
            <td><?php echo $okashi->comment; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
