<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16d680906             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Traits; trait RegexTrait { private array $XMPReplace = []; protected function find(string $eouekqmooogkoqoo, string $nsmgceoqaqogqmuw, string $kuqkwweuwsiiiuem = "\x55\155\163\x69") : array { preg_match_all("\x2f" . $eouekqmooogkoqoo . "\57" . $kuqkwweuwsiiiuem, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg, PREG_SET_ORDER); if (!empty($meyiiwcswqmuggyg)) { goto ewsigoeswimiueqe; } return []; ewsigoeswimiueqe: return $meyiiwcswqmuggyg; } protected function omkigsosscumqkeg($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x21\x2d\55\x5c\x73\x2a\156\x6f\160\x74\x69\x6d\151\172\x65\134\163\52\x2d\55\76\56\52\77\74\x21\x2d\55\134\x73\52\x2f\x5c\x73\x2a\156\x6f\x70\x74\151\155\x69\172\x65\134\163\52\x2d\x2d\76\x23\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto gaskcgoeywuyukke; } return $nsmgceoqaqogqmuw; gaskcgoeywuyukke: $moyaaaascoeowegu = preg_replace("\57\x3c\41\55\55\x28\56\52\51\55\55\x3e\x2f\x55\x69\x73", '', $moyaaaascoeowegu); if (!(null === $moyaaaascoeowegu)) { goto gqaqamewqeaqwcia; } return $nsmgceoqaqogqmuw; gqaqamewqeaqwcia: return $moyaaaascoeowegu; } protected function sceakkciymsqkgcm($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\x23\x3c\163\x63\162\151\x70\x74\133\x5e\x3e\135\x2a\x3e\56\x2a\77\74\x5c\57\163\x63\x72\x69\160\164\x5c\x73\52\x3e\43\155\x69\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto okuqsqaiwwiigmyu; } return $nsmgceoqaqogqmuw; okuqsqaiwwiigmyu: return $moyaaaascoeowegu; } protected function gqaeyikiacygqquu($nsmgceoqaqogqmuw) : string { $moyaaaascoeowegu = preg_replace("\43\74\x6e\x6f\x73\x63\x72\151\x70\164\133\136\76\135\52\76\x2e\52\x3f\x3c\x5c\57\156\157\x73\x63\162\x69\x70\x74\x5c\x73\x2a\76\43\x6d\151\x73", '', $nsmgceoqaqogqmuw); if (!(null === $moyaaaascoeowegu)) { goto ksiwgckusukisueg; } return $nsmgceoqaqogqmuw; ksiwgckusukisueg: return $moyaaaascoeowegu; } protected function uwqicuuwkamyewyu($nsmgceoqaqogqmuw) : string { $this->XMPReplace = []; $ucccueqywigcukcc = "\x23\x3c\x78\155\x70\56\x2a\x3e\x2e\52\74\x2f\170\x6d\160\x3e\x23\x55\151\x73"; $replaced_html = preg_replace_callback($ucccueqywigcukcc, [$this, "\143\x63\x71\x6b\x77\143\x6d\145\x65\153\x67\x69\151\157\151\167"], $nsmgceoqaqogqmuw); if (!empty($replaced_html)) { goto sgkqgucguyccaaki; } return $nsmgceoqaqogqmuw; sgkqgucguyccaaki: return $replaced_html; } protected function ccqkwcmeekgiioiw($uammqaqiwgcmeska) : string { $uusmaiomayssaecw = sprintf("\74\41\x2d\55\40\x25\x73\40\55\x2d\76", uniqid("\x57\120\122\x5f\x58\x4d\120\137", true)); $this->XMPReplace[$uusmaiomayssaecw] = $uammqaqiwgcmeska[0]; return $uusmaiomayssaecw; } protected function auyeeommieeqigum($nsmgceoqaqogqmuw) : string { if (!empty($this->XMPReplace)) { goto omuemegmkesqgwys; } return $nsmgceoqaqogqmuw; omuemegmkesqgwys: return str_replace(array_keys($this->XMPReplace), array_values($this->XMPReplace), $nsmgceoqaqogqmuw); } }
