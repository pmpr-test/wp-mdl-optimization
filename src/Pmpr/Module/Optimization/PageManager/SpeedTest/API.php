<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\API\Remote; class API extends Remote { public function ikcgmcycisiccyuc() { $this->type = SpeedTest::smsimmcqmsmgyuii; } public function wysoaqkkayeussmu($eeamcawaiqocomwy) { $sogksuscggsicmac = $this->eqkieiagqmugguew("/{$this->gueasuouwqysmomu()}/add-job", [self::kugiewcgiawaeiaq => [Constants::auqoykcmsiauccao => $eeamcawaiqocomwy, Constants::aciemiuuwgysykom => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->ooouaomcuuakuaii()]], Constants::mswoacegomcucaik); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, Constants::uiwqcumqkgikqyue, []); } return $sogksuscggsicmac; } public function goaikaqccaawcswu() : bool { $mokawwccycoiqeka = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $eugsosgsugioquqe = md5($this->caokeucsksukesyo()->cqusmgskowmesgcg()->ooouaomcuuakuaii()); $keccaugmemegoimu = $this->send("/public/speedtest/{$mokawwccycoiqeka}/{$eugsosgsugioquqe}"); return !$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq); } }
