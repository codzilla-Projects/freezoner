<?php 
function fz_ajax_header(){
  echo '<script>  var ajax_url="'.admin_url('admin-ajax.php' ).'"; var nonce = "'.wp_create_nonce("freezoner_nonce").'";</script>';
}
add_action('wp_head','fz_ajax_header' );


add_action('wp_ajax_nopriv_send_home_message', 'fz_send_home_message');
add_action('wp_ajax_send_home_message', 'fz_send_home_message');

function fz_send_home_message(){

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "freezoner_nonce")) {
		exit("No naughty business please");
	} 
	$name         = $_POST['full_name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $service      = $_POST['service'];
    $sending_by   = $_POST['sending_by'];
    $message      = $_POST['message'];
    $msg ="
    <html>
        <body>
          <p>". __('Get Quotation','freezoner')."</p>
          <table style='border:1px solid #000'>
            <tr>
                <th>
                    ".__('Full Name','freezoner')."
                </th>
                <td>
                ".$name."
                </td>
            </tr>
            <tr>
                <th>
                    ".__('Email Address','freezoner')."
                </th>
                <td>
                ".$email."
                </td>
            </tr>
            <tr>
                <th>
                    ".__('Phone','freezoner')."
                </th>
                <td>
                ".$phone."
                </td>
            </tr>
             <tr>
                <th>
                    ".__('Service','freezoner')."
                </th>
                <td>
                ".$service."
                </td>
            </tr>
             <tr>
                <th>
                    ".__('Phone Or Email','freezoner')."
                </th>
                <td>
                ".$sending_by."
                </td>
            </tr>
             <tr>
                <th>
                    ".__('Message','freezoner')."
                </th>
                <td>
                ".$message."
                </td>
            </tr>
          </table>
        </body>
        </html>" ;
     $headers = array('Content-Type: text/html; charset=UTF-8');
     $sent = wp_mail( 'esmsbhy@gmail.com', $service, $msg,$headers);


	$return = array(
	    'type'        => 'success',
	    'data'        => ''.__('Your message has been sent succesfully.','freezoner').'',
		'name'        => $name,
		'email'       => $email,
		'phone'       => $phone,
		'service'     => $service,
        'sending_by'  => $sending_by,
		'message'     => $message,
        'post'        => $_POST
	);

	echo json_encode( $return );
	wp_die(); 

}