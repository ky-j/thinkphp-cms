var login = {
    check: function() {
        // 获取值
        var username = $('#username').val();
        var password = $("#password").val();
        var verifycode = $("#verifycode").val();

        // 判空校验
        if(!username){
            dialog.error('用户名不能为空！');
            return;
        }
        if(!password){
            dialog.error('密码不能为空！');
            return;
        }
        if(!verifycode){
            dialog.error('验证码不能为空！');
            return;
        }

        // 异步请求
        $.ajax({
            type: "POST",
            url: "index.php?m=admin&c=login&a=check",
            //不用去写Conent-Type
            data: {
                username: username,
                password: password,
                verifycode: verifycode
            },
            dataType: "json",//服务器返回的数据类型
            success: function(result) {
                if (result.status == 1) {
                    dialog.success(result.info, 'admin.php?c=index');
                } else {
                    dialog.error(result.info);
                }
            },
            error: function(jqXHR) {
                alert("发生错误：" + jqXHR.status);
            },
        });
    },
}
