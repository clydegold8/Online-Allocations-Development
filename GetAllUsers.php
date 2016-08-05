<?php
/**
 * Created by PhpStorm.
 * User: VIZI-BILL PH
 * Date: Aug-4-2016
 * Time: 1:19 PM
 */
/* Template Name: GetAllUsers */
get_header();
//get all users
$aUsers = get_users();

?>
<div class="row">
	<div class="col-md-12 text-left">
		<h1>User List</h1>
	</div>
	<div class="col-md-12">
		<table id="UserTable" class="table table-bordered table-hover table-responsive tablesorter">
			<thead>
			<th class="text-center pointer"><b>User Id</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Username</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Email</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Date Registered</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Role</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			</thead>
			<tbody>
			<?php
			foreach ( $aUsers as $user ) {
				//populate users
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

<script>
	$.noConflict();
	$(document).ready(function () {
			$("#UserTable").tablesorter();
		}
	);

</script>