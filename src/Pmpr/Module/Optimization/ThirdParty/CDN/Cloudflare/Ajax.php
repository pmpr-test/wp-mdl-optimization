<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832450bd77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Common { const wiysygukkaksueso = Cloudflare::kakkwkmmmaykeoeq . 'ajax_'; const ucmguokmyauimyuo = self::wiysygukkaksueso . 'enable_cache'; const aiqicomasiaaagiu = self::wiysygukkaksueso . 'disable_dev_mode'; const ccyqqagwskwauoem = ['enable_cache' => self::ucmguokmyauimyuo, 'disable_dev_mode' => self::aiqicomasiaaagiu]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ucmguokmyauimyuo, [$this, 'qmykgskisgoyymoc'])->koaegcswmcqsiykq(self::aiqicomasiaaagiu, [$this, 'mmqmqkeaccugoesg']); parent::wigskegsqequoeks(); } public function mmqmqkeaccugoesg() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wewwcsywcagywaay = $goqqimcssiyagkwy->omimwscgequgiaue(); if (!is_wp_error($wewwcsywcagywaay)) { $keccaugmemegoimu = $goqqimcssiyagkwy->emukusgiakigsoms(Constants::OFF); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::waugumayqaqkeeqq, Constants::OFF); $occymigcemkqucuw = true; $keccaugmemegoimu = __('Cloudflare\'s development mode disabled successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not disable Cloudflare\'s development mode.', PR__MDL__OPTIMIZATION)); } } } else { $keccaugmemegoimu = $wewwcsywcagywaay; } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function qmykgskisgoyymoc() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); $wewwcsywcagywaay = $goqqimcssiyagkwy->omimwscgequgiaue(); if (!is_wp_error($wewwcsywcagywaay)) { $keccaugmemegoimu = $goqqimcssiyagkwy->qmykgskisgoyymoc(); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { $occymigcemkqucuw = true; $keccaugmemegoimu = __('Cloudflare\'s cache enabled successfully.', PR__MDL__OPTIMIZATION); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not enable Cloudflare\'s cache.', PR__MDL__OPTIMIZATION)); } } } else { $keccaugmemegoimu = $wewwcsywcagywaay; } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
