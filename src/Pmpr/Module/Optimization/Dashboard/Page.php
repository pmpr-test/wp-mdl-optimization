<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e823d067d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\x70\x75\x72\x67\145\x5f\143\x61\143\150\145"; const wwkyymgusywcykuk = "\160\162\145\x6c\157\x61\144\137\x70\141\x67\x65\x73"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\x6f\160\164\x5f\144\x61\x73\150\x62\157\141\x72\x64", Constants::ysgwugcqguggmigq => __("\104\x61\x73\x68\x62\157\x61\x72\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\163\x68\x62\x6f\x61\x72\x64", $gaumukogkkgkiiuo->get("\144\x61\163\150\x62\x6f\x61\x72\x64\x2e\152\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\x61\x73\150\x62\157\x61\162\144", ["\141\x6a\x61\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\165\162\147\x65\x20\x43\x61\x63\x68\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\163\141\x62\154\x65\x20\104\x65\x76\x65\x6c\x6f\160\x6d\x65\x6e\x74\40\115\x6f\144\x65", PR__MDL__OPTIMIZATION) : __("\x45\x6e\x61\142\x6c\x65\40\104\145\166\x65\x6c\x6f\x70\155\145\x6e\x74\40\115\157\x64\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\156\143\137\x64\141\x74\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\162\145\x20\x79\x6f\x75\40\163\x75\x72\145\40\x61\142\x6f\165\x74\x20\x70\165\x72\x67\145\40\143\x61\143\x68\x65\77", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\x72\145\x6c\157\x61\144\40\151\x73\40\145\x6e\x61\142\154\x65\x20\x61\156\144\x20\x61\x66\164\145\162\40\x70\165\162\147\x65\x20\x63\141\x63\x68\145\x2c\x20\x72\x65\147\x65\x6e\x65\x72\141\x74\145\40\143\x61\x63\x68\x65\40\x66\151\x6c\145\x20\x73\164\x61\x72\164\145\x64\x20\141\x75\164\x6f\155\141\164\151\x63\141\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x63\x6c\x61\x73\x73" => "\x6f\160\164\55\160\165\162\x67\x65\55\141\154\154\x2d\143\141\x63\150\x65\40\x70\162\55\142\x74\156\x20\x62\x74\156\55\x64\141\x6e\x67\x65\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\141\x73\163" => "\167\55\61\60\60\x20\x70\x72\55\142\164\156\40\142\x74\x6e\x2d\141\x63\x74\151\157\156\40\142\164\x6e\55\x6f\165\164\x6c\x69\x6e\145\55\160\x72\151\155\x61\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\x69\163\141\x62\x6c\151\156\x67\x20\104\145\166\x65\154\x6f\160\x6d\x65\x6e\164\40\115\x6f\144\x65\40\164\165\162\x6e\163\x20\157\156\40\143\141\x63\150\x69\156\x67\40\x66\157\162\40\x79\157\165\x72\40\x73\x69\164\145\56\40\x41\162\x65\40\171\157\x75\x20\163\x75\162\145\40\x79\x6f\165\x20\167\x61\x6e\x74\x20\164\157\40\x63\157\x6e\x74\151\x6e\165\x65\x3f", PR__MDL__OPTIMIZATION) : __("\105\156\141\142\154\x69\156\147\x20\x44\145\166\x65\154\x6f\160\x6d\145\x6e\164\x20\x4d\157\144\x65\40\x74\165\162\156\x73\40\x6f\x66\x66\x20\143\141\143\x68\151\x6e\147\40\146\x6f\x72\x20\171\157\165\162\40\x73\151\164\x65\56\x20\x41\x72\145\x20\171\x6f\x75\40\163\165\x72\145\x20\171\157\x75\x20\x77\141\x6e\164\x20\164\157\x20\x63\157\156\164\x69\156\x75\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\x6c\141\x73\163" => "\x6f\x70\164\x2d\x63\x68\x61\156\147\x65\55\x64\145\166\55\x6d\157\144\145\x20\x70\x72\55\142\164\156\x20\142\x74\156\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\141\x74\141\x2d\x64\145\x76\55\155\x6f\144\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\x76\145\154\x6f\160\155\x65\156\x74\x20\x4d\157\x64\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\163\x73" => "\x77\55\x31\x30\x30\x20\x70\x72\x2d\x62\x74\156\x20\142\164\x6e\x2d\x61\x63\x74\151\x6f\156\40\x62\x74\x6e\55\157\165\x74\x6c\x69\x6e\x65\55\160\162\x69\155\141\162\171"])]; if (!$qyaaumygmwoyoeec) { goto wwgikwuigiiqsswq; } wwgikwuigiiqsswq: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\x64\141\163\x68\x62\157\141\162\144\x5f\x72\x65\x70\157\x72\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\x72\x63\x68\141\x73\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\x30\40\160\164\55\x32")->gswweykyogmsyawy(__("\x50\165\162\x63\x68\x61\163\145\x20\122\145\160\x6f\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\141\157\163\147\143\163\x6f\x69\x77\x6d\x79\145\x6f\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\x75\x73\x61\x67\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\55\x30\40\x70\164\x2d\62")->gswweykyogmsyawy(__("\125\x73\x61\x67\x65\x20\x52\x65\x70\157\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\x6b\x63\x61\165\155\155\x73\143\x6b\x75\153\x6f\x67\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\141\x6e\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\x68\141\163\137\x77\162\141\160" => false, "\166\x65\162\164\151\143\141\x6c" => false]), Constants::qescuiwgsyuikume => __("\x50\165\162\x63\x68\x61\x73\145\x20\141\156\x64\40\x43\x6f\x6e\x73\165\x6d\x70\164\x69\x6f\x6e\40\x52\145\160\x6f\x72\164", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\165\151\x63\153\137\141\x63\x74\x69\x6f\156\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\161\x75\x69\x63\153\x5f\x61\143\164\151\x6f\156\x5f\x74\151\x74\154\x65"] = __("\121\165\151\x63\153\40\101\143\x74\x69\157\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
