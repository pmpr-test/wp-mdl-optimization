<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673b8c4541eb2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\SpecialPage\Search\Setting; use Pmpr\Module\Optimization\PageManager\Model\Common; use Pmpr\Module\Optimization\PageManager\Model\Page; use Pmpr\Module\Optimization\PageManager\Model\Pattern; class History extends Common { const imkkyggguymaqgqi = "\x68\141\x73\x5f\x72\x65\163\x75\x6c\x74"; public function register() { $this->guiaswksukmgageq(__("\123\x65\x61\162\x63\x68\x20\x48\151\163\x74\157\162\x79", PR__MDL__OPTIMIZATION))->muuwuqssqkaieqge(__("\123\145\141\162\x63\x68\x20\110\151\163\x74\157\162\151\145\163", PR__MDL__OPTIMIZATION)); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, "\171\x65\x75\x79\171\143\153\x73\x65\157\x69\157\x6b\155\155\155"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::yoayaissyomokiui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\123\x65\x61\x72\143\x68\x65\x64\40\124\145\162\x6d", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->vsuwiusoqmuueegu(Constants::qiyqwyiiwykeccmo)->ogymmssscoqeuyye()->gswweykyogmsyawy(__("\103\x6f\x75\156\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->omkueasmegecueyk(self::imkkyggguymaqgqi)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\110\x61\x73\x20\122\145\x73\165\x6c\x74", PR__MDL__OPTIMIZATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\123\x74\x61\x74\x75\163", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\120\145\x6e\144\x69\x6e\x67", PR__MDL__OPTIMIZATION))->kesomeowemmyygey(2, Constants::cqymgkkgeosmoowe, __("\101\x64\x64\x65\x64", PR__MDL__OPTIMIZATION))->eyygsasuqmommkua(Constants::sgoswgskyiiwkyuo)); parent::uwmqacgewuauagai(); } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { $auuqggkaeoomcksu = true; $kcawyocaiuqkigag = Search::symcgieuakksimmu(); if (Constants::yuwueyysmgkecygw === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::ckekocwocaogoeye, Constants::yuwueyysmgkecygw)) { $gaeqamemwmwsyukm = (int) $kcawyocaiuqkigag->weysguygiseoukqw(Setting::mwcsquoskuckeweg, 10); $auuqggkaeoomcksu = $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo] >= $gaeqamemwmwsyukm; } if ($auuqggkaeoomcksu && Constants::qwssyugmmaoeqiei === $kcawyocaiuqkigag->weysguygiseoukqw(Setting::okomcksyqygykaoo, Constants::qwssyugmmaoeqiei)) { $auuqggkaeoomcksu = (bool) $icwicymcioeyeyek[self::imkkyggguymaqgqi]; } if ($auuqggkaeoomcksu) { $jwkieqegmyuwayce = Pattern::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $eouekqmooogkoqoo = $jwkieqegmyuwayce->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, Pattern::usoeisyyakwkuyoy), $eqwoegegiamegqsm->megqywqeuquawkim(Pattern::usoeisyyakwkuyoy, Constants::yayciqueeakqwese)]); if ($eouekqmooogkoqoo) { $suaemuyiacqyugsm = $this->wkagassgcaqeosio()->gmowkweososugauu("\57\77\163\x3d{$icwicymcioeyeyek[Constants::yoayaissyomokiui]}", $jwkieqegmyuwayce->mwyqswsaeeewsosm($eouekqmooogkoqoo), Constants::yayciqueeakqwese, $jwkieqegmyuwayce::usoeisyyakwkuyoy); $sogksuscggsicmac = Page::symcgieuakksimmu()->sigsaicaiyegiqea($suaemuyiacqyugsm); if ($sogksuscggsicmac && $sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = Constants::cqymgkkgeosmoowe; } } } return $icwicymcioeyeyek; } }
