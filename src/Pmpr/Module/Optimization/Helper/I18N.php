<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758102f55148             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\x74\x5f\x61\143\164\x69\x76\145\x5f\x6c\141\156\x67\165\x61\x67\145\163")) { $mkysicwccoeicumg = "\167\x70\155\x6c"; } else { if (!empty($polylang) && function_exists("\x70\x6c\154\137\154\141\156\147\x75\141\147\145\163\137\154\x69\x73\x74")) { if (!empty(pll_languages_list())) { $mkysicwccoeicumg = "\160\157\x6c\x79\x6c\141\156\x67"; } } else { if (!empty($q_config) && is_array($q_config)) { if (function_exists("\x71\x74\x72\141\x6e\x78\x66\x5f\143\157\156\166\145\162\x74\x55\x52\x4c")) { $mkysicwccoeicumg = "\x71\164\162\141\156\163\154\x61\164\145\55\170"; } else { if (function_exists("\161\164\162\x61\x6e\x73\x5f\x63\x6f\x6e\166\x65\162\164\125\x52\114")) { $mkysicwccoeicumg = "\x71\x74\162\141\x6e\163\x6c\141\x74\x65"; } } } else { $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\x61\x73\137\x69\61\70\156", ''); if (!is_string($mkysicwccoeicumg)) { $mkysicwccoeicumg = ''; } } } } return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if ($mkysicwccoeicumg = $this->essaugkeosgskqme()) { switch ($mkysicwccoeicumg) { case "\167\160\155\x6c": $ymkomcgesksuuysk = $GLOBALS["\163\x69\x74\x65\160\162\x65\163\x73"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); break; case "\161\164\162\141\156\x73\x6c\141\x74\x65": case "\161\164\162\141\156\x73\154\x61\164\x65\55\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\161\137\143\x6f\156\x66\x69\x67"]["\145\156\x61\x62\x6c\x65\x64\x5f\154\x61\156\147\x75\141\147\145\x73"]) ? $GLOBALS["\161\137\143\157\x6e\146\151\x67"]["\x65\156\x61\x62\x6c\145\x64\137\x6c\141\156\147\165\x61\x67\x65\x73"] : []; break; case "\x70\x6f\154\171\154\x61\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); break; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\151\x31\70\156\x5f\x6c\141\156\147\x75\141\147\x65\x73", []); } } if (!is_array($ymkomcgesksuuysk)) { $ymkomcgesksuuysk = []; } return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\x77\160\x6d\x6c" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\167\157\157\143\157\155\155\145\162\143\145\x2d\x6d\x75\154\164\151\x6c\151\156\x67\x75\x61\x6c\57\x77\160\x6d\x6c\x2d\167\x6f\157\143\x6f\x6d\155\145\162\x63\145\56\160\150\x70")) { $swaukaagekiououo = $GLOBALS["\163\151\164\145\160\x72\x65\x73\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\157\x73\x74\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); } else { if ("\160\157\154\171\154\x61\156\147" === $eokyomeiuimoaiac && function_exists("\x70\154\x6c\x5f\147\145\164\137\160\157\163\164\x5f\x6c\x61\156\x67\165\141\147\145")) { $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); } } return $swaukaagekiououo; } }
