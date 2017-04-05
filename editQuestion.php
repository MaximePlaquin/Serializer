<?php
include 'traitement.php';
$dataJson = readJson("data.json");
?>

<form action="index.php?action=form" method="post">
			<input type="hidden" name="from" value="1" />
			Question : <textarea name="question"> <?php echo $dataJson[$_GET['index']]->question; ?></textarea>
			<br /><input type="submit" value="Valider" />
</form>