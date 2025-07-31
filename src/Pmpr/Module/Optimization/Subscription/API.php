<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b2bd893e81             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\API\Manager; class API extends Manager { public function __construct() { parent::__construct(); $this->domain .= '/subscription'; } public function msyoakwyskammgqi() { $sogksuscggsicmac = $this->eqkieiagqmugguew('/get-data'); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { $sogksuscggsicmac = $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []; } return $sogksuscggsicmac; } public function qqwmsyyqyoeeqsoo($suaemuyiacqyugsm = 1) { $sogksuscggsicmac = $this->eqkieiagqmugguew("/get-purchases?page={$suaemuyiacqyugsm}"); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { $sogksuscggsicmac = $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []; } return $sogksuscggsicmac; } }
