jQuery(document).ready( function ($) {


	$('#get_quotation').on('click',function(e){
		e.preventDefault();
		var full_name  = $('#full_name').val();
		var email     = $('#email').val();
		var phone     = $('#phone').val();
		var service   = $('#service').val();
		var sending_by = $('[name="sending_by"]:checked').val();
		var message   = $('#message').val();

	
		var fz_data = {action: "send_home_message", full_name, email, phone, service, sending_by, message, nonce };
		console.log(fz_data);
		jQuery.ajax({
			type: "post",
			dataType: "json",
			url: ajax_url ,
			data: fz_data,
			success: function(response) {
			  if(response.type == "success") {
			    $('.message.alert.alert-success').html(response.data);
			    $('.message.alert.alert-success').css('display','block');
		      	$('.message.alert.alert-success').fadeIn(400, () => {
			       $('.Quotation').fadeOut(400);
		      	});
			  }
			}
		});
	});
});