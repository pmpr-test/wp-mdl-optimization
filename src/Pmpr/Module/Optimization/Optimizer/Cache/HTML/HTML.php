<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Preload; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge\Purge; class HTML extends Common { const ucgeywccqcsggsyw = Optimization::eaegumogucmwsmsk . 'HTML_CACHE_PATH'; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->sccckmuaasqgwksq(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('require_directories', [$this, 'iwuqgygmkcsiakgk'])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'configurations', [$this, 'mkosysuyuoyqksqo'])->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'is_cached', [$this, 'wwsyamkkyauwseyg'], 10, 3)->aqaqisyssqeomwom(Optimization::kgswyesggeyekgmg . 'get_html_cached_file_path', [$this, 'myacckeseciqqmka'], 10, 3); } public function mameiwsayuyquoeq() { Purge::symcgieuakksimmu(); Preload::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Advanced::symcgieuakksimmu(); } } public function myacckeseciqqmka($mkomwsiykqigmqca, $eeamcawaiqocomwy, $syowsmcowosssaos = null) { return $this->cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos); } public function sccckmuaasqgwksq() : bool { $ksaameoqigiaoigg = false; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($skacuygeqykiwiwy = $miiyyswuessymmwe->cmaecekuqkwmemms(Constants::umciwouwwsyqumae)) { $ksaameoqigiaoigg = $miiyyswuessymmwe->koymmiyegyskqgck(self::ucgeywccqcsggsyw, "{$skacuygeqykiwiwy}/html"); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, 'html-cache-path', __('HTML Cache Path', PR__MDL__OPTIMIZATION), $skacuygeqykiwiwy); } return $ksaameoqigiaoigg; } public function wwsyamkkyauwseyg($skqeckgiuieeusoy, ?string $migiiksoiymissge, ?string $syowsmcowosssaos = null) : bool { return $this->ysuiqkgycmagqqyu($migiiksoiymissge, $syowsmcowosssaos); } public function iwuqgygmkcsiakgk($msyoeiaqaaseqiaw) : array { $msyoeiaqaaseqiaw[] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(self::ucgeywccqcsggsyw); return $msyoeiaqaaseqiaw; } public function mkosysuyuoyqksqo(array $oyuikeusicgqgwak) : array { $oyuikeusicgqgwak['gzip_enable'] = $this->weysguygiseoukqw(Setting::wqumaksaywyiiukw) ? 1 : 0; $oyuikeusicgqgwak['mobile_cache'] = $this->weysguygiseoukqw(Setting::egcsacmywomuowsc) ? 1 : 0; $oyuikeusicgqgwak['cache_enable'] = $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi) ? 1 : 0; return $oyuikeusicgqgwak; } }
