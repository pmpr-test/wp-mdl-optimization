<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eafa4785061             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\x74\x5f\x61\143\164\151\x76\145\x5f\154\141\x6e\147\165\141\147\x65\x73")) { goto usgcoawgqswoeiec; } if (!empty($polylang) && function_exists("\x70\x6c\x6c\137\x6c\141\x6e\147\x75\x61\147\x65\163\x5f\154\151\163\164")) { goto uuisaeysawuagysg; } if (!empty($q_config) && is_array($q_config)) { goto gykuaukukosiocoy; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\141\163\x5f\x69\61\x38\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto goswwiomuackymqi; } $mkysicwccoeicumg = ''; goswwiomuackymqi: goto camawumockccayaq; gykuaukukosiocoy: if (function_exists("\x71\x74\162\141\156\x78\146\x5f\143\157\x6e\x76\145\162\164\x55\x52\x4c")) { goto gqaimiooakyykccy; } if (!function_exists("\161\x74\162\x61\x6e\163\x5f\x63\157\156\x76\145\x72\164\x55\122\x4c")) { goto mcucegiogmuyogki; } $mkysicwccoeicumg = "\x71\x74\x72\x61\x6e\x73\x6c\141\164\x65"; mcucegiogmuyogki: goto agemeseegiuuowgo; gqaimiooakyykccy: $mkysicwccoeicumg = "\x71\164\162\141\156\x73\154\x61\x74\145\x2d\x78"; agemeseegiuuowgo: camawumockccayaq: goto ggqeakyaggiuegek; uuisaeysawuagysg: if (empty(pll_languages_list())) { goto wiaesksmicgikqcm; } $mkysicwccoeicumg = "\160\x6f\154\171\154\x61\x6e\x67"; wiaesksmicgikqcm: ggqeakyaggiuegek: goto qowcwmsiyscackaa; usgcoawgqswoeiec: $mkysicwccoeicumg = "\167\160\155\154"; qowcwmsiyscackaa: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto csyoimsqgwcmiwki; } switch ($mkysicwccoeicumg) { case "\167\x70\155\154": $ymkomcgesksuuysk = $GLOBALS["\163\151\x74\x65\x70\162\x65\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto aqigiwmamkowomiw; case "\x71\x74\x72\x61\156\163\x6c\141\x74\145": case "\x71\x74\x72\x61\x6e\x73\154\141\x74\x65\x2d\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\x63\157\156\146\151\147"]["\145\156\x61\x62\154\x65\144\137\x6c\141\x6e\x67\x75\141\x67\x65\163"]) ? $GLOBALS["\161\137\x63\157\156\146\151\147"]["\x65\156\141\142\x6c\x65\144\137\154\141\156\x67\165\x61\x67\x65\x73"] : []; goto aqigiwmamkowomiw; case "\160\157\x6c\171\x6c\141\156\147": $ymkomcgesksuuysk = pll_languages_list(); goto aqigiwmamkowomiw; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\61\70\x6e\137\x6c\x61\156\x67\x75\141\x67\x65\x73", []); } qesqgumuouyymcwa: aqigiwmamkowomiw: csyoimsqgwcmiwki: if (is_array($ymkomcgesksuuysk)) { goto ggqwcqssoauckuic; } $ymkomcgesksuuysk = []; ggqwcqssoauckuic: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\x70\155\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\x6f\x6f\143\157\x6d\x6d\145\162\x63\145\55\155\165\154\164\x69\154\151\156\147\165\x61\x6c\57\x77\x70\155\154\x2d\167\x6f\x6f\x63\x6f\x6d\155\145\162\x63\x65\56\160\x68\160")) { goto mmkoqmccusoeaoyi; } if (!("\160\157\x6c\171\154\x61\156\147" === $eokyomeiuimoaiac && function_exists("\160\154\x6c\x5f\147\x65\x74\x5f\160\157\x73\164\x5f\154\141\x6e\x67\165\141\x67\145"))) { goto ggwcauaeuagekeyo; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); ggwcauaeuagekeyo: goto waewaiuiogywqigu; mmkoqmccusoeaoyi: $swaukaagekiououo = $GLOBALS["\x73\x69\x74\x65\160\x72\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); waewaiuiogywqigu: return $swaukaagekiououo; } }
