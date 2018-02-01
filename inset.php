<?php 
session_start(); 
if(!($_SESSION["off"])){
    die("<script>alert('请登录');window.top.location.replace('index.html');</script>");

}
include('db.php');

$sql = "SELECT * FROM `shop_sort`";

$list = m($sql,$db);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title>标题</title>
<!-- Bootstrap -->
<link href="js/bootstrap.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<!-- jQuery (necessary for Bootstrap"s JavaScript plugins) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<style>
body{
    background-color: #f1f1f1;
}
.breadcrumb>.two:before {
padding: 0 5px;
color: #ccc;
content: ":";
}
.col-md-10{
    border:1px solid #d5d5d5;
}
.col-md-10>.col-md-10{
    border:none;
    border-right: 1px solid #d5d5d5;
}
.col-md-10>.col-md-10>h2{
    color:rgb(40,140,226);
}
.col-md-5{
   margin-top: 10px;
}
.form-group {
margin-bottom: 25px;
}
label {
display: inline-block;
max-width: 100%;
margin-bottom: 5px;
font-weight: normal;
font-size: 16px;
}
.form-control {
display: block;
width: 100%;
height: 44px;
padding: 6px 12px;
font-size: 16px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.btn-info {
color: #fff;
background-color: rgb(40,140,226);
border-color: rgb(40,140,226);
}
.btn-info:hover {
color: #fff;
background-color: rgb(31,126,208);
border-color: rgb(31,126,208);
}
.btnsm{
width: 80px;
padding: 3px 12px;
}
.yong>label{
font-size: 14px;
}

</style>
</head>
<body>
    <ol class="breadcrumb">
            <li class="active">当前位置</li>
            <li class="two"><a href="#">商品管理</a> </li>
            <li class="active">增加商品</li>
    </ol>
    <div class="col-md-10 col-md-offset-1 ">
        
        <div class="col-md-2">
            <p></p>
            <p>已有帐号？直接登录</p>
            <p> 
            <button type="button" class="btn btn-info btnsm">登录</button>
             </p>
        </div>
    </div>
    <script>

var photo=document.getElementById("photo");

var mydiv = document.getElementById("mydiv");

photo.onchange = function(){

        var reader = new FileReader();

        //文件读取完成后,事件触发[event]

        reader.onload = function(){
            mydiv.innerHTML=' ';

                var img_html = document.createElement('img');

                img_html.src = event.target.result; //图片的base64编码[string]
                //alert();
                //if(img_html.)
                //img_html.width = '200';
               

                mydiv.appendChild(img_html);
                if($("#mydiv").width()>$("#mydiv").height()){
                    img_html.width = '200';
                }else{
                    img_html.height = '200'; 
                }
                
                //console.log();
        }

        reader.readAsDataURL(this.files[0]); //读取文件对象[obj]
}
</script>
</body>
</html>