<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7b77183e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\x65\164\x5f\141\143\x74\151\166\x65\x5f\154\141\156\147\x75\x61\x67\145\163")) { goto oaociaioauummsey; } if (!empty($polylang) && function_exists("\x70\154\x6c\x5f\x6c\141\156\x67\165\x61\147\x65\163\x5f\x6c\151\163\164")) { goto qayiqaykkywcyisq; } if (!empty($q_config) && is_array($q_config)) { goto aqeyqwuywqcmuoce; } $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\150\141\x73\137\x69\61\x38\x6e", ''); if (is_string($mkysicwccoeicumg)) { goto kikkkocywiyuyuqw; } $mkysicwccoeicumg = ''; kikkkocywiyuyuqw: goto aymoguycgmuggcik; aqeyqwuywqcmuoce: if (function_exists("\x71\164\162\x61\156\170\146\x5f\143\x6f\156\x76\145\162\164\125\122\114")) { goto yosyyiksyyscacus; } if (!function_exists("\161\x74\162\141\156\x73\x5f\143\157\156\x76\145\162\164\x55\x52\114")) { goto qiqegseqwywcmwoe; } $mkysicwccoeicumg = "\161\x74\162\141\x6e\x73\154\141\164\x65"; qiqegseqwywcmwoe: goto kwcscewawgicomok; yosyyiksyyscacus: $mkysicwccoeicumg = "\x71\164\162\x61\156\x73\x6c\141\x74\x65\55\170"; kwcscewawgicomok: aymoguycgmuggcik: goto akoweomooyuwamow; qayiqaykkywcyisq: if (empty(pll_languages_list())) { goto koiyaaokigmamqyc; } $mkysicwccoeicumg = "\160\157\x6c\171\x6c\x61\156\x67"; koiyaaokigmamqyc: akoweomooyuwamow: goto cueuscqkicwwicei; oaociaioauummsey: $mkysicwccoeicumg = "\167\160\155\x6c"; cueuscqkicwwicei: return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if (!($mkysicwccoeicumg = $this->essaugkeosgskqme())) { goto kiewcwsykccgocuc; } switch ($mkysicwccoeicumg) { case "\x77\x70\155\154": $ymkomcgesksuuysk = $GLOBALS["\x73\151\164\x65\x70\162\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); goto gcecamucuogcciig; case "\x71\164\x72\141\x6e\163\x6c\141\x74\145": case "\161\164\162\x61\156\x73\154\x61\164\145\x2d\170": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\x63\157\156\x66\x69\x67"]["\145\x6e\141\x62\x6c\145\x64\x5f\154\x61\156\x67\165\x61\147\145\163"]) ? $GLOBALS["\x71\137\x63\157\156\x66\151\x67"]["\x65\156\x61\142\x6c\145\144\x5f\154\x61\x6e\x67\165\x61\x67\145\163"] : []; goto gcecamucuogcciig; case "\x70\x6f\x6c\x79\x6c\141\156\x67": $ymkomcgesksuuysk = pll_languages_list(); goto gcecamucuogcciig; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x31\70\156\137\154\141\156\147\165\x61\x67\x65\x73", []); } suscosoukqeyyqgs: gcecamucuogcciig: kiewcwsykccgocuc: if (is_array($ymkomcgesksuuysk)) { goto eysuawiooiswaseq; } $ymkomcgesksuuysk = []; eysuawiooiswaseq: return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\x6f\x6f\143\x6f\155\155\145\162\x63\x65\55\155\x75\154\x74\151\x6c\151\x6e\x67\x75\x61\x6c\x2f\167\160\155\x6c\55\x77\157\157\143\x6f\x6d\155\145\x72\143\x65\x2e\x70\x68\160")) { goto eogomkswkaqwyycm; } if (!("\160\x6f\x6c\x79\154\141\156\147" === $eokyomeiuimoaiac && function_exists("\160\x6c\x6c\137\147\x65\164\137\160\x6f\x73\164\137\154\x61\156\147\165\141\x67\145"))) { goto iecqkqoiqimmisyw; } $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); iecqkqoiqimmisyw: goto egiauwuekseyeaeq; eogomkswkaqwyycm: $swaukaagekiououo = $GLOBALS["\x73\x69\x74\x65\x70\x72\x65\163\x73"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); egiauwuekseyeaeq: return $swaukaagekiououo; } }
