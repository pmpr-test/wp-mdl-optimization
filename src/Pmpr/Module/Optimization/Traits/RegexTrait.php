<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581596084c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\125\x6d\163\151") : array { preg_match_all("\57" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (empty($meyiiwcswqmuggyg)) { return []; } return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x21\55\x2d\x5c\x73\52\x6e\157\x70\x74\x69\155\x69\x7a\145\x5c\x73\x2a\x2d\55\76\56\x2a\x3f\74\x21\55\x2d\134\x73\52\x2f\134\x73\52\156\x6f\x70\164\151\x6d\x69\172\145\134\x73\x2a\55\55\x3e\x23\151\163", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } $moyaaaascoeowegu = preg_replace("\57\x3c\41\x2d\x2d\x28\x2e\52\x29\x2d\x2d\76\x2f\125\x69\x73", '', $moyaaaascoeowegu); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\x73\x63\x72\151\x70\x74\x5b\136\x3e\135\52\76\x2e\52\x3f\74\134\x2f\x73\x63\162\x69\x70\164\134\163\x2a\x3e\x23\155\151\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\74\156\157\163\x63\x72\151\x70\164\133\x5e\x3e\135\x2a\76\x2e\52\x3f\74\134\x2f\156\x6f\163\143\162\151\x70\x74\x5c\163\x2a\x3e\43\155\151\x73", '', $nsmgceoqaqogqmuw); if (null === $moyaaaascoeowegu) { return $nsmgceoqaqogqmuw; } return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\155\x70\56\x2a\76\56\52\74\x2f\x78\155\x70\x3e\43\125\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\x63\143\161\153\167\143\x6d\x65\x65\153\147\x69\151\157\151\167"], $nsmgceoqaqogqmuw); if (empty($replaced_html)) { return $nsmgceoqaqogqmuw; } return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\x3c\41\x2d\x2d\40\45\163\x20\55\x2d\x3e", uniqid("\127\x50\x52\137\x58\x4d\120\x5f", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (empty($this->XMPReplace)) { return $nsmgceoqaqogqmuw; } return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
