<div class="container contenedorDonto">
            <div class="span4 offset4">
                <div class="padded grid">
                    <center>
                        <!-- <img src="<?php echo base_url();?>uploads/cdhsp.png" style="height:80px;" /> -->
                        <h4 class="tituloL"></h4>
                    </center>
                    <div class="login box form login        " style="margin-top: 10px;">
        
                        <div class="box-content padded">
                        <i class="m-icon-swapright m-icon-white"></i>
                        	<?php echo form_open('login' , array('class' => 'separate-sections'));?>
                                <div class="">
                                <label class="select">
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
                                </label>
                                </div>

                                <div class="form__field">
                                    <label for="login__username"><svg class="icon">
                                    <use xlink:href="#icon-user"></use>
                                    </svg><span class="hidden">Username</span></label>
                                    <input class="form__input" name="email" type="text" placeholder="<?php echo ('Correo Electronico');?>">
                                </div>
                                <div class="form__field">
                                    <label for="login__password"><svg class="icon">
                                    <use xlink:href="#icon-lock"></use>
                                    </svg><span class="hidden">Password</span></label>
                                    <input class="form__input" name="password" type="password" placeholder="<?php echo ('Contraseña');?>">
                                </div>
                                <div class="form__field">
                                    <button type="submit" class="btn btn-Donto" >
                                        <?php echo ('Ingresar');?>
                                    </button>
                                </div>

                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                                    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                                    <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
                                    </symbol>
                                    <symbol id="icon-lock" viewBox="0 0 1792 1792">
                                    <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
                                    </symbol>
                                    <symbol id="icon-user" viewBox="0 0 1792 1792">
                                    <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
                                    </symbol>
                                </svg>
                            <?php echo form_close();?>
                            <div>
                                <a  data-toggle="modal" href="#modal-simple" class="text">
                                    <?php echo ('Olvidaste tu Contraseña?');?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                
        <!-----------password reset form ------>
        <div id="modal-simple" class="modal hide fade">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h6 id="modal-tablesLabel"><?php echo ('Reset Password');?></h6>
          </div>
          <div class="modal-body">
            <?php echo form_open('login/reset_password');?>
            	<select class="validate[required]" name="account_type"  style="margin-bottom: 0px !important;">
                    <option value=""><?php echo ('Account Type');?></option>
                    <option value="admin"><?php echo ('Admin');?></option>
                    <option value="doctor"><?php echo ('Doctor');?></option>
                    <option value="patient"><?php echo ('Patient');?></option>
                    <option value="nurse"><?php echo ('Nurse');?></option>
                    <option value="pharmacist"><?php echo ('Pharmacist');?></option>
                    <option value="laboratorist"><?php echo ('Laboratorist');?></option>
                    <option value="accountant"><?php echo ('Accountant');?></option>
                </select>
                <input type="email" name="email"  placeholder="<?php echo ('Email');?>"  style="margin-bottom: 0px !important;"/>
                <input type="submit" value="<?php echo ('Reset');?>"  class="btn btn-blue btn-medium"/>
            <?php echo form_close();?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
        <!-----------password reset form ------>





        header.php 

        <ul class="nav pull-right">

<li class="dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ('Select Language');?><b class="caret"></b></a>


</li>

</ul>
        					<!-- Language Selector -->

                            <ul class="dropdown-menu">

<?php

$fields = $this->db->list_fields('language');

foreach ($fields as $field)

{

    if($field == 'phrase_id' || $field == 'phrase')continue;

    ?>

        <li>

            <a href="<?php echo base_url();?>index.php?multilanguage/select_language/<?php echo $field;?>">

                <?php echo $field;?>

                <?php //selecting current language

                    if($this->session->userdata('current_language') == $field):?>

                        <i class="icon-ok"></i>

                <?php endif;?>

            </a>

        </li>

    <?php

}

?>

</ul>

<!-- Language Selector -->
