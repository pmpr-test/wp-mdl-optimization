<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27a0f7c0c5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Remote extends Cartridge { use SubscriptionEngineTrait; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->cqscwmqsgomkogoq()->wskswuomqkmqkkmm(); if (!$usmiuwiumyygmucg) { goto kiqogmwcgcamwiig; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto yowsmsiyimmimemc; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: $this->kiaqywwoysssqgig("\x43\157\157\x6b\151\145", "\x70\x6d\160\162\55\143\154\x69\145\x6e\164\x3d\164\162\x75\x65"); parent::__construct(); kiqogmwcgcamwiig: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f{$this->gueasuouwqysmomu()}\x2f\143\x68\145\143\x6b\x2d\x6a\x6f\142", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto yiwiqaqmwiogawym; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto cggowoquuiwqkyew; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto ocokwuuquaokmasc; cggowoquuiwqkyew: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto eequksumcoogyoem; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto uukumskkeggaowck; eequksumcoogyoem: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; uukumskkeggaowck: goto iomcaiwewsawiamu; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } sqiciiuwmykocycc: iomcaiwewsawiamu: ocokwuuquaokmasc: goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goacqqsgaaigyuaw: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
