<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ef4dfc43710             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Dashboard; use Pmpr\Common\Foundation\Backend\Page as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; use Pmpr\Module\Optimization\Setting\Setting; use Pmpr\Module\Optimization\Traits\SubscriptionEngineTrait; use Pmpr\Module\Optimization\Subscription\Page as SubscriptionPage; class Page extends BaseClass { use SubscriptionEngineTrait; const wwgqqgayyagycysu = "\160\165\x72\x67\145\137\x63\141\143\x68\x65"; const wwkyymgusywcykuk = "\160\162\145\x6c\157\x61\x64\137\x70\141\147\145\163"; public function qiccuiwooiquycsg() { $this->eukmukacucooequu([Constants::kekcgssiyagioocg => 1, Constants::wuowaiyouwecckaw => "\157\160\164\137\x64\141\163\x68\x62\157\x61\x72\x64", Constants::ysgwugcqguggmigq => __("\104\x61\x73\150\142\x6f\141\162\144", PR__MDL__OPTIMIZATION), Constants::qoquaeuooeycomks => $this->akuociswqmoigkas()]); } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gaumukogkkgkiiuo->ayeieigcckcmsikq($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\141\x73\150\142\157\x61\x72\144", $gaumukogkkgkiiuo->get("\144\x61\x73\x68\142\x6f\x61\162\x64\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi))->ikqyiskqaaymscgw("\144\141\163\x68\x62\157\x61\x72\144", ["\141\152\141\x78" => Ajax::myikkigscysoykgy]); SubscriptionPage::symcgieuakksimmu()->enqueue(); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $eisusiekaciioueg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::qeuquamuuwueeiyi, false); $mwuweekukywuqgsm = __("\120\x75\x72\x67\145\x20\x43\x61\x63\x68\145", PR__MDL__OPTIMIZATION); $qyaaumygmwoyoeec = Constants::uucoeqmmykkwsmqc !== $ykquycoiqesuckco->giiuwsmyumqwwiyq(PreloadSetting::gmwikseimeesqmci, Constants::uucoeqmmykkwsmqc); $qyusceuomywuquqc = $eisusiekaciioueg ? __("\104\151\x73\x61\142\x6c\145\x20\x44\145\166\x65\x6c\x6f\x70\x6d\x65\156\164\x20\x4d\157\144\145", PR__MDL__OPTIMIZATION) : __("\105\156\x61\142\154\145\40\104\x65\166\145\x6c\157\160\155\145\156\x74\40\115\x6f\144\145", PR__MDL__OPTIMIZATION); $mgsegoqmgegikkig = ["\x73\x79\x6e\143\x5f\144\x61\x74\x61" => $this->cqscwmqsgomkogoq()->kscwewuywiakosos(), self::wwgqqgayyagycysu => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $mwuweekukywuqgsm, Constants::ssmskyqgcmeiayco => __("\101\x72\x65\x20\x79\157\165\x20\x73\165\x72\x65\40\x61\142\x6f\x75\164\x20\160\165\x72\147\x65\x20\x63\141\x63\150\x65\77", PR__MDL__OPTIMIZATION), Constants::eoskkkieowogacws => $qyaaumygmwoyoeec ? $uuyucgkyusckoaeq->ueyuicgwuyuiioie(__("\x50\162\x65\x6c\157\141\x64\40\x69\163\x20\x65\156\x61\142\x6c\x65\40\x61\156\x64\x20\141\146\164\145\x72\x20\160\x75\162\147\x65\40\x63\x61\143\x68\x65\x2c\40\162\145\147\145\156\x65\162\x61\164\x65\40\143\141\x63\x68\x65\x20\146\x69\x6c\145\x20\163\164\141\x72\164\145\144\40\x61\x75\164\157\x6d\x61\164\151\143\141\x6c\154\171\56", PR__MDL__OPTIMIZATION), true) : '', Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\x61\x73\163" => "\157\x70\164\x2d\x70\165\162\x67\x65\55\x61\x6c\x6c\55\143\x61\143\x68\145\x20\x70\162\55\142\164\x6e\40\x62\164\156\x2d\x64\141\156\x67\x65\x72", Constants::qescuiwgsyuikume => $mwuweekukywuqgsm]]], $mwuweekukywuqgsm, ["\143\154\x61\163\163" => "\167\55\61\x30\60\40\160\x72\x2d\142\x74\156\x20\142\x74\x6e\x2d\141\143\x74\x69\x6f\156\40\x62\x74\156\x2d\x6f\165\x74\154\151\156\x65\x2d\160\x72\151\155\x61\x72\171"]), Constants::qeuquamuuwueeiyi => $uuyucgkyusckoaeq->igiawkoqiogocsau([Constants::squoamkioomemiyi => $eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => $qyusceuomywuquqc, Constants::ssmskyqgcmeiayco => $eisusiekaciioueg ? __("\x44\151\163\141\142\x6c\151\x6e\x67\x20\104\x65\x76\145\154\x6f\160\155\145\x6e\x74\x20\x4d\157\x64\145\40\164\x75\x72\156\163\x20\x6f\156\x20\x63\x61\143\x68\151\156\147\x20\146\x6f\x72\x20\171\157\165\162\40\163\x69\x74\145\56\40\101\x72\x65\x20\x79\x6f\165\x20\x73\x75\162\145\x20\x79\x6f\165\40\167\141\x6e\164\40\164\x6f\x20\143\157\156\x74\x69\x6e\x75\x65\77", PR__MDL__OPTIMIZATION) : __("\x45\156\x61\x62\154\x69\x6e\x67\x20\104\x65\166\x65\x6c\157\x70\x6d\x65\x6e\x74\40\115\157\144\x65\x20\164\x75\162\x6e\x73\40\157\x66\x66\40\x63\x61\x63\x68\x69\x6e\147\x20\x66\157\x72\40\171\157\x75\162\40\163\151\164\x65\56\x20\101\162\x65\40\x79\157\165\x20\163\165\x72\145\40\x79\157\x75\40\x77\x61\156\x74\40\x74\x6f\40\x63\x6f\156\164\151\x6e\x75\145\x3f", PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\143\154\141\163\x73" => "\x6f\160\164\55\x63\150\141\x6e\147\x65\x2d\x64\x65\166\x2d\155\x6f\144\x65\x20\x70\x72\x2d\x62\164\x6e\40\142\164\156\55" . ($eisusiekaciioueg ? Constants::ckcawaoawwioqecq : Constants::ecioqysekgaasegg), Constants::qescuiwgsyuikume => $qyusceuomywuquqc, "\144\141\164\141\55\144\145\x76\x2d\x6d\157\x64\x65" => $eisusiekaciioueg ? Constants::OFF : Constants::ON]]], __("\x44\x65\166\145\x6c\x6f\160\155\x65\x6e\x74\40\x4d\157\x64\x65", PR__MDL__OPTIMIZATION), ["\143\x6c\x61\x73\163" => "\167\55\x31\60\60\x20\160\162\x2d\142\x74\x6e\x20\142\164\156\55\141\143\x74\151\x6f\x6e\40\x62\x74\156\x2d\157\165\x74\x6c\151\x6e\145\x2d\160\x72\151\x6d\141\x72\x79"])]; if (!$qyaaumygmwoyoeec) { goto qswqmgiwiyyqwioa; } qswqmgiwiyyqwioa: $skeuoeoiuwwyqwou = Panel::symcgieuakksimmu("\144\141\163\150\142\157\141\x72\x64\x5f\162\x65\x70\x6f\x72\x74\x73"); $skeuoeoiuwwyqwou->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\160\x75\x72\x63\x68\141\x73\145\163")->uguqimqkesuguqau()->cooeyaumiimygakm("\160\x2d\x30\x20\160\x74\x2d\x32")->gswweykyogmsyawy(__("\120\165\x72\143\150\141\163\x65\40\x52\x65\160\157\x72\x74", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\x79\141\x6f\x73\x67\143\163\157\151\x77\x6d\171\145\157\x73\x71"]))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg("\165\x73\141\147\145\x73")->uguqimqkesuguqau()->cooeyaumiimygakm("\x70\x2d\x30\x20\160\x74\55\62")->gswweykyogmsyawy(__("\125\x73\x61\147\x65\x20\122\x65\160\157\x72\164", PR__MDL__OPTIMIZATION))->oguessuismosauuu([$this, "\144\x6b\143\141\165\x6d\x6d\163\x63\153\x75\x6b\x6f\147\143\x6d"]))->mkiqamegmeucqeyy(); $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = ["\x70\x61\156\145\x6c" => $skeuoeoiuwwyqwou->render(false, ["\150\141\163\x5f\x77\162\141\160" => false, "\166\145\162\164\x69\143\141\154" => false]), Constants::qescuiwgsyuikume => __("\x50\x75\162\x63\150\x61\163\145\x20\x61\x6e\x64\x20\103\x6f\x6e\x73\x75\155\x70\x74\151\157\x6e\x20\x52\x65\x70\x6f\x72\x74", PR__MDL__OPTIMIZATION)]; $qookweymeqawmcwo["\x71\165\151\x63\x6b\x5f\x61\143\x74\x69\157\x6e\163"] = $mgsegoqmgegikkig; $qookweymeqawmcwo["\x71\x75\151\143\153\137\141\x63\164\x69\x6f\156\x5f\x74\x69\164\154\145"] = __("\121\165\x69\143\x6b\40\x41\x63\x74\151\x6f\x6e\x73", PR__MDL__OPTIMIZATION); $qookweymeqawmcwo[Constants::eoigaocgcaekssuw] = $this->cqscwmqsgomkogoq()->samoqkkuimogeyew()[Constants::eoigaocgcaekssuw] ?? []; return $qookweymeqawmcwo; } public function yaosgcsoiwmyeosq() : string { return $this->cqscwmqsgomkogoq()->aaasykywsggkskse(true); } public function dkcaummsckukogcm() : string { return $this->cqscwmqsgomkogoq()->aksiycwcekcecuec(true); } }
