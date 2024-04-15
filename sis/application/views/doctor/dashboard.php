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

        <div class="span30">

            <!-- find me in partials/action_nav_normal -->

            <!--big normal buttons-->

            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/manage_patient">

                        <i class="icon-user"></i>

                        <span><?php echo ('Patient');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/manage_appointment">

                        <i class="icon-exchange"></i>

                        <span><?php echo ('Appointment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/manage_prescription">

                        <i class="icon-stethoscope"></i>

                        <span><?php echo ('Prescription');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/view_bed_status">

                        <i class="icon-hdd"></i>

                        <span><?php echo ('Bed Allotment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/view_blood_bank">

                        <i class="icon-tint"></i>

                        <span><?php echo ('Blood Bank');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button panelInfo">

                        <a href="<?php echo base_url();?>index.php?doctor/manage_report">

                        <i class="icon-hospital"></i>

                        <span><?php echo ('Manage Report');?></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!---DASHBOARD MENU BAR ENDS HERE-->

    </div></div>

    <div class="container-fluid padded adentroPa adentroPa">

    <div class="row-fluid">

    

    	<!-----Citas del Calendario STARTS-->

        <div class="span6 span87">

            <div class="box">

                <div class="box-header boxHeaderCalendar">

                    <div class="title">

                        <i class="icon-calendar"></i> <?php echo ('Citas del Calendario');?>

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



  

  <script>

  $(document).ready(function() {



    // page is now ready, initialize the calendar...



    $("#schedule_calendar").fullCalendar({

            header: {

                left: 	"prev,next",

                center: "title",

                right: 	"month,agendaWeek,agendaDay"

            },

            editable: 0,

            droppable: 0,

            events: [

					<?php 

                    $appointments	=	$this->db->get_where('appointment' , array('doctor_id' => $this->session->userdata('doctor_id')))->result_array();

                    foreach($appointments as $row):

                    ?>

					{

						title: "<?php echo ('Appointment').' : '.$this->crud_model->get_type_name_by_id('patient' ,$row['patient_id'], 'name' );?>",

						start: new Date(<?php echo date('Y',$row['appointment_timestamp']);?>, <?php echo date('m',$row['appointment_timestamp'])-1;?>, <?php echo date('d',$row['appointment_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['appointment_timestamp']);?>, <?php echo date('m',$row['appointment_timestamp'])-1;?>, <?php echo date('d',$row['appointment_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>