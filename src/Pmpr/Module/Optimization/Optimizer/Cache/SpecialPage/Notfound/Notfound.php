<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16935c302e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Notfound\Purge\Purge; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine as BufferEngine; class Notfound extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'csmiekwkyqmeaokc']); if ($this->weysguygiseoukqw(Setting::fwkqowooyacumyaw, false)) { $this->qcsmikeggeemccuu('template_redirect', [$this, 'ymyqquywsgiesgga'], 9999); } } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::fwkqowooyacumyaw, false)) { $this->cecaguuoecmccuse(Optimization::kgswyesggeyekgmg . 'has_wp_404_test', '__return_false'); } } public function csmiekwkyqmeaokc() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if (!$owaoeyikmqaeegma->mcgoysmkqsqooceq() && !$owaoeyikmqaeegma->somkqoqeimmeemuq()) { $gqkqacakewkecqie = 'NOTFOUND_CACHE_PATH'; if ($owaoeyikmqaeegma->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew)) { $gqkqacakewkecqie = strtoupper("{$this->caokeucsksukesyo()->giiecckwoyiawoyy()->akoiqeemqgmakecu()}_{$gqkqacakewkecqie}"); } if (!$owaoeyikmqaeegma->cmaecekuqkwmemms($gqkqacakewkecqie)) { $this->caokeucsksukesyo()->iuekyyeesukysksy()->gwmwcmygyoggugeo($gqkqacakewkecqie, $this->uykissogmuaaocsg()->gskqygiceygcguyo()); } } } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Advanced::symcgieuakksimmu(); } Purge::symcgieuakksimmu(); } public function ymyqquywsgiesgga() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kmmyuiwaogukwqqi() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->miccagckiqwseasi()) { $this->uykissogmuaaocsg()->kywqieosgkokaiue($this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua()); $muggekwisiwswoms = $this->uykissogmuaaocsg()->wuceuyakuwiquase(); if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($muggekwisiwswoms)) { ob_start([$this, 'uekoysccwuggeeuu']); } } } public function uekoysccwuggeeuu($moooemyaqewumiay) { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->iekaosoqsgqsysoo()) { $moooemyaqewumiay = (string) $this->ocksiywmkyaqseou(BufferEngine::scskcyisyowcuagq, $moooemyaqewumiay); } $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($this->uykissogmuaaocsg()->wuceuyakuwiquase(), $moooemyaqewumiay); return $moooemyaqewumiay; } public function uykissogmuaaocsg() : Engine { return Engine::symcgieuakksimmu(); } }
