<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f13d321859c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\API; use Pmpr\Common\Foundation\API\Cartridge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Remote extends Cartridge { use SubscriptionEngineTrait; protected string $type = ''; public function __construct() { $usmiuwiumyygmucg = $this->cqscwmqsgomkogoq()->wskswuomqkmqkkmm(); if (!$usmiuwiumyygmucg) { goto kiqogmwcgcamwiig; } $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); foreach ($usmiuwiumyygmucg as $qcaiykuysiowsimu) { if (!$cwaqscoiqkokyase->wmcwegoisyeeosqu($qcaiykuysiowsimu)) { goto yowsmsiyimmimemc; } $this->iggeecowsiwyaooe($qcaiykuysiowsimu); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: $this->kiaqywwoysssqgig("\x43\x6f\x6f\x6b\151\x65", "\x70\x6d\160\x72\x2d\143\x6c\151\145\156\x74\x3d\164\x72\x75\145"); parent::__construct(); kiqogmwcgcamwiig: } public function gueasuouwqysmomu() : string { return $this->type; } public function uiqqikcuycqyeooa(?string $aokagokqyuysuksm) : array { $sogksuscggsicmac = $this->eqkieiagqmugguew("\57{$this->gueasuouwqysmomu()}\57\x63\150\x65\x63\153\55\152\157\x62", [self::kugiewcgiawaeiaq => [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]], Constants::mswoacegomcucaik); $iueymcwwscwqkiyq = Constants::kywgiyyageyqwuuc; if (is_wp_error($sogksuscggsicmac)) { goto yiwiqaqmwiogawym; } if ($sogksuscggsicmac && isset($sogksuscggsicmac[Constants::eikgweiqgomeisyo])) { goto cggowoquuiwqkyew; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto ocokwuuquaokmasc; cggowoquuiwqkyew: switch ($sogksuscggsicmac[Constants::eikgweiqgomeisyo]) { case Constants::amcogigwsaqssuai: if (isset($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto eequksumcoogyoem; } $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goto uukumskkeggaowck; eequksumcoogyoem: $iueymcwwscwqkiyq = Constants::gymusgeumuwomwuy; uukumskkeggaowck: goto iomcaiwewsawiamu; case Constants::uasuowkaguiwoouw: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; } sqiciiuwmykocycc: iomcaiwewsawiamu: ocokwuuquaokmasc: goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $iueymcwwscwqkiyq = Constants::uasuowkaguiwoouw; goacqqsgaaigyuaw: return [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::uiwqcumqkgikqyue => $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] ?? []]; } }
