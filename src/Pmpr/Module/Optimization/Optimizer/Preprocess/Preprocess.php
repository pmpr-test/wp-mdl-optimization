<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Preprocess; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Preprocess extends Container { const eecoycecgmkaqiuu = Optimization::eaegumogucmwsmsk . 'PROCESS_CACHE_PATH'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_footer', [$this, 'ocsioqkqegkwuqge']); $this->waqewsckuayqguos('before_enqueue_assets', [$this, 'enqueue']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('require_directories', [$this, 'iwuqgygmkcsiakgk']); } public function mameiwsayuyquoeq() { $this->sccckmuaasqgwksq(); $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } else { if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Engine::symcgieuakksimmu(); } } } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::eecoycecgmkaqiuu, "{$skacuygeqykiwiwy}/process"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, 'process-cache-path', __('Process Cache Path', PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::eecoycecgmkaqiuu); return $msyoeiaqaaseqiaw; } public function imeesuuesuaeekqe() { $kuukgwkwsqqiusug = $this->isgmmgcaqsguwias()->asgqmkcukouykiie(); return $kuukgwkwsqqiusug->eeegakaauwcyugqy() && $kuukgwkwsqqiusug->ccmqswoueyeqkoeq('pr-opt-preprocess') && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->syukqeyowauuucwi(); } public function ocsioqkqegkwuqge() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $oiqkocciuiuqggew = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->souwykwwmyygqyqi($this, 'postprocess.js'); if ($oiqkocciuiuqggew) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); echo $swqimwqeweekeusq->ssqqsemoqaeqcqka($oiqkocciuiuqggew, ['class' => 'pr-opt-postprocess']); } } if ($this->imeesuuesuaeekqe()) { $oqkcmcewgaqymmoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->souwykwwmyygqyqi($this, 'lcp-extractor.js'); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka($oqkcmcewgaqymmoe, ['class' => 'pr-opt-lcp-extractor']); } } public function enqueue($wuomgsuaoscwgsmq) { if (($wuomgsuaoscwgsmq === Constants::iickqyckyaqcaokm || $wuomgsuaoscwgsmq === Constants::qiaqeaemuukkikmi) && !$this->imeesuuesuaeekqe()) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $uescmseksquycukc = false; $qsuygaucsawsekqe = $this->weysguygiseoukqw(Setting::wuqwkgmeyuueyoiu, Constants::ALL); if (Constants::ALL === $qsuygaucsawsekqe) { $uescmseksquycukc = true; } else { if (Constants::skogicecygyyskkq === $qsuygaucsawsekqe && $eiicaiwgqkgsekce->amkiaqeamgywsygm()) { $uescmseksquycukc = true; } else { if (Constants::oceskmgmuoseisoq === $qsuygaucsawsekqe && $eiicaiwgqkgsekce->qsqicssyqieuqooy()) { $uescmseksquycukc = true; } else { if (Constants::mcaucuyeeiwsmmuy === $qsuygaucsawsekqe && $eiicaiwgqkgsekce->swgywqyswmcgguwi()) { $uescmseksquycukc = true; } } } } if ($uescmseksquycukc) { $smsecggugiykoeuu = $this->weysguygiseoukqw(Setting::usgieaikqgumccyy, Constants::ygoseweigiigswiu); $uescmseksquycukc = false; if (Constants::ygoseweigiigswiu === $smsecggugiykoeuu) { $uescmseksquycukc = true; } else { $okomeuoyuwcwaaui = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); if (Constants::meksegaoamowuwoq === $smsecggugiykoeuu && $okomeuoyuwcwaaui) { $uescmseksquycukc = true; } else { if (Constants::mmukckwymiasqioi === $smsecggugiykoeuu && !$okomeuoyuwcwaaui) { $uescmseksquycukc = true; } } } } if ($uescmseksquycukc) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $kuoicyiuewoqyaqe = $meakksicouekcgoe->owygwqwawqoiusis($this, 'preprocess', 'preprocess.js')->okawmmwsiuauwsiu(); $emyyewkaomeacwgw = $this->iuygowkemiiwqmiw('iframe_style.css', ['resolutions' => $this->kmuweyayaqoeqiyw()->eiqmgkyumaiemwiq()]); $kswaimykcacqyaay = $meakksicouekcgoe->awgyqswkqywwmkye($this, 'preprocess')->awagieqcmmwkgwgs($emyyewkaomeacwgw)->mimekgmssueakiwu(true); $wqsyimmcqogaosaq = [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy]; switch ($this->weysguygiseoukqw(Setting::qiosyucmyuqcgucq, Constants::ygoseweigiigswiu)) { case Constants::iickqyckyaqcaokm: $meakksicouekcgoe->yawoscugkyysowie($kswaimykcacqyaay)->yawoscugkyysowie($kuoicyiuewoqyaqe)->qgkgieacuwasgiuy($this, $wqsyimmcqogaosaq); break; case Constants::qiaqeaemuukkikmi: $meakksicouekcgoe->qeqgammgesiwiysc($kswaimykcacqyaay)->qeqgammgesiwiysc($kuoicyiuewoqyaqe)->ceuoqiqwoyuqyewe($this, $wqsyimmcqogaosaq); break; case Constants::ygoseweigiigswiu: default: $meakksicouekcgoe->yawoscugkyysowie($kswaimykcacqyaay)->yawoscugkyysowie($kuoicyiuewoqyaqe)->qgkgieacuwasgiuy($this, $wqsyimmcqogaosaq); $meakksicouekcgoe->qeqgammgesiwiysc($kswaimykcacqyaay)->qeqgammgesiwiysc($kuoicyiuewoqyaqe)->ceuoqiqwoyuqyewe($this, $wqsyimmcqogaosaq); break; } } } } }
