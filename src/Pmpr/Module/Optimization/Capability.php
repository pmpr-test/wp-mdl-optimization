<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Role; class Capability extends Container { const kcoaiuawuucqosac = Optimization::kgswyesggeyekgmg . 'purge_cache'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'iqoguoscqueomqsk']); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . Constants::uoawqiomwkwwaucs, [$this, 'uyssmqswykageeki']); } public function iqoguoscqueomqsk() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $oeucsuyqysaciasy = $this->wqucueaimeucqqgq(); if ($oeucsuyqysaciasy) { foreach ($this->ggqekkkocygywmoy() as $eogowigeyucaauig) { if (!$oeucsuyqysaciasy->has_cap($eogowigeyucaauig)) { $oeucsuyqysaciasy->add_cap($eogowigeyucaauig); } } } } } public function uyssmqswykageeki() { if ($oeucsuyqysaciasy = $this->wqucueaimeucqqgq()) { foreach ($this->ggqekkkocygywmoy() as $eogowigeyucaauig) { if ($oeucsuyqysaciasy->has_cap($eogowigeyucaauig)) { $oeucsuyqysaciasy->remove_cap($eogowigeyucaauig); } } } } public function wqucueaimeucqqgq() : ?WP_Role { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou(Constants::wiukckegkqeumqug); } public function ggqekkkocygywmoy() : array { return [self::kcoaiuawuucqosac]; } }
