<!DOCTYPE html>
<html>

<body>

  <h1>Soal 1</h1>
  <form action="soal1a.php" method="post">
    Input Jumlah Baris: <input type="number" name="row"><br>
    Input Jumlah Kolom: <input type="text" name="column"><br>
    <input type="submit" name="submit">
  </form>

  <?php
  echo $row;
  echo $column;
  ?>

</body>

</html>