<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<link rel="stylesheet"
		href="style.css"> 
        <style>
            /* style.css */
body { 
	font-family: 'Arial', sans-serif; 
	margin: 0; 
	padding: 0; 
	background-color: #f5f5f5; 
} 

header { 
	background-color: #333; 
	color: #fff; 
	text-align: center; 
	padding: 20px; 
} 

main { 
	max-width: 800px; 
	margin: 20px auto; 
} 

.tiles-container { 
	display: flex; 
	flex-wrap: wrap; 
	gap: 20px; 
} 

.tile { 
	flex: 1 0 300px; 
	background-color: #fff; 
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
	padding: 20px; 
	border-radius: 10px; 
	transition: transform 0.3s ease-in-out; 
} 

.tile:hover { 
	transform: scale(1.05); 
} 

footer { 
	background-color: #333; 
	color: #fff; 
	text-align: center; 
	padding: 10px; 
}

        </style>
	<title>Responsive Tiles Layout</title> 
</head> 

<body> 
	<header> 
		<h1>Responsive Tiles Layout Template</h1> 
	</header> 

	<main> 
		<section class="tiles-container"> 
			<div class="tile"> 
				<h2>Tile 1</h2> 
				<p> 
					GeeksforGeeks is a leading 
					platform that provides computer 
					science resources and coding 
					challenges for programmers and 
					technology enthusiasts 
				</p> 
			</div> 

			<div class="tile"> 
				<h2>Tile 2</h2> 
				<p> 
					GeeksforGeeks is a leading 
					platform that provides computer 
					science resources and coding 
					challenges for programmers and 
					technology enthusiasts 
				</p> 
			</div> 

			<div class="tile"> 
				<h2>Tile 3</h2> 
				<p> 
					GeeksforGeeks is a leading 
					platform that provides computer 
					science resources and coding 
					challenges for programmers and 
					technology enthusiasts 
				</p> 
			</div> 

			<div class="tile"> 
				<h2>Tile 4</h2> 
				<p> 
					GeeksforGeeks is a leading 
					platform that provides computer 
					science resources and coding 
					challenges for programmers and 
					technology enthusiasts 
				</p> 
			</div> 
		</section> 
	</main> 

	<footer> 
		<p>© 2023 Responsive Tiles Layout</p> 
	</footer> 
</body> 

</html>
