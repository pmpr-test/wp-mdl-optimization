<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580826ed61d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if ($this->gimogqqgyqwiwsmi()) { $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if ($ksaameoqigiaoigg) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\x63\x68\145\x5f\150\x74\155\x6c\137\141\154\154\137\160\x75\162\x67\x65\144", ...$ywmkwiwkosakssii); } } return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (is_string($ccamueccusigaaio)) { $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\141\x63\x68\x65\x5f\x68\x74\155\x6c\x5f\165\162\x6c\x5f\x70\x75\162\147\145\x64", $ccamueccusigaaio); return true; } return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\x68\x65\137\x68\164\x6d\x6c\x5f\160\165\162\147\145\x5f\x75\x72\x6c\163", $auwuoyyagaiegwae); if (empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi()) { return false; } foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x61\143\x68\x65\x5f\x68\x74\155\x6c\x5f\165\x72\154\163\x5f\x70\x75\x72\x67\145\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if (!$this->gimogqqgyqwiwsmi()) { return false; } return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if (!$this->gimogqqgyqwiwsmi()) { return false; } return true; } public function ussmokeesuogauca($post) : bool { if (!$this->gimogqqgyqwiwsmi()) { return false; } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { return false; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (is_numeric($post)) { $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); } if (!is_object($post)) { return false; } if (!$gcqseksiskwueksc) { $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); } static $gqiuywqwmiieqcww = []; if (isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { return false; } $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true)) { return false; } $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if ($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca)) { return false; } $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\160\157\163\164\x5f\x70\165\x72\147\x65\137\x75\162\154\x73", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x62\145\146\157\x72\145\137\x63\154\145\141\156\137\160\157\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\141\146\x74\145\162\137\x63\x6c\145\x61\156\137\160\x6f\163\164", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if (!$this->gimogqqgyqwiwsmi()) { return false; } $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { $this->ussmokeesuogauca($mksyucucyswaukig); } else { if ($mksyucucyswaukig instanceof WP_Term) { $this->syicukiqeoyaqsok($mksyucucyswaukig); } else { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); } } } return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if (!$this->gimogqqgyqwiwsmi()) { return false; } $ocqawgquwsqioses = Page::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); } return true; } }
