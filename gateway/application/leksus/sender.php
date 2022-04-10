<?
function sendmail($sm_address, $sm_username, $sm_id){
    $to = $sm_address;

    $subject = 'Verify Your Email Address';

    $headers = "From: no-reply@gateway.arsa.me\r\n";
    $headers .= "Reply-To: arsa@arsa.me\r\n";
    // $headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<div class="rcmBody" style="font-size: 10pt; font-family: Verdana,Geneva,sans-serif;">
<table class="v1v1v1v1pc-email-container" style="margin: 0 auto; max-width: 620px;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td style="padding: 0 10px;" align="left" valign="top">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="20">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1b1b1b; background-image: url(https://res.cloudinary.com/arsasatria/image/upload/v1611541243/Jepretan_Layar_2021-01-25_pukul_09.20.01_ottuc8.png); background-position: top center; background-size: cover; border-radius: 8px;" align="center" valign="top" bgcolor="#1B1B1B">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 34px 40px 0px;" valign="top">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td align="center" valign="top"><img style="max-width: 100%; height: auto; border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;" src="https://res.cloudinary.com/arsasatria/image/upload/v1616727209/arsa-logo-cyan-1_oiafgr.svg" width="130" /></td>
</tr>
<tr>
<td class="v1v1v1v1pc-xs-h-53" style="line-height: 1px; font-size: 1px;" height="30">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="8">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 10px 20px 0px; background-color: #0c132c; border-radius: 8px;" valign="top" bgcolor="#0c132c">
<table class="v1v1v1v1pc-sm-ta-center v1v1v1v1pc-sm-dir-ltr" dir="rtl" style="height: 154px; width: 50.9058%;" border="0" width="413" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 0;" valign="top">
<div class="v1v1v1v1pc-sm-mw-100pc" dir="ltr" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">&nbsp;</div>
<div class="v1v1v1v1pc-sm-mw-100pc" dir="ltr" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
<table style="height: 150px; width: 200.001%;" border="0" width="549" cellspacing="0" cellpadding="0">
<tbody>
<tr style="height: 106px;">
<td class="v1v1v1v1pc-sm-p-16-20-20" style="padding: 20px; height: 106px; width: 100%;" valign="top">
<table style="height: 74px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="height: 10px;">
<td class="v1v1v1v1pc-fb-font" style="padding: 2px 0px 0px; line-height: 20px; font-family: Inter, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 500; color: #0c132c; height: 10px;" valign="top">3 November</td>
</tr>
<tr style="height: 10px;">
<td style="font-size: 1px; line-height: 1px; height: 10px;" height="20">&nbsp;</td>
</tr>
</tbody>
<tbody>
<tr style="height: 34px;">
<td class="v1v1v1v1pc-fb-font" style="height: 34px;" valign="top"><a style="text-decoration: none; line-height: 34px; font-family: Inter, Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; letter-spacing: -0.4px; color: #ffffff;" href="https://ok-arsa.com" target="_blank" rel="noopener noreferrer">Verifikasi Emailmu</a></td>
</tr>
<tr style="height: 20px;">
<td style="font-size: 1px; line-height: 1px; height: 20px;" height="20">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="8">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v1v1v1v1pc-sm-p-25-10-15 v1v1v1v1pc-xs-p-15-0-5" style="padding: 30px 20px 20px; background-color: #ffffff; border-radius: 8px;" valign="top" bgcolor="#ffffff">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 0 20px;" valign="top">&nbsp;</td>
</tr>
</tbody>
<tbody>
<tr>
<td class="v1v1v1v1pc-fb-font" style="font-family: Inter, Helvetica, Arial, sans-serif; padding: 10px 20px 0; line-height: 28px; font-size: 16px; font-weight: 300; letter-spacing: -0.2px; color: #18306b;" valign="top">
<p>Halo '.$sm_username.',<br /><br />Sistem kami mendeteksi email anda telah digunakan untuk mendaftar di <strong>LEKSUS</strong> dan perlu diverifikasi. Silahkan klik tombol dibawah untuk memverifikasi email anda:<br /><br /><span style="color: #000080;"><a style="color: #000080;" href="https://gateway.arsa.me/application/leksus/verify.php?id='.$sm_id.'"><strong>https://gateway.arsa.me/application/leksus/verify.php?id='.$sm_id.'</strong></a></span><br /><br />Jika anda merasa tidak pernah mendaftar pada <strong>LEKSUS</strong>, silahkan abaikan email ini<br /><br />Hormat kami,<br /><strong>Arsa Satria</strong><br /><br />*Jangan segan untuk menghubungi ke kami jika anda memiliki pertanyaan atau masalah pada layanan.</p>
</td>
</tr>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="6">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="8">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1b1b1b; background-image: url(https://res.cloudinary.com/arsasatria/image/upload/v1611541243/Jepretan_Layar_2021-01-25_pukul_09.20.01_ottuc8.png); background-position: top center; background-size: cover; border-radius: 8px;" align="center" valign="top" bgcolor="#1B1B1B">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 20px 40px 28px;" valign="top">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v1v1v1v1pc-xs-lh-42 v1v1v1v1pc-xs-fs-30 v1v1v1v1pc-fb-font" style="text-align: center; font-family: Inter, Helvetica, Arial, sans-serif; font-size: 28px; font-weight: 800; line-height: 46px; letter-spacing: -0.6px; color: #00ffff;" valign="top">Aplikasi ini didukung oleh Arsa Group ID</td>
</tr>
<tr>
<td style="line-height: 1px; font-size: 1px;" height="25">&nbsp;</td>
</tr>
</tbody>
<tbody>
<tr>
<td style="padding: 5px 0;" align="center" valign="top">
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-radius: 8px; padding: 13px 17px; background-color: #335dff;" align="center" valign="top" bgcolor="#335dff"><span style="color: #ffffff;"><a style="color: #ffffff; text-decoration: underline;" href="https://arsa.me">Pelajari Selengkapnya</a></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="8">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="v1v1v1v1pc-sm-p-38-30-40 v1v1v1v1pc-xs-p-25-20" style="padding: 38px 40px 40px 40px; background-color: #0c132c; border-radius: 8px;" valign="top" bgcolor="#0c132c">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="15">&nbsp;</td>
</tr>
</tbody>
<tbody>
<tr>
<td class="v1v1v1v1pc-fb-font" style="text-align: center; line-height: 20px; letter-spacing: -0.2px; font-family: Inter, Helvetica, Arial, sans-serif; font-size: 14px; color: #ffffff;" valign="top">Email ini dikirim ke '.$sm_address.'<br /><br />Lembar asli (1) telah diverifikasi dan dikirim untuk client '.$sm_username.'<br /><br />&copy; 2022 Arsa Satria. ok-arsa.com | arsa.me<br />PTM, Depok, Indonesia.</td>
</tr>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="13">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 1px; line-height: 1px;" height="20">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
    ';


    mail($to, $subject, $message, $headers);
}
?>
