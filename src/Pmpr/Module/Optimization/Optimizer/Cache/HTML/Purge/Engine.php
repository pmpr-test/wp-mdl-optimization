<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4c436ce06             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Setting; use Pmpr\Module\Optimization\Optimizer\Cache\Purge\Engine as BaseClass; use Pmpr\Module\Optimization\PageManager\Model\Page; use WP_Post; use WP_Term; class Engine extends BaseClass { public function gimogqqgyqwiwsmi() : bool { return (bool) $this->weysguygiseoukqw(Setting::aqaeiauuykqeiyoi, false); } public function qsiwaqwsyasqsqcq(...$ywmkwiwkosakssii) : bool { $ksaameoqigiaoigg = false; if (!$this->gimogqqgyqwiwsmi()) { goto mwgaaiaswusakkaq; } $ksaameoqigiaoigg = $this->caoeosiqwyaauaio(Ajax::symcgieuakksimmu()->gskqygiceygcguyo()); if (!$ksaameoqigiaoigg) { goto wamgcqkaieummksu; } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\141\143\150\145\x5f\x68\164\155\x6c\137\141\x6c\154\x5f\160\x75\x72\x67\x65\144", ...$ywmkwiwkosakssii); wamgcqkaieummksu: mwgaaiaswusakkaq: return $ksaameoqigiaoigg; } public function sksuceuccwmiokoe($ccamueccusigaaio) : bool { if (!is_string($ccamueccusigaaio)) { goto ugowqoisymsioeye; } $this->caoeosiqwyaauaio(dirname(Ajax::symcgieuakksimmu()->cckisoakyqqgywey($ccamueccusigaaio))); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x61\143\150\x65\x5f\150\164\155\x6c\x5f\165\162\x6c\x5f\160\165\x72\x67\x65\x64", $ccamueccusigaaio); return true; ugowqoisymsioeye: return false; } public function qwgwwmwcgwommmcy(array $auwuoyyagaiegwae) : bool { $auwuoyyagaiegwae = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x63\x61\x63\150\x65\x5f\x68\x74\155\x6c\137\160\165\162\147\145\137\165\162\154\163", $auwuoyyagaiegwae); if (!(empty($auwuoyyagaiegwae) || !$this->gimogqqgyqwiwsmi())) { goto gooqkmwgsmseuiwq; } return false; gooqkmwgsmseuiwq: foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sksuceuccwmiokoe($eeamcawaiqocomwy); emgssiqceagusgyg: } oeosugomyqyekmuq: $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\141\x63\x68\145\137\150\164\155\154\137\x75\162\154\x73\x5f\x70\165\162\147\145\144", $auwuoyyagaiegwae); return true; } public function miemuiuwumuyqykm($swaukaagekiououo = '') : bool { if ($this->gimogqqgyqwiwsmi()) { goto ysusaysykymegguk; } return false; ysusaysykymegguk: return true; } public function syicukiqeoyaqsok($iwewcwusemqaiggk) : bool { if ($this->gimogqqgyqwiwsmi()) { goto yskswskmsgoouyco; } return false; yskswskmsgoouyco: return true; } public function ussmokeesuogauca($post) : bool { if ($this->gimogqqgyqwiwsmi()) { goto oaciskoioaecgwee; } return false; oaciskoioaecgwee: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->somkqoqeimmeemuq()) { goto csskguekqcwcmocu; } return false; csskguekqcwcmocu: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gcqseksiskwueksc = 0; if (!is_numeric($post)) { goto mmusoowesqcmuqew; } $gcqseksiskwueksc = $post; $post = $seumokooiykcomco->get($post); mmusoowesqcmuqew: if (is_object($post)) { goto wkwkeicwosmkcygc; } return false; wkwkeicwosmkcygc: if ($gcqseksiskwueksc) { goto ugcyukgoaiiysymc; } $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); ugcyukgoaiiysymc: static $gqiuywqwmiieqcww = []; if (!isset($gqiuywqwmiieqcww[$gcqseksiskwueksc])) { goto yuoyeeuqqaockyqw; } return false; yuoyeeuqqaockyqw: $iueymcwwscwqkiyq = $seumokooiykcomco->ucwmcwqmqwaymkkc($post); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); if (!(empty($useksmwkuswkwcqg) || in_array($iueymcwwscwqkiyq, [Constants::iuemaweiggauysws, Constants::ywskismomwmcsqam], true) || in_array($useksmwkuswkwcqg, [Constants::mskugisegsqmcqkk, Constants::cqycgsyykemiygou], true))) { goto kygcymkakucoeock; } return false; kygcymkakucoeock: $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $kgioguqigccoiyca = $cskucqcumqsyimye->imgymusqgccqsqqq($useksmwkuswkwcqg); if (!($kgioguqigccoiyca === null || !$cskucqcumqsyimye->cekoogweeooasayu($kgioguqigccoiyca))) { goto qkiqquymecyoouki; } return false; qkiqquymecyoouki: $swaukaagekiououo = $this->isgmmgcaqsguwias()->gagsyqagguwwauac()->emqmaiomewcmuacu($post); $kggeaycqkokcquqk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->sewesguyaqwccksa($post); $kggeaycqkokcquqk = $this->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x70\x6f\x73\x74\137\160\x75\162\x67\145\137\x75\x72\154\163", $kggeaycqkokcquqk, $post); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\142\145\146\157\162\145\x5f\143\154\145\141\x6e\x5f\x70\x6f\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); $this->qwgwwmwcgwommmcy($kggeaycqkokcquqk); $this->miemuiuwumuyqykm($swaukaagekiououo); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\141\x66\164\145\162\137\143\154\x65\x61\x6e\137\160\157\163\x74", $post, $kggeaycqkokcquqk, $swaukaagekiououo); return true; } public function megokskeiiacqoii($suaemuyiacqyugsm) : bool { if ($this->gimogqqgyqwiwsmi()) { goto iqukigoyiqgcggue; } return false; iqukigoyiqgcggue: $mksyucucyswaukig = Page::symcgieuakksimmu()->eiswegiqykyigwig($suaemuyiacqyugsm); if ($mksyucucyswaukig instanceof WP_Post) { goto osoqssymqqoqcuky; } if ($mksyucucyswaukig instanceof WP_Term) { goto uugekiumuwemyuyc; } if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($mksyucucyswaukig)) { goto amkcomscieegkygc; } $this->qwgwwmwcgwommmcy([$mksyucucyswaukig]); amkcomscieegkygc: goto qoameasiqwaqgmca; uugekiumuwemyuyc: $this->syicukiqeoyaqsok($mksyucucyswaukig); qoameasiqwaqgmca: goto qcywwqceiqogcoyo; osoqssymqqoqcuky: $this->ussmokeesuogauca($mksyucucyswaukig); qcywwqceiqogcoyo: return true; } public function igkscowaqiikiwam($eouekqmooogkoqoo) : bool { if ($this->gimogqqgyqwiwsmi()) { goto giiucsyqgcooaima; } return false; giiucsyqgcooaima: $ocqawgquwsqioses = Page::symcgieuakksimmu()->woimamkkeyoyauoa(Page::ewyamgkooeqiecwg, $eouekqmooogkoqoo); foreach ($ocqawgquwsqioses as $suaemuyiacqyugsm) { $this->megokskeiiacqoii($suaemuyiacqyugsm); uckeuuaqimqamuyc: } awikkaqmmuqkukma: return true; } }
