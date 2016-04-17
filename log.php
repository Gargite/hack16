<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	include('header.php');
?>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
<div style="text-align: center; font-size: 32px">
	Добре дошъл <?php echo $_SESSION['username']?>
</div>
	<br/>
	<div class="buttons">
	<?php if ($_SESSION['username'] == 'admin') {
		echo '<a href="show_all.php"><button class="btn btn-info">Виж Нарушители</button></a>';
	} else {
		echo '<a href="show_all.php"><button class="btn btn-info">Виж Нарушители</button></a>';
		echo " ";
		echo '<a href="form.php"><button class="btn btn-info">Регистрирай Нарушител</button></a>';
	}
	?>
	
	</div>
	</div>
</div>
</div>
</div>
<?php require_once('footer.php');?>
</body>
</html>
<?php
} else {
    echo "Моля впишете се, за да видите тази страница <br/>";
}
?>




