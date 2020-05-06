<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="css/core-style.css">
  <link rel="stylesheet" href="css/style.css">

  <title>E-shop</title>
</head>
<body>

<?php include "../templates/header.tpl" ?>
<?php include "../templates/breadCrumbs.tpl" ?>

<section class="mainContent container">
  <div class="productFilters" style="width: 310px; height: 810px; border: 1px #E2E2E2 solid; padding: 15px">
    Filters
  </div>
  <div class="products">
    <div class="topSection">
      <h1>Men's Tops <span>(133)</span></h1>
      <div class="controls">
        <span>Show products:</span>
        <select name="amountOnPage">
          <option value="30" selected>30</option>
          <option value="45">45</option>
          <option value="60">60</option>
        </select>
        <span>Sort:</span>
        <select name="productSort">
          <option value="Popular" selected>Popular</option>
          <option value="Newest">Newest</option>
          <option value="Price">Price</option>
        </select>
      </div>
    </div>
    <div class="productList">
      <?php
      $goods = goodsAll($connect);
      print_r($goods);
//      if ($goods) {
//        foreach ($goods as $good) {
//          ?>
<!--          <div class="good">-->
<!--            <a href="good.php?id=--><?//= $good['id'] ?><!--">-->
<!--              <img src="--><?//= $good['src_small'] ?><!--" alt="--><?//= $good['name'] ?><!--"-->
<!--                   title="--><?//= $good['name'] ?><!--"></a>-->
<!--            <h3 class="good-name"><a href="good.php?id=--><?//= $good['id'] ?><!--">--><?//= $good['name'] ?><!--</a></h3>-->
<!--            <p class="price">$--><?//= $good['price'] ?><!--</p>-->
<!--            <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>-->
<!--          </div>-->
<!--        --><?// }
//      }
//      ?>
    </div>
  </div>
</section>
</body>
</html>

