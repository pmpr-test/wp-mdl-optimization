<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832450bd77             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; class Ajax extends Container { use SubscriptionEngineTrait; const wiysygukkaksueso = Optimization::kgswyesggeyekgmg . Constants::eoigaocgcaekssuw . '_'; const gscgcgiueooisosy = self::wiysygukkaksueso . 'sync_action'; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::gscgcgiueooisosy, [$this, 'cqiagyoougcaguki']); } public function cqiagyoougcaguki() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { $keccaugmemegoimu = $this->cqscwmqsgomkogoq()->acgeiccowcqiwmqa(); Process::symcgieuakksimmu()->gposkkqsquyqiguk(); if (!is_wp_error($keccaugmemegoimu)) { if (empty($keccaugmemegoimu)) { $keccaugmemegoimu = __('fetched data is empty.', PR__MDL__OPTIMIZATION); } else { $occymigcemkqucuw = true; $keccaugmemegoimu = __('Data fetched successfully.', PR__MDL__OPTIMIZATION); } } } else { $keccaugmemegoimu = __('You have no permission to do this.', PR__MDL__OPTIMIZATION); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
