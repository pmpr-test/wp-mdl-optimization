<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e86b3a376             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\164\137\x61\x63\x74\x69\x76\x65\137\154\x61\156\x67\x75\141\147\145\x73")) { goto oaociaioauummsey; } if (!empty($polylang) && function_exists("\160\x6c\x6c\x5f\154\141\x6e\147\165\x61\x67\145\x73\x5f\154\x69\163\164")) { goto qayiqaykkywcyisq; } if (!empty($q_config) && is_array($q_config)) { goto aqeyqwuywqcmuoce; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\x61\x73\x5f\151\61\70\156", ''); if (is_string($mkysicwccoeicumg)) { goto kikkkocywiyuyuqw; } $mkysicwccoeicumg = ''; kikkkocywiyuyuqw: goto aymoguycgmuggcik; aqeyqwuywqcmuoce: if (function_exists("\x71\164\162\141\156\170\x66\137\143\157\156\x76\x65\162\164\x55\x52\x4c")) { goto yosyyiksyyscacus; } if (!function_exists("\x71\164\x72\141\x6e\163\137\143\x6f\156\166\x65\x72\164\x55\x52\114")) { goto qiqegseqwywcmwoe; } $mkysicwccoeicumg = "\161\x74\162\141\x6e\x73\x6c\x61\164\145"; qiqegseqwywcmwoe: goto kwcscewawgicomok; yosyyiksyyscacus: $mkysicwccoeicumg = "\161\x74\x72\x61\156\x73\x6c\x61\x74\x65\x2d\170"; kwcscewawgicomok: aymoguycgmuggcik: goto akoweomooyuwamow; qayiqaykkywcyisq: if (empty(pll_languages_list())) { goto koiyaaokigmamqyc; } $mkysicwccoeicumg = "\x70\157\x6c\x79\x6c\x61\x6e\147"; koiyaaokigmamqyc: akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $mkysicwccoeicumg = "\x77\x70\155\x6c"; cueuscqkicwwicei: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kiewcwsykccgocuc; } switch ($mkysicwccoeicumg) { case "\x77\x70\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\x69\164\145\160\162\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto gcecamucuogcciig; case "\x71\x74\162\x61\156\163\154\x61\x74\145": case "\161\x74\x72\x61\x6e\x73\154\x61\164\x65\55\170": $ymkomcgesksuuysk = !empty($GLOBALS["\161\x5f\143\157\156\x66\151\147"]["\x65\156\x61\x62\x6c\x65\144\x5f\x6c\141\156\147\x75\141\147\145\x73"]) ? $GLOBALS["\161\137\143\x6f\x6e\x66\x69\147"]["\145\156\x61\x62\154\x65\x64\137\154\141\156\x67\x75\141\147\145\x73"] : []; goto gcecamucuogcciig; case "\160\157\154\171\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto gcecamucuogcciig; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\61\x38\156\137\154\x61\156\x67\x75\x61\x67\x65\x73", []); } suscosoukqeyyqgs: gcecamucuogcciig: kiewcwsykccgocuc: if (is_array($ymkomcgesksuuysk)) { goto eysuawiooiswaseq; } $ymkomcgesksuuysk = []; eysuawiooiswaseq: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\x70\x6d\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\x6f\x63\x6f\155\x6d\145\162\143\x65\55\x6d\165\x6c\x74\x69\154\151\x6e\147\165\x61\x6c\x2f\167\160\x6d\x6c\x2d\167\157\x6f\143\157\x6d\x6d\145\162\x63\145\x2e\x70\x68\160")) { goto eogomkswkaqwyycm; } if (!("\160\157\154\x79\x6c\x61\x6e\x67" === $eokyomeiuimoaiac && function_exists("\160\154\154\x5f\147\x65\164\x5f\x70\x6f\163\164\137\x6c\x61\x6e\x67\165\141\x67\145"))) { goto iecqkqoiqimmisyw; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); iecqkqoiqimmisyw: goto egiauwuekseyeaeq; eogomkswkaqwyycm: $swaukaagekiououo = $GLOBALS["\x73\151\164\145\x70\162\145\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\163\164\x5f" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); egiauwuekseyeaeq: return $swaukaagekiououo; } }
