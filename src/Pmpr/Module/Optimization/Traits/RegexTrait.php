<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f12a8053cce             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\x6d\x73\151") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto iuysqgmmgqiywssm; } return []; iuysqgmmgqiywssm: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x21\55\x2d\x5c\x73\x2a\156\157\x70\164\x69\155\151\172\x65\x5c\163\x2a\55\x2d\76\x2e\x2a\77\x3c\x21\x2d\x2d\134\x73\x2a\x2f\134\163\52\x6e\157\x70\x74\151\155\151\172\x65\x5c\x73\52\55\55\x3e\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto weouocwmwicayyiy; } return $nsmgceoqaqogqmuw; weouocwmwicayyiy: $moyaaaascoeowegu = preg_replace("\x2f\74\x21\55\x2d\50\56\x2a\51\x2d\55\76\57\x55\x69\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto ggyoywwggggekycs; } return $nsmgceoqaqogqmuw; ggyoywwggggekycs: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x73\143\162\151\160\164\x5b\136\76\x5d\x2a\x3e\56\x2a\x3f\x3c\134\x2f\x73\143\162\151\x70\x74\134\163\52\76\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gkkwmqoacciwomqs; } return $nsmgceoqaqogqmuw; gkkwmqoacciwomqs: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x6e\x6f\163\x63\162\151\160\164\133\136\x3e\x5d\x2a\76\x2e\x2a\77\74\134\x2f\x6e\157\x73\143\x72\151\x70\164\x5c\x73\x2a\76\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kucqcgeesiccuuia; } return $nsmgceoqaqogqmuw; kucqcgeesiccuuia: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\x6d\x70\56\52\x3e\56\x2a\x3c\x2f\170\x6d\160\x3e\43\125\151\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\161\x6b\x77\x63\155\145\x65\x6b\x67\151\x69\x6f\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto oycuaqewsskgkqci; } return $nsmgceoqaqogqmuw; oycuaqewsskgkqci: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\41\55\55\x20\x25\x73\40\55\x2d\76", uniqid("\127\x50\122\x5f\130\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto ocmagamuyawyiyka; } return $nsmgceoqaqogqmuw; ocmagamuyawyiyka: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
