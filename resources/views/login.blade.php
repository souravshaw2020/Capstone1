<!DOCTYPE html>
<html>
<head>
	<title>NU Visitor Gatepass | Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all'/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

		body{
			font-family: 'Roboto', sans-serif;
			background: linear-gradient(to left, #5DADE2, #85C1E9, #D6EAF8)
		}

		.main-section{
			margin: 0 auto;
			margin-top: 100px;
			padding: 0;
		}

		.modal-content{
			padding: 0 18px;
			border-radius: 10px;
		}

		.login-image img{
			height: 60px;
			width: 60px;
		}
		.login-image{
			margin-top: -30px;
			margin-bottom: 40px;
		}

		.form-group{
			margin-bottom: 20px;
			position: relative;
		}
		.form-group input{
			height: 40px;
			border-radius: 5px;
			font-size: 16px;
			letter-spacing: 1px;
			padding-left: 54px;
		}
		.form-group::before {
			font-family: 'Font Awesome\ 5 Free';
			content: "\f007";
			font-weight: 900;
			position: absolute;
			font-size: 20px;
			left: 15px;
			padding-top: 5px;
		}
		.form-group:last-of-type::before{
			content: '\f023';
		}
		.form-group i {
			position: absolute;
			top: 10px;
			right: 10px;
			visibility: hidden;
		}
		small {
			visibility: hidden;
		}
		.form-group.success input{
			border: 2px solid;
			border-color: #2ecc71;
		}
		.form-group.error input{
			border: 2px solid;
			border-color: #e74c3c;
		}
		.form-group.success i.fa-check-circle {
			color: #2ecc71;
			visibility: visible;
		}
		.form-group.error i.fa-exclamation-circle {
			color: #e74c3c;
			visibility: visible;
		}
		.form-group.error small{
			visibility: visible;
			color: #e74c3c;
		}

		.form-input button{
			width: 40%;
			margin: 5px 0 25px;
		}

		.btn-success{
			background-color: #1c6288;
			font-size: 16px;
			border-radius: 5px;
			padding: 7px 14px;
			font-family: 'Poppins', sans-serif;
		}
		.btn-success:hover{
			background-color: darkblue;
		}

		.forgot{
			padding: 5px 0 25px;
		}

		.box-area{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		.box-area li{
			position: absolute;
			display: block;
			list-style: none;
			width: 25px;
			height: 25px;
			background: rgba(255,255,255,0.4);
			animation: animate 20s linear infinite;
			bottom: -150px;
		}
		.box-area li:nth-child(1){
			left: 86%;
			width: 80px;
			height: 80px;
			animation-delay: 0s;
		}
		.box-area li:nth-child(2){
			left: 12%;
			width: 30px;
			height: 30px;
			animation-delay: 1.5s;
			animation-duration: 10s;
		}
		.box-area li:nth-child(3){
			left: 70%;
			width: 100px;
			height: 100px;
			animation-delay: 5.5s;
		}
		.box-area li:nth-child(4){
			left: 42%;
			width: 150px;
			height: 150px;
			animation-delay: 0s;
			animation-duration: 15s;
		}
		.box-area li:nth-child(5){
			left: 65%;
			width: 40px;
			height: 40px;
			animation-delay: 0s;
		}
		.box-area li:nth-child(6){
			left: 15%;
			width: 110px;
			height: 110px;
			animation-delay: 3.5s;
		}
		.box-area li:nth-child(7){
			left: 30%;
			width: 60px;
			height: 60px;
			animation-delay: 0s;
			animation-duration: 12s;
		}
		.box-area li:nth-child(8){
			left: 55%;
			width: 75px;
			height: 75px;
			animation-delay: 1s;
		}

		@keyframes animate{
			0%{
				transform: translateY(0) rotate(0deg);
				opacity: 1;
			}
			100%{
				transform: translateY(-800px) rotate(360deg);
				opacity: 0.1;
			}
		}


	</style>

</head>
<body>
	<ul class="box-area">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="container-fluid text-center">
		<div class="row" style="background: white;">
			<div class="col-3" style="text-align: left">
				<img src="niit.jpg" height="100px" width="150px">
			</div>
			
			<div class="col-1"></div>
			
			<div class="col-3 d-none d-lg-block" style="padding-top: 30px; margin-left: 55px">
				<h2><strong>VISITOR <span style="color: red">GATEPASS</span></strong></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-4 main-section">
				<div class="modal-content">
					<div class="col-12 login-image">
						<img src="gatepass.png">
					</div>

					<div class="col-12 form-input">
                        
                        @if($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

						<form method="post" id="form" action="{{ url('checklogin') }}">
							@csrf
							<div class="form-group">
								<input class="form-control" type="text" id="username" name="username" placeholder="Enter Username" oninput="check_username();" autofocus>
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small>Error Message</small>
							</div>
							<div class="form-group">
								<input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" oninput="check_password();">
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small>Error Message</small>
							</div>
							<button type="submit" class="btn btn-success">Login</button>
						</form>
					</div>
					
					<div class="col-12 forgot">
						<a href="#">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		const form = document.getElementById('form');
		const username = document.getElementById('username');
		const password = document.getElementById('password');

		function set_success(input){
			const form_group = input.parentElement;	
			form_group.className = 'form-group success';	
		}

		function set_error(input, message){
			const form_group = input.parentElement;
			const small = form_group.querySelector('small');

			small.innerText = message;
			form_group.className = 'form-group error';
		}

		function check_username(){
			const username_value = username.value.trim();

			if(username_value == ''){
				set_error(username, 'Username cannot be left blank.');
			}
			else if(username_value != '' && (username_value.length <= 3 || username_value.length > 20)){
				set_error(username, 'Username should be between 3 - 20 characters.');	
			} 
			else {
				set_success(username);
			}
		}

		function check_password(){
			const password_value = password.value.trim();

			if(password_value == ''){
				set_error(password, 'Password cannot be left blank.');
			}
			else if(password_value != '' && password_value.length < 6){
				set_error(password, 'Password should have 6 or more characters.');	
			} 
			else {
				set_success(password);
			}
		}

	</script>

</body>
</html>