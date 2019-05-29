<?php
system("apt-get install toilet -y");
system("toilet -f future FakeCall --gay");
echo "
[====================]
Author : Fajar Firdaus
Fb : Fajar Firdaus
YT : iTech7732
IG : fajar_firdaus_7
[====================]
";
function api($nomor,$jumlah){
$url = "http://0x.nakocoders.org/rest-api/lain-nya/api.php?nomor=$nomor";
$loop = 0;
while($loop < $jumlah){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$hasil = curl_exec($ch);
echo $hasil;
sleep(5);
$loop++;
}
}
echo "Masukan Nomor : ";
$nomor = trim(fgets(STDIN));
echo "Masukan Jumlah : ";
$jumlah = trim(fgets(STDIN));
api($nomor,$jumlah);
?>
