<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eb16d680906             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\x75\x72\147\x65\137\143\x61\143\x68\x65"; const wwkyymgusywcykuk = "\160\162\145\154\157\141\x64\137\160\141\x67\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\157\x70\x74\x5f\x64\x61\163\150\x62\157\x61\162\x64", Constants::ysgwugcqguggmigq => __("\104\141\163\150\142\x6f\x61\162\x64", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x61\163\150\142\157\141\x72\x64", $gaumukogkkgkiiuo->get("\144\141\163\150\142\157\141\x72\x64\x2e\x6a\x73"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\x64\141\163\x68\x62\x6f\141\162\x64", ["\141\152\x61\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\x50\165\x72\x67\145\x20\x43\141\x63\x68\x65", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\163\x61\x62\x6c\145\40\104\145\x76\145\x6c\x6f\160\x6d\145\156\164\40\115\157\x64\145", PR__MDL__OPTIMIZATION) : __("\105\x6e\x61\142\x6c\x65\x20\104\145\166\145\x6c\x6f\x70\155\145\156\x74\x20\x4d\x6f\144\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\171\x6e\143\x5f\x64\141\x74\141" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\x41\x72\145\40\x79\x6f\x75\x20\163\x75\162\x65\x20\141\142\x6f\165\x74\40\160\x75\162\x67\x65\x20\x63\x61\x63\x68\x65\x3f", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\162\x65\x6c\x6f\141\x64\40\x69\163\x20\145\156\x61\142\154\x65\40\141\x6e\144\x20\141\146\x74\145\162\x20\x70\165\x72\147\145\x20\143\x61\x63\150\145\x2c\40\162\145\x67\145\156\x65\162\x61\164\x65\x20\x63\x61\x63\150\145\x20\146\x69\154\x65\x20\x73\x74\x61\x72\164\145\x64\x20\x61\x75\x74\157\x6d\x61\164\x69\143\x61\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\x73\163" => "\x6f\160\x74\x2d\x70\165\x72\x67\x65\55\x61\154\x6c\55\143\141\x63\150\145\x20\x70\x72\x2d\x62\164\x6e\40\142\x74\x6e\55\144\141\x6e\147\x65\162", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\x61\x73\163" => "\167\x2d\x31\x30\60\40\160\x72\55\142\164\156\x20\142\164\x6e\x2d\x61\x63\164\151\x6f\156\x20\x62\164\156\x2d\x6f\x75\164\x6c\151\156\x65\55\x70\x72\151\x6d\141\162\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\104\151\x73\141\x62\x6c\x69\x6e\x67\x20\x44\145\166\x65\154\157\x70\155\145\156\164\40\x4d\x6f\x64\145\40\164\x75\162\x6e\x73\40\157\156\40\143\x61\x63\x68\151\x6e\x67\x20\146\157\x72\40\x79\157\165\x72\x20\x73\151\164\x65\x2e\x20\x41\x72\x65\40\x79\157\165\40\163\x75\x72\145\40\x79\x6f\x75\x20\167\141\x6e\164\x20\164\157\40\143\157\x6e\164\151\x6e\x75\145\x3f", PR__MDL__OPTIMIZATION) : __("\105\x6e\141\142\x6c\x69\x6e\x67\x20\x44\145\166\x65\154\x6f\160\x6d\x65\x6e\x74\x20\115\157\144\145\x20\164\x75\x72\x6e\x73\x20\157\146\x66\x20\143\x61\x63\x68\x69\156\x67\x20\146\157\x72\x20\171\x6f\165\162\x20\x73\x69\x74\145\56\x20\101\162\145\40\x79\x6f\x75\x20\x73\165\162\x65\40\x79\157\x75\40\x77\141\156\x74\40\164\x6f\x20\x63\x6f\156\164\x69\x6e\165\145\77", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\x73\x73" => "\157\160\164\x2d\x63\150\141\x6e\x67\x65\x2d\144\x65\x76\55\x6d\x6f\x64\145\x20\x70\x72\55\x62\x74\156\x20\x62\x74\x6e\x2d" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\x64\x61\x74\141\x2d\x64\145\x76\x2d\x6d\157\x64\145" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\104\145\x76\145\154\x6f\x70\x6d\x65\x6e\164\x20\115\x6f\144\145", PR__MDL__OPTIMIZATION), ["\x63\x6c\x61\163\163" => "\x77\55\61\60\60\40\x70\x72\x2d\x62\164\156\x20\142\x74\156\x2d\141\143\x74\151\x6f\156\x20\x62\x74\x6e\x2d\157\x75\x74\x6c\x69\x6e\x65\55\x70\x72\x69\155\141\162\x79"])]; if (!$qyaaumygmwoyoeec) { goto uwyeycaywowwiquu; } uwyeycaywowwiquu: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\x61\163\150\142\157\141\162\144\x5f\162\145\160\x6f\x72\164\163"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\165\x72\x63\150\141\x73\x65\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\55\60\40\160\164\x2d\62")->gswweykyogmsyawy(__("\x50\x75\162\143\x68\141\163\x65\x20\x52\145\x70\x6f\162\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\141\x6f\163\147\143\163\157\151\167\x6d\171\145\157\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\163\141\x67\x65\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\60\40\x70\164\x2d\x32")->gswweykyogmsyawy(__("\x55\163\x61\x67\145\x20\122\145\160\x6f\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\153\x63\141\x75\155\x6d\163\x63\153\165\x6b\x6f\x67\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\160\141\x6e\x65\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\163\x5f\x77\162\x61\160" => false, "\x76\145\162\x74\x69\x63\x61\x6c" => false]), Constants::qescuiwgsyuikume => __("\120\165\162\143\x68\141\163\145\40\x61\x6e\x64\x20\103\157\156\x73\165\155\160\164\151\157\156\40\x52\145\160\157\162\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\165\x69\143\x6b\x5f\x61\x63\164\151\x6f\x6e\x73"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\x75\151\x63\x6b\137\x61\143\164\x69\157\x6e\137\164\151\164\154\x65"] = __("\x51\165\151\143\153\40\101\x63\x74\x69\x6f\156\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
