<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832450bd77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Preprocess; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Process; class Ajax extends Container { const wiysygukkaksueso = Optimization::kgswyesggeyekgmg . 'preprocess_'; const gsksgwgqaeiaawuc = self::wiysygukkaksueso . 'get_pages'; const ukoqaoiuiwccqise = self::wiysygukkaksueso . 'update_pages'; const myikkigscysoykgy = ['get_pages' => self::gsksgwgqaeiaawuc, 'update_pages' => self::ukoqaoiuiwccqise]; public function wigskegsqequoeks() { if (Constants::meksegaoamowuwoq === $this->weysguygiseoukqw(Setting::usgieaikqgumccyy)) { $this->koaegcswmcqsiykq(self::gsksgwgqaeiaawuc, [$this, 'ikegiwagmqmqgyuy'])->koaegcswmcqsiykq(self::ukoqaoiuiwccqise, [$this, 'smysqgeymoowmkek']); } else { $this->iqkqummseggmikgo(self::gsksgwgqaeiaawuc, [$this, 'ikegiwagmqmqgyuy'])->iqkqummseggmikgo(self::ukoqaoiuiwccqise, [$this, 'smysqgeymoowmkek']); } } public function ikegiwagmqmqgyuy() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $acoioasmiqcwagsa = Process::symcgieuakksimmu(); $saqmwwmqiwmkiwaa = 'Y-m-d H:i:s'; $gqgigyscewseokiu = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->gwgmymsuwsceguce(); $cqqwkwcucqekuwwg = 2; $kgeoggeyyusykauw = $this->weysguygiseoukqw(Setting::osokwigiaoiewoqk, 5); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ocqawgquwsqioses = $iuekmkswcsacoawq->iekyeyicoyyawomk()->cieaqygkucwoqwke($eqwoegegiamegqsm->kyckwuuiqwmyoqma()->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($iuekmkswcsacoawq::yukmawwgmqmimegw)->ggmcoioqwgyccyus())->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->asumqyigwsqmyeoc($acoioasmiqcwagsa)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($acoioasmiqcwagsa::iyqqaqwigoycggme, date($saqmwwmqiwmkiwaa, $gqgigyscewseokiu - $kgeoggeyyusykauw * $cqqwkwcucqekuwwg * 8))->wiqiksaowkoeiymu()->maqiysyuqmwcqoig(Constants::ywkoysmgqmmoasyy)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($acoioasmiqcwagsa::iyqqaqwigoycggme)->wegeyaguowmkqiac()->iygikqkegwkaaess()))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->asumqyigwsqmyeoc($acoioasmiqcwagsa)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($acoioasmiqcwagsa::igcqykwsmcgkskwe, 0)->maqiysyuqmwcqoig(Constants::ywkoysmgqmmoasyy)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($acoioasmiqcwagsa::igcqykwsmcgkskwe)->wegeyaguowmkqiac()->iygikqkegwkaaess()))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim($iuekmkswcsacoawq::ewyamgkooeqiecwg)->amwwousckkqyweok())->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq($iuekmkswcsacoawq::uyeaawkisqygakmy)->yogqsokgsqemsuoq())->wsacuksekeaemucu($kgeoggeyyusykauw), [$iuekmkswcsacoawq->kmgukcsewikeswco($iuekmkswcsacoawq->kumuygiiqswoyasy(), Constants::egukegmcemkeegqq), $acoioasmiqcwagsa->kmgukcsewikeswco($acoioasmiqcwagsa->kumuygiiqswoyasy(), Page::yukmawwgmqmimegw), $iuekmkswcsacoawq->myywwqkyiwawwquy(Constants::auqoykcmsiauccao), $iuekmkswcsacoawq->myywwqkyiwawwquy($iuekmkswcsacoawq::uyeaawkisqygakmy)]); $keccaugmemegoimu = []; if ($ocqawgquwsqioses) { $ocogsiouoiuuguym = date($saqmwwmqiwmkiwaa, $gqgigyscewseokiu); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, Constants::auqoykcmsiauccao); $qkcoyiyeuoyyoocy = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, Constants::egukegmcemkeegqq); if ($eeamcawaiqocomwy && $qkcoyiyeuoyyoocy) { $oakymgscysyssksa = true; if (!isset($keccaugmemegoimu[$eeamcawaiqocomwy])) { $oakymgscysyssksa = false; $keccaugmemegoimu[$eeamcawaiqocomwy] = [Constants::gouqcwikiiygyasc => $qkcoyiyeuoyyoocy, Constants::auqoykcmsiauccao => $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy)]; } if ($qgqawkmgqcigesqk = $gkyciwoiiisgywcs->get($suaemuyiacqyugsm, Page::yukmawwgmqmimegw)) { if ($oakymgscysyssksa) { $acoioasmiqcwagsa->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($qgqawkmgqcigesqk); } else { $acoioasmiqcwagsa->gssiscqyqsacmeca()->wqikesawekycweoi($qgqawkmgqcigesqk, [$acoioasmiqcwagsa::iyqqaqwigoycggme => $ocogsiouoiuuguym]); } } else { if (!$oakymgscysyssksa) { $sogksuscggsicmac = $acoioasmiqcwagsa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::egukegmcemkeegqq => $qkcoyiyeuoyyoocy, $acoioasmiqcwagsa::iyqqaqwigoycggme => $ocogsiouoiuuguym]); } } } } $keccaugmemegoimu = array_values($keccaugmemegoimu); $occymigcemkqucuw = true; } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function smysqgeymoowmkek() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $ecumkkysssoascmg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::yusuiaeueqwieqqq); if ($ecumkkysssoascmg && is_array($ecumkkysssoascmg)) { $keccaugmemegoimu = __('Updated successfully.', PR__MDL__OPTIMIZATION); $acoioasmiqcwagsa = Process::symcgieuakksimmu(); foreach ($ecumkkysssoascmg as $qkcoyiyeuoyyoocy => $aasekyoqiwumiqom) { $yuymkuycuoyucucu = $acoioasmiqcwagsa->iekyeyicoyyawomk()->akkkoiiymmamsauc($qkcoyiyeuoyyoocy, Constants::egukegmcemkeegqq); $csqeoswygaamwgqk = $aasekyoqiwumiqom[$acoioasmiqcwagsa::aseoemqucqqamsky] ?? []; $gyskaqycyaywiiyi = $aasekyoqiwumiqom[Constants::mayesweykoooyugy] ?? []; $cquauiyyegoequum = $aasekyoqiwumiqom[$acoioasmiqcwagsa::ikkumeueakggamkk] ?? []; if ($csqeoswygaamwgqk) { if ($yuymkuycuoyucucu) { $icwicymcioeyeyek = (array) $yuymkuycuoyucucu; } else { $icwicymcioeyeyek = [Constants::egukegmcemkeegqq => $qkcoyiyeuoyyoocy]; } $icwicymcioeyeyek[$acoioasmiqcwagsa::aseoemqucqqamsky] = $csqeoswygaamwgqk; $icwicymcioeyeyek[Constants::mayesweykoooyugy] = $gyskaqycyaywiiyi; $icwicymcioeyeyek[$acoioasmiqcwagsa::igcqykwsmcgkskwe] = 1; $icwicymcioeyeyek[$acoioasmiqcwagsa::ikkumeueakggamkk] = $cquauiyyegoequum; $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . 'purge_elected_page_html_cache', $qkcoyiyeuoyyoocy); $keccaugmemegoimu = $acoioasmiqcwagsa->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; } else { $occymigcemkqucuw = false; if (empty($keccaugmemegoimu)) { $keccaugmemegoimu = sprintf('%s: %s', __('can not save process data, unknown error', PR__MDL__OPTIMIZATION), print_r($icwicymcioeyeyek, true)); } break; } } else { $keccaugmemegoimu = __('LCP item can not be empty.', PR__MDL__OPTIMIZATION); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
