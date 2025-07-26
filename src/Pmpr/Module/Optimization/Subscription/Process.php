<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68855802117a9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Queue; class Process extends Queue { const coeiogimesmgases = Optimization::kgswyesggeyekgmg . 'job_fetch_purchases'; const yagmsygwcocaqmqy = Optimization::kgswyesggeyekgmg . 'job_fetch_subscription_data'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'subscription'; } public function gqgseoowsgqemmgu() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), DAY_IN_SECONDS, self::yagmsygwcocaqmqy); } public function gposkkqsquyqiguk($suaemuyiacqyugsm = 1) : int { $ksaameoqigiaoigg = 0; if (!$this->wkoqewmcaeoycyic($suaemuyiacqyugsm)) { $ksaameoqigiaoigg = $this->ksicwcssyugsigka(time(), self::coeiogimesmgases, [$suaemuyiacqyugsm]); } return $ksaameoqigiaoigg; } public function wkoqewmcaeoycyic($suaemuyiacqyugsm) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::coeiogimesmgases, Constants::okeuagwgwkmiokac => [$suaemuyiacqyugsm], Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
