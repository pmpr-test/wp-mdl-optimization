<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16c082ce5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Dependencies; use WP_Scripts; class Engine extends Common { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\x70\151\x6e\x74\x5f\x73\x74\171\x6c\145\x73", [$this, "\x6b\171\x79\x77\167\161\157\147\143\x6f\143\x67\143\147\167\x6d"], 9999)->qcsmikeggeemccuu("\x77\x70\137\x70\151\156\164\137\163\x63\162\x69\160\x74\x73", [$this, "\157\171\x75\x71\x73\x6d\153\151\x77\x69\153\147\141\x71\163\x77"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if (!$this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { goto ueaiskyiqcquiika; } $ecukkacusqswqoem = false; if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto koggssokukoukkay; } foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; gwoacimkeyymqccq: } wiqigqgiegmacgsw: koggssokukoukkay: ueaiskyiqcquiika: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if (!$ugmuiugkaygmsagq) { goto uscissuaiyuiukea; } $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\55{$eueuqacmukymcyya}"; if (!($egsumesakcaaukem && !preg_match("\x2f\143\144\x6e\x2e\152\163\144\x65\x6c\151\x76\x72\x2e\x6e\x65\164\174\147\157\157\x67\x6c\x65\x61\x70\x69\x2f\151", $egsumesakcaaukem->src))) { goto ooqmaweuqmcmwsuk; } $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $aoikqkkeucuokoay = $gcskoooiimggowew->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $aguwegoioikwgooy, Constants::igecewwoemccgwsq => $gcskoooiimggowew::gycwocuuococmiqw]); if (empty($aoikqkkeucuokoay)) { goto qccmuwiwykuegoga; } if (!(time() - strtotime($gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS)) { goto osqgywagokmsicqe; } $gcskoooiimggowew->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->qogaqkcsogcqiaic($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if ($ogomymegcoacqisg) { goto eqemcocqsyasqycq; } $ogomymegcoacqisg = $egsumesakcaaukem->src; eqemcocqsyasqycq: $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { goto ymwyooosikgokiaa; } $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); yuoamgkigcwaooqu: } kaiqsuaywyuckuoo: goto qaiuogoowcoimwee; ymwyooosikgokiaa: $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); cqugssuesycomqwa: } ucecweoaoyeoyuue: qaiuogoowcoimwee: osqgywagokmsicqe: goto csucwwqcsaymyiuk; qccmuwiwykuegoga: $gcskoooiimggowew->gscuuyuyauokoyuo([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); csucwwqcsaymyiuk: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); qmgueimkwqmsakis: } iiuuwuwcwamqegey: ooqmaweuqmcmwsuk: uscissuaiyuiukea: } }
