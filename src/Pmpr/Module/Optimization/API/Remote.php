<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356236bf3e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Remote extends Cartridge { use SubscriptionEngineTrait; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->cqscwmqsgomkogoq()->wskswuomqkmqkkmm(); if ($usmiuwiumyygmucg) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { $this->iggeecowsiwyaooe($qcaiykuysiowsimu); } } $this->kiaqywwoysssqgig("\103\157\157\x6b\x69\145", "\x70\x6d\x70\x72\x2d\143\154\x69\x65\x6e\x74\x3d\164\162\x75\x65"); parent::__construct(); } } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\143\150\x65\x63\x6b\55\x6a\157\142", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } else { if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; } else { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } break; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } } else { $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } } return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
