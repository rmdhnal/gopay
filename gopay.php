<?php
#AUTO SEND GOPAY
#MASUKIN AKUN YANG UDAH VERIF DI LINE 46 & 47
#Created By Alip Dzikri X Apri AMsyah
#RECODE By Ramadhan Al Magribi
#####################################

$secret = '83415d06-ec4e-11e6-a41b-6c40088ab51e';
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-AppVersion: 3.27.0';
$headers[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$headers[] = 'X-Location: -6.405821,106.064193';

echo"
   __________  ____  _____  __   _____ _______   ______  __________ 
  / ____/ __ \/ __ \/   \ \/ /  / ___// ____/ | / / __ \/ ____/ __ \
 / / __/ / / / /_/ / /| |\  /   \__ \/ __/ /  |/ / / / / __/ / /_/ /
/ /_/ / /_/ / ____/ ___ |/ /   ___/ / /___/ /|  / /_/ / /___/ _, _/ 
\____/\____/_/   /_/  |_/_/   /____/_____/_/ |_/_____/_____/_/ |_|                                              
                    #Recode by Rmdhnal
            #Thank's Alip Dzikri X Apri AMsyah
".PHP_EOL;
    echo "Masukan Nomer Yang Mau di TF".PHP_EOL;
// sleep for 2 seconds
    sleep(2);
    echo "[+] Nomer HP : ";
    // sleep for 2 seconds
    sleep(2);
$number = trim(fgets(STDIN));
$secret = 'xxxx-xx-xxx-xxxx-xxxxxx'; //TOKEN AKUN VERIF GOPAY LO
$pin = "xxxxxx"; //PINGOPAY LO
$headers = array();
$header[] = 'Content-Type: application/json';
$header[] = 'X-AppVersion: 3.40.0';
$header[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
$header[] = 'X-Location: -6.405821,106.064193';
$header[] ='Authorization: Bearer '.$secret;
$header[] = 'pin:'.$pin.'';

					echo "[+] Process Transfer Rp. 1 \n";
					$getqrid = curl('https://api.gojekapi.com/wallet/qr-code?phone_number=%2B'.$number.'', null, $header);
                    $jsqrid = json_decode($getqrid[0]);
                    $qrid = $jsqrid->data->qr_id;
                    
    $tf = curl('https://api.gojekapi.com/v2/fund/transfer', '{"amount":"1","description":"ZAL ","qr_id":"'.$qrid.'"}', $header);
    $jstf = json_decode($tf[0]);
    $tfref = $jstf->data;
if ($jstf && true === $jstf->success) {
    echo "[+] Sukses Transfer Gopay Rp. 1 \n";
    } else {
        echo "[+] Gagal Transfer Gopay  \n";
        }
    {

$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo "[+] Sisa Saldo Gopay = $saldo \n";
                    echo "\n";
                    echo "[!] Success isi GOPAY - Silahkan Order  \n";

    }
					
								function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}
