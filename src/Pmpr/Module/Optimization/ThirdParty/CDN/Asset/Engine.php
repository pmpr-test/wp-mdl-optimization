<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e7aea357a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\160\151\x6e\164\137\163\x74\x79\154\x65\x73", [$this, "\153\171\x79\x77\167\x71\x6f\x67\143\157\143\x67\143\x67\x77\x6d"], 9999)->qcsmikeggeemccuu("\167\x70\137\160\x69\156\164\x5f\x73\143\162\151\x70\164\163", [$this, "\157\x79\165\x71\163\x6d\x6b\x69\x77\x69\x6b\147\141\161\163\167"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->ocysssyiuaueqiei()) { goto cqkuuyouqoqyguus; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto weggeeowykuqooyg; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; gaceikykesgywssm: } aqmiewawgseaqeqk: weggeeowykuqooyg: cqkuuyouqoqyguus: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto qccmuwiwykuegoga; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\57\x63\144\156\56\152\163\x64\145\154\151\166\x72\x2e\156\145\x74\x7c\147\x6f\x6f\147\154\x65\x61\x70\151\x2f\x69", $egsumesakcaaukem->src))) { goto osqgywagokmsicqe; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $aguwegoioikwgooy, Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto kaiqsuaywyuckuoo; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto cqugssuesycomqwa; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto ssmgmiuqoeiuacsa; } $ogomymegcoacqisg = $egsumesakcaaukem->src; ssmgmiuqoeiuacsa: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto eqemcocqsyasqycq; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); ueaiskyiqcquiika: } koggssokukoukkay: goto ucecweoaoyeoyuue; eqemcocqsyasqycq: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); gwoacimkeyymqccq: } wiqigqgiegmacgsw: ucecweoaoyeoyuue: cqugssuesycomqwa: goto yuoamgkigcwaooqu; kaiqsuaywyuckuoo: $gcskoooiimggowew->gscuuyuyauokoyuo([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); yuoamgkigcwaooqu: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); qaiuogoowcoimwee: } ymwyooosikgokiaa: osqgywagokmsicqe: qccmuwiwykuegoga: } }
