<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6758114e5f226             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Exception; use GuzzleHttp\Cookie\CookieJar; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use WP_Error; class API extends BaseClass { const kcyyywioiaimkqks = "\x58\x2d\x41\x75\x74\150\55\113\x65\171"; const sskckkiuimayuoeg = "\130\55\x41\x75\x74\x68\55\x45\x6d\141\x69\154"; const gqkuwmsyysusmquw = "\x74\145\x78\x74\x2f\x68\x74\155\x6c\x2c\x61\160\160\154\151\143\x61\164\151\157\156\x2f\170\x68\x74\x6d\154\53\170\155\x6c\54\141\160\160\154\x69\x63\x61\164\151\x6f\x6e\57\x78\x6d\154\x3b\161\75\60\x2e\71\54" . "\151\x6d\141\147\x65\57\167\x65\x62\x70\54\x69\x6d\141\147\x65\x2f\x61\160\156\147\54\x2a\57\x2a\73\x71\x3d\x30\x2e\x38\x2c\x61\x70\160\x6c\151\143\x61\164\x69\x6f\156\x2f\163\151\147\x6e\145\x64\x2d\145\x78\143\150\141\x6e\147\x65\73\x76\75\142\x33"; const keasgekkgaeuueau = "\115\x6f\x7a\151\154\x6c\141\57\65\x2e\60\40\50\114\x69\156\x75\170\73\x20\101\156\144\162\157\151\144\40\x37\56\60\73\x20\x4d\157\164\x6f\x20\107\x20\50\x34\x29\51\40\x41\160\160\154\145\127\145\x62\113\x69\x74\x2f\x35\63\x37\x2e\63\x36\x20" . "\x28\113\x48\124\115\114\x2c\40\x6c\151\153\145\40\x47\x65\143\x6b\157\x29\40\103\150\x72\x6f\x6d\x65\x2f\x38\64\x2e\60\56\64\61\64\63\x2e\x37\40\x4d\157\x62\151\154\145\x20\x53\141\x66\141\162\x69\x2f\65\x33\x37\56\x33\66\40\103\x68\x72\x6f\155\x65\x2d\x4c\151\147\150\164\150\x6f\x75\x73\x65"; const guaqqecaewyquueo = "\x68\164\164\x70\137\162\145\x71\165\145\163\x74\x5f\x63\x61\143\x68\x65\x5f\163\x65\164\164\x69\156\x67\163"; protected ?string $email = ''; protected ?string $zoneId = ''; protected ?string $apiKey = ''; protected ?string $cfDomain = ''; protected ?string $apiToken = ''; protected ?string $authMode = ''; protected array $accountIds = []; public function __construct() { $this->suyquyoaausqsuay("\150\x74\x74\x70\163\x3a\57\x2f\141\160\x69\x2e\x63\154\157\x75\144\146\154\x61\x72\145\x2e\x63\157\x6d\57\143\154\151\145\156\x74\x2f\166\64"); $aqimoomqmscqikma = Cloudflare::symcgieuakksimmu(); $this->email = $aqimoomqmscqikma->weysguygiseoukqw(Setting::yeeemccgmikyeiqq); $this->apiKey = $aqimoomqmscqikma->weysguygiseoukqw(Setting::ekecawsykcwisikm); $this->zoneId = $aqimoomqmscqikma->weysguygiseoukqw(Setting::iqksqseqeqmaukkk); $this->authMode = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uksumkeyuauyuiqm, Setting::fsekswokoseswcqm); $this->cfDomain = $aqimoomqmscqikma->weysguygiseoukqw(Setting::kiuyeswmgaikeiuo); $this->apiToken = $aqimoomqmscqikma->weysguygiseoukqw(Setting::uwkciiskgyqaigqe); parent::__construct(); $this->iwoewaiwqaisaagy(); if ($this->caeygcowcuqeqkeo() === Setting::eywauigiwgqckygk) { $this->amskqmemsacmksye($this->gkuoyaqwcaqcqmck()); } else { $this->kiaqywwoysssqgig(self::kcyyywioiaimkqks, $this->aocqkkgewgggwwys())->kiaqywwoysssqgig(self::sskckkiuimayuoeg, $this->cseqaqmuaswgwuoo()); } $this->ueakuaywsqiooygo(20); } public function kmegomwosoueimki() : array { return $this->accountIds; } public function cseqaqmuaswgwuoo() : ?string { return $this->email; } public function mekmkysuwsuseaow() : ?string { return $this->zoneId; } public function sawoqaskqkasksge() : ?string { return $this->cfDomain; } public function aocqkkgewgggwwys() : ?string { return $this->apiKey; } public function gkuoyaqwcaqcqmck() : ?string { return $this->apiToken; } public function caeygcowcuqeqkeo() : ?string { return $this->authMode; } public function iqokecwcgkaookuc() { $ksaameoqigiaoigg = []; $yeacayasgueouoqc = 1; $weyoqgcesqgeusiu = 50; $ymiyawysimukkoso = false; do { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $cokqekgqeigaoqsy = $this->sawoqaskqkasksge(); $wegekcwgakqeqsmq = $this->caeygcowcuqeqkeo(); $mkomwsiykqigmqca = "\x2f\x7a\157\156\145\x73"; if ($cokqekgqeigaoqsy && $wegekcwgakqeqsmq === Setting::eywauigiwgqckygk) { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::NAME, $cokqekgqeigaoqsy, $mkomwsiykqigmqca); } else { $mkomwsiykqigmqca = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::imywcsggckkcywgk => $yeacayasgueouoqc, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu], $mkomwsiykqigmqca); } $keccaugmemegoimu = $this->get($mkomwsiykqigmqca, $qiouiwasaauyaaue); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $yyimiwcuegayoskq = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\x72\x65\163\165\154\x74\137\x69\156\x66\157", []); if ($yyimiwcuegayoskq && is_array($yyimiwcuegayoskq)) { $saawqymgwcseukqa = $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\164\157\164\141\154\137\x70\141\147\x65\163"); if ($saawqymgwcseukqa && (int) $saawqymgwcseukqa > $yeacayasgueouoqc) { $ymiyawysimukkoso = true; $yeacayasgueouoqc++; } else { $ymiyawysimukkoso = false; } } else { if ($ymiyawysimukkoso) { $ymiyawysimukkoso = false; } } $sogksuscggsicmac = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if ($sogksuscggsicmac && is_array($sogksuscggsicmac)) { foreach ($sogksuscggsicmac as $icwicymcioeyeyek) { $aokagokqyuysuksm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::gouqcwikiiygyasc); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo) { $ksaameoqigiaoigg[$aokagokqyuysuksm] = $ymqmyyeuycgmigyo; } else { $iswcokucwmiosiaq = __("\x55\x6e\141\142\x6c\x65\x20\x74\157\40\x72\145\x74\162\151\x76\145\40\172\x6f\156\145\40\151\144\x20\144\x75\145\x20\x74\x6f\40\x69\156\x76\x61\x6c\x69\x64\x20\162\x65\163\160\157\x6e\163\x65\40\144\141\x74\141", PR__MDL__OPTIMIZATION); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } } while ($ymiyawysimukkoso); if (!$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x6e\x61\142\154\x65\40\x74\x6f\40\x66\151\156\144\x20\144\x6f\x6d\141\151\x6e\163\40\143\157\156\146\x69\147\x75\162\145\x64\x20\157\x6e\40\103\x6c\x6f\x75\x64\146\154\x61\162\145", PR__MDL__OPTIMIZATION)); } return $ksaameoqigiaoigg; } public function smayommusayuweky(string $qcsumeqqumqgymei) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->get("\57\x7a\x6f\156\x65\163\x2f{$this->mekmkysuwsuseaow()}\x2f\x72\x75\154\x65\x73\x65\x74\x73"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wygwekwwaigweioa = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::syomkiqgogwyuiyw, []); if (is_array($wygwekwwaigweioa)) { foreach ($wygwekwwaigweioa as $ucyqiiueossykume) { if ($qcsumeqqumqgymei === $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::qsysckqimsuoumwu)) { $ksaameoqigiaoigg = (string) $gkyciwoiiisgywcs->get($ucyqiiueossykume, Constants::gouqcwikiiygyasc, ''); break; } } } } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function aecaaquaemuuascc(array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\172\x6f\x6e\x65\163\x2f{$this->mekmkysuwsuseaow()}\x2f\162\165\x6c\x65\x73\x65\x74\x73", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\x73\x75\x6c\x74\56\151\144", false); } } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function kwogmsuwiyakckuo(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\x2f\x7a\x6f\156\x65\163\x2f{$this->mekmkysuwsuseaow()}\x2f\x72\x75\154\x65\163\145\x74\x73\57{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function wooogwsuiygsuuso(?string $uiwqqmmiwqqqaugc) { $ksaameoqigiaoigg = []; $keccaugmemegoimu = $this->get("\57\172\157\x6e\x65\x73\x2f{$this->mekmkysuwsuseaow()}\57\x72\165\x6c\145\x73\145\x74\163\x2f{$uiwqqmmiwqqqaugc}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (array) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\163\165\x6c\x74\56\162\165\x6c\x65\163", []); } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function icgowyskqkokqisu(?string $uiwqqmmiwqqqaugc, array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; if ($uiwqqmmiwqqqaugc) { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\157\x6e\x65\163\57{$this->mekmkysuwsuseaow()}\57\x72\x75\154\x65\x73\x65\x74\x73\x2f{$uiwqqmmiwqqqaugc}\57\162\x75\154\145\163", [Constants::qmwqkaeamecekiso => $ywmkwiwkosakssii]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\145\163\x75\x6c\164\56\x69\x64", false); } } } else { $iswcokucwmiosiaq = __("\x52\x75\x6c\145\x73\145\164\x20\111\x44\x20\x6e\157\164\40\x73\160\x65\x63\151\146\x69\x65\x64\56", PR__MDL__OPTIMIZATION); } if ($iswcokucwmiosiaq || !$ksaameoqigiaoigg) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function koakkeimqaokakym(?string $uiwqqmmiwqqqaugc, ?string $ymawgemiwyykseqg) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->delete("\x2f\172\x6f\156\145\x73\x2f{$this->mekmkysuwsuseaow()}\x2f\x72\165\x6c\145\x73\x65\164\163\57{$uiwqqmmiwqqqaugc}\57\162\x75\154\145\x73\57{$ymawgemiwyykseqg}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = true; } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function ymygowkkwyigwcea() { return $this->smayommusayuweky(self::guaqqecaewyquueo); } public function cgkaaimwgiesmwaw() { return $this->aecaaquaemuuascc([Constants::iysqkumcmmioious => Constants::qwokosymwqwyqmww, Constants::qsysckqimsuoumwu => self::guaqqecaewyquueo, Constants::eeeoygaqqmoukaeg => [], Constants::NAME => "\x43\x61\143\150\x65\x20\122\x75\x6c\145\163\145\x74\x20\103\162\x65\x61\x74\x65\x64\40\142\x79\40\120\x4d\120\x52\x20\x4f\160\164\x69\155\x69\172\141\x74\151\x6f\156\x20\115\157\x64\x75\x6c\145"]); } public function sqmcyegkigweiwks() { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\x6c\157\165\x64\x66\x6c\141\x72\x65\x5f\x70\165\162\x67\x65\x5f\x77\150\157\x6c\145\137\x63\141\x63\150\145\137\x62\x65\x66\157\x72\x65"); $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\157\x6e\145\163\x2f{$this->mekmkysuwsuseaow()}\57\160\165\162\x67\x65\137\x63\x61\143\x68\x65", [Constants::qmwqkaeamecekiso => ["\x70\x75\162\147\145\x5f\145\166\145\162\171\x74\150\151\156\x67" => true]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\154\157\x75\x64\x66\x6c\141\162\145\x5f\x70\x75\x72\x67\x65\137\x77\x68\157\x6c\145\x5f\143\141\x63\150\x65\x5f\141\x66\164\145\162"); $ksaameoqigiaoigg = true; } } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } private function awkkygqayciogqym($auwuoyyagaiegwae) { $ukgsssmgkskkuoow = array_chunk($auwuoyyagaiegwae, 30); $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); try { $eeamcawaiqocomwy = "{$this->wwawisckiqeueoua()}\57\x7a\157\x6e\145\x73\x2f{$this->mekmkysuwsuseaow()}\x2f\x70\165\x72\x67\x65\x5f\x63\141\x63\x68\145"; foreach ($ukgsssmgkskkuoow as $wegougocoeeookww) { $this->wiwocsyueqyyakmy($eeamcawaiqocomwy, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\122\145\161\165\145\x73\x74\40\x66\x6f\x72\40\x75\162\154\x73\40\143\157\x6d\160\154\145\164\x65\x64\x2e\x20\45\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, function ($keccaugmemegoimu) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug(sprintf("\x52\x65\161\165\x65\163\x74\x20\146\x6f\162\x20\x75\x72\154\163\x20\x66\x61\x69\154\x65\144\x2e\40\x25\163", $this->saegmcouuukeykgi($keccaugmemegoimu))); }, array_merge($qiouiwasaauyaaue, [Constants::qmwqkaeamecekiso => [Constants::cywikqeomiuewqim => array_values($wegougocoeeookww)]])); } $ksaameoqigiaoigg = true; } catch (Exception $wgaoewqkwgomoaai) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = false; $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\143\154\x6f\x75\144\x66\154\x61\x72\145\137\x70\165\x72\x67\x65\137\x63\141\x63\150\145\137\142\x79\x5f\x75\162\154\x73\137\x62\145\x66\157\162\145"); if ($eaouccqceiqewoai || count($auwuoyyagaiegwae) > 30) { $ksaameoqigiaoigg = $this->awkkygqayciogqym($auwuoyyagaiegwae); } else { $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x7a\157\x6e\145\163\57{$this->mekmkysuwsuseaow()}\x2f\x70\165\x72\x67\145\x5f\143\x61\143\150\x65", ["\152\x73\x6f\x6e" => ["\x66\151\154\x65\163" => array_values($auwuoyyagaiegwae)]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq); } } $this->ewcsyqaaigkicgse(Optimization::kgswyesggeyekgmg . "\x63\x6c\157\165\x64\x66\x6c\141\x72\145\x5f\x70\x75\162\147\145\137\x63\x61\143\150\145\137\142\x79\x5f\165\162\154\x73\x5f\x61\146\164\145\x72"); return $ksaameoqigiaoigg; } public function yuyomsisoyaokqgu($eeamcawaiqocomwy = false) { $ksaameoqigiaoigg = false; if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $this->wsyymykqcoucagma(self::gqkuwmsyysusmquw)->ueakuaywsqiooygo(60)->kiaqywwoysssqgig("\125\163\145\x72\x2d\x41\x67\x65\x6e\x74", self::keasgekkgaeuueau); $askcwwaauwqisyeq = "\137\x5f\143\x66\x64\x75\x69\x64"; $keccaugmemegoimu = $this->get($eeamcawaiqocomwy, ["\166\145\x72\x69\x66\171" => false]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $osqkgokmuiasuukg = $this->wemyikwikgwqwuoc(); if ($osqkgokmuiasuukg instanceof CookieJar) { $ceiyomgiaywmmogi = $osqkgokmuiasuukg->toArray(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ceiyomgiaywmmogi as $aecgggeoymywyumm) { if ($gkyciwoiiisgywcs->get($aecgggeoymywyumm, "\116\x61\x6d\x65") === $askcwwaauwqisyeq) { $ksaameoqigiaoigg = $aecgggeoymywyumm; break; } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq("\x4e\x6f\40\x63\x6f\157\x6b\151\145\x73\x20\146\x6f\x75\x6e\144\x20\151\x6e\x20\x72\145\163\160\x6f\156\x73\145\x20\x48\124\124\x50\x20\160\141\x63\x6b\x65\164"); } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($iswcokucwmiosiaq); } if (!$ksaameoqigiaoigg) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq(sprintf("\103\157\157\x6b\x69\x65\40\x25\x73\x20\156\157\x74\x20\146\157\x75\156\144", $askcwwaauwqisyeq)); } return $ksaameoqigiaoigg; } private function kswoakmasgociiay(string $uusmaiomayssaecw) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->get("\57\172\x6f\156\145\163\57{$this->mekmkysuwsuseaow()}\57\x73\x65\164\x74\151\156\147\163\x2f{$uusmaiomayssaecw}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($this->yquuyiaogsgwmaem($sogksuscggsicmac, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($sogksuscggsicmac, "\162\x65\163\165\154\x74\56\x76\x61\x6c\165\x65", false); } else { $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\125\x6e\x61\x62\x6c\145\40\x74\157\x20\x66\x69\x6e\144\40\45\x73\x20\x73\x65\x74\x74\x69\x6e\x67\x73\x3a\x20\x25\163", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } } else { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x55\x6e\141\x62\154\x65\40\164\157\x20\147\145\164\40\45\163\40\163\145\x74\164\151\x6e\147\x73\x3a\40\x25\163", PR__MDL__OPTIMIZATION), $uusmaiomayssaecw, $iswcokucwmiosiaq)); } return $ksaameoqigiaoigg; } private function aawmsiaumqygusow(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $ksaameoqigiaoigg = false; $keccaugmemegoimu = $this->kqcyawyscakoskke("{$this->wwawisckiqeueoua()}\x2f\x7a\157\156\145\163\57{$this->mekmkysuwsuseaow()}\x2f\x73\x65\164\164\x69\156\147\163\57{$uusmaiomayssaecw}", [Constants::qmwqkaeamecekiso => [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]]); if ($this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { $ksaameoqigiaoigg = $this->yquuyiaogsgwmaem($this->qemyqseaomicaacs($keccaugmemegoimu), $iswcokucwmiosiaq); } if ($iswcokucwmiosiaq) { $ksaameoqigiaoigg = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($iswcokucwmiosiaq); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms($wmekckkyoiyickmk) { return $this->aawmsiaumqygusow("\144\x65\166\145\154\x6f\160\155\145\x6e\x74\x5f\x6d\157\144\145", $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($wmekckkyoiyickmk)); } public function ymkgoumkoycwwmmq() { return $this->kswoakmasgociiay("\x64\x65\x76\x65\154\157\x70\x6d\145\x6e\x74\x5f\155\157\x64\145"); } }
