<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723572e2b020             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; class Purge extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\x62\145\146\157\162\x65\x5f\143\154\145\141\156\x5f\x70\x6f\163\164", [$this, "\x69\x6b\147\157\x79\x63\155\x73\x61\171\x6b\x77\145\165\x6b\x79"]); } public function ikgoycmsaykweuky($post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ("\x65\x6c\x65\155\145\156\x74\x6f\x72\137\154\x69\142\162\x61\x72\x79" === $seumokooiykcomco->gueasuouwqysmomu($post)) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\165\x72\x67\145\x5f\150\x74\x6d\154\x5f\x63\x61\143\x68\145"); $mscssagggiccseco = $seumokooiykcomco->igawqaomowicuayw("\x5f\145\x6c\145\x6d\x65\x6e\164\157\x72\137\143\x6f\156\x64\151\164\x69\x6f\156\163", $post); if (is_string($mscssagggiccseco)) { $mscssagggiccseco = [$mscssagggiccseco]; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $uiiqwkwcwaoeokmk = []; foreach ($mscssagggiccseco as $wocwawaaemuoqmig) { $ymkqyawksmqcgsei = explode("\57", strtolower($wocwawaaemuoqmig)); $sqeykgyoooqysmca = $ymkqyawksmqcgsei[0] ?? null; $ymqmyyeuycgmigyo = $ymkqyawksmqcgsei[1] ?? null; $usycmyikewukeomq = $ymkqyawksmqcgsei[2] ?? null; $wsiycaiesicsguyi = $ymkqyawksmqcgsei[3] ?? null; if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) { $ooiewiwkegguusum = $sqeykgyoooqysmca === Constants::ackcaikowcokggsc; switch ($ymqmyyeuycgmigyo) { case Constants::ioomakeyqiqowgmk: if ($ooiewiwkegguusum) { $uiiqwkwcwaoeokmk = Constants::ALL; break 2; } break; case Constants::qqoouomkeecygage: if ($usycmyikewukeomq) { switch ($usycmyikewukeomq) { case "\x66\x72\x6f\156\x74\x5f\160\x61\x67\145": $uiiqwkwcwaoeokmk[] = $gqusacuooiagkuom->auksikwsewaywikq(); break; case "\143\x68\x69\x6c\x64\137\157\x66": break; case "\x61\156\171\x5f\143\x68\x69\x6c\144\x5f\157\146": break; case "\142\171\137\141\165\164\x68\157\x72": break; case "\156\x6f\164\x66\x6f\165\156\144\x5f\64\x30\64": $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\141\x63\x68\x65\137\150\x74\x6d\x6c\137\156\157\x74\146\157\x75\156\144\137\x70\x75\162\147\x65\144"); break; default: $cwuuyuqakesoqmyc = $yyauwyaeewsickwk->wiecmkiugmyyqiqc("\151\156\x5f", '', $usycmyikewukeomq); $useksmwkuswkwcqg = $cskucqcumqsyimye->imgymusqgccqsqqq($cwuuyuqakesoqmyc); if ($useksmwkuswkwcqg) { if ($wsiycaiesicsguyi) { $uiiqwkwcwaoeokmk[] = $seumokooiykcomco->ycqquoiyyuesegsy($wsiycaiesicsguyi); } else { $egeqeuwiswigogyk = $seumokooiykcomco->ooeesicuqgsyoysk($useksmwkuswkwcqg, [Constants::goqgcigmiawyauai => -1], Constants::sauwwsocmukoaayu); if ($egeqeuwiswigogyk) { $uiiqwkwcwaoeokmk[] = $egeqeuwiswigogyk; } } } else { $kesssewsiegssiya = $mqeowykqcggsieya->imgymusqgccqsqqq($cwuuyuqakesoqmyc); if ($kesssewsiegssiya) { } else { } } } } else { } break; case Constants::mswmgkkakuooukme: if (isset($ymkqyawksmqcgsei[2])) { } else { } break; case "\x77\x6f\157\x63\157\155\155\145\162\x63\145": break; } } } if ($uiiqwkwcwaoeokmk === Constants::ALL) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\x75\162\147\145\137\150\164\155\154\137\x63\141\x63\150\145"); } else { if (is_array($uiiqwkwcwaoeokmk) && !empty($uiiqwkwcwaoeokmk)) { $uiiqwkwcwaoeokmk = array_merge([], ...$uiiqwkwcwaoeokmk); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\160\165\x72\x67\x65\x5f\x75\x72\154\x73\x5f\x68\x74\155\x6c\137\143\x61\x63\150\145", $uiiqwkwcwaoeokmk); } } } } }
