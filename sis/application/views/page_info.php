        <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                    
                    <h3 class="TituloHe">
                        
                        Bienvenid@
                        <span class="doctornameco">
                       <?php 

                        $account_type	=	$this->session->userdata('login_type');

                        $account_id		=	$account_type.'_id';

                        $name			=	$this->crud_model->get_type_name_by_id($account_type , $this->session->userdata($account_id) , 'name');

                        echo $name;

                        ?>
                        </span>
                       <image src="<?php echo base_url();?>uploads/hi.png" whith="30px"></image>
                       </h3>

                      
                    </div>
                    <ul class="inline pull-right sparkline-box">



                        <li>
                            

				<ul class="nav pull-right ">

<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

</ul>

<div class="nav-collapse nav-collapse-top collapse">

<ul class="nav pull-right cerrarses">

    <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ('Cuenta');?> <b class="caret"></b></a>

    <!-- Account Selector -->

    <ul class="dropdown-menu">

        <li class="with-image">

            <span>

            <?php 

                $account_type	=	$this->session->userdata('login_type');

                $account_id		=	$account_type.'_id';

                $name			=	$this->crud_model->get_type_name_by_id($account_type , $this->session->userdata($account_id) , 'name');

                echo $name;

            ?>

            </span>

        </li>

        <li class="divider"></li>

        <li><a href="<?php echo base_url();?>index.php?<?php echo $this->session->userdata('login_type');?>/manage_profile">

                <i class="icon-user"></i><span><?php echo ('Perfil');?></span></a></li>

        <li><a href="<?php echo base_url();?>index.php?login/logout">

                <i class="icon-off"></i><span><?php echo ('Cerrar Sesion');?></span></a></li>

    </ul>

    <!-- Account Selector -->

    </li>

</ul>



</div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        
        <!--------FLASH MESSAGES--->
        
		<!--<?php if($this->session->flashdata('flash_message') != ""):?>
        <div class="container-fluid padded">
        	<div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo $this->session->flashdata('flash_message');?>
            </div>
        </div>
        <?php endif;?>-->
        
        
        <?php if($this->session->flashdata('flash_message') != ""):?>
 		<script>
			$(document).ready(function() {
				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:""})
			});
		</script>
        <?php endif;?>