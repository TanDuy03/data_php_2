<?php
/**
 * Developed by Gia Hoang.
 * File: index.php
 * DateTime: 12/07/2013 - 3:14 PM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>Check Domain - ESC</title>
    <meta charset="utf-8">
    <link href="jquery/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
   <div  class="container">
       <div class="row">
           <fieldset>
               <legend >Check Domain</legend>
               <!--
                  Kiểm tra tại file index.php
               -->
               <?php
               // Nhận giá trị post
               if(isset($_POST["checkdomain"]))
               {

                   if(isset($_POST['domain']) && !empty($_POST['domain']))
                   {
                       $domain=$_POST['domain'].$_POST['ext'];
                    //    $domain=$_POST['domain'].$_POST['ext'];
                       $true=true;

                       /**
                        * 1. Kiểm tra tên miền có đúng định dạng không
                        * Tên miền chứ ký tự số và chữ, hoặc ký tự '-'
                        * Không có ký tự '-' nằm ở đầu hoặc cuối, và không có 2 ký tự '-' liên tiếp
                        */
                    //    if(!preg_match('/^([a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?)$/i', $_POST['domain']) || strpos($_POST['domain'],'--') !==false)
                    //    {
                    //        echo '<div class="alert alert-error">Tên miền không hợp lệ.</div>';
                    //        $true=false;
                    //    }

                       if($true)
                       {
                           /**
                            * 2. Kiểm tra tên miền tại whois.net.vn
                            */
                           $kq= file_get_contents("http://www.whois.net.vn/whois.php?domain=".$domain);
                           /**
                            * 3. Kết quả bằng 1: đã đăng ký, 0: chưa đăng ký
                            */
                           if($kq==1)
                           {
                               echo '<div class="alert alert-info">Tên miền '.$domain.' đã được đăng ký</div>';
                               /**
                                * 4. Lấy thông tin về chủ sở hữu tên miền (tùy chọn)
                                */
                               echo file_get_contents("http://www.whois.net.vn/whois.php?domain=$domain&act=getwhois");
                           }
                           else
                           {//chua dang ky
                               echo '<div class="alert alert-success">Tên miền '.$domain.' chưa được đăng ký</div>';
                           }
                       }
                   }else{
                       echo '<div class="alert alert-error">Hãy nhập tên miền</div>';
                   }
               }
               ?>

               <form class="form-inline" action="" method="POST">
                   <input type="text" name="domain" value="<?php echo isset($_POST['domain']) ? $_POST['domain']:'';?>" placeholder="Domain">
                   <select name="ext">
                       <option value=".online">ac.vn</option>
                       <option value=".angiang.vn">angiang.vn</option>
                       <option value=".asia">asia</option>
                       <option value=".bacgiang.vn">bacgiang.vn</option>
                       <option value=".backan.vn">backan.vn</option>
                       <option value=".baclieu.vn">baclieu.vn</option>
                       <option value=".bacninh.vn">bacninh.vn</option>
                       <option value=".baria-vungtau.vn">baria-vungtau.vn</option>
                       <option value=".bentre.vn">bentre.vn</option>
                       <option value=".binhdinh.vn">binhdinh.vn</option>
                       <option value=".binhduong.vn">binhduong.vn</option>
                       <option value=".binhphuoc.vn">binhphuoc.vn</option>
                       <option value=".binhthuan.vn">binhthuan.vn</option>
                       <option value=".biz">biz</option>
                       <option value=".biz.vn">biz.vn</option>
                       <option value=".bz">bz</option>
                       <option value=".camau.vn">camau.vn</option>
                       <option value=".cantho.vn">cantho.vn</option>
                       <option value=".caobang.vn">caobang.vn</option>
                       <option value=".cc">cc</option>
                       <option value=".co">co</option>
                       <option value=".co.uk">co.uk</option>
                       <option value=".com">com</option>
                       <option value=".com.co">com.co</option>
                       <option value=".com.tw">com.tw</option>
                       <option value=".com.vn">com.vn</option>
                       <option value=".daklak.vn">daklak.vn</option>
                       <option value=".daknong.vn">daknong.vn</option>
                       <option value=".danang.vn">danang.vn</option>
                       <option value=".dienbien.vn">dienbien.vn</option>
                       <option value=".dongnai.vn">dongnai.vn</option>
                       <option value=".dongthap.vn">dongthap.vn</option>
                       <option value=".edu.vn">edu.vn</option>
                       <option value=".eu">eu</option>
                       <option value=".gialai.vn">gialai.vn</option>
                       <option value=".gov.vn">gov.vn</option>
                       <option value=".hagiang.vn">hagiang.vn</option>
                       <option value=".haiduong.vn">haiduong.vn</option>
                       <option value=".haiphong.vn">haiphong.vn</option>
                       <option value=".hanam.vn">hanam.vn</option>
                       <option value=".hanoi.vn">hanoi.vn</option>
                       <option value=".hatinh.vn">hatinh.vn</option>
                       <option value=".haugiang.vn">haugiang.vn</option>
                       <option value=".health.vn">health.vn</option>
                       <option value=".hoabinh.vn">hoabinh.vn</option>
                       <option value=".hungyen.vn">hungyen.vn</option>
                       <option value=".in">in</option>
                       <option value=".info">info</option>
                       <option value=".info.vn">info.vn</option>
                       <option value=".int.vn">int.vn</option>
                       <option value=".jp">jp</option>
                       <option value=".khanhhoa.vn">khanhhoa.vn</option>
                       <option value=".kiengiang.vn">kiengiang.vn</option>
                       <option value=".kontum.vn">kontum.vn</option>
                       <option value=".laichau.vn">laichau.vn</option>
                       <option value=".lamdong.vn">lamdong.vn</option>
                       <option value=".langson.vn">langson.vn</option>
                       <option value=".laocai.vn">laocai.vn</option>
                       <option value=".longan.vn">longan.vn</option>
                       <option value=".me">me</option>
                       <option value=".mobi">mobi</option>
                       <option value=".namdinh.vn">namdinh.vn</option>
                       <option value=".name">name</option>
                       <option value=".name.vn">name.vn</option>
                       <option value=".net">net</option>
                       <option value=".net.co">net.co</option>
                       <option value=".net.tw">net.tw</option>
                       <option value=".net.vn">net.vn</option>
                       <option value=".nghean.vn">nghean.vn</option>
                       <option value=".ninhbinh.vn">ninhbinh.vn</option>
                       <option value=".ninhthuan.vn">ninhthuan.vn</option>
                       <option value=".nom.co">nom.co</option>
                       <option value=".org">org</option>
                       <option value=".org.tw">org.tw</option>
                       <option value=".org.vn">org.vn</option>
                       <option value=".phutho.vn">phutho.vn</option>
                       <option value=".phuyen.vn">phuyen.vn</option>
                       <option value=".pro.vn">pro.vn</option>
                       <option value=".quangbinh.vn">quangbinh.vn</option>
                       <option value=".quangnam.vn">quangnam.vn</option>
                       <option value=".quangngai.vn">quangngai.vn</option>
                       <option value=".quangninh.vn">quangninh.vn</option>
                       <option value=".quangtri.vn">quangtri.vn</option>
                       <option value=".soctrang.vn">soctrang.vn</option>
                       <option value=".sonla.vn">sonla.vn</option>
                       <option value=".tayninh.vn">tayninh.vn</option>
                       <option value=".tel">tel</option>
                       <option value=".thaibinh.vn">thaibinh.vn</option>
                       <option value=".thainguyen.vn">thainguyen.vn</option>
                       <option value=".thanhhoa.vn">thanhhoa.vn</option>
                       <option value=".thanhphohochiminh.vn">thanhphohochiminh.vn</option>
                       <option value=".thuathienhue.vn">thuathienhue.vn</option>
                       <option value=".tiengiang.vn">tiengiang.vn</option>
                       <option value=".travinh.vn">travinh.vn</option>
                       <option value=".tuyenquang.vn">tuyenquang.vn</option>
                       <option value=".tv">tv</option>
                       <option value=".tw">tw</option>
                       <option value=".us">us</option>
                       <option value=".vinhlong.vn">vinhlong.vn</option>
                       <option value=".vinhphuc.vn">vinhphuc.vn</option>
                       <option value=".vn">vn</option>
                       <option value=".ws">ws</option>
                       <option value=".yenbai.vn">yenbai.vn</option>
                   </select>
                   <button type="submit" name="checkdomain" class="btn btn-primary">Check Domain</button>
               </form>
           </fieldset>
       </div>
   </div>



</body>
</html>
