<?php
/**
 * Created by PhpStorm.
 * User: VIZI-BILL PH
 * Date: Aug-4-2016
 * Time: 1:19 PM
 */
/* Template Name: GetAllUsers */
get_header();

$aUsers = get_users();


foreach ( $aUsers as $user ) {
//	var_dump( $user->roles[0]);
}

?>
<div class="row">
	<div class="col-md-12 text-left">
		<h1>User List</h1>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered table-hover table-responsive">
			<thead>
			<th class="text-center"><b>User Id</b></th>
			<th class="text-center"><b>Username</b></th>
			<th class="text-center"><b>Email</b></th>
			<th class="text-center"><b>Date Registered</b></th>
			<th class="text-center"><b>Role</b></th>
			</thead>
			<tbody>
			<?php
			foreach ( $aUsers as $user ) {
				echo '<tr class="' . ( $user->roles[0] == "administrator" ? 'info' : 'warning' ) . '">';
				echo '<td>' . esc_html( $user->data->ID ) . '</td>';
				echo '<td>' . esc_html( ucfirst( $user->data->user_login ) ) . '</td>';
				echo '<td>' . esc_html( $user->data->user_email ) . '</td>';
				echo '<td>' . esc_html( $user->data->user_registered ) . '</td>';
				echo '<td>' . esc_html( ucfirst( $user->roles[0] ) ) . '</td>';
				echo '<tr>';
			}
			?>
			</tbody>
		</table>
	</div>
</div>

