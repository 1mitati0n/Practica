<?
session_start();
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');

 ?>



<div class="product-item">


    <h3><p class = "product-name fl-al-c">Откуда:<span class="span_p"> <?php echo $ot; ?></span> </p></h3>
    <h3><p class = "product-name fl-al-c">Куда:  <span class="span_p"><?php echo $k; ?></span> </p></h3>
    <div class="price_m">
      <span class="price"><p class = "price">Цена: <?php echo $price; ?> р. </p></span>
      <span class="price"><p class = "price">Макс.Вес: <?php echo $v; ?> кг. </p></span>
    </div>

    <form method="POST" action="word_enter.php">
               <input type="hidden" name="first" value = '<?=$sf?>'>
               <button class="but_pod" type="submit" >Подробнее</button>
    </form>

</div>
<style type="text/css">
.product-item{
  text-align: center;
}
.product-name{
  font-size: 24px;
  margin-top: 15px;
}
.span_p{
  color:#70A0FF;
}
.price_m{
  text-align: center;
  margin-top:180px;
}
.price{
  font-size: 24px;
  color:#70A0FF;
}
.but_pod{
  border: none;
  font-size: 18px;
  width: 120px;
  height: 30px;
  background-color: #70A0FF;
  border-radius: 15px;
  color: white;

}


</style>
