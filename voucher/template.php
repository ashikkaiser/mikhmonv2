
<table class="voucher" style=" width: 220px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: left; font-size: 14px; font-weight:bold; border-bottom: 1px black solid;"><img src="<?php echo $logo;?>" alt="logo" style="height:30px;border:0;">  <?php echo $hotspotname;?>  <span id="num"><?php echo " [$num]";?></span></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 210px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if($usermode == "vc"){?>
        <tr>
          <td font-size: 12px;>Kode Voucher</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:16px;"><?php echo $username;?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php }elseif($usermode == "up"){?>
<!-- Check QR  -->
<?php if($qr == "yes"){?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $username;?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $password;?></td>
        </tr>
<?php }else{?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $username;?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?php echo $password;?></td>
        </tr>
<?php }}?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if($qr == "yes"){?>
      <td>
	<img src="<?php echo $qrcode ?>" alt="qrcode">
      </td>
<?php }?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 1px solid black;font-weight:bold; font-size:16px"><?php echo $validity;?> <?php echo $timelimit;?> <?php echo $datalimit;?> <?php echo $price;?></td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?php echo $dnsname;?></td>
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>