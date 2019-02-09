<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
  <?php
    $filter = array_key_exists('blend', $_GET) ? $_GET['blend'] : ''
  ?>
  <h1>Onlineshop Kaffee</h1>
  <form  action="index.php" method="get">
  <div class="form-group">
    <label for="blendFilter">Blend Name</label>
    <input type="text" class="form-control" id="blendFilter" name="blend"
           placeholder="Filter Blend Names" value=<?php echo($filter) ?>>
  </div>
  <button type="submit" class="btn btn-primary">Filtern</button>
</form>
  <?php
    require_once('showTable.php');
    showTable($filter);
  ?>
</body>
</html>