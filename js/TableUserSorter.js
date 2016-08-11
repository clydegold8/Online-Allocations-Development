/**
 * Created by VIZI-BILL PH on Aug-10-2016.
 */


$(document).ready(function () {

    $.noConflict();//avoid $ confilct to other scripts
    //activate table sorter
    $("#UserTable").tablesorter();

    //deleting users
    $('.delete_user').click(function () {
        var data = {
            action: 'user_delete',
            user_id: $(this).data("id")
        };
        bootbox.confirm("Are you sure you want to delete this user?", function (result) {
            if (result) {
                $.post(theme_ajax.url, data, function (response) {
                    // check response data
                    if (response) {
                        // remove user from the table
                        bootbox.alert("The User has been successfully deleted.", function () {
                            remove_users(data['user_id']);
                        });
                    } else {
                        //return error msg
                        bootbox.alert("Error on deletion. Try again later.");
                    }
                });
            }
        });
        function remove_users(user_id) {
            $("#UserTable").find("[data-user_table='" + user_id + "']").hide('slow');
        }
    });

});