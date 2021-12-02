<?php
require_once "php/private/autoloader.php";
require_once "php/private/validate-logged.php";
$id_user = $_SESSION['id_user'];
echo $id_user;
?>
<?php
require_once "scripts.php";
?>
<script>
    $(document).ready(function() {
        validateUserType();
    });

    function validateUserType() {
        var $id_user = "<?php echo json_decode($id_user) ?>";
        var ar = {
            id_user: $id_user
        }
        $.post(
            "php/users/load.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                var ret = JSON.parse(data);
                console.log(ret);
                if (ret < 0) {
                    toastr.options.closeButton = true;
                    toastr.error("Ha ocurrido un error");
                    return;
                }
                ret = ret[0];
                var userType = ret["user_type"];
                if (userType == 1) {
                    location.href = "admin-plans.php";
                } else if (userType == 0) {
                    location.href = "user.php";
                }

            }
        );
    }
</script>