<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2b472f16c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto gqycmyieayoegcsy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\160\x61\164\150"); $qogsmwakwacwqogk["\x70\141\164\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\163\164"]) . $qogsmwakwacwqogk["\160\141\x74\150"] . "\56\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; gqycmyieayoegcsy: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\x6f\x6e\146\151\147\x75\x72\x61\164\x69\157\156\x5f\x66\151\154\145\x73\x5f\160\x61\164\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\122\x5f\117\x50\x54\137\x43\x41\x43\x48\x45\137\104\x4f\116\x54\137\105\116\x43\117\x44\105\x5f\106\x49\114\105\116\101\x4d\x45\x53")) { goto akyiiioycmgqyuok; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iayguaeseyaemwkk: } sqiyuasgusgawuoi: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); akyiiioycmgqyuok: return untrailingslashit($migiiksoiymissge) . "\x2f\137\160\162\x2d\146\151\154\x65\163\x2f\x69\156\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\x4f\x70\164\x69\x6d\x69\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\x65\x20\171\x6f\x75\x20\x73\165\162\145\40\x61\142\x6f\x75\x74\x20\162\145\x4f\x70\x74\151\x6d\151\172\x65\40\x74\x68\x69\163\40\160\x61\x67\145\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\x73\x73" => "\160\162\55\157\160\x74\x2d\x70\165\162\147\x65\x2d\x70\157\163\164\55\x63\x61\143\150\145\40\160\x72\55\142\x74\156\x20\142\164\x6e\x2d\160\x72\x69\155\x61\162\x79", "\164\x69\164\154\145" => $meqocwsecsywiiqs, "\144\141\164\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\x74\141\55\x6d\x69\x63\162\x6f\x6d\157\x64\141\154\x2d\x63\154\157\x73\145"]]], $meqocwsecsywiiqs, ["\143\x6c\141\x73\163" => "\x70\x72\55\x6f\160\164\55\160\x61\147\145\x2d\x61\143\164\151\157\156"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\55\x6f\x70\x74\55\160\x72\x65\154\x6f\141\144") || $this->ccmqswoueyeqkoeq("\x70\x72\145\x6c\x6f\x61\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\55\157\x70\x74\x2d\x72\145\x6d\157\164\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\x74\x2d\x6f\x70\164"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\141\x6c\x6c\157\x77\137\x74\x6f\x5f\163\164\141\x72\164\137\x62\x75\146\146\x65\x72\137\x70\162\x6f\143\145\x73\x73", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\117\x50\x54\x49\115\111\132\x41\x54\x49\x4f\x4e\x5f\x44\117\116\124\137\x4f\120\x54\x49\x4d\x49\132\x45", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\x79\160\x61\x73\x73\137\154\151\x73\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto ycomeuqeessamows; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); ycomeuqeessamows: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\137\x62\x79\160\x61\163\x73", false, $migiiksoiymissge); } }
