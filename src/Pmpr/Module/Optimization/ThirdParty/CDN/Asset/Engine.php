<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Asset; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use WP_Dependencies; use WP_Scripts; class Engine extends Container { protected bool $added = false; public function auioqsqaowomwaoe() : bool { return $this->added; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\x5f\160\151\x6e\164\x5f\x73\164\171\x6c\145\163", [$this, "\x6b\171\171\x77\x77\161\157\147\x63\x6f\x63\147\x63\147\167\155"], 9999)->qcsmikeggeemccuu("\167\160\137\160\151\156\164\x5f\x73\x63\x72\151\x70\164\x73", [$this, "\157\x79\x75\161\163\x6d\153\x69\167\x69\x6b\147\141\x71\163\167"], 9999); } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function enqueue($oseqkueswiwsceis) { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $ecukkacusqswqoem = false; if ($oseqkueswiwsceis instanceof WP_Dependencies) { foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; } } } } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { if ($ugmuiugkaygmsagq) { $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? Constants::qssgasiyswwaciwc : Constants::wwukgkqwyakeqwqk; $egsumesakcaaukem = $ugmuiugkaygmsagq->registered[$eueuqacmukymcyya] ?? null; $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\x2d{$eueuqacmukymcyya}"; if ($egsumesakcaaukem && !preg_match("\x2f\x63\x64\x6e\56\x6a\163\144\x65\154\x69\166\162\x2e\x6e\145\164\174\147\x6f\x6f\147\154\x65\141\x70\x69\x2f\x69", $egsumesakcaaukem->src)) { $gcskoooiimggowew = CDNData::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aoikqkkeucuokoay = $gcskoooiimggowew->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $aguwegoioikwgooy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, $gcskoooiimggowew::gycwocuuococmiqw)]); if (empty($aoikqkkeucuokoay)) { $gcskoooiimggowew->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::acyomymuuygeoqks => $eueuqacmukymcyya, Constants::iocouekmygsaocuo => '', $gcskoooiimggowew::equemyqwoqoousqq => time()]); } else { if (time() - strtotime($gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, $gcskoooiimggowew::equemyqwoqoousqq)) > DAY_IN_SECONDS) { $gcskoooiimggowew->gssiscqyqsacmeca()->wqikesawekycweoi($aoikqkkeucuokoay, [$gcskoooiimggowew::equemyqwoqoousqq => time()]); $ogomymegcoacqisg = $gcskoooiimggowew->waecsyqmwascmqoa($aoikqkkeucuokoay, Constants::iocouekmygsaocuo); if (!$ogomymegcoacqisg) { $ogomymegcoacqisg = $egsumesakcaaukem->src; } $this->added = true; $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if (Constants::qssgasiyswwaciwc === $sqeykgyoooqysmca) { $geoqacegumkcaskk->cawwmsmyseesuyee($eueuqacmukymcyya); $geoqacegumkcaskk->wyouyuiqisgqwgww($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->keecueggosiqseiw($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } else { $geoqacegumkcaskk->iqmcmgkyssqgoqok($eueuqacmukymcyya); $geoqacegumkcaskk->mkaaikgsosqiaiqg($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $geoqacegumkcaskk->ciuuyygmkuwgoiki($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } } } foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); } } } } }
