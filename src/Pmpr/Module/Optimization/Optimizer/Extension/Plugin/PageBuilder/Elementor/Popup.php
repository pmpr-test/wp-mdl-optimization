<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16c082ce5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor; use Elementor\Core\Base\Document; use ElementorPro\Modules\Popup\DisplaySettings\Triggers; use Pmpr\Common\Foundation\Interfaces\Constants; class Popup extends Module { public function wyauaaciaeqyaceq(Document $cmckowaakauyescq) { $eggqwieksiyqomas = $cmckowaakauyescq->get_display_settings()["\164\162\x69\147\x67\x65\x72\163"] ?? null; if (!($eggqwieksiyqomas instanceof Triggers && Constants::wiquocqckkqkmayo === $eggqwieksiyqomas->get_settings("\x70\141\147\x65\137\154\x6f\141\x64"))) { goto iquykqikookaokgq; } return true; iquykqikookaokgq: return false; } public function aimycmkwossgasgs(string $ewgwqamkygiqaawc, Document $cmckowaakauyescq) : string { if (!$this->wyauaaciaeqyaceq($cmckowaakauyescq)) { goto ceesgeawumeqkcic; } $vaoammwueiaqsuom = $cmckowaakauyescq->get_id(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x70\x6f\x70\x75\160", [Constants::gouqcwikiiygyasc => $vaoammwueiaqsuom, Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iesegggmcccqyquo = $swqimwqeweekeusq->sawckkwcugsmokmi("\x23\145\154\x65\155\145\x6e\164\157\162\55\x70\157\160\165\160\55\155\157\144\141\154\55{$vaoammwueiaqsuom}\x20\x2e\x65\154\x65\x6d\x65\156\164\157\x72\55\x6c\157\x63\141\164\x69\x6f\x6e\55\160\x6f\x70\x75\x70", ["\x64\151\163\160\x6c\x61\x79" => "\x62\x6c\x6f\x63\x6b\x20\41\x69\155\x70\157\x72\164\x61\156\164"]); $ewgwqamkygiqaawc .= $swqimwqeweekeusq->qiokaomckmywuwqo($iesegggmcccqyquo); ceesgeawumeqkcic: return parent::aimycmkwossgasgs($ewgwqamkygiqaawc, $cmckowaakauyescq); } }
