/**
 * Created by Administrator on 2016/7/29.
 */
var login={
    check : function(){
        //获取页面中的登录名和密码
        var username=$('input[name="username"]').val();
        var password=$('input[name="userPass"]').val();
        if(!username){
            dialog.error('邮箱不能为空！');
        }
        if(!password){
            dialog.error('密码不能为空！');
        }
        var url="/index.php?m=student&c=login&a=check";
        var data={'username':username,'password':password};
        $.post(url,data,function(result){
            if(result.status==0){
                return dialog.error(result.message);
            }
            if(result.status==1){
                return dialog.success(result.message,'/index.php?m=student&c=report&a=index');
            }
        },"JSON");
    }

}