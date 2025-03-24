<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e16668aac69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Minify; use Pmpr\Common\Foundation\Interfaces\Constants; use WebSharks\HtmlCompressor\Core; class HTML extends Minifier { public function ikcgmcycisiccyuc() { $this->name = Constants::gsqoooskigukokks; } public function okuguyacggsageqq($ewgwqamkygiqaawc, string $kqywgoqsmuswammk = null) : ?string { return $this->wamiiiagcwwigucu($ewgwqamkygiqaawc); } public function wamiiiagcwwigucu(?string $ewgwqamkygiqaawc) : ?string { if (!$this->cwaqecwkgaquewqm($ewgwqamkygiqaawc)) { $aksgkeoomwimawms = new Core(['compress_combine_head_body_css' => false, 'compress_combine_head_js' => false, 'compress_combine_footer_js' => false, 'compress_inline_js_code' => false, 'compress_css_code' => false, 'compress_js_code' => false]); $ewgwqamkygiqaawc = $this->uakokyiygeukkwyq($ewgwqamkygiqaawc); $ewgwqamkygiqaawc = $aksgkeoomwimawms->compress($ewgwqamkygiqaawc); } return $ewgwqamkygiqaawc; } }
