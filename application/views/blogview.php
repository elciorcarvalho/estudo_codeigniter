<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>

	<h1><?php echo $page_title; ?></h1>

	<ol>
	<?php foreach ($todo_list as $item): ?>

		<li><?php echo $item; ?></li>

	<?php endforeach; ?>
	</ol>

	<p>Teste de link pelo controller: <?php echo $link_p_google; ?></p>

	<?php 
	$this->load->helper('url'); 
	echo anchor('http://google.com', 'Click Here'); 
	?>

</body>
</html>