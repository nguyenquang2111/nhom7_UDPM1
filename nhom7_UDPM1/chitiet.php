<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>chi tiết</title>
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
        <div id="dang"><a href="dangky.php">Đăng ký</a>|<a href="dangnhap.php">Đăng nhập</a></div>   
    </div>
    <div>
    	<div id="loc">
        	<ul>
            	<li>Thể loại
                	<ul class="sup_loc">
                    	<li><a href="#">sneaker</a></li>
                        <li><a href="#">đá bóng</a></li>
                    </ul></li>
                <li>Kích thước
                	<ul class="sup_loc">
               			<li><a href="#">S</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">XL</a></li>
                        <li><a href="#">XXl</a></li>
                        <li><a href="#">XXXL</a></li>
                	</ul></li>
                <li>Giá bán
                	<ul class="sup_loc">
                        <li><a href="#">dưới 20$</a></li>
                        <li><a href="#">20$ --> 50$</a></li>
                        <li><a href="#">50$ --> 100$</a></li>
                        <li><a href="#">trên 100$</a></li>
                    </ul></li>
            </ul>
        </div>
        <div class="chitiet">
        	<?php include'connect.php'?>
            <?php
   			$id=$_GET['Masp'];
     		$sql="select * from muahang where id='$id'";
	 		$thucthi=mysqli_query($conn,$sql);
	 		$row=mysqli_fetch_array($thucthi);
    	?>
        	<table>
        		<tr>
                <td><img src="adidas/<?php echo $row['img'];?>" alt="" width="300px" height="auto"></td>
           
				<td style="font-size:24px; font-weight:bold; padding-top:350px; color:#000">MÃ: <?php echo $row['id'];?><br>
       				Tên sản phẩm: <?php echo $row['name'];?><br>
                    Giá bán: <?php echo $row['price'];?><br>
                	Số lượng: <?php echo $row['amount'];?><br>
                    <a href="giohang.php?Masp=<?php echo $row['id'];?>">giỏ hàng</a></td>
                </tr>
            </table>
            
        </div>
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