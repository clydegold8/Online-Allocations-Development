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
//wp_create_user( $username, $password, $email );
?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/GetAllUsers.js"></script>
<div class="row">
	<div class="col-md-12 text-left">
		<h1>User List <span class="pull-right"> <a data-toggle="modal" data-target="#myModal" class="btn btn-info"
		                                           href="#"><i
						class="fa fa-user-plus" aria-hidden="true"></i> Add User</a></span>
		</h1>
	</div>
	<div class="col-md-12">
		<table id="UserTable" class="table table-bordered table-hover table-responsive tablesorter">
			<thead>
			<th class="text-center pointer"><b>User Id</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Username</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Email</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Date Registered</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center pointer"><b>Role</b> <i class="fa fa-sort" aria-hidden="true"></i></th>
			<th class="text-center"><b>Options</b></th>
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
				echo '<td> <a class="btn btn-info" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit User</a>
						<a class="btn btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete User</a>
					</td>';
				echo '<tr>';
			}
			?>
			</tbody>
		</table>
	</div>
</div>
<!--Add Users Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Users
				</h4>
			</div>
			<div class="modal-body">
				<form id="user-form">
					<small class="text-warning"><p><b>Required field are those who have asterisk (*).</b></p></small>
					<div class="form-group username-bx">
						<label for="exampleInputEmail1">User Name</label>
						<div class="input-group">
							<input type="text" name="username" class="form-control" id="username"
							       placeholder="Username">
							<span class="input-group-addon bg-checkbx-username" id="sizing-addon2"><i
									class="fa fa-asterisk icon-bx icon-bx-username" aria-hidden="true"></i></span>
						</div>
						<span id="helpBlock-username" class="help-block"></span>
					</div>
					<div class="form-group email-bx">
						<label for="exampleInputEmail1">Email address</label>
						<div class="input-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="Email">
							<span class="input-group-addon bg-checkbx-email" id="sizing-addon2"><i
									class="fa fa-asterisk icon-bx icon-bx-email" aria-hidden="true"></i></span>
						</div>
						<span id="helpBlock-email" class="help-block"></span>
					</div>
					<div class="form-group password-bx">
						<label for="exampleInputPassword1">Password</label>
						<div class="input-group">
							<input type="password" name="password" class="form-control" id="password"
							       placeholder="Password">
							<span class="input-group-addon bg-checkbx-password" id="sizing-addon2"><i
									class="fa fa-asterisk icon-bx icon-bx-password" aria-hidden="true"></i></span>
						</div>
						<span id="helpBlock-password" class="help-block"></span>
					</div>
					<div class="form-group password_c-bx">
						<label for="exampleInputPassword1">Re type Password</label>
						<div class="input-group">
							<input type="password" class="form-control" id="password_c" placeholder="Password">
							<span class="input-group-addon bg-checkbx-password_c" id="sizing-addon2"><i
									class="fa fa-asterisk icon-bx icon-bx-password_c" aria-hidden="true"></i></span>
						</div>
						<span id="helpBlock-password_c" class="help-block"></span>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info add-user">Add User</button>
			</div>
		</div>
	</div>
</div>