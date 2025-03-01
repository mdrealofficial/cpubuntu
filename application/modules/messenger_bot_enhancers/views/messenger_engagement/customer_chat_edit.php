<style>
	.add_template,.ref_template{font-size: 10px;margin-top:5px}
</style>
<div id="put_script"></div>

<div class="row">
	<div class="col-12">
				<div class="well text-center" style="border:1px solid var(--blue);padding:15px;color:var(--blue);">
                	<?php echo $this->lang->line("Editing customer chat plugin will require to copy new embed code and replace on website again."); ?>
                </div>
                <br>
			 	<form action="#" enctype="multipart/form-data" id="plugin_form">
			 		<input type="hidden" name="hidden_id" id="hidden_id" value="<?php echo $xdata['id'];?>">
				<div class="row">
				  <div class="form-group col-12 col-md-6 d-none">
				    <label>
				       <?php echo $this->lang->line("Select Page"); ?> *
				       <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("select page") ?>" data-content='<?php echo $this->lang->line("Select your Facebook page for which you want to generate the plugin.") ?>'><i class='fas fa-info-circle'></i> </a>
				    </label>
				    <?php $page_info['']= $this->lang->line("Select Page"); ?>
				    <?php echo form_dropdown('page', $page_info,$xdata['page_auto_id'], 'disabled class="form-control select2" id="page" style="width:100%;"' ); ?>                   
				  </div>  
				  <div class="form-group col-12 col-md-6">
				  	<label>
				  	  <?php echo $this->lang->line("Domain"); ?> *
				  	   <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("Domain") ?>" data-content='<?php echo $this->lang->line("Domain where you want to embed this plugin. Domain must have https.") ?>'><i class='fa fa-info-circle'></i> </a>
				  	</label>
				  	<input type="text" readonly name="domain_name" id="domain_name" value="<?php echo $xdata['domain_name']; ?>" class="form-control" placeholder="https://example.com">                                         
				  </div>


				</div>

				<div class="row">
					<div class="form-group col-12 col-md-6">
					  <label>
					    <?php echo $this->lang->line("Language"); ?> 
					     <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("language") ?>" data-content='<?php echo $this->lang->line("Chat plugin will display various elements using this language.") ?>'><i class='fa fa-info-circle'></i> </a>
					  </label>
					  <?php echo form_dropdown('language', $sdk_locale,$xdata['language'],'class="form-control select2" id="language" style="width:100%;"'); ?>                          
					</div> 
					<div class="form-group col-12 col-md-6">
					  <label>
					    <?php echo $this->lang->line("Chat Plugin Loading"); ?> 
					     <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("Chat Plugin Loading") ?>" data-content='<?php echo $this->lang->line("Choose how chat plugin will be loaded") ?>'><i class='fa fa-info-circle'></i> </a>
					  </label>
					  <div class="selectgroup selectgroup-pills">

					  <?php 
					  $i=0;
					  foreach ($load_chatbox as $key => $value) 
					  {
					    $i++;
					    $checked=$selected='';
					    if($key==$xdata['minimized']) 
					    {
					      $selected='default-label';
					      $checked='checked';
					    }
					    $val_print=$value;

					    echo '<label class="selectgroup-item"><input type="radio" class="selectgroup-input" name="minimized" value="'.$key.'" id="minimized'.$i.'" '.$checked.'> 
					     <span class="selectgroup-button">'.$this->lang->line($val_print).'</span>
					    </label>';
					  } 
					  ?>


					  </div>                        
					</div>
				</div> 
				<div class="row">

					<div class="form-group col-12 col-md-4">
					  <label>
					    <?php echo $this->lang->line("Loading delay"); ?> (<?php echo $this->lang->line("Seconds"); ?>)
					     <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("loading delay") ?>" data-content='<?php echo $this->lang->line("plugin will be loaded after few seconds.") ?>'><i class='fa fa-info-circle'></i> </a>
					  </label>
					  <input type="number" name="delay" id="delay" value="<?php echo $xdata['delay'];?>" class="form-control" min="0" step="1">           
					</div>

					<div class="form-group col-12 col-md-4">
					  <label class="margin-bottom-label">
					    <?php echo $this->lang->line("Theme color"); ?> *
					     <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("theme color") ?>" data-content='<?php echo $this->lang->line("The color to use as a theme for the plugin. Supports any color except white. We highly recommend you choose a color that has a high contrast to white. Keep it blank if you want default theme.") ?>'><i class='fa fa-info-circle'></i> </a>
					  </label>
					  <div class="input-group colorpicker-component color-picker-rgb" >
					    <input type="text" class="form-control" name="color" id="color" value="<?php echo $xdata['color'];?>">
					    <div class="input-group-append">
					      <div class="input-group-text">
					      	<span class="input-group-addon"><i></i></span>
					      </div>
					    </div>
					  </div>           
					</div>

					<div class="form-group col-12 col-md-4">
						<label>
							<?php echo $this->lang->line("Do not show if not logged in?"); ?> *
							<a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("Do not show if not logged in?") ?>" data-content='<?php echo $this->lang->line("chat plugin will not be loaded if visitor is not logged in to Facebook.") ?>'><i class='fas fa-info-circle'></i> </a>
						</label>
			
						<div class="selectgroup w-100">
							<label class="selectgroup-item">
								<input type="radio" name="donot_show_if_not_login" value="1" id="donot_show_if_not_login1" class="selectgroup-input" <?php if($xdata["donot_show_if_not_login"]=="1") echo "checked"; ?>>
								<span class="selectgroup-button"> <?php echo $this->lang->line("Yes"); ?></span>
							</label>
							<label class="selectgroup-item">
								<input type="radio" name="donot_show_if_not_login" value="0" id="donot_show_if_not_login2" class="selectgroup-input" <?php if($xdata["donot_show_if_not_login"]=="0") echo "checked"; ?>>
								<span class="selectgroup-button"> <?php echo $this->lang->line("No"); ?></span>
							</label>
						</div>
							

					</div>


				</div> 

				<div class="row">
					<div class="form-group col-12 col-md-6">
						<label>
						  <?php echo $this->lang->line("Greeting text if logged in to facebook"); ?> *
						   <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("Greeting text if logged in") ?>" data-content='<?php echo $this->lang->line("The greeting text that will be displayed if the user is currently logged in to Facebook. Maximum 80 characters.") ?>'><i class='fa fa-info-circle'></i> </a>
						</label>
						<input type="text" name="logged_in" id="logged_in" value="<?php echo $xdata['logged_in'];?>" class="form-control" placeholder="<?php echo $this->lang->line('maximum 80 characters');?>"> 
					</div>
					<div class="form-group col-12 col-md-6">
						<label>
						  <?php echo $this->lang->line("Greeting text if not logged in to facebook"); ?> *
						   <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("Greeting text if not logged in") ?>" data-content='<?php echo $this->lang->line("The greeting text that will be displayed if the user is not logged in to Facebook. Maximum 80 characters.") ?>'><i class='fa fa-info-circle'></i> </a>
						</label>
						<input type="text" name="logged_out" id="logged_out" value="<?php echo $xdata['logged_out'];?>" class="form-control" placeholder="<?php echo $this->lang->line('maximum 80 characters');?>">  
					</div>
				</div>

				<div class="row">
				  <div class="form-group col-12 <?php if(!$this->is_broadcaster_exist) echo 'col-md-6'; else echo 'col-md-5';?>">
				    <label>
				      <?php echo $this->lang->line("OPT-IN inbox confirmation message template"); ?> *
				       <a href="#" data-html="true" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("OPT-IN inbox confirmation message template") ?>" data-content='<?php echo $this->lang->line("This content will be sent to messenger inbox on OPT-IN.") ?> <?php echo $this->lang->line("You must select page to fill this list with data."); ?> <?php echo $this->lang->line("You can create template from ").' <a href="'.base_url("messenger_bot/create_new_template").'">'.$this->lang->line("here.")?></a>'><i class='fa fa-info-circle'></i> </a>
				    </label>
				    <?php echo form_dropdown('template_id',array(), '','class="form-control select2" id="template_id" style="width:100%;"'); ?>
				    <a href="" class="add_template float-left" page_id_add_postback="<?php echo $xdata['page_auto_id'];?>"><i class="fa fa-plus-circle"></i> <?php echo $this->lang->line("Add Template");?></a>
				    <a href="" class="ref_template float-right" page_id_refresh_postback="<?php echo $xdata['page_auto_id'];?>"><i class="fa fa-refresh"></i> <?php echo $this->lang->line("Refresh");?></a>
				  </div>
				  <div class="form-group col-12 <?php if(!$this->is_broadcaster_exist) echo 'col-md-6'; else echo 'col-md-3';?>">
				    <label>
				      <?php echo $this->lang->line("reference"); ?> *
				       <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("reference") ?>" data-content='<?php echo $this->lang->line("put a unique reference to track this plugin later.") ?>'><i class='fa fa-info-circle'></i> </a>
				    </label>
				    <input type="text" name="reference" disabled id="reference" class="form-control" value="<?php echo $xdata['reference'];?>">                 
				  </div>
				  <div class="form-group col-12 col-md-4 <?php if(!$this->is_broadcaster_exist) echo 'hidden';?>">
				    <label class="d-block">
				      <?php echo $this->lang->line("select label"); ?>
				       <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("select label") ?>" data-content='<?php echo $this->lang->line("subscriber obtained from this plugin will be enrolled in these labels.") ?> <?php echo $this->lang->line("You must select page to fill this list with data."); ?>'><i class='fa fa-info-circle'></i> </a>
				       <a class="blue float-right pointer" page_id_for_label="<?php echo $xdata['page_auto_id']; ?>" id="create_label_custom_plugin"><i class="fas fa-plus-circle"></i> <?php echo $this->lang->line("Create Label");?></a>
				    </label>
				    <?php echo form_dropdown('label_ids[]',array(), '','style="height:45px;overflow:hidden;width:100%;" multiple="multiple" class="form-control select2" id="label_ids"'); ?>
				  </div>              
				</div>

				<button class="btn btn-lg btn-primary" id="get_button" name="get_button" type="button"><i class="fas fa-save"></i> <?php echo $this->lang->line("Update Plugin");?></button>
				<a href="<?php echo base_url('messenger_bot_enhancers/customer_chat_plugin_list'); ?>" class="btn btn-lg btn-secondary float-right" ><i class="fa fa-times"></i> <?php echo $this->lang->line("Cancel"); ?></a>

				</form>

	</div>
</div>

<!-- postback template add modal -->
<div class="modal fade" id="add_template_modal" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-plus-circle"></i> <?php echo $this->lang->line('Add Template'); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body"> 
				<iframe src="" frameborder="0" width="100%" onload="resizeIframe(this)"></iframe>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" type="button" class="btn-lg btn btn-dark"><i class="fa fa-refresh"></i> <?php echo $this->lang->line("Close & Refresh List");?></button>
			</div>
		</div>
	</div>
</div>


<script>
	var base_url="<?php echo site_url(); ?>";
	$("document").ready(function()	{
	
		$('.color-picker-rgb').colorpicker({
		                 format: 'hex'
		             });


		$(document).on('change','#page',function(event){
			var page_id=$(this).val();
			var id=$("#hidden_id").val();
			var table_name="messenger_bot_engagement_2way_chat_plugin";
			  $.ajax({
			  type:'POST' ,
			  url: base_url+"messenger_bot_enhancers/get_template_label_dropdown_edit",
			  data: {page_id:page_id,id:id,table_name:table_name},
			  dataType : 'JSON',
			  success:function(response){
			  	
			  	if(page_id == "") {
			  		$("#create_label_custom_plugin,.add_template,.ref_template").css('display','none');
			  		$("#create_label_custom_plugin").attr('page_id_for_label','');
			  		$(".add_template").attr('page_id_add_postback','');
			  		$(".ref_template").attr('page_id_refresh_postback','');
			  	} else {
			  		$("#create_label_custom_plugin,.add_template,.ref_template").css('display','block');
			  		$("#create_label_custom_plugin").attr('page_id_for_label',page_id);
			  		$(".add_template").attr('page_id_add_postback',page_id);
			  		$(".ref_template").attr('page_id_refresh_postback',page_id);
			  	}

			    $("#template_id").html(response.template_option);
			    $("#label_ids").html(response.label_option);
			    $("#put_script").html(response.script);
			  }

			});

		});


		// create an new label and put inside label list
		$(document).on('click','#create_label_custom_plugin',function(e){
		  e.preventDefault();

		  	var page_id=$(this).attr('page_id_for_label');

	  		swal("<?php echo $this->lang->line('Label Name'); ?>", {
		    	content: "input",
		    	button: {text: "<?php echo $this->lang->line('Create'); ?>"},
		  	})
		  	.then((value) => {
		    	var label_name = `${value}`;
			    if(label_name!="" && label_name!='null')
			    {
		      		$("#save_changes").addClass("btn-progress");
			      	$.ajax({
			        	context: this,
			        	type:'POST',
			        	dataType:'JSON',
			        	url:"<?php echo site_url();?>home/common_create_label_and_assign",
			        	data:{page_id:page_id,label_name:label_name},
			        	success:function(response){

			           		$("#save_changes").removeClass("btn-progress");

			           		if(response.error) {
			              		var span = document.createElement("span");
			              		span.innerHTML = response.error;

				              	swal({
				                	icon: 'error',
				                	title: '<?php echo $this->lang->line('Error'); ?>',
				                	content:span,
				              	});

			           		} else {
			              		var newOption = new Option(response.text, response.id, true, true);
			              		$('#label_ids').append(newOption).trigger('change');
			            	}
			        	}
			      	});
			    }
		  	});
		});

		// ===================== add & refresh postback section ====================

		// getting postback list and making iframe
		$('#add_template_modal').on('shown.bs.modal',function(){ 
			var page_id = $(".add_template").attr("page_id_add_postback");
			var iframe_link="<?php echo base_url('messenger_bot/create_new_template/1/');?>"+page_id;
		  	$(this).find('iframe').attr('src',iframe_link); 
		});
		// getting postback list and making iframe

		// add postback template modal
		$(document).on('click','.add_template',function(e){
		    e.preventDefault();

		    var page_id = $(this).attr("page_id_add_postback");
		    if(page_id=="")
		    {
		    	swal('<?php echo $this->lang->line("Error"); ?>', "<?php echo $this->lang->line('Please select a page first')?>", 'error');
		      return false;
		    }
		    $("#add_template_modal").modal();
		});

		$(document).on('click','.ref_template',function(e){
			e.preventDefault();
			var current_val = $("#template_id").val();
			var page_id= $(this).attr("page_id_refresh_postback");

			if(page_id=="")
			{
				swal('<?php echo $this->lang->line("Error"); ?>', "<?php echo $this->lang->line('Please select a page first')?>", 'error');
				return false;
			}

			$.ajax({
				type:'POST' ,
				url: base_url+"home/common_get_postback",
				data: {page_id:page_id},
				success:function(response){
					$("#template_id").html(response).val(current_val);
					$('#template_id').select2({
						width: '100%'
					});
				}
			});
		});

		$('#add_template_modal').on('hidden.bs.modal', function (e) { 
			var current_val = $("#template_id").val();
			var page_id= $(".add_template").attr("page_id_add_postback");
			if(page_id=="")
			{
				swal('<?php echo $this->lang->line("Error"); ?>', "<?php echo $this->lang->line('Please select a page first')?>", 'error');
				return false;
			}
			$.ajax({
				type:'POST' ,
				url: base_url+"home/common_get_postback",
				data: {page_id:page_id},
				success:function(response){
					$("#template_id").html(response);
					$('#template_id').select2({
						width: '100%'
					});
				}
			});
		});

		// ============================ Add & refresh Postback Section ===============================


		$(document).on('click','#get_button',get_button);
		function get_button()
		{        

			var page = $("#page").val();
			var domain_name = $("#domain_name").val();
			var template_id = $("#template_id").val();
			var reference = $("#reference").val();
			var logged_in = $("#logged_in").val();
			var logged_out = $("#logged_out").val();
			if(page=="")
			{
				swal("<?php echo $this->lang->line('Error'); ?>", "<?php echo $this->lang->line('Please select a page.'); ?>", 'error');
				return false;
			}

			if(template_id=='')
			{
				swal("<?php echo $this->lang->line('Error'); ?>", "<?php echo $this->lang->line('Please select OPT-IN inbox confirmation message template.'); ?>", 'error');
				return false;
			}

			if(reference=='')
			{
				swal("<?php echo $this->lang->line('Error'); ?>", "<?php echo $this->lang->line('Please enter an reference.'); ?>", 'error');
				return false;
			}


			if(logged_in.length>80)
			{
			  swal("<?php echo $this->lang->line('Error'); ?>", "<?php echo $this->lang->line('Logged in greeting text can be maximum 80 characters long.') ?>", 'error');
			  return false;
			}

			if(logged_out.length>80)
			{
				swal("<?php echo $this->lang->line('Error'); ?>", "<?php echo $this->lang->line('Logged out greeting text can be maximum 80 characters long.') ?>", 'error');
				return false;
			}

			$('#get_button').addClass('btn-progress');
			var label_ids = $('#label_ids').val();

			var queryString = new FormData($("#plugin_form")[0]);

			if(label_ids == '')
				queryString.append('label_ids[]','');
	
			$.ajax({
				type:'POST' ,
				url: base_url+"messenger_bot_enhancers/customer_chat_edit_action",
				data: queryString,
				dataType : 'JSON',
				// async: false,
				cache: false,
				contentType: false,
				processData: false,
				success:function(response)
				{  
					if(response.status=='1') 
					{
					   
						swal("<?php echo $this->lang->line('Updated Successfully'); ?>", response.message, 'success').then(function() {
							    window.location = base_url+"messenger_bot_enhancers/customer_chat_plugin_list/"+page+'/1';
							});
						$("#get_button").removeClass('btn-progress');
					}
					else 
					{
					    swal("<?php echo $this->lang->line('Error'); ?>", response.message, 'error');
						$("#get_button").removeClass('btn-progress');
					}

				
					
				}

				});

		}

		$('#get_plugin_modal').on('hidden.bs.modal', function () {
		   window.location.href = base_url+"messenger_bot_enhancers/customer_chat_plugin_list";
		});

		$(document).on('click', '#copy_js_code', function(event) {
		  event.preventDefault(); 
		  var copyText = document.getElementById("copy_code");
		  copyText.select();
		  document.execCommand("copy");
		  iziToast.success({
		      title: "",
		      message: "<?php echo $this->lang->line('Copied to clipboard') ?>",
		  });
		  
		});
		$("#page").change();

	});
</script>

<div class="modal fade" role="dialog" id="get_plugin_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo $this->lang->line('Chat plugin embed code'); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div id="response"></div>
						<div class="form-group js_code_con">
							<label for="description"> <?php echo $this->lang->line("Copy the code below and paste inside body tag or at the very last of your webpage.")?> </label>
							<textarea id="copy_code" name="copy_code" class="form-control" spellcheck="false" style="height: 100px!important;"></textarea>
							<br>
							<div class="text-center">
								<a href=""  target="_BLANK" id="wp_plugin" class="btn btn-warning"><i class="fa fa-wordpress"></i> <?php echo $this->lang->line("Download WordPress Plugin to Easy Embed");?></a> 
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button id="copy_js_code" type="button" class="btn btn-primary"><i class="fas fa-cut"></i> <?php echo $this->lang->line('Copy'); ?>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> <?php echo $this->lang->line('Close'); ?></button>
			   </button>
		    </div>
	 </div>
   </div>
</div>

