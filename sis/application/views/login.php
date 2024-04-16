<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<?php include 'includesLogin.php';?>
        <title><?php echo ('Login');?> | <?php echo $system_title;?></title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url();?>template/css/login1.css">
    </head>
	<body class="align">
		<?php if($this->session->flashdata('flash_message') != ""):?>
 		<script>
			$(document).ready(function() {
				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:" "})
			});
		</script>
        <?php endif;?>
        



                        <div id="back">
                        <canvas id="canvas" class="canvas-back"></canvas>
                        <div class="backRight">    
                        </div>
                        <div class="backLeft">
                        </div>
                        </div>

                        <div id="slideBox">
                        <div class="topLayer">
                 
                            <div class="right">
                            <div class="content">
                                <h2>Login</h2>
                                <form id="form-login" method="post">

                                <?php echo form_open('login' , array('class' => 'separate-sections'));?>
                                <div class="box">
                                
                                    <select class="selectt validate[required]" name="login_type" style="width:100%;">
                                        <option value=""><?php echo ('Seleccion Tipo de Cuenta');?></option>
                                        <option value="admin"><?php echo ('Administrador');?></option>
                                        <option value="doctor"><?php echo ('Doctor');?></option>
                                        <option value="patient"><?php echo ('Paciente');?></option>
                                        <option value="nurse"><?php echo ('Enfermera');?></option>
                                        <option value="pharmacist"><?php echo ('Farmacéutico');?></option>
                                        <option value="laboratorist"><?php echo ('Laboratorista');?></option>
                                        <option value="accountant"><?php echo ('Contador');?></option>
                                    </select>
                                
                                </div>
                                <div class="form-element form-stack">
                                    <label for="username-login" class="form-label">Usuario</label>
                                    <input id="username-login" name="email" type="text" placeholder="<?php echo ('Ingresa tu correo electronico');?>">
                                </div>
                                <div class="form-element form-stack">
                                    <label for="password-login" class="form-label">Contraseña</label>
                                    <input id="password-login" name="password" type="password" placeholder="<?php echo ('Ingresa tu contraseña<');?>">
                                </div>
                                <div class="form-element form-submit form__field">
                                    <button type="submit" class="login">
                                        <?php echo ('Ingresar');?>
                                    </button>
                                </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>


        

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
        <script src="<?php echo base_url();?>template/js/login.js"></script>
	</body>
</html>