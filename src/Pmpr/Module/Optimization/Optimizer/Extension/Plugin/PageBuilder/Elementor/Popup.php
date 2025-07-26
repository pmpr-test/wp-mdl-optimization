<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6884a917ee441             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor; use Elementor\Core\Base\Document; use Pmpr\Common\Foundation\Interfaces\Constants; class Popup extends Module { public function wyauaaciaeqyaceq(Document $cmckowaakauyescq) { return false; } public function aimycmkwossgasgs(string $ewgwqamkygiqaawc, Document $cmckowaakauyescq) : string { if ($this->wyauaaciaeqyaceq($cmckowaakauyescq)) { $vaoammwueiaqsuom = $cmckowaakauyescq->get_id(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw('popup', [Constants::gouqcwikiiygyasc => $vaoammwueiaqsuom, Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc]); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iesegggmcccqyquo = $swqimwqeweekeusq->sawckkwcugsmokmi("#elementor-popup-modal-{$vaoammwueiaqsuom} .elementor-location-popup", ['display' => 'block !important']); $ewgwqamkygiqaawc .= $swqimwqeweekeusq->qiokaomckmywuwqo($iesegggmcccqyquo); } return parent::aimycmkwossgasgs($ewgwqamkygiqaawc, $cmckowaakauyescq); } }
