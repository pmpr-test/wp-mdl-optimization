<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\164\150"); $qogsmwakwacwqogk["\160\x61\164\x68"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\157\x73\164"]) . $qogsmwakwacwqogk["\x70\141\x74\150"] . "\x2e\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x6f\156\146\151\x67\x75\162\141\x74\151\157\x6e\x5f\x66\x69\154\x65\x73\137\x70\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if (!$cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\120\x54\x5f\x43\x41\x43\x48\x45\x5f\x44\x4f\x4e\124\137\x45\116\x43\x4f\x44\105\137\106\111\x4c\x45\116\101\115\105\123")) { $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); } $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); } return untrailingslashit($migiiksoiymissge) . "\57\137\x70\x72\x2d\146\x69\x6c\x65\x73\x2f\x69\x6e\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\160\164\x69\x6d\x69\172\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\157\x75\40\x73\x75\x72\x65\40\x61\142\157\x75\164\x20\162\x65\x4f\160\x74\x69\155\x69\172\145\x20\164\150\151\163\40\160\x61\x67\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\154\x61\163\163" => "\160\x72\55\157\160\164\x2d\x70\165\162\x67\145\x2d\160\157\163\164\55\x63\141\143\x68\145\40\160\x72\x2d\142\x74\x6e\40\x62\x74\x6e\55\x70\x72\x69\x6d\141\x72\171", "\x74\151\164\x6c\x65" => $meqocwsecsywiiqs, "\144\x61\164\141\x2d{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\x61\x2d\155\151\143\x72\157\x6d\157\x64\141\x6c\x2d\143\x6c\157\163\x65"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\163" => "\x70\x72\x2d\x6f\160\x74\x2d\160\141\147\x65\x2d\x61\x63\164\x69\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\160\162\x2d\x6f\x70\x74\x2d\x70\x72\145\x6c\x6f\141\144") || $this->ccmqswoueyeqkoeq("\x70\162\145\154\x6f\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\x2d\157\x70\164\55\x72\x65\x6d\x6f\164\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\x6e\x74\55\x6f\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\154\157\167\x5f\x74\x6f\x5f\163\x74\x61\x72\x74\x5f\x62\165\x66\x66\145\x72\x5f\x70\x72\157\x63\145\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\122\x5f\117\x50\124\x49\x4d\111\132\x41\x54\111\x4f\x4e\x5f\104\x4f\x4e\124\x5f\x4f\120\124\111\x4d\111\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->syukqeyowauuucwi() && !$owaoeyikmqaeegma->goumkccmgysgqueu() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\x70\141\x73\163\x5f\x6c\x69\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (is_bool($migiiksoiymissge) && !$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\142\x79\x70\x61\163\163", false, $migiiksoiymissge); } }
