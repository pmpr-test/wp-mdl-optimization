<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f431078326f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto gqycmyieayoegcsy; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\x74\x68"); $qogsmwakwacwqogk["\160\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\164"]) . $qogsmwakwacwqogk["\x70\141\x74\x68"] . "\x2e\x70\150\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; gqycmyieayoegcsy: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\157\x6e\146\x69\x67\165\162\141\164\151\x6f\156\137\x66\x69\154\145\163\x5f\x70\141\x74\150", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\122\137\x4f\x50\x54\137\103\101\x43\110\105\x5f\x44\x4f\116\x54\x5f\x45\116\103\x4f\x44\105\x5f\106\111\114\x45\x4e\x41\x4d\x45\123")) { goto akyiiioycmgqyuok; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); iayguaeseyaemwkk: } sqiyuasgusgawuoi: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); akyiiioycmgqyuok: return untrailingslashit($migiiksoiymissge) . "\x2f\137\x70\162\x2d\146\151\154\145\163\57\x69\x6e\x64\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\145\117\160\x74\151\155\151\x7a\x65", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\x6f\x75\x20\163\165\x72\145\x20\141\x62\x6f\x75\164\40\x72\145\117\x70\x74\x69\155\151\x7a\145\x20\164\150\151\163\40\x70\141\x67\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\163\163" => "\160\x72\55\157\160\x74\55\160\x75\162\147\x65\x2d\160\157\163\164\x2d\x63\x61\x63\150\145\40\x70\162\x2d\x62\x74\156\40\142\164\x6e\x2d\160\x72\x69\155\141\162\171", "\164\x69\164\x6c\145" => $meqocwsecsywiiqs, "\144\141\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\x61\55\155\151\143\162\x6f\x6d\157\x64\141\x6c\55\x63\x6c\157\163\x65"]]], $meqocwsecsywiiqs, ["\143\154\x61\163\163" => "\x70\162\x2d\x6f\x70\x74\55\160\141\147\x65\x2d\141\x63\x74\x69\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\160\x72\x2d\x6f\x70\164\x2d\160\162\145\154\157\141\x64") || $this->ccmqswoueyeqkoeq("\x70\x72\145\154\x6f\141\x64"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\x2d\157\x70\x74\x2d\162\x65\x6d\157\164\x65"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\157\x6e\164\55\x6f\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\154\157\167\x5f\164\157\x5f\163\164\x61\162\164\137\x62\165\146\x66\145\162\137\160\x72\157\143\x65\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\x4f\120\x54\x49\x4d\111\132\x41\124\x49\117\116\137\104\117\x4e\x54\x5f\x4f\x50\124\x49\115\x49\x5a\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\142\x79\x70\x61\163\163\x5f\154\151\163\164", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto ycomeuqeessamows; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); ycomeuqeessamows: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\x73\137\x62\171\160\x61\163\x73", false, $migiiksoiymissge); } }
