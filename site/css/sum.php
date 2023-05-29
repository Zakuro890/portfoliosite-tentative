
<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $result = $num1 + $num2;
}
?>

<html>
  <head>
    <title>PHPを使った簡単な加算プログラム</title>
  </head>
  <body>
    <h1>加算プログラム</h1>
    <form method="POST">
      <label for="num1">値1を入力してください:</label>
      <input type="number" name="num1" id="num1" required>
      <br>
      <label for="num2">値2を入力してください:</label>
      <input type="number" name="num2" id="num2" required>
      <br>
      <button type="submit">計算</button>
    </form>
    <?php if(isset($result)): ?>
    <p>結果: <?php echo $result; ?></p>
    <?php endif; ?>
  </body>
</html>
