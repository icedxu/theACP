/**
 * Created by liuyang on 2016/10/22.
 */

$(".cu-error").hide();
$(".cu-correct").hide();
$(".cu-notification").hide();

$(document).ready(function () {
    $("#login-form").submit(function (event) {
        $(".cu-error").hide();
        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        //验证会员名
        if (!checkUsername($("#username").val())) {
            $inputs.prop("disabled", false);
            return false;
        }

        //验证密码
        if (!checkPassword($("#password").val())) {
            $inputs.prop("disabled", false);
            return false;
        }
        $.ajax({
            url: "/theACP/controller/login.con.php",
            type: "post",
            data: serializedData,
            success: function (data) {

                var result = JSON.parse(data);

                if (result.status != CORRECT) {
                    $(".alert-danger").html(
                        "error code: " + result.status + '<br>' + errorcode2errorinfo(result.status)
                    ).fadeIn(800);
                } else {
                    $(".alert-success").html(
                        "登录成功，正在跳转..."
                    ).show();
                    setTimeout(function () {
                        location.href = "/theACP/user.html?username=" + result.username + "&token=" + result.token;
                    }, 1800);
                }

                setTimeout(function () {
                    $(".cu-notification").fadeOut(800);
                }, 2000);
            },
            error: function (request) {

            },
            complete: function (data) {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            }
        });

    });

    //失去焦点时判断 input 的合法性
    $("#username").blur(function () {
        checkUsername($(this).val());
    });
    $("#password").blur(function () {
        checkPassword($(this).val())
    });
});