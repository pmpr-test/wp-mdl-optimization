<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758088a59167             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use WP_Dependencies; use WP_Scripts; class Engine extends Container { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\137\x70\x69\156\x74\x5f\x73\164\x79\x6c\x65\163", [$this, "\153\x79\x79\167\x77\x71\x6f\147\143\157\x63\147\x63\x67\x77\155"], 9999)->qcsmikeggeemccuu("\167\160\x5f\160\151\x6e\164\x5f\163\x63\162\x69\160\x74\x73", [$this, "\x6f\171\165\x71\163\x6d\153\x69\x77\x69\x6b\x67\x61\x71\x73\x77"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $ecukkacusqswqoem = false; if ($oseqkueswiwsceis instanceof WP_Dependencies) { foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; } } } } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if ($ugmuiugkaygmsagq) { $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\55{$eueuqacmukymcyya}"; if ($egsumesakcaaukem && !preg_match("\x2f\143\x64\156\x2e\152\163\144\145\154\151\166\162\x2e\156\145\x74\x7c\147\157\157\x67\154\x65\x61\x70\x69\57\x69", $egsumesakcaaukem->src)) { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoikqkkeucuokoay = $gcskoooiimggowew->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $aguwegoioikwgooy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw)]); if (empty($aoikqkkeucuokoay)) { $gcskoooiimggowew->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); } else { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if (!$ogomymegcoacqisg) { $ogomymegcoacqisg = $egsumesakcaaukem->src; } $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } else { $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } } } foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); } } } } }
