<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e29caf530             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; class Tool extends Common { public function igyiymiwguiiqgqm() : array { $ucasskoyoewwmmii = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq))) { goto assoyoeukmqiucyq; } $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->auksikwsewaywikq()); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($qogsmwakwacwqogk, "\x70\x61\164\x68"); $qogsmwakwacwqogk["\160\141\x74\150"] = $mkomwsiykqigmqca ? str_replace("\57", "\x2e", untrailingslashit($mkomwsiykqigmqca)) : ''; $ymqmyyeuycgmigyo = strtolower($qogsmwakwacwqogk["\150\157\163\164"]) . $qogsmwakwacwqogk["\x70\141\x74\150"] . "\56\x70\x68\x70"; $ucasskoyoewwmmii[$ymqmyyeuycgmigyo] = $yckucuyiaykemqea; assoyoeukmqiucyq: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\157\x6e\x66\151\x67\x75\x72\141\x74\151\x6f\156\137\146\151\154\x65\163\137\x70\x61\164\x68", $ucasskoyoewwmmii); } public function aisuyoiqugewaocg(?string $migiiksoiymissge) : ?string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $migiiksoiymissge = $cwaqscoiqkokyase->mkcmkkskeeaskowy($migiiksoiymissge); if ($cwaqscoiqkokyase->cmaecekuqkwmemms("\120\x52\137\x4f\x50\x54\137\103\101\x43\110\105\x5f\104\117\x4e\x54\137\105\116\103\x4f\x44\105\x5f\106\x49\114\x45\x4e\101\115\105\123")) { goto esokkakkumskkmiu; } $ymkqyawksmqcgsei = array_filter(explode("\x2f", $migiiksoiymissge)); foreach ($ymkqyawksmqcgsei as $uusmaiomayssaecw => $agywggmyywaimwuy) { $ymkqyawksmqcgsei[$uusmaiomayssaecw] = substr(sha1(rawurldecode($agywggmyywaimwuy)), 0, 10); wyqueeskecameuks: } kikkkoqiumqoeiyy: $migiiksoiymissge = implode("\57", $ymkqyawksmqcgsei); esokkakkumskkmiu: return untrailingslashit($migiiksoiymissge) . "\x2f\137\160\x72\x2d\x66\x69\x6c\x65\x73\x2f\151\156\x64\x65\x78"; } public function iwiqycmucceckwcq(?string $ewgwqamkygiqaawc, $eqgoocgaqwqcimie, string $uusmaiomayssaecw = Constants::imywcsggckkcywgk) : string { $meqocwsecsywiiqs = __("\x72\x65\x4f\x70\x74\x69\x6d\x69\172\145", PR__MDL__OPTIMIZATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\145\40\171\157\x75\x20\163\165\x72\145\x20\141\142\x6f\165\164\x20\162\145\x4f\x70\164\151\155\x69\x7a\145\40\x74\150\x69\163\40\x70\x61\x67\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\x61\x73\163" => "\157\x70\164\55\x70\x75\x72\147\145\55\x70\157\x73\164\x2d\143\141\x63\x68\145\40\160\162\x2d\x62\x74\156\40\142\x74\x6e\55\160\162\151\155\x61\x72\171", "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs, "\144\x61\x74\x61\55{$uusmaiomayssaecw}" => $eqgoocgaqwqcimie, "\144\x61\164\141\x2d\155\x69\x63\x72\x6f\x6d\x6f\x64\x61\x6c\x2d\143\x6c\x6f\x73\145"]]], $meqocwsecsywiiqs, ["\x63\x6c\x61\x73\x73" => "\x6f\160\164\x2d\160\141\147\145\55\x61\x63\x74\x69\x6f\x6e"]); } public function ccmqswoueyeqkoeq($uusmaiomayssaecw) : bool { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); return $eiicaiwgqkgsekce->gkwaaeusmsaywikg($uusmaiomayssaecw) || $eiicaiwgqkgsekce->gmsemuiwicucmcok($uusmaiomayssaecw); } public function giuymssyesugquuu() : bool { return $this->ccmqswoueyeqkoeq("\x6f\160\x74\x2d\160\162\x65\154\157\141\144") || $this->ccmqswoueyeqkoeq("\160\x72\145\154\x6f\x61\144"); } public function ogwesogckacoyggy() : bool { return $this->ccmqswoueyeqkoeq("\160\162\x2d\157\x70\x74\55\162\x65\x6d\x6f\x74\145"); } public function eeegakaauwcyugqy() : bool { return $this->ccmqswoueyeqkoeq("\144\x6f\x6e\x74\x2d\157\x70\x74"); } public function iekaosoqsgqsysoo() : bool { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy(Optimization::kgswyesggeyekgmg . "\x61\x6c\x6c\157\x77\x5f\164\157\x5f\163\x74\x61\162\x74\x5f\142\x75\x66\146\x65\162\137\x70\x72\x6f\143\145\x73\163", false); } public function ocysssyiuaueqiei() : bool { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); return !$owaoeyikmqaeegma->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\111\x4d\x49\x5a\x41\124\111\117\116\x5f\104\117\x4e\x54\137\117\x50\124\x49\x4d\x49\132\105", false) && !$owaoeyikmqaeegma->miccagckiqwseasi() && $owaoeyikmqaeegma->eewqyocggsagyuis() && !$this->eeegakaauwcyugqy(); } public function ocyuqqyeiuomcmmu(array $suuagcecoyuweoqk = []) : array { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x62\x79\x70\x61\x73\x73\x5f\154\151\163\x74", $suuagcecoyuweoqk); } public function uuqqoaacemswasgw($migiiksoiymissge = false) : bool { if (!(is_bool($migiiksoiymissge) && !$migiiksoiymissge)) { goto msiuqseowuumiwuo; } $migiiksoiymissge = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); msiuqseowuumiwuo: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\163\137\x62\x79\x70\141\x73\x73", false, $migiiksoiymissge); } }
