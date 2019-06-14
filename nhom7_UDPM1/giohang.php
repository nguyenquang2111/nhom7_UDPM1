<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html><!doctype html>
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
        	<div class="dd">
                    <form method="post" enctype="multipart/form-data">
                        <table border="1" bgcolor="#66FFFF">
                            <tr><td colspan="6" align="center"> GIỎ HÀNG </td></tr>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td></td>
                            </tr>
                            <?php include('connect.php');?>
                     <?php
                        $id=$_GET['Masp'];
                        $sql="select * from muahang where id='$id'";
                        $thucthi=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($thucthi);
                    ?>
                        <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><img src="adidas/<?php echo $row['img'];?>" alt="" width="200px" height="150px"></td>
                        <td><?php echo $row['amount'];?></td>
                        <td><input type="text" name="amount" value=" <?php 
                            if(isset($_POST['ok'])) { echo $_POST['amount'];}
                            else {echo "1";}?>" /></br>
                    <?php 
                            if ($row['amount']==0)
                            echo "Hết hàng rồi em ơi!";
                            else echo "Tối đa"  .$row['amount'].  "sản phẩm!";?></td>
                        <td rowspan="2"><input type="submit" value="Cập nhật" name="ok" /></td>     
                    </tr> 
                    <tr>
                        <td colspan="4" align="center">Tổng tiền</td>
                        <td colspan="2"<p align="left">
                            <?php if(isset($_POST['ok']))
                                {
                                if($_POST['amount']<=$row['amount'])
                                { $tong=0; $amount=($row['amount'] - $_POST['amount']);
                                echo $tong=$row['price']*$_POST['amount'].".000 VNĐ";
                                $sql2="update muahang set amount='$amount' where id='$id'";
                                $thucthi=mysql_query($sql2);}
                                else { echo "<script>alert ('không đủ hàng')</script>";
                                 echo $tong=$row['price'].".000 VNĐ";}
                     }
                          else echo $tong=$row['price'].".000 VNĐ";
                    ?></td>
                    <tr>
                         <td colspan="6" align="center"><input type="submit" name="Ok" value="Mua">
                        <?php 
                            if(isset($_POST['ok']))
                       ?>
                       </td>
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