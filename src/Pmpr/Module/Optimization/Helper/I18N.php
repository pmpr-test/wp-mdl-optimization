<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbb9b4545             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Helper; use Pmpr\Module\Optimization\Optimization; class I18N extends Common { public function essaugkeosgskqme() : string { global $sitepress, $q_config, $polylang; $mkysicwccoeicumg = ''; if (!empty($sitepress) && is_object($sitepress) && method_exists($sitepress, 'get_active_languages')) { $mkysicwccoeicumg = 'wpml'; } else { if (!empty($polylang) && function_exists('pll_languages_list')) { if (!empty(pll_languages_list())) { $mkysicwccoeicumg = 'polylang'; } } else { if (!empty($q_config) && is_array($q_config)) { if (function_exists('qtranxf_convertURL')) { $mkysicwccoeicumg = 'qtranslate-x'; } else { if (function_exists('qtrans_convertURL')) { $mkysicwccoeicumg = 'qtranslate'; } } } else { $mkysicwccoeicumg = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'has_i18n', ''); if (!is_string($mkysicwccoeicumg)) { $mkysicwccoeicumg = ''; } } } } return $mkysicwccoeicumg; } public function oiceouwgwuakccqu() : array { $ymkomcgesksuuysk = []; if ($mkysicwccoeicumg = $this->essaugkeosgskqme()) { switch ($mkysicwccoeicumg) { case 'wpml': $ymkomcgesksuuysk = $GLOBALS['sitepress']->get_active_languages(); $ymkomcgesksuuysk = array_keys($ymkomcgesksuuysk); break; case 'qtranslate': case 'qtranslate-x': $ymkomcgesksuuysk = !empty($GLOBALS['q_config']['enabled_languages']) ? $GLOBALS['q_config']['enabled_languages'] : []; break; case 'polylang': $ymkomcgesksuuysk = pll_languages_list(); break; default: $ymkomcgesksuuysk = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou(Optimization::kgswyesggeyekgmg . 'i18n_languages', []); } } if (!is_array($ymkomcgesksuuysk)) { $ymkomcgesksuuysk = []; } return $ymkomcgesksuuysk; } public function mceoyuqgagciommq() { } public function mqguyieewyqcqamy() : array { } public function emqmaiomewcmuacu($gcqseksiskwueksc) { $swaukaagekiououo = ''; $eokyomeiuimoaiac = $this->essaugkeosgskqme(); if ('wpml' === $eokyomeiuimoaiac && !$this->caokeucsksukesyo()->essaugkeosgskqme()->ggocakcisguuokai('woocommerce-multilingual/wpml-woocommerce.php')) { $swaukaagekiououo = $GLOBALS['sitepress']->get_language_for_element($gcqseksiskwueksc, 'post_' . $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc)); } else { if ('polylang' === $eokyomeiuimoaiac && function_exists('pll_get_post_language')) { $swaukaagekiououo = pll_get_post_language($gcqseksiskwueksc); } } return $swaukaagekiououo; } }
