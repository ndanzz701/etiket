<?php 
//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com
 
function rupiah($angka){
	

	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
function base64($image_name){
  $path = './assets/images/'.$image_name;
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
return $base64;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>pg00001</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<table border="0" height="739" width="719">
<tr><img src="data:image/png;base64,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" style="width:100%; max-width:490px;"/><td>
<div style="position:absolute;top:143.738;left:38.152;"><nobr>
<?php foreach($content->result() as $key): ?>
</nobr></div>
<div style="position:absolute;top:146.032;left:440.942;"><nobr>
<span style="font-size:13.431;"><?php echo $key->tanggal_pemberangkatan?></span>
</nobr></div>
<div style="position:absolute;top:203.684;left:42.047;"><nobr>
<span style="font-size:59.381;font-weight:bold;">Invoice</span>
</nobr></div>
<div style="position:absolute;top:280.172;left:39.923;"><nobr>
<span style="font-size:13.431;">Product</span>
<span style="font-size:13.431;">Detail</span>
</nobr></div>
<div style="position:absolute;top:282.816;left:150.102;"><nobr>
<span style="font-size:13.431;">Jumlah</span>
</nobr></div>
<div style="position:absolute;top:280.172;left:230.197;"><nobr>
<span style="font-size:13.431;">Dari</span>
</nobr></div>
<div style="position:absolute;top:280.172;left:340.163;"><nobr>
<span style="font-size:13.431;">Tujuan</span>
</nobr></div>
<div style="position:absolute;top:280.172;left:440.633;"><nobr>
<span style="font-size:13.431;">Maskapai</span>
</nobr></div>
<div style="position:absolute;top:356.165;left:39.215;"><nobr>
<span style="font-size:13.431;">Tiket</span>
<span style="font-size:13.431;"><?php echo $key->jenis_tiket?></span>
</nobr></div>
<div style="position:absolute;top:355.196;left:160.103;"><nobr>
<span style="font-size:14.130;"><?php echo $key->jumlah_penumpang?></span>
</nobr></div>
<div style="position:absolute;top:355.812;left:230.130;"><nobr>
<span style="font-size:13.431;"><?php echo $key->dari?></span>
</nobr></div>
<div style="position:absolute;top:355.812;left:340.922;"><nobr>
<span style="font-size:13.431;"><?php echo $key->tujuan?></span>
</nobr></div>
<div style="position:absolute;top:355.812;left:440.742;"><nobr>
<span style="font-size:13.431;"><?php echo $key->maskapai?></span>
</nobr></div>
<div style="position:absolute;top:416.039;left:340.639;"><nobr>
<span style="font-size:14.130;font-weight:bold;">TOTAL</span>
</nobr></div>
<div style="position:absolute;top:494.603;left:100.931;"><nobr>
<span style="font-size:16.966;font-weight:bold;">Silahkan</span>
<span style="font-size:16.966;font-weight:bold;">Scan</span>
<span style="font-size:16.966;font-weight:bold;">QRCode</span>
<span style="font-size:16.966;font-weight:bold;">Di</span>
<span style="font-size:16.966;font-weight:bold;">Stasiun/Bandara</span>
<div style="position:absolute;top:50.916;left:50.931;"><img src="<?php echo base64($key->id.'.png');?>" style="width:100%; max-width:200px;"/></div>
</nobr></div>
<div style="position:absolute;top:413.916;left:440.386;"><nobr>
<span style="font-size:14.130;"><?php echo rupiah($key->total_harga);?></span>
</nobr></div>
<?php endforeach?>
</td></tr>
</table>
</div>
</body>
</html>
