<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; abstract class Advanced extends Container { protected string $filename = ''; protected string $directory = ''; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x69\x6e\x69\164", [$this, "\x79\145\171\x69\147\x75\171\x65\147\155\x6d\x79\165\163\x65\141"]); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, "\x73\x77\x69\145\141\171\x65\171\x73\x61\x77\143\x65\145\153\153"]); } public function mawoacksgosuccme() : string { return $this->filename; } public function uouwqaeikimumwki() : string { return $this->directory; } public function swieayeysawceekk() { if ($iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()) { $iiaumsgauuyeqksw->remove($this->agkwcckksaegcsce()); } } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $this->qeoakmiowssoqaom(); } } public function qeoakmiowssoqaom() { if ($qookweymeqawmcwo = $this->gayqqwwuycceosii()) { $acqcekoeswseswws = $this->agkwcckksaegcsce(); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists($acqcekoeswseswws)) { $oceoeyaeucyymkao = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gikwwgqmwccescgy($this); $sccqccoqgskgygmg = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\137\117\x50\x54\x49\115\111\x5a\x41\x54\111\x4f\116\x5f\126\105\122\123\111\117\x4e", ''); if ($oceoeyaeucyymkao !== $sccqccoqgskgygmg) { $iiaumsgauuyeqksw->remove($acqcekoeswseswws); } } if (!$iiaumsgauuyeqksw->exists($acqcekoeswseswws) && $this->ecagqwsekgcaqqgk()) { $mkomwsiykqigmqca = $this->uouwqaeikimumwki(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\141\144\x76\141\156\x63\x65\144\56\x70\x68\x70", $qookweymeqawmcwo); $ewgwqamkygiqaawc = (string) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\143\141\143\x68\145\x5f\150\164\155\x6c\137\141\x64\x76\141\x6e\143\145\144\137\x66\151\x6c\x65", $ewgwqamkygiqaawc); $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $this->mawoacksgosuccme(), $ewgwqamkygiqaawc); $wkcwykowmmmwioqs = $this->mawoacksgosuccme(); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x4f\160\164\x69\x6d\x69\x7a\x61\x74\151\x6f\x6e\40\45\163\40\x66\x69\x6c\145\40\x67\145\x6e\145\x72\x61\164\x65\x64\40\x73\x75\143\x63\145\163\163\x66\x75\x6c\x6c\x79\x20\x69\x6e\40\x25\x73\x2e", PR__MDL__OPTIMIZATION), $wkcwykowmmmwioqs, $mkomwsiykqigmqca), $wkcwykowmmmwioqs, Constants::smkwuwawwaqyimcq); } } } public function ecagqwsekgcaqqgk() : bool { $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\150\x65\x5f\x68\x74\x6d\154\137\147\x65\x6e\145\x72\141\x74\145\x5f\141\144\x76\x61\x6e\143\x65\x64\137\x66\x69\154\x65", true) && !$miiyyswuessymmwe->cmaecekuqkwmemms("\x50\x52\137\117\120\x54\x49\115\x49\132\x41\x54\111\x4f\x4e\137\x41\104\x56\x41\x4e\x43\x45\104") && !$miiyyswuessymmwe->kcciqwskewsuaemk()->qygmgeswucmcmaiu($this->uouwqaeikimumwki())) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, "\141\x64\x76\x61\x6e\x63\145\x64", sprintf(__("\x41\144\x76\141\156\x63\145\x64\x20\106\x69\154\145\50\x25\x73\51", PR__MDL__OPTIMIZATION), $this->mawoacksgosuccme()), $this->uouwqaeikimumwki()); } return $umuecysoywoumgwo; } public function agkwcckksaegcsce() : string { return trailingslashit($this->uouwqaeikimumwki()) . $this->mawoacksgosuccme(); } public abstract function gayqqwwuycceosii() : array; }
