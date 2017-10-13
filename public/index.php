<!DOCTYPE HTML>
<html lang="pl">
	<meta charset="utf-8">
	<title>Logowanie</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="css.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Muli:400,800,900" rel="stylesheet">
	<!--js-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</html>
<body>
	<section>
	<div class="container">
			<div class="form all-from col-sm-12">
			<h1>Logowanie</h1>
				<form id="from-style" method="post" action="login.php">
					<div class="top">
						<input class="input-from" type="text"  name="email" >
						<input class="input-from" type="password" name="passwd">
					</div>

					<div class="bottom">
						<input class="button" type="submit" name="submit" value="Wyślij">
						<input class="button" type="reset" name="reset" value="Wyczyść">
					</div>
						<div id="lisek">
					<img class="fooks" src="lisek.png" alt="fooks"/>
				</div>
				</form>
			<div>
		</div>
	</section>
</body>
