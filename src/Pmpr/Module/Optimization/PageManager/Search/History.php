<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eaf9d55aac3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { public $timestamps = null; const imkkyggguymaqgqi = "\x68\x61\163\x5f\162\145\x73\x75\154\164"; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x53\145\x61\x72\143\150\40\x48\151\163\x74\157\162\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\x53\x65\141\162\143\x68\x20\x48\151\x73\164\157\162\151\x65\163", PR__MDL__OPTIMIZATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\x65\x61\x72\x63\150\145\x64\40\124\145\x72\155", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\x43\157\165\x6e\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x48\141\163\x20\x52\145\163\x75\154\164", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\164\x61\x74\165\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\x50\145\156\144\x69\x6e\147", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\x41\144\144\145\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::ewaqwooqoqmcoomi(); } public function ysouksugwwuisyye($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (!(Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw))) { goto mqimkwickkgqqeoi; } $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; mqimkwickkgqqeoi: if (!($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei))) { goto kwyimqumkuuyaiku; } $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; kwyimqumkuuyaiku: if (!$auuqggkaeoomcksu) { goto ceiuqsiqgiuiekem; } $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->oqomcmyuuakigusk([Constants::squoamkioomemiyi => Pattern::usoeisyyakwkuyoy, Pattern::usoeisyyakwkuyoy => Constants::yayciqueeakqwese]); if (!$eouekqmooogkoqoo) { goto mceucsaeouuwyumm; } $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\x2f\77\163\x3d{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->keeuqgyooycqoygw($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if (!($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq])) { goto gkqiqaqecmoogmaa; } $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; gkqiqaqecmoogmaa: mceucsaeouuwyumm: ceiuqsiqgiuiekem: return parent::ysouksugwwuisyye($icwicymcioeyeyek); } }
