<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f134058bae5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\163\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto iuysqgmmgqiywssm; } return []; iuysqgmmgqiywssm: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\x2d\55\x5c\x73\52\156\157\160\164\x69\x6d\151\x7a\x65\x5c\x73\52\55\55\76\56\x2a\x3f\x3c\x21\x2d\55\x5c\x73\x2a\x2f\x5c\x73\52\x6e\x6f\x70\x74\151\x6d\x69\x7a\145\134\163\52\55\55\76\43\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto weouocwmwicayyiy; } return $nsmgceoqaqogqmuw; weouocwmwicayyiy: $moyaaaascoeowegu = preg_replace("\x2f\74\x21\x2d\55\x28\x2e\x2a\51\x2d\x2d\76\x2f\125\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ggyoywwggggekycs; } return $nsmgceoqaqogqmuw; ggyoywwggggekycs: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x73\143\x72\x69\x70\164\133\136\76\135\52\x3e\56\x2a\77\x3c\x5c\x2f\163\x63\x72\x69\160\x74\134\x73\x2a\x3e\43\x6d\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gkkwmqoacciwomqs; } return $nsmgceoqaqogqmuw; gkkwmqoacciwomqs: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x6e\x6f\x73\143\162\151\x70\164\133\136\x3e\x5d\x2a\76\56\52\77\x3c\134\57\156\x6f\163\x63\x72\x69\x70\164\134\x73\x2a\76\x23\x6d\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kucqcgeesiccuuia; } return $nsmgceoqaqogqmuw; kucqcgeesiccuuia: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\155\x70\56\x2a\76\x2e\x2a\74\x2f\x78\155\x70\x3e\43\x55\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\161\153\167\x63\x6d\145\x65\x6b\x67\151\151\157\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto oycuaqewsskgkqci; } return $nsmgceoqaqogqmuw; oycuaqewsskgkqci: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\x2d\40\45\163\x20\x2d\55\76", uniqid("\127\120\x52\x5f\130\115\x50\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto ocmagamuyawyiyka; } return $nsmgceoqaqogqmuw; ocmagamuyawyiyka: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
