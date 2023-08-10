<img src="simdondar.jpg"/>
Versi 1.0<br>
Test koneksi ke DB:<br>
TEST EDIT 08-08-23 NEW<br>
Update 09-08-23 <br>
TEST autobuild/push tag:master<br>
update docker-compose.yaml and cron-simdondar.sh, sekarang tidak perlu build dan push secara manual, tiap ada push/update di github sudah otomatis build dan push ke docker hub, selanjutnya disever UTD yang sudah dipasang cron-simdondar.sh langsung mendekteksi image baru dari docker hub dan update simdondar secara otomatis terjadi<br>
jadi tugas developer hanya update/push digithub<br>
tambahkan dockerhub token<br>
<ol>
  <li><a href=mysql_connect.php>Old driver php-mysql</a></li>
    <li><a href=mysqli_connect.php>New mysqli driver</a></li>
      <li><a href=pdo_connect.php>PDO driver</a></li>
</ol>
<BR>watcher 5 menit!
<?php
phpinfo();
?>
