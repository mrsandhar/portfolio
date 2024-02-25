<html>
<head>
	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Methods Selection</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

	<style>
		*{
		  margin: 0;
		  padding: 0;
		  font-family: "roboto";
		  font-weight: 300;
		}
	
		/* The switch - the box around the slider */
		.switch {
		  position: relative;
		  display: inline-block;
		  width: 47px;
		  height: 28px;
		  margin-left: 10px;
		  margin-right: 20px;
		}

		/* Hide default HTML checkbox */
		.switch input {
		  opacity: 0;
		  width: 0;
		  height: 0;
		}

		/* The slider */
		.slider {
		  position: absolute;
		  cursor: pointer;
		  top: -18;
		  left: 0;
		  right: 0;
		  bottom: 18;
		  background-color: #ccc;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 22px;
		  width: 22px;
		  left: 2px;
		  bottom: 3px;
		  background-color: white;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		input:checked + .slider {
		  background-color: #253c6a;
		}

		input:focus + .slider {
		  box-shadow: 0 0 1px #253c6a;
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(20px);
		  -ms-transform: translateX(20px);
		  transform: translateX(20px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 27px;
		}

		.slider.round:before {
		  border-radius: 50%;
		}
		
		.segment3text {
			font-size: 14px;
		}
		
		.labelexpanded {
			font-size: 12px;
		}
		
		.radio-btns {
			width: 57px;
			height: 59px;
			border-radius: 15px;
			position: relative;
			text-align: center;
			padding: 15 20 15 20;
			box-shadow: 0 1px #c3c3c3;
			cursor: pointer;
			background-color: #EAEAEA;
			margin-right: 15px;
			float: left;
		}
		
		#radio-bt {
			margin-right: 0px;
		}
		
		.radio-btns > img {
			width: 28px;
			height: 30px;
		}
		  
		.labelexpanded input:checked + .radio-btns {
			background-color: #253c6a; 
			color: #fff;
		}
	  
		.labelexpanded > input {
			display: none;
		}
		
		.labelexpand {
			font-size: 14px;
		}
		
		.labelexpand input:checked + .labelexpand {
			border: 3px solid #253c6a;
		}
		
		.radio-btn {
			width: 50px;
			height: 10px;
			border-radius: 10px;
			position: relative;
			text-align: center;
			padding: 8 15 8 15;
			box-shadow: 0 1px #c3c3c3;
			cursor: pointer;
			background-color: #F3987C;
			margin-right: 20px;
		}
		  
		.labelexpand input:checked + .radio-btn {
			background-color: #253c6a; 
			color: #fff;
		}
	  
		.labelexpand > input {
			display: none;
		}
		
		.heading {
			display: flex;
			width: 100%;
			background-color: #253c6a;
		}
		
		.in_head {
			width: 80%;
			margin:auto;
			padding: 20 0 20 0;
		}
		
		.h_heading {
			color: white;
			font-size: 30px;
		}
		
		.h_text {
			color: white;
			margin-top: 5px;
			font-size: 16px;
		}
		
		.mainbody {
			display: flex;
			width: 80%;
			flex-direction:row;
			margin:auto;
			padding-top: 20;
		}
		
		.mainbody .leftside, .rightside {
			flex-basis: 50%;
		}
		
		.rightside {
			display:flex;
			flex-direction:column;
			margin-left: 13%;
		}
		
		#subhead {
			color: #253c6a;
			font-size: 14px;
			padding-bottom: 20px;
		}
		
		.rightdown {
			padding-top: 30px;
		}
		
		.box {
			background-color: #EAEAEA;
			border-radius: 15px;
			position: relative;
			padding: 15 20 15 20;
			box-shadow: 0 1px #c3c3c3;
			margin-right: 15px;
			font-size: 12px;
			width: 30%;
			height: 170px;
		}
		
		.box:last-child {
			margin-right: 0;
		}
		
		.innerbox {
			height: 95%;
		}
		
		.methoddef {
			padding-top: 5px;
			padding-bottom: 5px;
			height: 78%;
		}
		
		.howtoi {
			text-align: center;
		}
		
		.howtoi > a {
			color: black;
			font-size: 14px;
		}
		
		.footer {
			display: flex;
			width: 100%;
			background-color: #EDEFF2;
			margin-top: 2%;
		}
		
		.footer_img {
			margin:auto;
		}
		
		.footer_img > div {
			float: left;
			display: block;
			margin: 20 80 20 80;
			text-align: center;
			font-size: 12px;
		}
		
		.footer_img > div > p {
			padding-top: 5px;
		}
		
		.footer_img > div > img {
			width: 40px;
			height: 40px;
			border-radius: 50%;
		}
		
		#showresult {
			padding-top: 0.5;
		}
		
	</style
	
	
</head>

	<body class="has-js">
		<div class="heading">
			<div class="in_head">
				<h1 class="h_heading">Toolbox Methods for UX improvement </h1>
				<p class="h_text">Welcome to the Strategic Usability Engineering Toolbox Methods Project for Rhein Waal University of Applied Sciences</p>
			</div>
		</div>
		
		<form id="my-form">
		<div class="mainbody">
			<div class="leftside">
				<p id="subhead"> 1. Please select the role that better suits to you </p>
				<label class="labelexpanded"> <input type="radio" name="targetgroup" value="ux"> <div class="radio-btns"> <img src="user-ninja.png"/> <p> UX Expert </p> </div> </label>
				<label class="labelexpanded"> <input type="radio" name="targetgroup" value="se"> <div class="radio-btns"> <img src="user-astronaut.png"> <p> Software Engineer </p> </div> </label>
				<label class="labelexpanded"> <input type="radio" name="targetgroup" value="pm"> <div class="radio-btns"> <img src="user-tag.png"> <p> Project Manager </p> </div> </label>
				<label class="labelexpanded"> <input type="radio" name="targetgroup" value="bs" checked> <div class="radio-btns" id="radio-bt"> <img src="user-tie.png"> <p> Business Stakeholder </p> </div> </label>
			</div>
			<div class="rightside">
				<div>
					<p id="subhead"> 2. Select one of the HCI phases that you want to explore </p>
					<label class="labelexpand"> <input type="radio" name="phase" value="discovery"> <span class="radio-btn"> Discovery </span> </label>
					<label class="labelexpand"> <input type="radio" name="phase" value="define"> <span class="radio-btn"> Define </span> </label>
					<label class="labelexpand"> <input type="radio" name="phase" id="develop" value="develop" checked> <span class="radio-btn"> Develop </span> </label>
					<label class="labelexpand"> <input type="radio" name="phase" id="deliver" value="deliver"> <span class="radio-btn"> Deliver </span> </label>
				</div>
				<div class="rightdown">
					<p id="subhead"> 3. Select the proper expected work load </p>
					<div class="segment3">
						<label class="segment3text"> Fast </label>
						<label class="switch">
							<input type="checkbox" id="fast" name="fast" checked>
							<span class="slider round"></span>
						</label>
						
						<label class="segment3text"> Cheap </label>
						<label class="switch">
							<input type="checkbox" id="cheap" name="cheap" checked>
							<span class="slider round"></span>
						</label>
						
						<label class="segment3text"> Extensive </label>
						<label class="switch">
							<input type="checkbox" id="extensive" name="extensive">
							<span class="slider round"></span>
						</label>
					</div>
				</div>
			</div>
		</div>
		</form>
		
		<div id="showresult" class="mainbody"></div>
		
		<div class="footer">
			<div class="footer_img"> 
				<div> <img src="person_1.jpg"/> <p> Simer Jit Singh </p> </div>
				<div> <img src="person_2.jpg"/> <p> Subhashis Kakoti </p> </div>
				<div> <img src="person_3.jpg"/> <p> Jafet Martinez </p> </div>
			</div>
		</div>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script async="" src="https://www.google-analytics.com/analytics.js"></script>
		
		<script lang = "JavaScript" type="text/JavaScript">
		
		//AJAX call
		$('input[type="radio"]').click(function() {
			if ($(this).is(':checked'))
			{
			  if(document.getElementById('fast').checked && document.getElementById('cheap').checked ||
			   document.getElementById('fast').checked && document.getElementById('extensive').checked ||
			   document.getElementById('cheap').checked && document.getElementById('extensive').checked) {
				$.ajax({
					url: 'receive_new.php',
					type: 'POST',
					data: $('#my-form').serialize(),
					success: function (result) {
						$('#showresult').html(result);
					}
				});
			   }
			}
		});
		
		$( document ).ready(function(){
            //Perform Ajax request.
            $.ajax({
                url: 'receive_new.php',
                type: 'POST',
                data: $('#my-form').serialize(),
				success: function (result) {
					$('#showresult').html(result);
                }
			});
        });
		
		const names = window.location.hash.replace('#','').split(',');
		if (names.length === 3) {
			document.querySelector('label[for="fast"]').textContent = names[0];
			document.querySelector('label[for="cheap"]').textContent = names[1];
			document.querySelector('label[for="extensive"]').textContent = names[2];
		}
		
		document.querySelector('body').className = 'has-js';
		var checked = [];
		[].forEach.call(document.querySelectorAll('input[type="checkbox"]'), function (checkbox) {
		  checkbox.addEventListener('change', function (e) {
			ga('send', 'event', 'checkbox', 'trigger');
			if (checkbox.checked && checked.length === 2) {
			  var uncheckTarget = checked[Math.floor(Math.random() * checked.length)];
			  uncheckTarget.checked = false;
			}
			checked = document.querySelectorAll('input[type="checkbox"]:checked');
			if(document.getElementById('fast').checked && document.getElementById('cheap').checked ||
			   document.getElementById('fast').checked && document.getElementById('extensive').checked ||
			   document.getElementById('cheap').checked && document.getElementById('extensive').checked) {
				$.ajax({
					url: 'receive_new.php',
					type: 'POST',
					data: $('#my-form').serialize(),
					success: function (result) {
						$('#showresult').html(result);
					}
				});
			}
		  });
		});
		
		(function (i, s, o, g, r, a, m) {
		  i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		  }, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-91249744-1', 'auto');
		ga('send', 'pageview');
		
		</script>
		
	</body>
	
</html>