<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76d1d04df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\163\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto imwiyqcekcykscui; } return []; imwiyqcekcykscui: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x21\x2d\x2d\x5c\163\x2a\156\x6f\x70\164\151\155\x69\x7a\x65\x5c\163\x2a\55\55\76\x2e\x2a\x3f\74\x21\x2d\x2d\134\163\52\x2f\x5c\x73\x2a\x6e\157\160\x74\151\155\x69\172\145\x5c\163\52\55\55\76\43\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto umemmgiwimkymaya; } return $nsmgceoqaqogqmuw; umemmgiwimkymaya: $moyaaaascoeowegu = preg_replace("\57\74\x21\55\55\x28\x2e\52\51\x2d\55\x3e\57\x55\151\163", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto omsmaougqkqigogw; } return $nsmgceoqaqogqmuw; omsmaougqkqigogw: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\163\143\x72\x69\x70\164\x5b\x5e\76\135\52\x3e\x2e\52\77\x3c\x5c\57\x73\x63\162\151\160\164\134\163\x2a\x3e\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto geasgywiogoeamek; } return $nsmgceoqaqogqmuw; geasgywiogoeamek: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\156\157\x73\143\162\x69\160\164\x5b\136\76\135\52\x3e\56\52\x3f\x3c\134\x2f\156\x6f\x73\143\162\151\x70\164\134\163\x2a\76\x23\x6d\151\163", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto qweyymyuuqwcmkqg; } return $nsmgceoqaqogqmuw; qweyymyuuqwcmkqg: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\170\155\x70\56\52\76\x2e\52\74\57\170\x6d\160\x3e\43\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\143\x71\x6b\167\143\x6d\x65\x65\153\147\151\x69\157\151\x77"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto guqmgiqaaowaauyo; } return $nsmgceoqaqogqmuw; guqmgiqaaowaauyo: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\x2d\x2d\x20\45\163\40\55\x2d\76", uniqid("\127\120\x52\x5f\x58\115\120\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto mccimkgwkkamsime; } return $nsmgceoqaqogqmuw; mccimkgwkkamsime: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
