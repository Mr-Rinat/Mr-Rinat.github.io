<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Планировка и цены</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
<style>
body {
	margin: 0;
	padding: 0;
	background: url(main.webp);
}

.nav {
	text-align: center;
}

.main-menu {
	width: 1000px;
	list-style: none;
	padding: 0;
	font-size: 24px;
	margin: 0 auto;
	list-style-type: none;
}

.main-menu li {
	display: inline-block;
	padding: 0;
	margin-right: -6px;
}

.main-menu a {
	color: white;
	background: gray;
	text-decoration: none;
	padding: 10px;
	margin: 0;
	outline: none;
}

.main-menu a:hover {
	background: #2b2b2b;
}

.main-menu a:active {
	color: #FFDA81;
}

.title_conteiner {
	margin-top: 5%;
	text-align: center;
	color: white;
}

.wrap {
         width: 1310px;/*фиксируем ширину обертки*/
         margin: 0 auto;/*центрируем ее*/
         background: #FFDA81;
         height: 640px;/*Задаем высоту обертки*/
        }
 
.bblock {
        float: left; /*Задаем обтекание*/
        line-height: 120px;/*Высота строки +  верт. центрирования текста*/
        font-size: 40px;
        background: darkgray;
        color: white;
        width: 320px; /*Фиксируем ширину блока*/
        margin-right: 10px;
        text-align: center; /*Центрируем текст по горизонтали*/
}
.wrap :last-child {
        margin-right: 0px;/*Убираем поле последнего div-а*/
		list-style-type: none;
		text-align: center;
                       }

.footer	{
	padding: 10px 20px;
	background: #666;
	color: white;
	position: fixed; /* Фиксированное положение */
 	right: 0;
 	bottom: 0;
 	left: 0;
 	list-style-type: none;
 	margin-top: 5%;
	text-align: center;
}

</style>
</head>

<body>

<div class=nav>
	<ul class="main-menu">
	<li class="active"><a href="catalog.html">Планировка и цены</a></li>
	<li><a href="index.html">Начальный экран</a></li>
	<li><a href="contacts.php">Запись на экскурсию</a></li>
	</ul>
</div>


<div class="title_conteiner">
<h2>Каталог квартир</h2>
</div>

<div class="wrap"> <!--Создаем дополнительную обертку-родительский элемент -->
	<div class="bblock">Квартира №1
		<ul class="preview_params">
		<li class="preview_params1">Метраж=1</li>
		<li class="preview_params2">Этаж=1</li>
		<img src="catalog.webp" width="150" height="150">
		<li class="preview_params3">Цена=1</li>
		</ul>
	</div>

	<div class="bblock">Квартира №2
		<ul class="preview_params">
		<li class="preview_params1">Метраж=2</li>
		<li class="preview_params2">Этаж=2</li>
		<img src="catalog.webp" width="150" height="150">
		<li class="preview_params3">Цена=2</li>
		</ul>
	</div>

	<div class="bblock">Квартира №3
		<ul class="preview_params">
		<li class="preview_params1">Метраж=3</li>
		<li class="preview_params2">Этаж=3</li>
		<img src="catalog.webp" width="150" height="150">
		<li class="preview_params3">Цена=3</li>
		</ul>
	</div>

	<div class="bblock">Квартира №4
		<ul class="preview_params">
		<li class="preview_params1">Метраж=4</li>
		<li class="preview_params2">Этаж=4</li>
		<img src="catalog.webp" width="150" height="150">
		<li class="preview_params3">Цена=4</li>
		</ul>
	</div>
</div>

//$items содрежит многомерный массив с нужными нам данными
$items = array_chunk($items, 3);
//Разделим массив на части каждая из которых будет содержать 3 жлемента массива,
//то есть три массива с нужными нам данными
?>
<div id="item"> <!-- Обозначим наш главный див      -->
<?
foreach ($items as $item) { //Так как мы теперь имеем трёхуровневый массив, начинаем
    //проходить по нему
?>
<div> <!-- Вводим первую группу дивов, цикл пройдётся здесь 3 раза   -->
foreach ($item as $item_properties) { //Второй уровень прохождения
?>
<div>   <!-- открываем див в который выводи информацию  -->
<img src="planshet.png" height="50" width="100" align="center"><br> <!-- картинка для вида   -->
Товар: <?= $item_properties["name"]; //имя товара ?><br>
Цена: <?= $item_properties["price"]; //цена товара?><br>
<form action="buy.php" method="GET">  <!-- сделаем кнопку при помощи которой можно покупать  -->
<input type="hidden" name="id"   value="<?= $item_properties["id"]; ?>" />
<button type="submit">Купить</button>
</form>
</div>  <!-- закрываем див в который выводим информацию  -->
} //Цикл который проходит по второму уровню прохождения закрывается
?>
</div>  <!-- закрываем див с дивами для вывода товаров -->
<?
}
?>
</div>  <!-- закрываем главный див -->

<script>

</script>

 <footer class="footer">Copyright 2022 г.
 <li><img src="favicon.png" width="35" height="40"></li>
</footer>

</body>

</html>