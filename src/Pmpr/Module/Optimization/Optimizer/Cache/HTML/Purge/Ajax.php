<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; class Ajax extends Common { const wiysygukkaksueso = Optimization::kgswyesggeyekgmg . 'html_cache_purge_'; const iwwywemssqeoymem = self::wiysygukkaksueso . 'all'; const qqeiugkgqcoamkma = self::wiysygukkaksueso . 'by_page'; const eygwqkkugcmssaia = self::wiysygukkaksueso . 'by_target'; const aeoycouymmoiyqys = self::wiysygukkaksueso . 'by_pattern'; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::iwwywemssqeoymem, [$this, 'qsiwaqwsyasqsqcq'])->koaegcswmcqsiykq(self::qqeiugkgqcoamkma, [$this, 'megokskeiiacqoii'])->koaegcswmcqsiykq(self::eygwqkkugcmssaia, [$this, 'ocoekqiwqcoyysmm'])->koaegcswmcqsiykq(self::aeoycouymmoiyqys, [$this, 'igkscowaqiikiwam']); } public function qsiwaqwsyasqsqcq() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true, Constants::oomaageiyqkaiekk, Page::qwmouieeiikqoewq); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $this->uykissogmuaaocsg()->qsiwaqwsyasqsqcq(); $occymigcemkqucuw = true; $keccaugmemegoimu = __('Cache purged successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function megokskeiiacqoii() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true, Constants::oomaageiyqkaiekk, Page::qwmouieeiikqoewq); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $qkcoyiyeuoyyoocy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::imywcsggckkcywgk); if ($qkcoyiyeuoyyoocy) { if ($this->uykissogmuaaocsg()->megokskeiiacqoii($qkcoyiyeuoyyoocy)) { $occymigcemkqucuw = true; $keccaugmemegoimu = __('Page\'s cache purged successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not purge cache right now. please try later.', PR__MDL__OPTIMIZATION)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function ocoekqiwqcoyysmm() { } public function igkscowaqiikiwam() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true, Constants::oomaageiyqkaiekk, Page::qwmouieeiikqoewq); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $sameaqkagyqomooq = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Page::ewyamgkooeqiecwg); if ($sameaqkagyqomooq) { if ($this->uykissogmuaaocsg()->igkscowaqiikiwam($sameaqkagyqomooq)) { $occymigcemkqucuw = true; $keccaugmemegoimu = __('Pattern\'s pages cache purged successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = __('Can not purge cache right now. please try later.', PR__MDL__OPTIMIZATION); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } private function uykissogmuaaocsg() : Engine { return Engine::symcgieuakksimmu(); } }
