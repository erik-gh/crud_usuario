var tabla;
function saveUser(e) {
    e.preventDefault();
//    var data = new FormData($('#form_user')[0]);
    var data = $('#form_user').serializeArray();
    //data.push({name: 'edad', value:18});
    //var data = $('#form_user').serialize();
    console.log(data);
    $.post("../controllers/Usuario.controller.php?opt=saveUser", data,
            function () {
                $("#modalUser").modal("hide");
                // clear fields from the popup
                limpiarForm();
                // read records again
                tabla.ajax.reload();
            });
    /*
     $.ajax({
     url: "../controllers/Usuario.controller.php?opt=saveUser",
     type: "POST",
     // dataType: "json",
     data: data,
     //contentType: false,
     //processData: false,
     success: function () {
     // close the popup
     $("#modalUser").modal("hide");
     // clear fields from the popup
     limpiarForm();
     // read records again
     tabla.ajax.reload();
     }
     });
     */
}

function readRecords() {
    tabla = $("#tblListado").DataTable({
        ajax: {
            url: "../controllers/Usuario.controller.php?opt=readUsers"
        }
    });
}

function getUserDetails(id) {
// Add User ID to the hidden field
    $("#hiddenUserId").val(id);
    // console.log(id);
    $.post("../controllers/Usuario.controller.php?opt=detailsUser", {hiddenUserId: id},
            function (data, status) {
                //Data es una cadena en formato Json y lo convertimos a Json
                var user = JSON.parse(data);
//                console.log(data);
                $("#first_name").val(user.first_name);
                $("#last_name").val(user.last_name);
                $("#email").val(user.email);
            }
    );
    // Open modal popup
    $("#modalUser").modal("show");
}

function deleteUser(id) {
    var conf = confirm("¿Estas seguro, Quieres eliminar este usuario?");
    if (conf === true) {
        $.post("../controllers/Usuario.controller.php?opt=deleteUser", {hiddenUserId: id},
                function (data, status) {
                    // reload Users by using readRecords();
                    tabla.ajax.reload();
                }
        );
    }
}
function limpiarForm() {
    $("#first_name").val("");
    $("#last_name").val("");
    $("#email").val("");
    $("#hiddenUserId").val("");
}
$(document).ready(function () {
// READ records on page load
    readRecords(); // calling function
    // Para guardar y actualizar los datos
    $('#form_user').on("submit", function (e) {
        saveUser(e);
    });
});

