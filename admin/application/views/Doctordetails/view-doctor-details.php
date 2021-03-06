<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Doctor Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user-md"></i>Home</a></li>
         <li class="active"> Doctor Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
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
         <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"> View Doctor Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                           <th>Doctor Firstnam</th>                                                                             
                           <th>Doctor Lastname</th>                                                                             
                           <th>Gender</th>                                                                             
                           <th>Email</th>                                                                             
                           <th>Language</th>                                                                             
                           <th>Status</th>                                                                             
                           <th width="">Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $doctors) {			 
                           ?>
                        <tr>
                           <td class="hidden"><?php echo $doctors->id; ?></td>
                           <td class="center"><?php echo $doctors->doctor_firstname; ?></td>                         
                           <td class="center"><?php echo $doctors->doctor_lastname; ?></td>
                           <td class="center"><?php echo $doctors->doctor_sex; ?></td>
                           <td class="center"><?php echo $doctors->email; ?></td>
                           <td class="center"><?php echo $doctors->language_name; ?></td>
						   <td><span class="center label  <?php if($doctors->status == '1'){
								echo "label-success";
								}
								else{ 
								echo "label-warning"; 
								}
								?>"><?php if($doctors->status == '1')
								{
								echo "enable";
								}
								else{ 
								echo "disable"; 
								}
								?></span> 				                                                                                            
                           <td class="center">	                         
                              <a class="btn btn-sm bg-olive show-doctordetails"  href="javascript:void(0);"  data-id="<?php echo $doctors->id; ?>">
                              <i class="fa fa-fw fa-eye"></i> View </a>		
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Doctor_ctrl/delete_doctor/<?php echo $doctors->id; ?>" onClick="return doconfirm()">
                              <i class="fa fa-fw fa-trash"></i>Delete</a>	
							 <?php if( $doctors->status){?>
                              <a class="btn btn-sm label-warning" href="<?php echo base_url();?>Doctor_ctrl/doctor_status/<?php echo $doctors->id; ?>"> 
                              <i class="fa fa-folder-open"></i> Disable </a>           
                              <?php
                                 }
                                 else
                                 {
                                 ?>
                              <a class="btn btn-sm label-success" href="<?php echo base_url();?>Doctor_ctrl/doctor_active/<?php echo $doctors->id; ?>"> 
                              <i class="fa fa-folder-o"></i> Enable </a>
                              <?php
                                 }
                                 ?>
                           </td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                            <th class="hidden">ID</th>
                           <th>Doctor Firstnam</th>                                                                             
                           <th>Doctor Lastname</th>                                                                             
                           <th>Gender</th>                                                                             
                           <th>Email</th> 
                           <th>Language</th> 
                           <th>Status</th>    						   
                           <th width="">Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<div class="modal fade modal-wide" id="popup-doctorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Doctor Details</h4>
         </div>
         <div class="modal-doctorbody">
         </div>
         <div class="business_info">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>