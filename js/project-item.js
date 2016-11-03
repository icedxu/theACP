/**
 * Created by liuyang on 2016/11/3.
 */


var pathToAdmin = "../acpAdmin/";
$("li.dropdown").hide();
$("#cu-goto-apply-btn").hide();
$("#cu-goto-login-btn").hide();

var id = getQueryString("project_id");

$(document).ready(function () {
    //验证登录状态
    $.ajax({
        url: "/theACP/controller/check.login.php",
        success: function (data) {
            var result = JSON.parse(data);
            if (result.status == CORRECT) {
                $("#cu-goto-apply-btn").show();
                $("li.dropdown").show();
            } else {
                $("#cu-goto-login-btn").show();
                $(".cu-nav li:eq(2)").after(
                    "<li>" +
                    "<a href='register.html'>注册</a>" +
                    "</li>" +
                    "<li>" +
                    "<a href='login.html'>登录</a>" +
                    "</li>"
                );
            }
        }
    });

    //获取项目介绍的详情
    $.ajax({
        url: "/theACP/controller/project-item.con.php",
        data: {id: id},
        type: "post",
        success: function (data) {
            var result = JSON.parse(data);
            var slideBubble = "";
            var slideImage = "";

            var pics = result["acppicture"].split("@");

            for (var item in pics) {
                if (item == 0) {
                    slideBubble += '<li data-target="#carousel-example-generic" data-slide-to="' + item + '" class="active"></li>';
                    slideImage += '<div class="item active">' +
                        '<img src="' + pathToAdmin + pics[item] + '">' +
                        '</div>';
                } else {
                    slideBubble += '<li data-target="#carousel-example-generic" data-slide-to="' + item + '"></li>';
                    slideImage += '<div class="item">' +
                        '<img src="' + pathToAdmin + pics[item] + '">' +
                        '</div>';
                }
            }

            var carousel = $("#carousel-example-generic");
            carousel.find("ol").html(slideBubble);
            carousel.find("div[role='listbox']").html(slideImage);

            $("#cu-project-title").html(result['acpname']);
            $("#cu-project-title-aside").html(result['acpname']);

            var description = "";
            description += '<strong>出发城市</strong>&nbsp;&nbsp;' + result['acpcity'] + '<br><br>';
            description += '<strong>出发日期</strong>&nbsp;&nbsp;' + result['acpdate'] + '<br><br>';
            description += '<strong>行程天数</strong>&nbsp;&nbsp;' + result['acpday'] + '天<br><br>';
            description += '<strong>主题</strong>&nbsp;&nbsp;' + result['acptheme'] + '<br><br>';

            $("#cu-project-based-info").html(description);

            $("#cu-project-detail-info").html(
                result['acpbright'] + "<br><br>" +
                result['acpmean'] + "<br><br>" +
                result['acpdetail']);

            $("#cu-project-tips").html(result['acptip']);
        }
    });

    //退出登录
    $("#cu-logout").click(function () {
        $.ajax({
            url: "/theACP/controller/logout.con.php",
            success: function (data) {
                var result = JSON.parse(data);

                if (result.status == CORRECT) {
                    location.href = "/theACP/project-item.html";
                }
            }
        })
    });

    $("#cu-goto-login-btn").click(function () {
        location.href = "/theACP/login.html";
    });

    $("#cu-goto-apply-btn").click(function () {
        location.href = "/theACP/apply.html?project_id=" + id;
    });
});