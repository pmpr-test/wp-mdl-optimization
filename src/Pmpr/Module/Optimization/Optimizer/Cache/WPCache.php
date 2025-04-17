<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbb9b4545             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class WPCache extends Container { const yccymuoeckqoawco = 'WP_CACHE'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'owiewgoawacoseqa'])->qcsmikeggeemccuu('admin_init', [$this, 'uiwasykyceymwome']); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, 'qmowsascuuoiwkya']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('site_status_tests', [$this, 'coaqaayyuqwwcyoc']); } public function cyuwsqokwscwayew() : string { $uaiuugsuuyomsaug = self::yccymuoeckqoawco; return $uaiuugsuuyomsaug; } public function qmowsascuuoiwkya() { if ($this->icaoaekwowiaciuq()) { $this->wwckmeoskuagomki(false); } } public function seamyyiksyoiqwio() { if ($this->icaoaekwowiaciuq()) { $this->wwckmeoskuagomki(true); } } public function owiewgoawacoseqa() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if (!$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->somkqoqeimmeemuq() && !$owaoeyikmqaeegma->cmaecekuqkwmemms($this->cyuwsqokwscwayew())) { $this->wwckmeoskuagomki(true); } } public function wwckmeoskuagomki(bool $eqgoocgaqwqcimie) { if ($this->gmogwiuggiikwewu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'set_wp_cache_define', $eqgoocgaqwqcimie); $this->caokeucsksukesyo()->iuekyyeesukysksy()->gwmwcmygyoggugeo($this->cyuwsqokwscwayew(), $eqgoocgaqwqcimie); } } public function uiwasykyceymwome() : bool { global $pagenow; $umuecysoywoumgwo = true; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($this->icaoaekwowiaciuq() && !$miiyyswuessymmwe->saugyekawkwswgag() && !$miiyyswuessymmwe->cmaecekuqkwmemms($this->cyuwsqokwscwayew()) && !('plugins.php' === $pagenow || isset($_GET['activate'])) && $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'set_wp_cache_constant', true)) { $umuecysoywoumgwo = false; $this->caokeucsksukesyo()->kwoycoqogoswycgg()->gsucycggaoeuokcg($this, 'wp-cache', __('Cache', PR__MDL__OPTIMIZATION), 'wp-config.php'); } return $umuecysoywoumgwo; } private function gmogwiuggiikwewu(bool $eqgoocgaqwqcimie) : bool { if (!$this->icaoaekwowiaciuq() && $eqgoocgaqwqcimie === true && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->cmaecekuqkwmemms($this->cyuwsqokwscwayew())) { $wkmscmcqquakoiwg = false; } else { $wkmscmcqquakoiwg = (bool) $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'set_wp_cache_constant', true); } return $wkmscmcqquakoiwg; } public function coaqaayyuqwwcyoc(array $ccsoeyocyqiuuwgs) : array { $ccsoeyocyqiuuwgs['direct']['wp_cache_status'] = [Constants::uissasisiuymwsmu => __('WP_CACHE value', PR__MDL__OPTIMIZATION), Constants::icmsomqycwcgugoc => [$this, 'mkamosiueooyiius']]; return $ccsoeyocyqiuuwgs; } public function mkamosiueooyiius() : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $sogksuscggsicmac = [Constants::gmaoeaweycmccakg => [Constants::uissasisiuymwsmu => __('Cache', PR__MDL__OPTIMIZATION)], Constants::eqkeooqcsscoggia => $swqimwqeweekeusq->gusouagusgyoaeya(__('The WP_CACHE constant needs to be set to true for Cache to work properly', PR__MDL__OPTIMIZATION)), Constants::myikkigscysoykgy => '', Constants::icmsomqycwcgugoc => 'wp_cache_status']; $eqgoocgaqwqcimie = $swqimwqeweekeusq->cmaecekuqkwmemms($this->cyuwsqokwscwayew()); if (true === $eqgoocgaqwqcimie) { $sogksuscggsicmac[Constants::uissasisiuymwsmu] = __('WP_CACHE is set to true', PR__MDL__OPTIMIZATION); $sogksuscggsicmac[Constants::ciywsqoeiymemsys] = 'good'; $sogksuscggsicmac[Constants::gmaoeaweycmccakg][Constants::igssuqwuicwawgam] = 'green'; return $sogksuscggsicmac; } if (null === $eqgoocgaqwqcimie) { $sogksuscggsicmac[Constants::uissasisiuymwsmu] = __('WP_CACHE is not set', PR__MDL__OPTIMIZATION); $sogksuscggsicmac[Constants::ciywsqoeiymemsys] = 'critical'; $sogksuscggsicmac[Constants::gmaoeaweycmccakg][Constants::igssuqwuicwawgam] = 'red'; return $sogksuscggsicmac; } if (false === $eqgoocgaqwqcimie) { $sogksuscggsicmac[Constants::uissasisiuymwsmu] = __('WP_CACHE is set to false', PR__MDL__OPTIMIZATION); $sogksuscggsicmac[Constants::ciywsqoeiymemsys] = 'critical'; $sogksuscggsicmac[Constants::gmaoeaweycmccakg][Constants::igssuqwuicwawgam] = 'red'; return $sogksuscggsicmac; } return $sogksuscggsicmac; } public function icaoaekwowiaciuq() : bool { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() && $this->kmuweyayaqoeqiyw()->sgcwgmoayikkysaq(); } }
