<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f13d321859c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto giiucsyqgcooaima; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto qcywwqceiqogcoyo; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\x63\150\145\x5f\x68\x74\155\x6c\x5f\x61\x6c\154\x5f\160\x75\x72\x67\x65\x64", ...$ywmkwiwkosakssii); qcywwqceiqogcoyo: giiucsyqgcooaima: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto awikkaqmmuqkukma; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\150\145\x5f\x68\164\155\154\137\x75\x72\x6c\x5f\x70\165\x72\147\x65\144", $ccamueccusigaaio); return true; awikkaqmmuqkukma: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\141\143\x68\145\x5f\x68\x74\x6d\154\137\x70\x75\x72\x67\145\137\165\162\x6c\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto uckeuuaqimqamuyc; } return false; uckeuuaqimqamuyc: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); uqkqmseoeemyaqck: } mieeugiewckceagc: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\x63\x68\x65\x5f\150\x74\155\x6c\x5f\165\x72\x6c\x73\137\x70\165\x72\x67\x65\x64", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto cceyoumkiicaguio; } return false; cceyoumkiicaguio: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yayykakkyeoieicm; } return false; yayykakkyeoieicm: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yuiouamaogkkqmck; } return false; yuiouamaogkkqmck: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto mmwqwowqcaseyyki; } return false; mmwqwowqcaseyyki: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto wsckacayikksiswo; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); wsckacayikksiswo: if (is_object($post)) { goto qiawociayswicugw; } return false; qiawociayswicugw: if ($gcqseksiskwueksc) { goto ngagwiymmmycgscu; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); ngagwiymmmycgscu: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto qimomesqamyyicmo; } return false; qimomesqamyyicmo: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true))) { goto kkacggiosquqagew; } return false; kkacggiosquqagew: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto augqweqsqioesmim; } return false; augqweqsqioesmim: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\160\x6f\x73\x74\x5f\160\165\x72\147\145\137\165\162\154\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x62\145\146\157\162\x65\137\143\x6c\x65\x61\x6e\x5f\x70\157\x73\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x61\x66\x74\145\162\x5f\x63\154\145\141\x6e\x5f\160\157\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto aescssauecumgwso; } return false; aescssauecumgwso: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto qkwckeqowgaokkuy; } if ($mksyucucyswaukig instanceof WP_Term) { goto qcceyyqiuiqcyqqm; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto cooeoemccqiyewks; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); cooeoemccqiyewks: goto ssesmiwwmsayksum; qcceyyqiuiqcyqqm: $this->syicukiqeoyaqsok($mksyucucyswaukig); ssesmiwwmsayksum: goto kqkymieyyqaoeymw; qkwckeqowgaokkuy: $this->ussmokeesuogauca($mksyucucyswaukig); kqkymieyyqaoeymw: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto gqyyccceswkqcmaa; } return false; gqyyccceswkqcmaa: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); mquyemuqcqeassqc: } sykuuisikqcwuaqu: return true; } }
