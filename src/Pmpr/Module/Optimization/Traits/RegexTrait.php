<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4dfc43710             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto sgiuwkisugmewmcs; } return []; sgiuwkisugmewmcs: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\41\55\55\x5c\163\x2a\x6e\157\160\164\x69\x6d\151\172\x65\134\x73\52\55\55\76\56\52\x3f\74\x21\x2d\55\x5c\x73\x2a\57\134\x73\52\156\x6f\160\x74\x69\155\151\172\145\134\163\52\55\x2d\76\43\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto kceeuicccqscwgsu; } return $nsmgceoqaqogqmuw; kceeuicccqscwgsu: $moyaaaascoeowegu = preg_replace("\x2f\74\41\55\55\x28\56\52\51\55\55\76\x2f\x55\151\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto iquecygaakmiomeg; } return $nsmgceoqaqogqmuw; iquecygaakmiomeg: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\163\x63\162\151\x70\x74\133\x5e\76\135\52\x3e\56\52\x3f\x3c\x5c\57\x73\x63\x72\x69\x70\164\134\x73\52\x3e\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto eacysqsegwcqawsa; } return $nsmgceoqaqogqmuw; eacysqsegwcqawsa: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x6e\157\163\143\x72\151\160\x74\x5b\136\76\x5d\52\x3e\x2e\x2a\77\x3c\134\x2f\x6e\x6f\163\143\162\151\160\x74\x5c\x73\x2a\76\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto yimeskeioamqmuwg; } return $nsmgceoqaqogqmuw; yimeskeioamqmuwg: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\155\160\56\52\76\56\52\74\57\170\155\160\x3e\x23\125\x69\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\x71\x6b\x77\x63\155\145\x65\153\147\x69\151\x6f\x69\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto yeemsgmumygmumqw; } return $nsmgceoqaqogqmuw; yeemsgmumygmumqw: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\x21\x2d\55\x20\45\x73\40\x2d\55\x3e", uniqid("\127\120\x52\x5f\130\x4d\x50\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto wkaoyycsoeoyqcae; } return $nsmgceoqaqogqmuw; wkaoyycsoeoyqcae: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
