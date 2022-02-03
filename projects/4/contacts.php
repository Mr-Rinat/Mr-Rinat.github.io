<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Запишитесь на экскурсию</title>
	
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

.footer	{
	padding: 10px 20px;
	background: #666;
	color: white;
	position: fixed; /* Фиксированное положение */
 	right: 0;
 	bottom: 0;
 	left: 0;
	 list-style-type: none;
 	text-align: center;
}

.form {
	text-align: center;
	color:  red;
}

</style>

</head>

<body>

<div class=nav>
	<ul class="main-menu">
	<li><a href="catalog.html">Планировка и цены</a></li>
	<li><a href="index.html">Начальный экран</a></li>
	<li class="active"><a href="contacts.php">Запись на экскурсию</a></li>
	</ul>
</div>


<div class="title_conteiner">
<h2>Запись на экскурсию</h2>
<hr>
<h2>Форма заявки email</h2>
</div>

<div class="form">
    <label>Ваше имя:</label>
    <input type="text" id="name" value="" />
     
    <label>Ваш e-mail:</label>
    <input type="email" id="email" value="" />
     
    <label>Телефон:</label>
    <input  type="text" id="phone" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"/>
	<hr>
    <input type="button" value="Отправить" id="btn_submit" data-toggle="modal" data-target="#myModal"> 
    <div id="erconts"></div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title" id="myModalLabel">Отправка заявки</h4>
		</div>
		<div class="modal-body">
		
		Данные успешно отправлены
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
		</div>
	  </div>
	</div>
  </div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="script.js"></script>


 <footer class="footer">Copyright 2022 г.
 <li><img src="favicon.png" width="35" height="40"></li>
</footer>

</body>

</html>