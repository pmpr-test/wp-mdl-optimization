<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705177f65977             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto msiuqseowuumiwuo; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\141\x74\150"); $qogsmwakwacwqogk["\160\x61\x74\150"] = $mkomwsiykqigmqca ? str_replace("\x2f", "\56", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\x68\x6f\x73\x74"]) . $qogsmwakwacwqogk["\160\141\164\150"] . "\x2e\160\150\160"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; msiuqseowuumiwuo: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\157\x6e\x66\x69\147\165\x72\x61\x74\151\x6f\x6e\137\x66\x69\154\x65\163\137\160\141\x74\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\x50\x52\137\117\x50\124\x5f\x43\x41\103\x48\105\137\104\x4f\116\124\137\105\x4e\x43\117\104\105\137\x46\111\114\x45\116\101\115\105\123")) { goto iayguaeseyaemwkk; } $ymkqyawksmqcgsei = array_filter(explode("\57", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); sqiyuasgusgawuoi: } gqycmyieayoegcsy: $migiiksoiymissge = implode("\x2f", $ymkqyawksmqcgsei); iayguaeseyaemwkk: return untrailingslashit($migiiksoiymissge) . "\57\x5f\160\162\x2d\x66\151\154\x65\163\57\151\156\144\x65\170"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\162\145\x4f\160\x74\151\x6d\151\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\x65\40\x79\x6f\165\40\163\x75\x72\145\40\x61\x62\157\165\x74\x20\x72\145\x4f\160\x74\151\155\x69\x7a\x65\x20\x74\x68\x69\163\x20\160\x61\147\x65\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\163\x73" => "\x70\x72\55\157\160\164\55\160\x75\x72\x67\x65\x2d\160\x6f\163\x74\55\143\141\143\150\x65\x20\160\162\x2d\x62\x74\x6e\40\142\164\156\x2d\160\x72\x69\155\141\x72\x79", "\x74\151\x74\154\x65" => $meqocwsecsywiiqs, "\x64\x61\164\141\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\x64\141\x74\x61\x2d\155\x69\143\x72\x6f\x6d\157\144\141\x6c\55\143\x6c\157\163\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\x73" => "\x70\162\55\157\160\164\x2d\160\141\x67\x65\x2d\141\143\x74\151\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x70\162\55\157\160\x74\x2d\160\162\145\x6c\157\x61\x64") || $this->ccmqswoueyeqkoeq("\160\x72\145\x6c\157\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\x70\x72\x2d\x6f\x70\x74\55\x72\145\x6d\157\x74\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\x64\x6f\156\x74\x2d\x6f\160\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\154\154\x6f\167\137\x74\157\137\x73\x74\141\x72\164\x5f\x62\165\x66\146\x65\x72\137\160\x72\x6f\143\145\163\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\120\x52\x5f\x4f\x50\124\x49\x4d\x49\x5a\x41\124\x49\x4f\x4e\137\104\x4f\116\x54\137\x4f\120\124\x49\115\x49\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\171\x70\x61\163\163\x5f\154\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto akyiiioycmgqyuok; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); akyiiioycmgqyuok: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\x5f\142\171\x70\x61\163\x73", false, $migiiksoiymissge); } }
