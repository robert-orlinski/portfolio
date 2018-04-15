<?php

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$topic = $_POST['topic'];
		$message = $_POST['message'];

		$errorEmpty = false;
		$errorName = false;
		$errorEmail = false;

		$to      = 'kontakt@robertorlinski.pl';
		$subject = 'Formularz kontaktowy';
		$mail = 'Imię: '.$name."\r\n".
				   'Temat: '.$topic."\r\n".
				   'Wiadomość: '.$message."\r\n".
		$headers = 'From: ' . $email;

		if(empty($name) || empty($email) || empty($topic) || empty($message)) {
			$errorEmpty = true;
		} elseif (!preg_match("/^[a-zA-ZĘÓĄŚŁŻŹĆŃęóąśłżźćń ]*$/", $name)) {
			$errorName = true;
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errorEmail = true;
		} else {
			mail($to, $subject, $mail, $headers);
		}

	} else {
		echo "Coś poszło nie tak. :c";
	}

?>

<script>

	$('#name, #email, #topic, #message').removeClass('input-error');

	var errorEmpty = "<?php echo $errorEmpty ?>";
	var errorName = "<?php echo $errorName ?>";
	var errorEmail = "<?php echo $errorEmail ?>";

	function borderColor(el, i) {
		if($(el).eq(i).val().length == 0) {
			$(el).eq(i).css('border-color', 'red');
		}
	}

	function borderColorOnce(el, color) {
		$(el).css({
		   'border-color' : color
		});
	}

	function tooltip(text) {
		$('.contact__content__form__input--button').attr('data-tooltip', text);
		$('.contact__content__form__input--button').addClass('show-tooltip');
	}

	function removeTooltip(el) {
		$(el).on('focus', function () {
			$(this).css('border-color', '#fff');
			$('.contact__content__form__input--button').removeClass('show-tooltip');
		});
	}

	if (errorEmpty == true) {
		borderColor("input", 0);
		borderColor("input", 1);
		borderColor("input", 2);
		borderColor("textarea", 0);

		tooltip('Wypełnij każde z pól');
	} else if (errorEmail == true) {
		borderColorOnce("#email", '#e53935');

		tooltip('Wpisz poprawny e-mail');
	} else if (errorName == true) {
		borderColorOnce("#name", '#e53935');
		
		tooltip('Wpisz poprawne imię i nazwisko');
	} else {
		$('#name, #email, #topic, #message').val('');
		borderColorOnce("#name, #email, #topic, #message", '#fff');

		tooltip('Wiadomość została wysłana');
		
		$('input').blur();
		$('input, textarea').removeClass('has-value');
	}

	$('#submit').attr('disabled', false);

	removeTooltip("input");
	removeTooltip("textarea");

	$('.contact').on('click', function() {
		$('.contact__content__form__input--button').removeClass('show-tooltip');
	});

</script>