<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, "\x67\145\164\137\141\x63\164\x69\166\x65\x5f\x6c\141\x6e\147\x75\141\x67\x65\163")) { $mkysicwccoeicumg = "\167\160\155\x6c"; } else { if (!empty($polylang) && function_exists("\160\x6c\x6c\x5f\154\141\156\147\x75\141\x67\x65\163\x5f\154\x69\163\x74")) { if (!empty(pll_languages_list())) { $mkysicwccoeicumg = "\160\x6f\154\171\x6c\141\x6e\x67"; } } else { if (!empty($q_config) && is_array($q_config)) { if (function_exists("\161\164\162\141\156\170\x66\x5f\143\157\x6e\x76\x65\162\164\125\x52\x4c")) { $mkysicwccoeicumg = "\161\164\162\x61\156\163\154\x61\164\x65\x2d\170"; } else { if (function_exists("\x71\164\162\x61\x6e\x73\137\143\x6f\x6e\166\x65\162\x74\x55\x52\x4c")) { $mkysicwccoeicumg = "\x71\164\162\x61\x6e\163\154\141\164\x65"; } } } else { $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x68\x61\163\137\151\x31\70\x6e", ''); if (!is_string($mkysicwccoeicumg)) { $mkysicwccoeicumg = ''; } } } } return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if ($mkysicwccoeicumg = $this->essaugkeosgskqme()) { switch ($mkysicwccoeicumg) { case "\167\x70\x6d\x6c": $ymkomcgesksuuysk = $GLOBALS["\x73\x69\164\x65\160\x72\x65\163\163"]->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); break; case "\161\164\162\141\x6e\x73\x6c\x61\164\145": case "\x71\x74\x72\x61\156\163\x6c\x61\164\145\x2d\x78": $ymkomcgesksuuysk = !empty($GLOBALS["\x71\137\143\x6f\x6e\146\x69\x67"]["\x65\156\141\x62\154\145\x64\x5f\154\141\156\x67\165\x61\147\x65\163"]) ? $GLOBALS["\x71\x5f\x63\x6f\x6e\x66\x69\x67"]["\145\x6e\x61\x62\x6c\x65\x64\137\154\141\156\x67\165\x61\147\x65\x73"] : []; break; case "\x70\157\154\x79\154\x61\x6e\147": $ymkomcgesksuuysk = pll_languages_list(); break; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . "\x69\x31\70\156\x5f\x6c\x61\156\x67\x75\141\147\145\163", []); } } if (!is_array($ymkomcgesksuuysk)) { $ymkomcgesksuuysk = []; } return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ("\167\x70\x6d\154" === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai("\x77\157\157\143\x6f\x6d\155\145\x72\x63\x65\55\155\165\154\x74\151\x6c\x69\x6e\x67\x75\141\154\57\167\160\155\x6c\55\167\x6f\157\143\x6f\x6d\x6d\145\x72\x63\x65\x2e\160\x68\160")) { $swaukaagekiououo = $GLOBALS["\x73\x69\164\x65\160\162\145\163\163"]->get_language_for_element($gcqseksiskwueksc, "\x70\x6f\x73\164\137" . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); } else { if ("\160\157\x6c\x79\x6c\141\156\x67" === $eokyomeiuimoaiac && function_exists("\x70\x6c\154\137\x67\x65\164\137\x70\157\x73\164\x5f\x6c\x61\x6e\147\x75\141\147\145")) { $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); } } return $swaukaagekiououo; } }
