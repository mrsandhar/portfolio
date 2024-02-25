<html>
<head>
	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Methods Selection</title>
    

	<style>
		/* The switch - the box around the slider */
		.switch {
		  position: absolute;
		  display: inline-block;
		  width: 60px;
		  height: 34px;
		  margin-left : 10px;
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
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background-color: #ccc;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 26px;
		  width: 26px;
		  left: 4px;
		  bottom: 4px;
		  background-color: white;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		input:checked + .slider {
		  background-color: #2196F3;
		}

		input:focus + .slider {
		  box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(26px);
		  -ms-transform: translateX(26px);
		  transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 34px;
		}

		.slider.round:before {
		  border-radius: 50%;
		}
		
		.segment3text {
			font-size : 25px;
			width : 100px;
			display: inline-block;
		}
		
		.submit {
			background-color: white; 
			color: black; 
			border: 2px solid #008CBA;
			padding : 12px;
			margin-left: 43%;
			font-size: 20px;
		}
		.submit:hover {
			background-color: #008CBA;
			color: white;
			cursor: pointer;
		}
		
		.row {
			margin-left: 9%;
			display: flex;
			justify-content: space-between;
		}

		.course-col {
			flex-basis: 23%;
		}
		
		h2 {
			text-align:center;
		}
		
		.segment3 {
			margin-left: 43%;
		}
		
		.labelexpand input:checked + .labelexpand {
			border: 3px solid #8373e6;
		}
		
		.radio-btn {
			width: 150px;
			height: 60px;
			border: 3px solid transparent;
			display: inline-block;
			border-radius: 10px;
			position: relative;
			text-align: center;
			padding-top: 40px;
			box-shadow: 0 0 20px #c3c3c367;
			cursor: pointer;
		}
		  
		.labelexpand input:checked + .radio-btn {
			border: 3px solid #8373e6;
		}
	  
		.labelexpand > input {
			display: none;
		}
		
		.radio-btn {
			border: 3px solid rgba(255, 0, 0, 0.08);
		}
		
	</style
	
	
</head>

	<body class="has-js">
		<form id="my-form">
			
			<h2> Select the target group </h2>
			<div class="row">
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="targetgroup" value="ux"> <span class="radio-btn"> UX Expert </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="targetgroup" value="se"> <span class="radio-btn"> Software Engineer </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="targetgroup" value="pm"> <span class="radio-btn"> Project Manager </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="targetgroup" value="bs" checked> <span class="radio-btn"> Business Stakeholder </span> </label> </div>
			</div>
			
			<h2> Select the Phase </h2>
			<div class="row">
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="phase" value="discovery"> <span class="radio-btn"> Discovery </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="phase" value="define"> <span class="radio-btn"> Define </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="phase" id="develop" value="develop" checked> <span class="radio-btn"> Develop </span> </label> </div>
			<div class="course-col"> <label class="labelexpand"> <input type="radio" name="phase" id="deliver" value="deliver"> <span class="radio-btn"> Deliver </span> </label> </div>
			</div>
			
			<h2> Select the Scope </h2>
			<div class="segment3">
				<label class="segment3text"> Fast </label>
				<label class="switch">
					<input type="checkbox" id="fast" name="fast" checked>
					<span class="slider round"></span>
				</label> <br> <br> 
				
				<label class="segment3text"> Cheap </label>
				<label class="switch">
					<input type="checkbox" id="cheap" name="cheap" checked>
					<span class="slider round"></span>
				</label> <br> <br>
				
				<label class="segment3text"> Extensive </label>
				<label class="switch">
					<input type="checkbox" id="extensive" name="extensive">
					<span class="slider round"></span>
				</label> <br>
			</div>
			
		</form>
		
		<div id="showresult"></div>
		
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
					url: 'receive.php',
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
                url: 'receive.php',
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
					url: 'receive.php',
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