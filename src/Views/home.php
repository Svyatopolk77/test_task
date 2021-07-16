<?php include 'parts/header.php' ?>
<?php include 'parts/navbar.php' ?>

<?php for ($i = 0; $i < count($data['content']) ; $i++) {

	echo "<div class='card'>".
	"<div class='card-title'>Название: ".
	$data['content'][$i]['title'].
	"</div>".
	"<div class='card-shortcontent'>Краткое содержание: ".
	$data['content'][$i]['short_content'].
	"</div>".
	"<div class='card-footer'>".
	"<a class='viewSource' href='/message?id=".$data['content'][$i]['id']."'>Читать</a>".
		"<div class='card-author'>Автор: ".
		$data['content'][$i]['author'].
		"</div>".
	"</div>".

"</div>";
	
}


?>
<?php 
if ($_GET['page']>1) {
	echo "<a href=?page=".($_GET['page']-1) .">Назад</a>";
}
 ?>

<?php 

if (isset($_GET['page']) && !empty($_GET['page'])) {
	
	
	echo "<a href=?page=". ($_GET['page']+1) .">Вперед</a>";

}
else {
	
	echo "<a href=?page=". 2 .">Вперед</a>";

}
 ?>
 <?php include 'parts/footer.php' ?>
