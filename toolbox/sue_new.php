<html>
<head>
	
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Line Awesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />

	<style>
		* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        margin: 0;
        padding: 0;
		background-color:black;
      }

      .main-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .main-container h2 {
        margin: 20 0 10px 0;
        color: #8373e6;
        font-size: 30px;
        font-family: "Raleway", sans-serif;
        font-weight: 400;
      }

      .radio-buttons {
        width: 100%;
        margin: 0 auto;
        text-align: center;
      }

      .custom-radio input {
        display: none;
      }

      .radio-btn {
        margin: 10px;
        width: 100px;
        height: 110px;
        border: 3px solid transparent;
        display: inline-block;
        border-radius: 10px;
        position: relative;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
      }

      .radio-btn > i {
        color: #ffffff;
        background-color: #8373e6;
        font-size: 20px;
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%) scale(4);
        border-radius: 50px;
        padding: 3px;
        transition: 0.2s;
        pointer-events: none;
        opacity: 0;
      }

      .radio-btn .hobbies-icon {
        width: 80px;
        height: 80px;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .radio-btn .hobbies-icon i {
        color: #8373e6;
        line-height: 80px;
        font-size: 60px;
      }

      .radio-btn .hobbies-icon h3 {
        color: #8373e6;
        font-family: "Raleway", sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
      }

      .custom-radio input:checked + .radio-btn {
        border: 3px solid #8373e6;
      }

      .custom-radio input:checked + .radio-btn > i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
      }
	</style
	
	
</head>

	<body class="has-js">
		<form action="suereceive.php" method="POST">
		
		<div class="main-container">
		  <h2>Select the target group</h2>
		  <div class="radio-buttons">
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="ux" checked />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  
				  <h3>UX Expert</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="se" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-futbol"></i>
				  <h3>Software Engineer</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="pm" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-table-tennis"></i>
				  <h3>Project Manager</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="bs" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-ellipsis-h"></i>
				  <h3>Business Stakeholder</h3>
				</div>
			  </span>
			</label>
		  </div>
		</div>


		<div class="main-container">
		  <h2>Select the target group</h2>
		  <div class="radio-buttons">
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="ux" checked />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-biking"></i>
				  <h3>UX Expert</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="se" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-futbol"></i>
				  <h3>Software Engineer</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="pm" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-table-tennis"></i>
				  <h3>Project Manager</h3>
				</div>
			  </span>
			</label>
			<label class="custom-radio">
			  <input type="radio" name="targetgroup" value="bs" />
			  <span class="radio-btn"
				><i class="las la-check"></i>
				<div class="hobbies-icon">
				  <i class="las la-ellipsis-h"></i>
				  <h3>Business Stakeholder</h3>
				</div>
			  </span>
			</label>
		  </div>
		</div>
			
			<!-- <h2> Select the Phase </h2>
			<div class="row">
			<div class="course-col"> <input type="radio" name="phase" value="discovery">Discovery </div>
			<div class="course-col"> <input type="radio" name="phase" value="define">Define </div>
			<div class="course-col"> <input type="radio" name="phase" value="develop">Develop </div>
			<div class="course-col"> <input type="radio" name="phase" value="deliver">Deliver </div>
			</div> !-->
			
			<h2> Select the Scope </h2>
			<div class="segment3">
				<label class="segment3text"> Fast </label>
				<label class="switch">
					<input type="checkbox" name="fast">
					<span class="slider round"></span>
				</label> <br> <br> 
				
				<label class="segment3text"> Cheap </label>
				<label class="switch">
					<input type="checkbox" name="cheap">
					<span class="slider round"></span>
				</label> <br> <br>
				
				<label class="segment3text"> Extensive </label>
				<label class="switch">
					<input type="checkbox" name="extensive">
					<span class="slider round"></span>
				</label> <br>
			</div>
			
			<br> <br>
			
			<input type="submit" value = "Show Methods" class = "submit"> 
			
		</form>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script async="" src="https://www.google-analytics.com/analytics.js"></script>
		
		<script lang = "JavaScript" type="text/JavaScript">
		/*	$('.segment3 :checkbox').change(function () {
				var $cs=$(this).closest('.segment3').find(':checkbox:checked');
					if ($cs.length > 2) {
						this.checked=false;
						alert("You can only select 2 items");
					}
			});
			
		*/
		
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