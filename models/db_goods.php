<?php
require_once "db.php";
function goodsNew($connect, $name, $description, $src, $src_small, $price){

  $t = "INSERT INTO goods (name, description, src, src_small, price) VALUES ('%s','%s','%s','%s','%d')";

  $query = sprintf($t, $name,$description,$src,$src_small, $price);

  $result = mysqli_query($connect, $query);

  if(!$result){
    die(mysqli_error($connect));
  }

  return true;
}

function goodsAll($connect){
  $query = "SELECT * FROM goods order by id desc";
  $result = mysqli_query($connect, $query);

  if(!$result)
    die(mysqli_error($connect));

  $goods = array();

  while ($data = mysqli_fetch_assoc($result)) {
    $goods[] = $data;
  }

  return $goods;
}

function goodsGet($connect, $id){
  $query = sprintf("SELECT * FROM goods where id=%d",(int)$id);
  $result = mysqli_query($connect, $query);

  if(!$result)
    die(mysqli_error($connect));

  $good = mysqli_fetch_assoc($result);

  return $good;
}

function goodsDelete($connect, $id){
  $id = (int)$id;

  if($id == 0)
    return false;

  $query = sprintf("DELETE FROM goods where id='%d'", $id);
  $result = mysqli_query($connect, $query);

  if(!$result)
    die(mysqli_error($connect));

  return 1;
}

function goodsEdit($connect, $id, $name, $description, $src, $src_small, $price){
  $id = (int)$id;

  $sql = "UPDATE goods SET name='%s',description='%s',src='%s',src_small='%s',price='%s' WHERE id='%d'";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $name),mysqli_real_escape_string($connect, $description),mysqli_real_escape_string($connect, $src),mysqli_real_escape_string($connect, $src_small),mysqli_real_escape_string($connect, $price),$id);

  $result = mysqli_query($connect, $query);

  if(!$result)
    die(mysqli_error($connect));

  return mysqli_affected_rows($connect);
}