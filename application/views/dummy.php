<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');

  $date= date('D Y-m-d');
  $date2 = date('D Y-m-d', strtotime($date. ' + 1 days'));
  $date3 = date('D Y-m-d', strtotime($date. ' + 2 days'));
?>

<div class="evt-br-doc" id="evt-br-doc_<?php echo $id; ?>">
				 <div class="date-head">
					<div class="previouscalapp" id="<?php echo $id; ?>" data-date="<?php echo $date;?>" data-selected="true" data-div="evt-br-doc_<?php echo $id; ?>">
				<img id="previouscalapp" src="<?php echo base_url(); ?>assets/images/career/cal-left.png" />
				</div>
				<div class="dttime">
                        <ul>
						<div class="dttime-list">
                            <li> <h5><?php echo strftime('%a, %d-%m-%y', strtotime($date)); ?></h5>
                                
                            </li>
							</div>
						<div class="dttime-list">
                            <li> <h5><?php echo strftime('%a, %d-%m-%y', strtotime($date2));  ?></h5>
                                
                            </li>
							</div>
						<div class="dttime-list">	
                            <li> <h5><?php echo strftime('%a, %d-%m-%y', strtotime($date3)); ?></h5>
                                
                            </li>
							</div>
                        </ul>
						</div>
						<div class="nextcalapp" id="<?php echo $id; ?>" data-selected="true"  data-date="<?php echo $date;?>" data-div="evt-br-doc_<?php echo $id; ?>" >
					<img id="nextcalapp" src="<?php echo base_url(); ?>assets/images/career/cal-right.png" />
				</div>
                        <div class="clearfix"></div>
                    </div>
					
                    <?php //calendar_html(); 
					//$currDate = date('Y-m-d');			
		//$days=array('mon','tue','wed','thu','fri','sat','sun');		
        	
		$date= date('Y-m-d');
		$Day = date('D');
		$s = base_url();
					foreach ($result as $key => $value) { ?>
        <!--  <input type="hidden" class="currentDate_<?php //echo $id; ?>"  value="<?php //echo $date; ?>">--> 						
					<?php echo calendar_html($value,3,$Day,$date,$s,$key);
					}
					?>
				
				 </div>
				 