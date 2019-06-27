<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1> Quizzer </h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question 1 of 5</div>
			<p class="question">
				What does php stands for?
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<li><input name="choice" type="radio" value="1"/>PHP: Hypertext Preprocessor</li>
					<li><input name="choice" type="radio" value="1"/>PHP: Hyper Preprocessor</li>
					<li><input name="choice" type="radio" value="1"/>PHP: text Preprocessor</li>
					<li><input name="choice" type="radio" value="1"/>PHP: Preprocessor</li>
				</ul>
				<input type="submit" value="Submit" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2019, Quizzer
		</div>
	</footer>
</body>
</html>