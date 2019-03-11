<?php
/* Berk Akay 10.03.2019 */
class kimlikKontrol
{
	public function kimlikDogrula($kimlikNo)
	{
		if(strlen($kimlikNo) == 11) // Girilen Değer 11 Haneli Olup Olmadığını Kontrol Ediyor.
		{
			$durum="true";
			$basamak = str_split($kimlikNo); //str_split(); ile Basamaklarına Ayırıyoruz.
			$basamak1 = $basamak[0];
			$basamak2 = $basamak[1];
			$basamak3 = $basamak[2];
			$basamak4 = $basamak[3];
			$basamak5 = $basamak[4];
			$basamak6 = $basamak[5];
			$basamak7 = $basamak[6];
			$basamak8 = $basamak[7];
			$basamak9 = $basamak[8];
			$basamak10 = $basamak[9];
			$basamak11 = $basamak[10];
		}
		if(@!is_numeric($basamak1) || @!is_numeric($basamak2) || @!is_numeric($basamak3) || @!is_numeric($basamak4) || @!is_numeric($basamak5) 
			|| 
			@!is_numeric($basamak7) || @!is_numeric($basamak8) || @!is_numeric($basamak9) || @!is_numeric($basamak10) || @!is_numeric($basamak11))
		{
			$durum="false";
		}
		if(@$basamak1 == 0)
		{
			$durum="false";
		}
		/* Kimlik Numarası Matematiksel Algoritma */
		if($durum == "true")
		{
			$basamak10_kontrol=fmod((7*($basamak1+$basamak3+$basamak5+$basamak7+$basamak9))-($basamak2+$basamak4+$basamak6+$basamak8),10);
			$basamak11_kontrol=fmod(($basamak1+$basamak2+$basamak3+$basamak4+$basamak5+$basamak6+$basamak7+$basamak8+$basamak9+$basamak10),10);
			if($basamak10_kontrol != $basamak10) $durum="false";
			else if($basamak11_kontrol != $basamak11) $durum="false";
		}
		return $durum;
	}
}
?>