<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Hospital Filter 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Hospitalfilter_Translation/view_hospitalfilter"> Hospital Translation </a></li>
         <li class="active">Edit Hospital Filter</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
		 
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
		 <?php 	
				$final_lang = '';
				$textFile = $language_name;
				$location = '../application/language/'.$textFile.'/'.'';
				$lang_directory = directory_map($location, FALSE);	
				if(is_bool($lang_directory ) === false):	
					if(in_array('hospitalfilter_lang.php',$lang_directory)):				
						$final_lang = 'hospitalfilter_lang';
					else:
						$this->load->view('error_trans');
						exit();
					endif;
				else:
					$this->load->view('error_trans');
					exit();
				endif;			
				if($final_lang):	
					$extension = ".php";       					
					include '../application/language/'.''.$textFile.'/'.$final_lang.$extension;
				endif;
				?>
	<form role="form"  method="post" id="hospitalfilter_edit">
	 <input type="hidden" name="created_by" value="<?php echo $id; ?>">
	 <input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
	 <input  type="hidden" name="lang['home_lang']" value="home_lang" >
	 <input  type="hidden" name="lang['login_lang']" value="login_lang" >
	 <input  type="hidden" name="lang['search_lang']" value="search_lang" >
	 <input  type="hidden" name="lang['doctorfilter_lang']" value="doctorfilter_lang" >
	 <input  type="hidden" name="lang['clinicfilter_lang']" value="clinicfilter_lang" >
     <input  type="hidden" name="lang['medicalfilter_lang']" value="medicalfilter_lang" >
	 <input  type="hidden" name="lang['doctorprofile_lang']" value="doctorprofile_lang" >
	 <input  type="hidden" name="lang['hospitalprofile_lang']" value="hospitalprofile_lang" >
	 	 <input  type="hidden" name="lang['clinicprofile_lang']" value="clinicprofile_lang" >
	 <input  type="hidden" name="lang['medicalprofile_lang']" value="medicalprofile_lang" >
	<input  type="hidden" name="lang['hospital_lang']" value="hospital_lang" >
	 <input  type="hidden" name="lang['doctor_lang']" value="doctor_lang" >
	 <input  type="hidden" name="lang['patient_lang']" value="patient_lang" >
	 <input  type="hidden" name="lang['about_lang']" value="about_lang" >
 <input  type="hidden" name="lang['terms_lang']" value="terms_lang" >
         <div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit Hospital Filter</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->               
			   
			    <div class="box-body">                 
                     <div class="col-md-12">
					 <input  name="id"  id="id" class="form-control  required regcom sample" value="<?php echo $textFile; ?>" type="hidden">
					 	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language Name</label>
                             <input class="form-control  required regcom sample" placeholder="Language Name" name="lang['language']"  type="text" value="<?php if(!empty($lang['language'])): echo $lang['language']; endif;?>" >
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                            
					  <input class="form-control  required regcom sample"   placeholder="Page Name" value="hospitalfilter_lang" name="lang['page_name']"  type="hidden">

              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">City</label>
                             <input class="form-control  required regcom sample" placeholder="City"  name="lang['hospitalfilter_slide_A1']" value="<?php if(!empty($lang['hospitalfilter_slide_A1'])): echo $lang['hospitalfilter_slide_A1']; endif;?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
                         <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">select City </label>
                             <input class="form-control  required regcom sample" placeholder="select City" name="lang['hospitalfilter_slide_A2']"  type="text"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A2'])): echo $lang['hospitalfilter_slide_A2']; endif;?>">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty</label>
                            <input type="text" name="lang['hospitalfilter_slide_A3']" placeholder="Specialty" class="form-control required regcom" required="" value="<?php if(!empty($lang['hospitalfilter_slide_A3'])): echo $lang['hospitalfilter_slide_A3']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select specialty</label>
                            <input type="text" name="lang['hospitalfilter_slide_A4']" placeholder="Select specialty" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A4'])): echo $lang['hospitalfilter_slide_A4']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>

             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Insurance</label>
                            <input type="text" name="lang['hospitalfilter_slide_A7']" placeholder="Insurance" class="form-control required regcom"  required="" value="<?php if(!empty($lang['hospitalfilter_slide_A7'])): echo $lang['hospitalfilter_slide_A7']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Insurance </label>
                            <input type="text" name="lang['hospitalfilter_slide_A8']" placeholder="Select Insurance" class="form-control required regcom"  required="" value="<?php if(!empty($lang['hospitalfilter_slide_A8'])): echo $lang['hospitalfilter_slide_A8']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>  
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason</label>
                            <input type="text" name="lang['hospitalfilter_slide_A5']" placeholder="Reason" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A5'])): echo $lang['hospitalfilter_slide_A5']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select reason</label>
                            <input type="text" name="lang['hospitalfilter_slide_A6']" placeholder="Select reason" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A6'])): echo $lang['hospitalfilter_slide_A6']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">  Hospitals  near by You</label>
                            <input type="text" name="lang['hospitalfilter_slide_A12']" placeholder=" Hospitals near by You" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A12'])): echo $lang['hospitalfilter_slide_A12']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
         <!--Home page Tab 3-->
             <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select a Hospital</label>
                            <input type="text" name="lang['hospitalfilter_slide_A13']" placeholder="Select a Hospital" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A13'])): echo $lang['hospitalfilter_slide_A13']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
              <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View </label>
                            <input type="text" name="lang['hospitalfilter_slide_A14']" placeholder="View" class="form-control required regcom"  required=""  value="<?php if(!empty($lang['hospitalfilter_slide_A14'])): echo $lang['hospitalfilter_slide_A14']; endif;?>">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sorry, No records found. Please try with different keywords. </label>
                            <input type="text" name="lang['hospitalfilter_slide_A15']" value="<?php if(!empty($lang['hospitalfilter_slide_A15'])): echo $lang['hospitalfilter_slide_A15']; endif;?>" placeholder="Sorry, No records found. Please try with different keywords. " class="form-control required regcom"  required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 </div>
			</div>
			<div class="box">			
			   <div class="form-group has-feedback">                                       
                    <input type="button" class="btn btn-primary" value="Submit"   id="hospitalfilteredit">
                     <button type="reset" class="btn btn-primary">Reset </button>
               </div> 
            </div>	
            <!-- /.box -->
         </div>
		 </form>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
	<script>
	
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
	
	</script>

    <script type="text/javascript">

</script>
	 