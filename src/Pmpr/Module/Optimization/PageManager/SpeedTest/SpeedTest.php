<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa6601788             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\PageManager\Model\Page as PageModel; use Pmpr\Module\Optimization\PageManager\Model\Run\Remote; use Pmpr\Module\Optimization\Traits\PageManagerEngineTrait; use WP_Error; class SpeedTest extends Container { use PageManagerEngineTrait; const smsimmcqmsmgyuii = "\x73\160\145\x65\144\164\145\163\164"; const quouokcgsyacigiu = "\x73\x70\145\x65\x64\137\164\145\x73\164"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x69\x6e\x69\164", [$this, "\x79\x65\x79\x69\147\165\171\x65\147\x6d\155\171\x75\x73\x65\141"])->qcsmikeggeemccuu(Process::eqcogaqyemgysumq, [$this, "\x61\171\153\x79\145\147\x73\161\151\x73\x77\x6d\151\x6d\x75\171"], 10, 2)->qcsmikeggeemccuu(Process::asueeykmyygakoqs, [$this, "\x61\x65\x6b\x75\151\157\x6b\x73\x6d\161\x71\143\x63\x79\x75\165"], 10, 2); $this->waqewsckuayqguos(Optimization::kgswyesggeyekgmg . "\143\141\143\x68\145\x5f\x68\164\155\154\x5f\x67\145\x6e\x65\x72\141\x74\x65\x64", [$this, "\x6d\x63\x6b\167\x71\x69\x6f\155\x6d\x65\151\171\x77\145\171\x77"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Page::symcgieuakksimmu(); } } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy() && $this->qckwuesaysuoqcuk() && !$this->guaegcucuwakigoa() && !$this->kmuweyayaqoeqiyw()->qcsgmgoukiouuscw()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x59\x6f\165\x72\40\x73\151\x74\x65\x20\151\163\x20\x75\x6e\141\x76\x61\x69\x6c\x61\142\x6c\145\40\50\45\x73\x29\40\142\171\x20\107\x6f\157\147\x6c\x65\x20\x66\157\162\x20\160\x61\147\x65\x20\163\160\145\x65\144\40\164\x65\163\164\151\x6e\x67\56", PR__MDL__OPTIMIZATION), "\x48\124\124\120\40\123\164\x61\x74\x75\163\x20\x43\x6f\144\x65\40\64\x30\x33") . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\x4d\157\162\145\40\111\x6e\146\157\162\x6d\141\164\151\x6f\156", PR__MDL__OPTIMIZATION), $this->kmuweyayaqoeqiyw()->gamgkoooceoaaeie("\x73\160\x65\x65\144\x5f\x74\x65\x73\x74")), "\x73\x69\x74\145\x2d\x6e\x6f\x74\55\x64\x69\x73\160\x61\164\x63\150\x61\x62\x6c\x65"); } } public function mckwqiommeiyweyw($esaqeawoigqgagum, $eeamcawaiqocomwy) { if (basename($esaqeawoigqgagum) === "\x69\156\144\145\x78\x2e\x68\164\155\154" && $this->gcqaaiygcykaqwym()) { $iuekmkswcsacoawq = PageModel::symcgieuakksimmu(); $eeamcawaiqocomwy = $iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy, false); $suaemuyiacqyugsm = $iuekmkswcsacoawq->iekyeyicoyyawomk()->akkkoiiymmamsauc($eeamcawaiqocomwy, Constants::auqoykcmsiauccao); if ($suaemuyiacqyugsm && $iuekmkswcsacoawq->waecsyqmwascmqoa($suaemuyiacqyugsm, $iuekmkswcsacoawq::aewquksqwqiawiei, 0)) { Process::symcgieuakksimmu()->gkimgkucuskgagqo($iuekmkswcsacoawq->esewqawcwouwyesq($eeamcawaiqocomwy), $iuekmkswcsacoawq->mwyqswsaeeewsosm($suaemuyiacqyugsm)); } } } public function aykyegsqiswmimuy($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $goqqimcssiyagkwy = $this->wkagassgcaqeosio(); $gcemueskwuiggwki = $goqqimcssiyagkwy->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); if (!$gcemueskwuiggwki) { $sogksuscggsicmac = API::symcgieuakksimmu()->wysoaqkkayeussmu($eeamcawaiqocomwy); if (!is_wp_error($sogksuscggsicmac)) { $this->wkagassgcaqeosio()->qiskoakuecueiauy($qkcoyiyeuoyyoocy, $sogksuscggsicmac); Process::symcgieuakksimmu()->mkgmgessyuewwswa($sogksuscggsicmac[Constants::kyakumqgcsaskweq] ?? 30, $eeamcawaiqocomwy, $qkcoyiyeuoyyoocy); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x6e\x6f\164\150\x65\x72\x20\x70\x72\x6f\143\145\x73\163\x20\x61\x6c\162\x65\141\x64\171\x20\163\x74\141\162\164\145\x64\x2e", PR__MDL__OPTIMIZATION), 401); } } return $sogksuscggsicmac; } public function aekuioksmqqccyuu($eeamcawaiqocomwy, $qkcoyiyeuoyyoocy) { $syoewmweaqiqswgu = "\x73\x70\145\145\x64\137\164\x65\163\164\137\161\165\145\x75\145\137{$qkcoyiyeuoyyoocy}\137\164\162\x61\156\163\151\145\x6e\164"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $sogksuscggsicmac = false; if ($this->gcqaaiygcykaqwym()) { $sogksuscggsicmac = $this->paekekswsswiicis($qkcoyiyeuoyyoocy); if (is_bool($sogksuscggsicmac)) { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); } else { if (!is_wp_error($sogksuscggsicmac)) { if (!API::symcgieuakksimmu()->goaikaqccaawcswu()) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::quyascocmiiossme, true); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x59\x6f\x75\162\40\x73\x69\x74\145\40\151\163\40\165\156\141\166\x61\151\x6c\141\142\x6c\x65\x20\x28\45\163\51\x20\142\x79\40\x47\157\x6f\x67\x6c\x65\x20\146\x6f\162\40\160\x61\x67\145\40\x73\160\x65\145\x64\40\x74\x65\163\x74\x69\x6e\x67\56", PR__MDL__OPTIMIZATION), "\x48\x54\124\120\40\x53\x74\x61\x74\x75\x73\x20\x43\157\x64\145\x20\x34\60\63")); } else { $wciyuagckicucysk = $qkqgcaykemoiecma->igqksmmwesguiaae($syoewmweaqiqswgu); if (empty($wciyuagckicucysk) || $wciyuagckicucysk < 0) { $wciyuagckicucysk = 1; } if ($wciyuagckicucysk <= 3) { $cqgoimumaewouews = Remote::symcgieuakksimmu()->qcwwiyuycagsaikk($sogksuscggsicmac) * $wciyuagckicucysk; } else { $cqgoimumaewouews = MINUTE_IN_SECONDS * 10; } if ($wciyuagckicucysk <= 10) { $qkqgcaykemoiecma->gawcqwcqgwgucgya($syoewmweaqiqswgu, ++$wciyuagckicucysk); Process::symcgieuakksimmu()->mkgmgessyuewwswa($cqgoimumaewouews, $qkcoyiyeuoyyoocy); } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\144\x5f\x74\145\163\164\x5f\162\x65\164\x72\x69\x65\166\x65\137\162\145\x73\x75\x6c\x74\x5f\x66\141\151\154\x65\x64", $qkcoyiyeuoyyoocy); } $sogksuscggsicmac = false; } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\x64\137\164\x65\163\164\x5f\x72\145\164\x72\151\145\x76\145\x5f\162\x65\163\x75\154\164\137\146\x61\x69\x6c\145\x64", $qkcoyiyeuoyyoocy); } } } else { $qkqgcaykemoiecma->cqgekgeqacmqquas($syoewmweaqiqswgu); $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\160\x65\x65\144\137\x74\145\x73\164\137\162\x65\164\162\151\145\166\x65\137\x72\145\163\x75\154\164\x5f\146\x61\x69\x6c\145\144", $qkcoyiyeuoyyoocy); } return $sogksuscggsicmac; } public function paekekswsswiicis($qkcoyiyeuoyyoocy) { $scwwcyaqyywsweoq = $this->wkagassgcaqeosio()->sweusgyeqwgmyauq(Constants::imywcsggckkcywgk, $qkcoyiyeuoyyoocy, self::quouokcgsyacigiu, Constants::eyemmiwoaayukksq); $ksaameoqigiaoigg = false; if ($scwwcyaqyywsweoq) { $ycikkiiimgoqqgsq = Remote::symcgieuakksimmu(); if ($esaqeawoigqgagum = $ycikkiiimgoqqgsq->csyeqcysyissgowm($scwwcyaqyywsweoq)) { if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($esaqeawoigqgagum)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { if ($giogkommscssioky = $ycikkiiimgoqqgsq->oqggmyigigeeqwye($scwwcyaqyywsweoq)) { $ksaameoqigiaoigg = $this->guksgkgiseiigkaw($giogkommscssioky, $esaqeawoigqgagum, $qkcoyiyeuoyyoocy); } } } } if ($scwwcyaqyywsweoq && !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $scwwcyaqyywsweoq; } return $ksaameoqigiaoigg; } public function cgosiioosmgsgecq($esaqeawoigqgagum) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("{$esaqeawoigqgagum}\57\163\x70\145\145\144\164\x65\163\164\56\x6a\x73\x6f\156"); if (200 === (int) $gqusacuooiagkuom->aywwmqkqawocceuc($keccaugmemegoimu) && ($kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu))) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\123\160\145\145\x64\x20\124\x65\x73\x74\72\x20\x4a\x53\x4f\x4e\40\106\x69\x6c\145\40\x52\x65\x74\162\x69\x65\x76\145\144\56"); return $kuukgsmqkagwaciu; } return false; } public function guksgkgiseiigkaw(string $giogkommscssioky, string $gmukeskyyskueium, string $okuucwisauuawocs) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = API::symcgieuakksimmu()->uiqqikcuycqyeooa($giogkommscssioky); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($sogksuscggsicmac[Constants::ciywsqoeiymemsys]) { case Constants::uasuowkaguiwoouw: $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\123\160\145\145\144\x20\124\x65\x73\x74\40\163\x74\x61\x74\165\x73\40\x66\x61\x69\x6c\x65\x64\x3a\x20\x25\x73", PR__MDL__OPTIMIZATION), $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\163\157\x6e", ''))); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\123\160\x65\x65\x64\40\x54\x65\163\x74\72\40\x73\164\x61\x74\x75\163\x20\x66\141\x69\x6c\x65\x64\40\75\x3e\40\45\x73", $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\145\x61\163\157\x6e", ''))); break; case Constants::amcogigwsaqssuai: case Constants::gymusgeumuwomwuy: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\x65\x64\40\124\x65\x73\x74\x3a\40\163\164\x61\164\x75\x73\40\x63\157\155\x70\x6c\145\164\x65\144"); if ($ewgwqamkygiqaawc = $this->cgosiioosmgsgecq($gmukeskyyskueium)) { $ksaameoqigiaoigg = $this->gkaocuaauikgisuc($okuucwisauuawocs, $ewgwqamkygiqaawc); } break; } return $ksaameoqigiaoigg; } public function gkaocuaauikgisuc($qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc) { $ksaameoqigiaoigg = false; $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($ewgwqamkygiqaawc); if ($sogksuscggsicmac) { $icwicymcioeyeyek = [Model::aaegquasauuywyey => $sogksuscggsicmac[Constants::auugqowqueaocgsu] ?? 0]; $yygmoeguaqyumuui = ["\163\143\157\x72\x65", "\146\x63\x70", "\154\x63\160", "\x63\154\x73", "\164\x62\x74", "\x73\151"]; $yqkagouksaimoyqa = [Constants::mcaucuyeeiwsmmuy, Constants::skogicecygyyskkq]; foreach ($yqkagouksaimoyqa as $ykeeyqcewuccwkeo) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $eqgoocgaqwqcimie = $sogksuscggsicmac[$ykeeyqcewuccwkeo][$uusmaiomayssaecw] ?? false; if ($eqgoocgaqwqcimie !== false) { $icwicymcioeyeyek["{$ykeeyqcewuccwkeo}\x5f{$uusmaiomayssaecw}"] = $eqgoocgaqwqcimie; } } } if ($icwicymcioeyeyek) { $icwicymcioeyeyek[Constants::egukegmcemkeegqq] = $qkcoyiyeuoyyoocy; $sogksuscggsicmac = Model::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $ksaameoqigiaoigg = true; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\x70\145\x65\144\x20\x54\x65\x73\x74\x3a\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])}\x2e"); } } } if ($ksaameoqigiaoigg !== false) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x73\x70\145\145\144\137\x74\145\163\x74\x5f\162\x65\163\165\x6c\x74\137\x73\141\166\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); } else { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\163\x70\x65\145\x64\x5f\164\x65\163\164\137\162\145\163\x75\x6c\x74\137\x73\141\166\x65\x5f\146\141\x69\154\x65\144", $qkcoyiyeuoyyoocy, $ewgwqamkygiqaawc); $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x73\x75\x6c\x74\40\x66\145\x74\x63\150\x65\144\40\142\x75\164\40\143\x61\156\x20\156\x6f\164\x20\x73\x61\x76\145\x20\x69\x74\56", PR__MDL__OPTIMIZATION)); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x53\160\145\x65\x64\x20\x54\145\163\x74\x3a\x20\x52\x65\x73\165\154\164\x20\146\145\164\x63\x68\x65\x64\40\142\x75\x74\40\x63\141\156\x20\x6e\x6f\164\x20\163\x61\166\145\40\x69\164\x2e"); } return $ksaameoqigiaoigg; } public function qckwuesaysuoqcuk() : bool { return $this->weysguygiseoukqw(Setting::uauwkaimuwugwwma, false); } public function guaegcucuwakigoa() : bool { return !$this->weysguygiseoukqw(Setting::quyascocmiiossme, false); } public function gcqaaiygcykaqwym() : bool { return $this->qckwuesaysuoqcuk() && $this->guaegcucuwakigoa(); } }
