<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832e82cef8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const yeamoseqmucsywce = Optimization::kgswyesggeyekgmg . 'speed_test_job_'; const eqcogaqyemgysumq = self::yeamoseqmucsywce . 'test_url'; const asueeykmyygakoqs = self::yeamoseqmucsywce . 'check_finished'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= SpeedTest::quouokcgsyacigiu; } public function gkimgkucuskgagqo(string $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy = 0) : int { $ksaameoqigiaoigg = 0; if (!$this->nigymiakyccmemgy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::eqcogaqyemgysumq, [$eeamcawaiqocomwy, $qkcoyiyeuoyyoocy]); } return $ksaameoqigiaoigg; } public function nigymiakyccmemgy(string $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy = 0) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::eqcogaqyemgysumq, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$eeamcawaiqocomwy, $qkcoyiyeuoyyoocy]]); } public function mkgmgessyuewwswa($cqgoimumaewouews, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy = 0) : int { $ksaameoqigiaoigg = 0; if (!$this->ewgessyekekkocey($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time() + (int) $cqgoimumaewouews, self::asueeykmyygakoqs, [$eeamcawaiqocomwy, $qkcoyiyeuoyyoocy]); } return $ksaameoqigiaoigg; } public function ewgessyekekkocey($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy = 0) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::asueeykmyygakoqs, Constants::okeuagwgwkmiokac => [$eeamcawaiqocomwy, $qkcoyiyeuoyyoocy], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
