<html>
<head>
	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Methods Selection</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

	<style>
		.leftside {
			margin-top: 50px;
			margin-left:50px;
		}
		
		.labelexpanded {
			font-size: 12px;
		}
		
		.labelexpanded > input {
			display:none;
		}
		
		.labelexpanded input:checked + .radio-btns {
				background-color: #253c6a;
				color: #fff;
		}
		
		.radio-btns {
			width: 57px;
			height: 59px;
			border-radius: 15px;
			position: relative;
			text-align: center;
			padding: 15px 20px;
			box-shadow: 0 1px #c3c3c3;
			cursor: pointer;
			background-color: #eaeaea;
			float:left;
			margin-right: 15px;
		}
		
		.radio-btns > img {
			width: 28px;
			height: 30px;
		}
		
	</style
</head>

<body>
	<div class="leftside">
		<label class="labelexpanded"> 
			<input type="radio" name="targetgroup"> 
				<div class="radio-btns"> 
					<img src="user-ninja.png"/> 
					<p> UX Expert </p> 
				</div>
			</input>
		</label>
		
		
		<label class="labelexpanded"> 
			<input type="radio" name="targetgroup"> <div class="radio-btns"> <img src="user-astronaut.png"> <p> Software Engineer </p> </div> 
		</label>
		
		<label class="labelexpanded">
			<input type="radio" name="targetgroup"> <div class="radio-btns"> <img src="user-tag.png"> <p> Project Manager </p> </div> 
		</label>
		
		<label class="labelexpanded"> 
			<input type="radio" name="targetgroup"checked> <div class="radio-btns"> <img src="user-tie.png"> <p> Business Stakeholder </p> </div> 
		</label>
	</div>
</body>
	
</html>