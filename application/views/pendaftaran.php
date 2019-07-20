<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
    

  
      <link rel="stylesheet" href="<?php echo base_url('assets/pendaftaran/css/style.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/pendaftaran/css/normalize.min.css')?>">

  
</head>

<body>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href="<?php echo base_url('assets/pendaftaran/css/css.css')?>" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="<?php echo base_url('proses_pendaftaran/register')?>" method="post" id="registerForm">
      
        <h1>Sign Up</h1>
        <div id="messages"></div>
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          
          <label for="mail">Username:</label>
          <input type="text" id="username" name="username">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">

        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="name">Name:</label>
          <input type="text" id="nama" name="nama">

          <label for="name">Nik:</label>
          <input type="text" id="nik" name="nik">

          <label for="name">No Hp:</label>
          <input type="text" id="no_hp" name="no_hp">

          <label>Jenis Kelamin:</label>
          <input type="radio" id="Laki-Laki" value="Laki-Laki" name="gender"><label for="under_13" class="light">Laki-Laki</label><br>
          <input type="radio" id="Perempuan" value="Perempuan" name="gender"><label for="over_13" class="light">Perempuan</label>
        </fieldset>
        <p></p>
        <button type="submit">Sign Up</button>
        <p>Sudah Punya Akun? <a href="<?php echo base_url()?>">Login</a></p>
      </form>

      <script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>

      <script type="text/javascript" src="<?php echo base_url()?>custom/js/register.js"></script>
      <script>
      $(document).ready(function() {
	$("#registerForm").unbind('submit').bind('submit', function() {
		var form = $(this);

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(),
			dataType: 'json',
			success:function(response) {				
				if(response.success == true) {
					$("#messages").html('<div>'+
					  ''+
					  response.messages+
					'</div>');

					$("#registerForm")[0].reset();
					$(".text-danger").remove();
					$(".form-group").removeClass('has-error').removeClass('has-success');

				}
				else {
					$.each(response.messages, function(index, value) {
						var element = $("#"+index);

						$(element)
						.closest('.form-group')
						.removeClass('has-error')
						.removeClass('has-success')
						.addClass(value.length > 0 ? 'has-error' : 'has-success')
						.find('.text-danger').remove();

						$(element).after(value);

					});
				}
			} // /success
		});	 // /ajax

		return false;
	});	
});
      </script>
    </body>
</html>
  
  

</body>

</html>
