<div class="container-fluid padded adentroPa adentroPa adentroPaGra">


	<div class="row-fluid">

        <div class="span30">

            <!-- find me in partials/action_nav_normal -->

            <!--big normal buttons-->

            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button panelInfo colorrr">
                        <a class="darkk" href="<?php echo base_url();?>index.php?admin/manage_doctor">
                            <span class="tituloPeque"><?php echo ('Doctor');?></span>                     
                            <i class="icon-user-md iconPanel darkk"></i>
                            <h4 class="green TituleNumber darkk">
                                <?php echo $this->db->count_all_results('doctor');?>
                            </h4>
                        </a>
                    </div>

                    <div class="span2 action-nav-button panelInfo colorrr">

                        <a class="darkk" href="<?php echo base_url();?>index.php?admin/manage_patient">

                        <span class="tituloPeque"><?php echo ('Paciente');?></span>
                        <i class="icon-user iconPanel darkk"></i>

                        <h4  class="green darkk TituleNumber">
                                <?php echo $this->db->count_all_results('patient');?>
                            </h4>
                        </a>
                    </div>

                    <div class="span2 action-nav-button panelInfo colorrr">

                        <a href="<?php echo base_url();?>index.php?admin/manage_nurse">

                        <span class="tituloPeque"><?php echo ('Enfermera');?></span>
                        <i class="icon-plus-sign-alt iconPanel darkk"></i>

                        <h4 class="green TituleNumber darkk">
                        <?php echo $this->db->count_all_results('nurse');?>
                            </h4>
                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo colorrr">

                        <a href="<?php echo base_url();?>index.php?admin/manage_pharmacist">

                        <span class="tituloPeque"><?php echo ('Farmaceutico');?></span>
                        <i class="icon-medkit iconPanel"></i>

                        <h4 class="green TituleNumber">
                        <?php echo $this->db->count_all_results('pharmacist');?>
                            </h4>
                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo colorrr">

                        <a href="<?php echo base_url();?>index.php?admin/manage_laboratorist">

                        <span class="tituloPeque"><?php echo ('Laboratorista');?></span>
                        <i class="icon-beaker iconPanel"></i>

                        <h4 class="green TituleNumber">
                        <?php echo $this->db->count_all_results('laboratorist');?>
                            </h4>
                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo colorrr">

                        <a href="<?php echo base_url();?>index.php?admin/manage_accountant">

                        <span class="tituloPeque"><?php echo ('Contador');?></span>
                        <i class="icon-money iconPanel"></i>

                        <h4 class="green TituleNumber">
                        <?php echo $this->db->count_all_results('accountant');?>
                            </h4>
                        </a>

                    </div>

                </div>

                

            </div>

        </div>

        <!---DASHBOARD MENU BAR ENDS HERE-->

    </div>    
</div>





    <div class="container-fluid padded adentroPa adentroPa">


    <div class="row-fluid">

    

    	<!-----Citas del Calendario STARTS-->

        <div class="span6 span87">

            <div class="box">

                <div class="box-header boxHeaderCalendar">

                    <div class="title">

                        <i class="icon-calendar"></i>
                        <span class="calendario">
                        <?php echo ('Citas del Calendario');?>
                        </span> 

                    </div>

                </div>

                <div class="box-content">

                    <div id="schedule_calendar">

                    </div>

                </div>

            </div>

        </div>

    	<!-----Citas del Calendario ENDS-->

        

    	<!-----NOTICEBOARD LIST STARTS-->

        <div class="span6">

            <div class="box">

                <div class="box-header boxHeaderCalendar">

                    <span class="title">

                        <i class="icon-reorder reorderrr"></i> <?php echo ('Anuncios');?>

                    </span>

                </div>

                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">

                

                    <?php 

					$this->db->order_by('create_timestamp' , 'desc');

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

                    <div class="box-section news with-icons">

                        <div class="avatar blue">

                            <i class="icon-tag icon-2x"></i>

                        </div>

                        <div class="news-time">

                            <span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>

                        </div>

                        <div class="news-content">

                            <div class="news-title">

                                <?php echo $row['notice_title'];?>

                            </div>

                            <div class="news-text">

                                 <?php echo $row['notice'];?>

                            </div>

                        </div>

                    </div>

                    <?php endforeach;?>

                </div>

            </div>

        </div>

    	<!-----NOTICEBOARD LIST ENDS-->

    </div>

</div>


<div class="container-fluid padded adentroPa adentroPa">
<div class="row-fluid">

<div class="span30">

    <!-- find me in partials/action_nav_normal -->

    <!--big normal buttons-->

    <div class="action-nav-normal">

<div class="row-fluid">

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_appointment">

                        <i class="icon-exchange"></i>

                        <span><?php echo ('Citas');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_payment">

                        <i class="icon-credit-card"></i>

                        <span><?php echo ('Pagos');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_blood_bank">

                        <i class="icon-tint"></i>

                        <span><?php echo ('Banco de Sangre');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_medicine">

                        <i class="icon-medkit"></i>

                        <span><?php echo ('Medicamento');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/operation">

                        <i class="icon-reorder"></i>

                        <span><?php echo ('Informe de operación');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/birth">

                        <i class="icon-github-alt"></i>

                        <span><?php echo ('Informe de nacimiento');?></span>

                        </a>

                    </div>

                </div>

                <div class="row-fluid">

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/death">

                        <i class="icon-minus-sign"></i>

                        <span><?php echo ('Informe de defunción');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/view_bed_status">

                        <i class="icon-hdd"></i>

                        <span><?php echo ('Asignación de camas');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/manage_noticeboard">

                        <i class="icon-columns"></i>

                        <span><?php echo ('Anuncios');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/system_settings">

                        <i class="icon-h-sign"></i>

                        <span><?php echo ('Ajustes');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/manage_language">

                        <i class="icon-globe"></i>

                        <span><?php echo ('Lenguaje');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?admin/backup_restore">

                        <i class="icon-download-alt"></i>

                        <span><?php echo ('Backup');?></span>

                        </a>

                    </div>

                </div>  </div> </div>  </div>   </div>
  

  

  <script>

  $(document).ready(function() {



    // page is now ready, initialize the calendar...



    $("#schedule_calendar").fullCalendar({

            header: {

                left: "prev,next",

                center: "title",

                right: "month,agendaWeek,agendaDay"

            },

            editable: 0,

            droppable: 0,

            events: [

					<?php 

					

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

					{

						title: "<?php echo $row['notice_title'];?>",

						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>