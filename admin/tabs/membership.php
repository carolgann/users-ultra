<?php
global $xoouserultra;
$currency_symbol =  $xoouserultra->get_option('paid_membership_symbol');
?>
        
        <div class="user-ultra-sect ">
        
        <h3>Membership Packages</h3>
        
        <p>
        <a href="#" class="button-primary uultra-add-new-package" ><?php _e('Add New Plan','xoousers'); ?></a>
        </p>
        
        <div class="user-ultra-success uultra-notification"><?php _e('Sucess ','xoousers'); ?></div>
        
        <div class="user-ultra-sect-second user-ultra-rounded" id="uultra-add-package">
        
         <h3>Add New Membership Package</h3>
         
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td width="24%">Name:</td>
             <td width="76%"><input type="text" id="p_name"  /></td>
           </tr>
           <tr>
             <td>Description:</td>
             <td> <textarea  cols=""  name="p_desc" id="p_desc" style="height:80px; width:50%;"></textarea></td>
           </tr>
           <tr>
             <td>Price:</td>
             <td><input type="text" name="p_price" id="p_price" /></td>
           </tr>
           <tr>
             <td>Every:</td>
             <td>
             <select name="p_every" id="p_every">
             <option value="1" selected="selected">1</option>
              <?php
			  
			  $i = 2;
              
			  while($i <=12){
			  ?>
              
                 <option value="<?php echo $i?>"><?php echo $i?></option>
               
               
               <?php 
			    $i++;
			   }?>
             </select></td>
           </tr>
           <tr>
             <td>Billing Period:</td>
             <td><label for="p_period"></label>
               <select name="p_period" id="p_period">
                 <option value="M">Months</option>
                 <option value="W">Weeks</option>
                 <option value="D">Days</option>
                  <option value="Y">Years</option>
               </select></td>
           </tr>
           <tr>
             <td>Type:</td>
             <td><select name="p_type" id="p_type">
               <option value="recurring" selected="selected">Recurring</option>
               <option value="onetime">One-Time</option>
             </select></td>
           </tr>
           <tr>
             <td>Requires Admin Moderation:</td>
             <td><select name="p_moderation" id="p_moderation">
               <option value="yes">Yes</option>
               <option value="no" selected="selected">No</option>
             </select></td>
           </tr>
          </table>
          
          
          
          <p>
          <a href="#" class="button uultra-close-new-package" ><?php _e('Cancel','xoousers'); ?></a>
           <a href="#" class="button-primary uultra-add-new-package-confirm" ><?php _e('Confirm','xoousers'); ?></a>
        </p>
        </div>
        
        <div id="usersultra-data_list">
        
        <?php echo _e('loading ...','xoousers'); ?>
        
        </div>
        


        
        
        
        
        </div>
        
         <script type="text/javascript">
		  
		 var package_error_message_name = "<?php _e('Please, input a name ','xoousers'); ?>";
		 var package_error_message_desc = "";
		 var package_error_message_price = "";
		  var package_confirmation = "";
		 
		 </script>
         
          <script type="text/javascript">
				jQuery(document).ready(function($){
               
					   $.post(ajaxurl, {
									action: 'get_packages_ajax'
									
									}, function (response){									
																
									$("#usersultra-data_list").html(response);
									
														
							});
							
					
				});
                    
                 </script>
        
        
        
         <h3>&nbsp;</h3>
