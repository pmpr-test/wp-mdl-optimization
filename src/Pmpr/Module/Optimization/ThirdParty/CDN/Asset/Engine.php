<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758114e5f226             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use WP_Dependencies; use WP_Scripts; class Engine extends Container { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\x5f\x70\151\156\x74\137\163\x74\x79\154\145\163", [$this, "\153\171\x79\167\167\x71\x6f\x67\143\x6f\143\147\143\x67\167\155"], 9999)->qcsmikeggeemccuu("\x77\x70\137\x70\x69\x6e\x74\137\163\143\162\151\x70\x74\163", [$this, "\157\x79\x75\161\x73\x6d\x6b\x69\167\x69\x6b\x67\x61\161\x73\167"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $ecukkacusqswqoem = false; if ($oseqkueswiwsceis instanceof WP_Dependencies) { foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; } } } } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if ($ugmuiugkaygmsagq) { $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if ($egsumesakcaaukem && !preg_match("\57\x63\144\x6e\56\152\x73\144\145\x6c\x69\x76\x72\x2e\156\x65\x74\174\x67\157\x6f\147\x6c\x65\x61\160\151\57\151", $egsumesakcaaukem->src)) { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoikqkkeucuokoay = $gcskoooiimggowew->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $aguwegoioikwgooy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw)]); if (empty($aoikqkkeucuokoay)) { $gcskoooiimggowew->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); } else { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if (!$ogomymegcoacqisg) { $ogomymegcoacqisg = $egsumesakcaaukem->src; } $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } else { $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } } } foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); } } } } }
