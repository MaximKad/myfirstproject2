jQuery(document).ready(function(){
	function contactForm(){
			$('.form-control').on('click', function(){
				$(this).removeClass('error');
			});
			$('button#send').on('click', function(){
				var firstname = $('#firstname').val();
				var lastname = $('#lastname').val();
				var email = $('#email').val();
				var caption = $('#caption').val();
				var mailtext = $('#mailtext').val();
				
				if(firstname == ''){
					$('#firstname').addClass('error');
				}
				if(email == ''){
					$('#email').addClass('error');
				}
				if(caption == ''){
					$('#caption').addClass('error');
				}
				if(mailtext == ''){
					$('#mailtext').addClass('error');
				}
				if(firstname !== '' && email !== '' && caption !== '' && mailtext !== ''){
					$('button#send').attr('disabled', 'disabled').addClass('disabled');
					$('div.msg').prepend('<i class="fa fa-refresh fa-spin"></i><span>Загрузка...</span>');
					$.ajax({
						url: "/form/php/sendmessage.php", //edit here
						method: "POST",
						cache: false,
						dataType: "json",
						data: {
							firstname: firstname,
							lastname: lastname,
							email: email,
							caption: caption,
							mailtext: mailtext,
						},
					}).then(function(){
						$('button#send').removeAttr('disabled').removeClass('disabled');
						$('div.msg span').remove();
						$('.fa-refresh.fa-spin').remove();
						$('div.msg').addClass('success-msg');
						$('div.msg').prepend('<span>Ваше сообщение отправлено успешно</span>');
					}, function() {
						$('button#send').removeAttr('disabled').removeClass('disabled');
						$('div.msg span').remove();
						$('.fa-refresh.fa-spin').remove();
						$('div.msg').addClass('error-msg');
						$('div.msg').prepend('<span>Произошла ошибка при отправке сообщения</span>');
					});
				}
			})
	}
	contactForm();
});