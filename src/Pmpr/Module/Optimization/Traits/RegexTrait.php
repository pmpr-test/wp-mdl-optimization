<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc08864f41             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\163\x69") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\x2f" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (empty($meyiiwcswqmuggyg)) { return []; } return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\41\55\55\x5c\x73\x2a\156\157\160\x74\x69\155\x69\x7a\x65\x5c\x73\x2a\x2d\x2d\76\x2e\52\77\74\x21\x2d\x2d\134\163\52\x2f\x5c\x73\x2a\x6e\157\x70\x74\151\155\x69\172\145\x5c\x73\x2a\55\x2d\x3e\x23\151\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } $moyaaaascoeowegu = preg_replace("\x2f\x3c\x21\55\x2d\x28\56\x2a\x29\x2d\x2d\76\x2f\125\x69\x73", '', $moyaaaascoeowegu); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\163\x63\162\151\x70\164\133\136\x3e\x5d\52\76\x2e\52\x3f\x3c\134\57\163\143\x72\x69\160\x74\x5c\x73\x2a\76\x23\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\x6e\157\x73\x63\x72\151\160\x74\133\136\x3e\x5d\x2a\76\56\52\x3f\74\134\x2f\x6e\x6f\x73\143\x72\151\x70\x74\x5c\x73\x2a\76\43\x6d\x69\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\43\x3c\x78\155\x70\56\x2a\x3e\x2e\52\x3c\57\170\155\160\76\43\x55\x69\163"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\x63\161\x6b\x77\x63\x6d\145\x65\153\147\151\x69\157\151\x77"], $nsmgceoqaqogqmuw); if (empty($replaced_html)) { return $nsmgceoqaqogqmuw; } return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\x21\55\x2d\40\x25\x73\x20\55\x2d\76", uniqid("\x57\x50\x52\x5f\130\x4d\x50\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (empty($this->XMPReplace)) { return $nsmgceoqaqogqmuw; } return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
