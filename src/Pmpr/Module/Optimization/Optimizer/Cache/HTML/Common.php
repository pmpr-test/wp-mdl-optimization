<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd9008d45             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; abstract class Common extends Container { public function gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { $wkcwykowmmmwioqs = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->aisuyoiqugewaocg($eeamcawaiqocomwy); if ($syowsmcowosssaos) { switch ($syowsmcowosssaos) { case Constants::skogicecygyyskkq: $wkcwykowmmmwioqs .= "\x2d\155\x6f\x62\151\154\145"; break; } } return "{$wkcwykowmmmwioqs}\x2e\150\x74\x6d\154"; } public function ysuiqkgycmagqqyu(?string $eeamcawaiqocomwy, $syowsmcowosssaos = null) : bool { if (!$syowsmcowosssaos) { $smagieqmacsmsoyo = [Constants::mcaucuyeeiwsmmuy]; if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(Setting::egcsacmywomuowsc)) { $smagieqmacsmsoyo[] = Constants::skogicecygyyskkq; } foreach ($smagieqmacsmsoyo as $qsuygaucsawsekqe) { if (!$this->ysuiqkgycmagqqyu($eeamcawaiqocomwy, $qsuygaucsawsekqe)) { return false; } } $skqeckgiuieeusoy = true; } else { $skqeckgiuieeusoy = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos)); } return $skqeckgiuieeusoy; } public function cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { return "{$this->gskqygiceygcguyo()}\x2f{$this->gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos)}"; } public function gskqygiceygcguyo() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(HTML::ucgeywccqcsggsyw, ''); } public function smemquqkamygequg() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq, ''); } }
