<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fc94b167d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Exception; use GuzzleHttp\Cookie\CookieJar; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use WP_Error; class API extends BaseClass { const kcyyywioiaimkqks = "\130\x2d\x41\x75\164\x68\55\x4b\x65\x79"; const sskckkiuimayuoeg = "\130\x2d\101\x75\164\x68\x2d\x45\x6d\x61\x69\x6c"; const gqkuwmsyysusmquw = "\164\x65\x78\x74\x2f\x68\x74\x6d\154\x2c\x61\x70\x70\154\151\x63\141\164\x69\x6f\156\x2f\x78\150\164\155\154\53\170\x6d\x6c\x2c\x61\x70\160\x6c\x69\143\x61\x74\x69\157\x6e\x2f\x78\x6d\x6c\x3b\x71\75\60\56\x39\54" . "\151\155\x61\x67\x65\57\167\x65\x62\160\x2c\151\155\x61\x67\145\57\x61\160\156\147\54\52\x2f\x2a\x3b\161\x3d\60\x2e\70\54\141\x70\160\x6c\x69\x63\x61\164\151\x6f\156\57\163\151\147\156\145\144\x2d\145\x78\143\x68\141\156\147\x65\73\x76\x3d\x62\x33"; const keasgekkgaeuueau = "\115\x6f\172\151\154\154\x61\x2f\x35\56\60\x20\50\x4c\151\156\165\170\x3b\x20\x41\156\144\162\157\151\x64\40\x37\x2e\x30\73\40\115\x6f\164\157\40\107\40\50\x34\51\x29\x20\101\160\x70\154\x65\127\145\x62\113\151\x74\57\65\x33\67\x2e\x33\66\x20" . "\x28\x4b\110\124\x4d\114\54\40\x6c\151\153\x65\x20\107\x65\x63\153\157\x29\40\x43\x68\162\157\x6d\x65\x2f\x38\64\x2e\60\56\x34\61\64\63\56\67\x20\115\157\x62\151\154\x65\x20\x53\x61\146\x61\162\151\57\x35\x33\x37\x2e\63\66\40\x43\x68\162\x6f\155\145\55\114\x69\x67\150\164\150\x6f\x75\163\145"; const guaqqecaewyquueo = "\x68\164\164\x70\x5f\x72\x65\161\x75\x65\163\x74\137\x63\141\143\x68\x65\x5f\x73\x65\164\x74\x69\x6e\147\163"; protected ?string $email = ''; protected ?string $zoneId = ''; protected ?string $apiKey = ''; protected ?string $cfDomain = ''; protected ?string $apiToken = ''; protected ?string $authMode = ''; protected array $accountIds = []; public function __construct() { $this->suyquyoaausqsuay("\150\x74\x74\160\163\72\57\57\x61\x70\x69\56\143\154\x6f\x75\x64\x66\154\141\162\x65\56\143\157\x6d\x2f\143\x6c\151\145\156\164\x2f\x76\64"); $aqimoomqmscqikma = Cloudflare::symcgieuakksimmu(); $this->email = $aqimoomqmscqikma->weysguygiseoukqw(Setting::yeeemccgmikyeiqq); $this->apiKey = $aqimoomqmscqikma->weysguygiseoukqw(Setting::ekecawsykcwisikm); $this->zoneId = $aqimoomqmscqikma->weysguygiseoukqw(Setting::iqksqseqeqmaukkk); $this->authMode = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $this->cfDomain = $aqimoomqmscqikma->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); $this->apiToken = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uwkciiskgyqaigqe); parent::__construct(); $this->iwoewaiwqaisaagy(); if ($this->caeygcowcuqeqkeo() === Setting::eywauigiwgqckygk) { $this->amskqmemsacmksye($this->gkuoyaqwcaqcqmck()); } else { $this->kiaqywwoysssqgig(self::kcyyywioiaimkqks, $this->aocqkkgewgggwwys())->kiaqywwoysssqgig(self::sskckkiuimayuoeg, $this->cseqaqmuaswgwuoo()); } $this->ueakuaywsqiooygo(20); } public function kmegomwosoueimki() : array { return $this->accountIds; } public function cseqaqmuaswgwuoo() : ?string { return $this->email; } public function mekmkysuwsuseaow() : ?string { return $this->zoneId; } public function sawoqaskqkasksge() : ?string { return $this->cfDomain; } public function aocqkkgewgggwwys() : ?string { return $this->apiKey; } public function gkuoyaqwcaqcqmck() : ?string { return $this->apiToken; } public function caeygcowcuqeqkeo() : ?string { return $this->authMode; } public function iqokecwcgkaookuc() { $ksaameoqigiaoigg = []; $yeacayasgueouoqc = 1; $weyoqgcesqgeusiu = 50; $ymiyawysimukkoso = false; do { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $cokqekgqeigaoqsy = $this->sawoqaskqkasksge(); $wegekcwgakqeqsmq = $this->caeygcowcuqeqkeo(); $mkomwsiykqigmqca = "\57\x7a\157\x6e\x65\163"; if ($cokqekgqeigaoqsy && $wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::NAME, $cokqekgqeigaoqsy, $mkomwsiykqigmqca); } else { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::imywcsggckkcywgk => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], $mkomwsiykqigmqca); } $keccaugmemegoimu = $this->get($mkomwsiykqigmqca, $qiouiwasaauyaaue); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $yyimiwcuegayoskq = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\162\x65\163\x75\154\x74\x5f\151\x6e\x66\157", []); if ($yyimiwcuegayoskq && is_array($yyimiwcuegayoskq)) { $saawqymgwcseukqa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x74\157\164\141\x6c\x5f\160\x61\147\145\163"); if ($saawqymgwcseukqa && (int) $saawqymgwcseukqa > $yeacayasgueouoqc) { $ymiyawysimukkoso = true; $yeacayasgueouoqc++; } else { $ymiyawysimukkoso = false; } } else { if ($ymiyawysimukkoso) { $ymiyawysimukkoso = false; } } $sogksuscggsicmac = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { foreach ($sogksuscggsicmac as $icwicymcioeyeyek) { $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::gouqcwikiiygyasc); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo) { $ksaameoqigiaoigg[$aokagokqyuysuksm] = $ymqmyyeuycgmigyo; } else { $iswcokucwmiosiaq = __("\x55\x6e\141\x62\x6c\145\x20\164\x6f\40\162\x65\164\162\151\166\145\40\x7a\x6f\156\x65\x20\151\x64\x20\144\165\x65\40\164\x6f\x20\x69\x6e\x76\141\154\x69\x64\40\162\145\163\160\x6f\156\163\145\x20\144\141\x74\x61", PR__MDL__OPTIMIZATION); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } } while ($ymiyawysimukkoso); if (!$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\156\141\142\154\x65\x20\164\157\40\x66\x69\x6e\144\x20\144\x6f\x6d\x61\151\x6e\x73\40\x63\x6f\x6e\x66\x69\147\x75\x72\145\x64\40\157\x6e\x20\x43\x6c\157\165\x64\x66\154\x61\162\x65", PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } public function smayommusayuweky(string $qcsumeqqumqgymei) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->get("\57\172\x6f\x6e\x65\163\57{$this->mekmkysuwsuseaow()}\57\162\165\154\x65\163\x65\164\163"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wygwekwwaigweioa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if (is_array($wygwekwwaigweioa)) { foreach ($wygwekwwaigweioa as $ucyqiiueossykume) { if ($qcsumeqqumqgymei === $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::qsysckqimsuoumwu)) { $ksaameoqigiaoigg = (string) $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::gouqcwikiiygyasc, ''); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function aecaaquaemuuascc(array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\172\x6f\x6e\145\x73\x2f{$this->mekmkysuwsuseaow()}\x2f\162\x75\x6c\145\x73\x65\x74\163", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\x72\x65\163\x75\154\164\x2e\151\x64", false); } } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function kwogmsuwiyakckuo(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\57\x7a\x6f\x6e\145\x73\57{$this->mekmkysuwsuseaow()}\x2f\162\x75\154\x65\163\145\164\x73\57{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function wooogwsuiygsuuso(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = []; $keccaugmemegoimu = $this->get("\x2f\x7a\157\156\145\163\57{$this->mekmkysuwsuseaow()}\57\162\165\154\145\163\145\164\x73\57{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (array) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\x72\x65\x73\165\154\x74\x2e\162\x75\x6c\x65\163", []); } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function icgowyskqkokqisu(?string $uiwqqmmiwqqqaugc, array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; if ($uiwqqmmiwqqqaugc) { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\157\x6e\145\163\x2f{$this->mekmkysuwsuseaow()}\57\x72\165\x6c\x65\163\145\164\x73\x2f{$uiwqqmmiwqqqaugc}\57\x72\x75\x6c\x65\163", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\x65\163\x75\154\164\x2e\151\x64", false); } } } else { $iswcokucwmiosiaq = __("\x52\x75\x6c\145\x73\x65\x74\40\x49\x44\40\x6e\157\164\40\x73\x70\145\x63\151\x66\151\145\144\x2e", PR__MDL__OPTIMIZATION); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function koakkeimqaokakym(?string $uiwqqmmiwqqqaugc, ?string $ymawgemiwyykseqg) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\57\x7a\x6f\x6e\145\163\57{$this->mekmkysuwsuseaow()}\x2f\x72\x75\x6c\x65\x73\145\164\163\57{$uiwqqmmiwqqqaugc}\x2f\x72\x75\154\x65\x73\x2f{$ymawgemiwyykseqg}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = true; } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function ymygowkkwyigwcea() { return $this->smayommusayuweky(self::guaqqecaewyquueo); } public function cgkaaimwgiesmwaw() { return $this->aecaaquaemuuascc([Constants::iysqkumcmmioious => Constants::qwokosymwqwyqmww, Constants::qsysckqimsuoumwu => self::guaqqecaewyquueo, Constants::eeeoygaqqmoukaeg => [], Constants::NAME => "\x43\x61\143\150\x65\x20\x52\x75\154\x65\163\x65\x74\40\103\x72\145\x61\164\145\144\40\142\171\40\120\115\x50\x52\x20\x4f\160\x74\151\x6d\x69\172\x61\164\x69\157\156\x20\115\157\x64\165\x6c\x65"]); } public function sqmcyegkigweiwks() { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x6c\x6f\165\144\146\x6c\141\x72\x65\x5f\x70\x75\162\x67\145\x5f\x77\150\x6f\154\145\137\143\x61\x63\x68\x65\x5f\x62\x65\x66\x6f\x72\145"); $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\x6f\156\145\163\57{$this->mekmkysuwsuseaow()}\x2f\160\165\162\147\145\137\x63\141\143\x68\x65", [Constants::qmwqkaeamecekiso => ["\160\x75\x72\x67\145\x5f\145\166\145\162\x79\x74\150\x69\x6e\x67" => true]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x6c\157\165\x64\146\x6c\x61\162\x65\137\x70\165\x72\x67\x65\x5f\x77\x68\x6f\x6c\145\x5f\143\141\x63\150\145\137\141\x66\164\x65\x72"); $ksaameoqigiaoigg = true; } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } private function awkkygqayciogqym($auwuoyyagaiegwae) { $ukgsssmgkskkuoow = array_chunk($auwuoyyagaiegwae, 30); $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); try { $eeamcawaiqocomwy = "{$this->wwawisckiqeueoua()}\x2f\172\x6f\x6e\145\163\57{$this->mekmkysuwsuseaow()}\x2f\x70\x75\x72\x67\145\137\143\x61\143\x68\145"; foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { $this->wiwocsyueqyyakmy($eeamcawaiqocomwy, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x52\x65\x71\165\145\163\164\40\146\157\x72\40\x75\x72\154\x73\x20\x63\x6f\155\x70\154\145\x74\145\x64\x2e\40\x25\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x52\145\x71\165\x65\163\x74\40\x66\157\x72\x20\x75\162\154\163\40\146\x61\151\x6c\x65\x64\56\x20\x25\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, array_merge($qiouiwasaauyaaue, [Constants::qmwqkaeamecekiso => [Constants::cywikqeomiuewqim => array_values($wegougocoeeookww)]])); } $ksaameoqigiaoigg = true; } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = false; $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x6c\157\165\x64\x66\x6c\141\x72\x65\x5f\x70\x75\x72\147\145\x5f\x63\x61\x63\150\145\x5f\142\x79\x5f\165\162\154\x73\x5f\142\x65\x66\x6f\162\145"); if ($eaouccqceiqewoai || count($auwuoyyagaiegwae) > 30) { $ksaameoqigiaoigg = $this->awkkygqayciogqym($auwuoyyagaiegwae); } else { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\157\156\145\163\x2f{$this->mekmkysuwsuseaow()}\57\x70\165\x72\147\145\x5f\x63\x61\x63\x68\x65", ["\x6a\163\x6f\156" => ["\x66\151\154\x65\163" => array_values($auwuoyyagaiegwae)]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); } } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\154\x6f\165\144\x66\154\x61\x72\x65\x5f\x70\x75\x72\x67\145\137\x63\141\143\150\145\x5f\x62\171\x5f\x75\162\x6c\x73\x5f\x61\146\x74\145\x72"); return $ksaameoqigiaoigg; } public function yuyomsisoyaokqgu($eeamcawaiqocomwy = false) { $ksaameoqigiaoigg = false; if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $this->wsyymykqcoucagma(self::gqkuwmsyysusmquw)->ueakuaywsqiooygo(60)->kiaqywwoysssqgig("\x55\x73\145\162\55\101\147\145\x6e\164", self::keasgekkgaeuueau); $askcwwaauwqisyeq = "\x5f\x5f\143\146\144\165\151\x64"; $keccaugmemegoimu = $this->get($eeamcawaiqocomwy, ["\166\145\x72\151\146\171" => false]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg instanceof CookieJar) { $ceiyomgiaywmmogi = $osqkgokmuiasuukg->toArray(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ceiyomgiaywmmogi as $aecgggeoymywyumm) { if ($gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\116\x61\x6d\x65") === $askcwwaauwqisyeq) { $ksaameoqigiaoigg = $aecgggeoymywyumm; break; } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x4e\157\x20\143\x6f\157\153\x69\x65\x73\x20\x66\157\x75\x6e\x64\40\x69\x6e\40\162\x65\163\160\x6f\x6e\x73\x65\40\x48\x54\x54\x50\40\160\141\143\x6b\145\x74"); } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($iswcokucwmiosiaq); } if (!$ksaameoqigiaoigg) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\x43\157\157\x6b\x69\x65\40\x25\x73\40\156\157\164\x20\146\x6f\165\x6e\x64", $askcwwaauwqisyeq)); } return $ksaameoqigiaoigg; } private function kswoakmasgociiay(string $uusmaiomayssaecw) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->get("\x2f\172\x6f\x6e\145\163\x2f{$this->mekmkysuwsuseaow()}\x2f\x73\145\x74\x74\x69\x6e\147\x73\57{$uusmaiomayssaecw}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\x73\165\x6c\x74\56\166\141\154\165\x65", false); } else { $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x55\x6e\x61\142\x6c\145\x20\164\157\x20\x66\x69\156\x64\x20\45\x73\40\x73\145\x74\x74\x69\x6e\147\163\72\x20\45\163", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\125\156\x61\142\154\145\40\164\157\40\x67\145\x74\40\45\x73\x20\x73\145\x74\x74\x69\156\x67\x73\72\x20\45\x73", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } return $ksaameoqigiaoigg; } private function aawmsiaumqygusow(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->kqcyawyscakoskke("{$this->wwawisckiqeueoua()}\57\172\x6f\156\x65\163\x2f{$this->mekmkysuwsuseaow()}\x2f\x73\145\x74\x74\151\x6e\x67\x73\57{$uusmaiomayssaecw}", [Constants::qmwqkaeamecekiso => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms($wmekckkyoiyickmk) { return $this->aawmsiaumqygusow("\x64\x65\x76\x65\154\x6f\x70\155\145\156\x74\x5f\x6d\157\x64\145", $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($wmekckkyoiyickmk)); } public function ymkgoumkoycwwmmq() { return $this->kswoakmasgociiay("\x64\145\166\145\x6c\157\160\x6d\x65\x6e\164\x5f\x6d\157\144\145"); } }
