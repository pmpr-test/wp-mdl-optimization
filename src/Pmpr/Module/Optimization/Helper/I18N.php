<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb25af783f1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\147\x65\164\x5f\x61\x63\164\x69\166\x65\137\x6c\141\156\x67\165\x61\x67\145\x73")) { goto usgcoawgqswoeiec; } if (!empty($polylang) && function_exists("\160\x6c\154\137\x6c\x61\156\x67\x75\x61\147\x65\163\x5f\x6c\x69\x73\x74")) { goto uuisaeysawuagysg; } if (!empty($q_config) && is_array($q_config)) { goto gykuaukukosiocoy; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\141\x73\137\x69\x31\x38\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto goswwiomuackymqi; } $mkysicwccoeicumg = ''; goswwiomuackymqi: goto camawumockccayaq; gykuaukukosiocoy: if (function_exists("\x71\164\x72\x61\x6e\170\146\137\x63\157\x6e\166\x65\162\164\125\122\x4c")) { goto gqaimiooakyykccy; } if (!function_exists("\161\164\x72\x61\156\163\x5f\x63\157\x6e\166\x65\162\164\125\122\x4c")) { goto mcucegiogmuyogki; } $mkysicwccoeicumg = "\161\x74\162\141\x6e\163\x6c\141\x74\x65"; mcucegiogmuyogki: goto agemeseegiuuowgo; gqaimiooakyykccy: $mkysicwccoeicumg = "\x71\x74\162\x61\156\163\154\141\164\x65\x2d\x78"; agemeseegiuuowgo: camawumockccayaq: goto ggqeakyaggiuegek; uuisaeysawuagysg: if (empty(pll_languages_list())) { goto wiaesksmicgikqcm; } $mkysicwccoeicumg = "\x70\x6f\154\171\154\141\x6e\147"; wiaesksmicgikqcm: ggqeakyaggiuegek: goto qowcwmsiyscackaa; usgcoawgqswoeiec: $mkysicwccoeicumg = "\x77\160\x6d\x6c"; qowcwmsiyscackaa: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto csyoimsqgwcmiwki; } switch ($mkysicwccoeicumg) { case "\x77\160\155\154": $ymkomcgesksuuysk = $GLOBALS["\163\151\164\x65\160\162\x65\x73\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto aqigiwmamkowomiw; case "\x71\x74\162\x61\x6e\x73\154\x61\164\x65": case "\161\x74\162\x61\x6e\x73\x6c\x61\x74\x65\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\x63\157\156\146\x69\x67"]["\145\x6e\x61\x62\154\145\144\x5f\154\141\156\x67\165\141\x67\145\163"]) ? $GLOBALS["\161\x5f\x63\x6f\x6e\x66\x69\x67"]["\145\156\141\x62\x6c\x65\x64\x5f\x6c\x61\156\147\x75\x61\147\x65\163"] : []; goto aqigiwmamkowomiw; case "\160\157\x6c\x79\154\x61\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); goto aqigiwmamkowomiw; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\61\70\x6e\137\154\x61\x6e\147\165\141\x67\x65\163", []); } qesqgumuouyymcwa: aqigiwmamkowomiw: csyoimsqgwcmiwki: if (is_array($ymkomcgesksuuysk)) { goto ggqwcqssoauckuic; } $ymkomcgesksuuysk = []; ggqwcqssoauckuic: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\x70\155\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\x6f\x63\x6f\155\155\145\162\143\x65\55\155\x75\x6c\164\x69\x6c\x69\156\x67\x75\x61\x6c\x2f\x77\160\155\154\55\167\157\x6f\143\x6f\x6d\x6d\x65\x72\143\x65\56\160\150\x70")) { goto mmkoqmccusoeaoyi; } if (!("\x70\157\154\x79\x6c\141\x6e\147" === $eokyomeiuimoaiac && function_exists("\x70\154\154\x5f\x67\x65\x74\137\160\x6f\x73\164\x5f\154\141\x6e\x67\165\x61\x67\x65"))) { goto ggwcauaeuagekeyo; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); ggwcauaeuagekeyo: goto waewaiuiogywqigu; mmkoqmccusoeaoyi: $swaukaagekiououo = $GLOBALS["\163\x69\x74\x65\160\x72\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); waewaiuiogywqigu: return $swaukaagekiououo; } }
