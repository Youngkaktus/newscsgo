<?php
	require_once '../app/include/database.php';
	require_once '../app/include/functions.php';
?>

<div class="">
	<a href="index.php?action=add">добавить статью</a>
	<?php
	$categories = get_categories($link);
	?>
	<?php foreach($categories as $category): ?>
		<li>
			<a href="category.php?id=<?=$category['id']?>">
				<?=$category['title']?>
				<?=$category['text']?>
				<?=$category['date']?>
			</a>
		</li>
	<a href="index.php?action=edit&id=<?=$category['id']?>">Редактировать</a>
	<a href="index.php?action=delete&id=<?=$category['id']?>">Удалить</a>
</div>
<?php endforeach; ?>

<?php

if(isset($_GET['action']))
	$action = $_GET['action'];
else
	$action = '';

if ($action == 'add'){
	if(!empty($_POST)){
		articles_new($link, $_POST['title'], $_POST['text'], $_POST['date']);
			header('location: index.php');}
	include('article_add.php');}
