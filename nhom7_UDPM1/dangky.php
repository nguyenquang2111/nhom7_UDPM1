<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="dinhdang.css">
</head>

<body>
<div class="tong">
  <div class="logo">
    	<div id="logo1"><a href="index.php"><img width="123" height="100" src="adidas/logo.jpg"></a></div>
        <div id="menu">
        	<ul>
            	<li><a href="cuahangnam.php">Cửa hàng nam</a></li>
                <li><a href="cuahangnu.php">Cửa hàng nữ</a></li>
                <li><a href="#">Thể loại</a>
                	<ul class="sup_menu">
                    	<li><a href="#">sneaker</a></li>
                        <li><a href="#">đá bóng</a></li> 
                    </ul>
                </li>
            </ul>
        </div> 
        <div id="dang"><a href="dangnhap.php">Đăng nhập</a></div>   
    </div>
    <div class="backgroup_dk">
    	<form method="post" enctype="multipart/form-data">
        	<table cellpadding="0px" cellspacing="0px" style="margin:auto; color:#F00; font-size:24px; padding-top:80px">
            	<tr>
                	<td>Name:</td>
                    <td><input width="100px" type="text" name="name"></td>
                </tr>
            	<tr>
                	<td>Email:</td>
                    <td><input width="100px" type="text" name="email"></td>
                </tr>
                <tr>
                	<td>Mật khẩu</td>
                    <td><input width="100px" height="30px" type="password" name="pass"></td>
                </tr>
                <tr>
                	<td>Số điện thoại</td>
                    <td><input width="100px" height="30px" type="text" name="phone"></td>
                </tr>
                <tr>
                	<td>Địa chỉ</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="ok" value="đăng ký"></td>
                </tr>
            </table>
        </form>
    </div>
    	<?php 
			include('connect.php');
			if(isset($_POST['ok']))
				{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
			$sql="insert into dangky(name,email,pass,phone,address) values('$name','$email','$pass','$phone','$address')";
			$thucthi=mysqli_query($conn,$sql);
			if($thucthi);
			header("location:dangnhap.php");}
		?>
    <marquee direction="left" style="font-size:36px; font-family:Tahoma, Geneva, sans-serif;">Chúng tôi cam kết giầy chuẩn ISO 9001-2008</marquee>
    <div class="ket">
    	<table  cellpadding="0px" cellspacing="0px">
        	<tr>
            	<td><span>Hỗ trợ</span><br>
                	<pre>Cứu giúp</pre><br>
                    <pre>Trả lại và hoàn tiền</pre><br></td>
                <td><span>Thông tin công ty</span><br>
                	<pre>Về chúng tôi</pre><br>
                    <pre>Nghề nghiệp</pre><br>
                </td>
                <td><span>Riêng tư</span><br>
                	<pre>Quyền riêng tư</pre><br>
                    <pre>Bảo mật</pre><br>
                </td>
                <td><span>Điều khoản</span><br>
                    <pre>Các điều khoản </pre><br>
                    <pre>Điều kiện khác</pre><br>
                </td>
                <td><span>Quà tặng</span><br>
                	<pre>Kiểm tra số dư</pre><br>
                    <pre>Kiểm tra đơn hàng</pre>
                </td>
            </tr>
        </table>
    </div>
     <div class="cuoicung">
    	<table>
        	<tr>
        		<td>
    				<pre>hotline:0981921695</pre>
        			<pre>address:Hà Nội</pre>
                </td>
            	<td>
        			<pre>email:nguyenquang21111999@gmail.com</pre>
        			<pre>fax:nguyenquang</pre>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>