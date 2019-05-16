<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mail Form | Форма отправки</title>
		<script src='/form/js/jquery.js'></script><!-- Edit URL Here -->
		<script src="/form/js/scripts.js"></script><!-- Edit URL Here -->
		<style>
			.msg{
				color:#000;
				background-color:#ecf4ff;
				border-radius:5px;
			}
			div.msg.error-msg{
				color:#ff0000;
				background-color:#f9f2f4;
			}
			div.msg.success-msg{
				color:#009366;
				background-color:#f0fafa;
			}
			.form-control.error{
				border-color: #ff0000;
				outline: 0;
				-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(233, 102, 102, 0.6);
				box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(233, 102, 102, 0.6);
			}
		</style>
		<link href="/form/css/bootstrap/bootstrap.css" rel="stylesheet"><!-- Edit URL Here -->
		<link href="/form/css/bootstrap/bootstrap-theme.css" rel="stylesheet"><!-- Edit URL Here -->
		<link href="/form/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- Edit URL Here -->
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" style="text-align:center; margin-top:20px;">
				<h2>Форма отправки сообщения</h2>
				<hr style="border-top: 1px solid #cccccc;"/>
				<div class="form-group">
					<input type="text" class="form-control" id="firstname" placeholder="Имя" style="margin-bottom:5px;"/>
					<input type="text" class="form-control" id="lastname" placeholder="Фамилия" style="margin-bottom:5px;" />
					<input type="text" class="form-control" id="email" placeholder="Email" style="margin-bottom:5px;" />
					<input type="text" class="form-control" id="caption" placeholder="Тема" style="margin-bottom:5px;"/>
					<textarea class="form-control" id="mailtext" placeholder="Ваше сообщение" style="height:240px; resize:none; margin-bottom:5px;"></textarea>
					<div class="col-lg-offset-1 msg">
					</div>
					<button class="btn btn-default" id="send">Отправить</button>
				</div>
			</div>
		</div>
	</body>
</html>