<?php
/**
 * Created by PhpStorm.
 * User: VIZI-BILL PH
 * Date: Aug-3-2016
 * Time: 1:24 PM
 */
/* Template Name:UserControlPanel */
get_header();
$current_user = wp_get_current_user();
$user_role = $current_user->roles[0];
//redirect if user is not logged in
if(!is_user_logged_in()){
    wp_redirect( '/wordpress/login/?msg="You%20Must%20Log-In%20first%20to%20access%20this%20function"' );
    exit;
}
//check the role of the user
//var_dump($user_role);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="margin-top: 10px;"></div>
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Welcome <b><?php echo ucfirst($current_user->data->user_login); ?> </b> !! </h3>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>


