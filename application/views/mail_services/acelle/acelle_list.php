<style>
	.tickets-list:last-child .ticket-item { border-bottom:1px solid #dee2e6 !important; }
	.tickets-list:first-child .ticket-item { border-top:0 !important; }
</style>
<section class="section section_custom">
	<div class="section-header">
		<h1><i class="fas fa-box-open"></i> <?php echo $this->lang->line("Acelle Integration"); ?></h1>
		
		<div class="section-header-button">
			<a class="btn btn-primary add_connector" id="add_feed" href="#" data-target="#acelle-integration-modal" data-toggle="modal">
				<i class="fas fa-plus-circle"></i> <?= $this->lang->line('Add Account') ?>
			</a> 
		</div>

		<div class="section-header-breadcrumb">
		  <div class="breadcrumb-item active"><a href="<?php echo base_url('integration'); ?>"><?php echo $this->lang->line("Integration"); ?></a></div>
		  <div class="breadcrumb-item"><?php echo $page_title; ?></div>
		</div>
	</div>
	<div class="section-body">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body data-card">
						<div class="table-responsive">
							<table id="acelle-datatable" class="table table-bordered" style="width:100%">
						        <thead>
						            <tr>
						                <th>#</th>
						                <th><?php echo $this->lang->line("Tracking name"); ?></th>
						                <th><?php echo $this->lang->line("API URL"); ?></th>
						                <th><?php echo $this->lang->line("API Key"); ?></th>
						                <th><?php echo $this->lang->line("Created At"); ?></th>
						                <th><?php echo $this->lang->line("Actions"); ?></th>
						            </tr>
						        </thead>
						    </table>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="acelle-integration-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus-circle"></i> Acelle - <?= $this->lang->line('Add Account') ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">               
                	<span aria-hidden="true">×</span>          
                </button>           
            </div>
            <div class="modal-body">
                <form class="" id="acelle-integration-form">
                    <div class="form-group">
                        <label><?= $this->lang->line('Tracking Name') ?></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-tag"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="tracking-name" name="tracking-name" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?= $this->lang->line('API URL') ?></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="api-url" name="api-url" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?= $this->lang->line('API Key') ?></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="api-key" name="api-key" autocomplete="off">
                        </div>
                    </div>
                
		            <div class="mt-5">           
		            	<button type="submit" class="btn btn-primary btn-shadow btn-lg float-left" id="acelle-submit-button"><i class="fas fa-save"></i> <?= $this->lang->line('Save') ?></button>
		            	<button type="button" class="btn btn-lg btn-secondary btn-shadow float-right" data-dismiss="modal"><i class="fas fa-times"></i> <?= $this->lang->line('Cancel') ?></button>
		            </div>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="acelle-details-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document" style="min-width:40%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-list"></i> Acelle - <?= $this->lang->line('Account Details') ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">               
                	<span aria-hidden="true">×</span>          
                </button>           
            </div>
            <div class="modal-body">
				<div class="card">
				    <div class="card-header bg-primary">
				        <h4 id="display-tracking-name" class="text-white"><?php echo $this->lang->line('Test Account'); ?></h4>
				    </div>
				    <div class="card-body p-0">
				        <div id="acelle-list-group" class="list-group">
				        </div>
				    </div>
				</div>
            	<div id="detail-first-view">
            		<div class="first-view-spinner">
            			<i class="fa fa-spinner fa-spin fa-2x blue"></i>
            		</div>	
            	</div>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function() {
		var perscroll1;
		var data_table = $('#acelle-datatable').DataTable({
	      	processing: true,
	      	serverSide: true,
	      	bFilter: true,
			order: [[ 0, "desc" ]],
			pageLength: 10,	        
	        ajax: {
	        	url: '<?= base_url('email_auto_responder_integration/acelle_grid_data') ?>',
	        	type: 'POST'
	        },
	        columns: [
			    {data: 'id'},
			    {data: 'tracking_name'},
			    {data: 'api_url'},
			    {data: 'api_key'},
			    {data: 'inserted_at'},
			    {data: 'actions'}
			],
			language: {
        		url: "<?= base_url('assets/modules/datatables/language/'.$this->language.'.json'); ?>"
  			},
      		columnDefs: [
				{ "sortable": false, "targets": [0,1,2,3,5] },
				{
				    targets: [0],
				    visible: false
				},
				{
					targets:[4,5],
					className:'text-center'
				}
			],
			dom: '<"top"f>rt<"bottom"lip><"clear">',
			fnInitComplete:function(){  // when initialization is completed then apply scroll plugin
			  if(areWeUsingScroll)
			  {
			    if (perscroll1) perscroll1.destroy();
			    perscroll1 = new PerfectScrollbar('#acelle-datatable_wrapper .dataTables_scrollBody');
			  }
			},
			scrollX: 'auto',
			fnDrawCallback: function( oSettings ) { //on paginition page 2,3.. often scroll shown, so reset it and assign it again 
			  if(areWeUsingScroll)
			  { 
			    if (perscroll1) perscroll1.destroy();
			    perscroll1 = new PerfectScrollbar('#acelle-datatable_wrapper .dataTables_scrollBody');
			  }
			}
		});		

		$(document).on('submit', '#acelle-integration-form', function(event) {
			event.preventDefault();
			
			var submit_button = $('#acelle-submit-button');

			// Enables spinner
			submit_button[0].classList.remove('disabled', 'btn-progress');
			submit_button[0].classList.add('disabled', 'btn-progress');

			var form_data = {
				api_url: $('#api-url').val(),
				api_key: $('#api-key').val(),
				tracking_name: $('#tracking-name').val()
			};

			$.ajax({
				method: 'POST',
				dataType: 'JSON',
				data: form_data,
				url: '<?= base_url('email_auto_responder_integration/acelle_add') ?>',
				success: function(response) {

					if (true === response.error) {
						swal({
							title: 'Error!',
							text: response.message,
							icon: 'error'
						});

						// Enables spinner
						submit_button[0].classList.remove('disabled', 'btn-progress');
					}

					if (true === response.success) {
						swal({
							title: 'Success!',
							text: response.message,
							icon: 'success'
						});

						// Resets form and toggle modal
						$('#acelle-integration-form')[0].reset();
						$('#acelle-integration-modal').modal('toggle');

						// Enables spinner
						submit_button[0].classList.remove('disabled', 'btn-progress');

						// Reloads datatable
						data_table.ajax.reload();
					}
				},
				error: function(xhr, status, error) {
					swal({
						title: 'Error!',
						text: error,
						icon: 'error'
					});
				}
			});	
		});		

		$(document).on('click', '#acelle-details-button', function(event) {
			event.preventDefault();
			
			var tracking_id = $(this).data('tracking-id'),
				modal = $('#acelle-details-modal'),
				spinner = $('#detail-first-view');

			// Opens up modal
			modal.modal();

			$.ajax({
				method: 'POST',
				dataType: 'JSON',
				data: { tracking_id },
				url: '<?= base_url('email_auto_responder_integration/acelle_details') ?>',
				success: function(response) {

					if (true === response.error) {

						// Hides spinner
						spinner.hide();

						swal({
							title: 'Error!',
							text: response.message,
							icon: 'error'
						});
						return;
					}

					if (Array.isArray(response)) {
						var str = '',
							tracking_name = '';
						response.forEach(item => {

				        str += '<div class="tickets-list"><a href="#" class="ticket-item list-group-item-action border border-bottom-0"><div class="ticket-title mb-3"><h4 class="text-primary"><small class="float-right text-muted" style="font-size:12px;">'+ item.inserted_at +'</small>' + item.list_name + '</h4></div><div class="row"><div class="col-12 col-md-6"><div class="ticket-info float-left"><div><?php echo $this->lang->line("UID"); ?></div><div class="bullet"></div><div class="text-primary">'+ item.list_id +'</div></div></div></div></a></div>';

				            tracking_name = item.tracking_name;
						});
						
						// Hides spinner
						spinner.hide();
						$('#display-tracking-name').text(tracking_name);
						$('#acelle-list-group').html(str);
					}
				},
				error: function(xhr, status, error) {

					// Hides spinner
					spinner.hide();

					swal({
						title: 'Error!',
						text: error,
						icon: 'error'
					});
				}
			});	
		});		

		$(document).on('click', '#acelle-delete-button', function(event) {
			event.preventDefault();
			
			var tracking_id = $(this).data('tracking-id');

			swal({
				title: 'Warning!',
				text: '<?= $this->lang->line('Are you sure you want to delete this account?') ?>',
				icon: 'warning',
				buttons: true,
				dangerMode: true,
			}).then( yes => {
				if (yes) {
					$.ajax({
						method: 'POST',
						dataType: 'JSON',
						data: { tracking_id },
						url: '<?= base_url('email_auto_responder_integration/acelle_delete') ?>',
						success: function(response) {
							if (true === response.error) {
								iziToast.error({
									title: '<?php echo $this->lang->line("Error"); ?>',
									message: response.message,
									position: 'bottomRight'
								});
							}

							if (true === response.success) {
								iziToast.success({
									title: '<?php echo $this->lang->line("Success"); ?>',
									message: response.message,
									position: 'bottomRight'
								});
								
								// Reloads datatable
								data_table.ajax.reload();
							}
						},
						error: function(xhr, status, error) {
							console.log(error);
							swal({
								title: 'Error!',
								text: error,
								icon: 'error'
							});
						}
					});
				} else {
					return;
				}
			});
		});

		$(document).on('click', '#acelle-refresh-button', function(event) {
			event.preventDefault();
			
			var user_id = $(this).data('user-id');
			var tracking_id = $(this).data('tracking-id');

			swal({
				title: 'Warning!',
				text: '<?= $this->lang->line('Are you sure you want to refresh this account?') ?>',
				icon: 'warning',
				buttons: true,
				dangerMode: true,
			}).then( yes => {
				if (yes) {
					// Adds spinner
					$(this).removeClass('btn-outline-primary disabled btn-progress');
					$(this).addClass('disabled btn-progress bg-primary');

					$.ajax({
						method: 'POST',
						dataType: 'JSON',
						data: { tracking_id, user_id },
						url: '<?= base_url('email_auto_responder_integration/acelle_refresh') ?>',
						success: function(response) {
							if (true === response.error) {
								// Removes spinner
								$(this).addClass('btn-outline-primary');
								$(this).removeClass('disabled btn-progress bg-primary');

								iziToast.error({
									title: '<?php echo $this->lang->line("Error"); ?>',
									message: response.message,
									position: 'bottomRight'
								});
							}

							if (true === response.success) {
								// Removdes spinner
								$(this).addClass('btn-outline-primary');
								$(this).removeClass('disabled btn-progress bg-primary');
								
								iziToast.success({
									title: '<?php echo $this->lang->line("Success"); ?>',
									message: response.message,
									position: 'bottomRight'
								});
								
								// Reloads datatable
								data_table.ajax.reload();
							}
						},
						error: function(xhr, status, error) {
							// Removes spinner
								$(this).addClass('btn-outline-primary');
								$(this).removeClass('disabled btn-progress bg-primary');

							swal({
								title: 'Error!',
								text: error,
								icon: 'error'
							});
						}
					});
				} else {
					return;
				}
			});
		});		
	});
</script>