<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fbefa1d87             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; abstract class Advanced extends Container { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\151\x6e\x69\164", [$this, "\171\x65\171\x69\147\165\171\145\147\x6d\x6d\171\165\x73\145\x61"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\x73\167\x69\x65\x61\171\x65\x79\163\x61\167\x63\145\x65\153\x6b"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()) { $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); } } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $this->qeoakmiowssoqaom(); } } public function qeoakmiowssoqaom() { if ($qookweymeqawmcwo = $this->gayqqwwuycceosii()) { $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { $oceoeyaeucyymkao = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\120\x52\x5f\117\120\124\111\115\111\x5a\x41\x54\111\x4f\116\x5f\x56\105\122\x53\111\x4f\x4e", ''); if ($oceoeyaeucyymkao !== $sccqccoqgskgygmg) { $iiaumsgauuyeqksw->remove($acqcekoeswseswws); } } if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk()) { $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x61\144\166\141\x6e\143\145\x64\56\160\150\x70", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\143\150\145\x5f\150\164\x6d\154\x5f\141\144\x76\x61\x6e\143\x65\x64\x5f\x66\x69\154\x65", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\117\160\164\x69\x6d\151\x7a\x61\x74\x69\x6f\156\40\45\x73\x20\146\151\x6c\145\x20\147\x65\x6e\145\x72\141\x74\x65\x64\40\x73\x75\x63\x63\x65\163\163\x66\165\154\x6c\171\x20\151\156\40\x25\x73\x2e", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); } } } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\143\150\x65\137\150\x74\155\x6c\x5f\147\x65\156\x65\x72\x61\x74\145\x5f\x61\x64\x76\141\x6e\143\145\x64\137\x66\x69\x6c\x65", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\x5f\117\120\124\x49\115\x49\x5a\x41\x54\x49\117\x4e\137\101\x44\x56\x41\116\103\105\x44") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki())) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\x61\x64\166\x61\156\x63\x65\x64", sprintf(__("\x41\144\x76\141\156\x63\x65\x64\40\106\151\154\145\x28\45\x73\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); } return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
