<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa6601788             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\163\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (empty($meyiiwcswqmuggyg)) { return []; } return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\55\x5c\163\x2a\156\157\x70\164\151\x6d\151\x7a\x65\x5c\x73\x2a\x2d\55\76\56\52\77\74\41\55\55\x5c\163\x2a\57\134\x73\x2a\x6e\x6f\160\164\x69\155\151\172\x65\134\163\x2a\55\55\x3e\x23\151\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } $moyaaaascoeowegu = preg_replace("\57\x3c\41\x2d\x2d\x28\56\52\51\55\x2d\76\57\125\151\163", '', $moyaaaascoeowegu); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\x3c\x73\x63\162\x69\x70\x74\133\136\x3e\x5d\x2a\76\56\52\x3f\74\x5c\57\163\x63\162\x69\160\164\x5c\x73\x2a\x3e\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\156\x6f\163\x63\162\x69\160\164\x5b\136\x3e\x5d\52\76\x2e\52\x3f\74\134\57\156\157\163\143\x72\x69\160\164\x5c\x73\x2a\x3e\x23\155\x69\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\155\x70\56\x2a\x3e\x2e\x2a\x3c\57\170\155\x70\76\43\125\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\x71\153\167\143\x6d\145\x65\153\147\151\x69\x6f\x69\x77"], $nsmgceoqaqogqmuw); if (empty($replaced_html)) { return $nsmgceoqaqogqmuw; } return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\x2d\55\40\x25\x73\40\x2d\55\x3e", uniqid("\127\120\122\137\x58\115\120\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (empty($this->XMPReplace)) { return $nsmgceoqaqogqmuw; } return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
