<?php
class Scraping { 
	private static function curl ($url) {
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		$content = curl_exec($ch);
		curl_close($ch);
		
		// Table 1
		$pattern = "/<div class=\"dnd-table dnd-table-alternative dnd-table-striped \">(.*?)<\/div>/si";
		preg_match_all($pattern, $content, $table1);
		$pattern2 = "/<tr>(.*?)<\/tr>/si";
		preg_match_all($pattern2, $table1[0][0], $data1);
		$tanggal = preg_replace('/[^0-9-]+/', '', $data1[0][0]);
		$tanggal = str_replace('12187', '', $tanggal);
		$jam = explode(':', $data1[0][1]);
		$jam = $jam[1] . ':' . $jam[2] . ':' . $jam[3];
		$jam = preg_replace('/[^0-9:]+/', '', $jam);

		// Table 2
		$pattern3 = "/<table class=\"table datatable-basic table-striped\" style=\"width:98%\">(.*?)<\/table>/is";
		preg_match_all($pattern3, $content, $table2);
		$pattern4 = "/<tr>(.*?)<\/tr>/si";
		preg_match_all($pattern4, $table2[0][0], $data2);
		$harga = $data2[0][1];
		$harga = explode(' ', $harga);
		$harga = str_replace('bgcolor="#FFFFFF">', '', $harga);
		$harga = str_replace('.', '', $harga);
		$harga = preg_replace('/[^0-9.]+/', '', $harga);
		$harga = $harga[4];
		
		// Format JSON
		$result[] = $tanggal;
		$result[] = $jam;
		$result[] = $harga;
		
		echo json_encode($result);
		
		//echo $result;
	}

	public static function getGold() {
		$date = date('Y-m-d');
		$idbutik = 11;
		$idkat = 2;
		$iddesc = '0001';
		$url = 'http://logammulia.com/price_list.php?idbutik=' . $idbutik . '&idkat=' . $idkat . '&tanggal=' . $date . '&iddesc=' . $iddesc;
		self::curl($url);
	}

	public static function getSilver() {
		$date = date('Y-m-d');
		$idbutik = 11;
		$idkat = 2;
		$iddesc = '0002';
		$url = 'http://logammulia.com/price_list.php?idbutik=' . $idbutik . '&idkat=' . $idkat . '&tanggal=' . $date . '&iddesc=' . $iddesc;
		self::curl($url);
	}
}

// Harga Gold
echo 'Harga Gold: '; Scraping::getGold(); echo '<br>';
// Harga Silver
echo 'Harga Silver: '; Scraping::getSilver();
?>