<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d3a1360b4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\x73\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto iuysqgmmgqiywssm; } return []; iuysqgmmgqiywssm: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x21\x2d\55\x5c\x73\x2a\x6e\157\x70\164\x69\x6d\x69\x7a\x65\134\x73\x2a\55\55\x3e\x2e\52\77\74\41\x2d\x2d\134\x73\52\57\x5c\x73\52\156\x6f\x70\164\151\155\151\172\145\x5c\x73\x2a\x2d\55\76\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto weouocwmwicayyiy; } return $nsmgceoqaqogqmuw; weouocwmwicayyiy: $moyaaaascoeowegu = preg_replace("\x2f\74\41\55\55\x28\x2e\52\x29\55\55\76\57\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ggyoywwggggekycs; } return $nsmgceoqaqogqmuw; ggyoywwggggekycs: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\x63\x72\151\x70\164\133\136\76\135\x2a\x3e\56\x2a\77\74\x5c\57\x73\x63\x72\x69\160\x74\x5c\163\x2a\76\x23\x6d\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gkkwmqoacciwomqs; } return $nsmgceoqaqogqmuw; gkkwmqoacciwomqs: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\156\157\x73\x63\x72\151\160\x74\x5b\136\x3e\x5d\x2a\76\56\x2a\77\x3c\134\57\x6e\157\163\143\162\151\160\x74\x5c\x73\x2a\76\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kucqcgeesiccuuia; } return $nsmgceoqaqogqmuw; kucqcgeesiccuuia: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\170\155\160\56\52\x3e\x2e\x2a\74\x2f\x78\x6d\x70\76\x23\x55\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\161\153\167\x63\x6d\x65\145\x6b\x67\x69\151\x6f\x69\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto oycuaqewsskgkqci; } return $nsmgceoqaqogqmuw; oycuaqewsskgkqci: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\55\40\45\x73\40\55\55\76", uniqid("\127\120\x52\x5f\x58\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto ocmagamuyawyiyka; } return $nsmgceoqaqogqmuw; ocmagamuyawyiyka: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
