<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Detection\MobileDetect; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimization; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseBuffer; use Pmpr\Module\Optimization\Optimizer\Buffer\Config; use Pmpr\Module\Optimization\Optimizer\Buffer\Test; use Pmpr\Module\Optimization\Optimizer\Cache\Advanced as BaseClass; use Pmpr\Module\Optimization\Traits\MemoizeTrait; class Advanced extends BaseClass { public function ikcgmcycisiccyuc() { $this->filename = 'advanced-cache.php'; $this->directory = $this->caokeucsksukesyo()->iuekyyeesukysksy()->cmaecekuqkwmemms(Constants::usqswcmmiaaasaki); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $easioyqacwuockya = $miiyyswuessymmwe->qucagkayiequsiia(Foundation::class); $gwcwqmuggecygcca = $miiyyswuessymmwe->qucagkayiequsiia(Optimization::class); if ($easioyqacwuockya && $gwcwqmuggecygcca) { $cmkqisoeyioisqaw = [Test::class, Config::class, Buffer::class, BaseBuffer::class, MemoizeTrait::class, MobileDetect::class]; $magicqkqogesowsu = HTML::symcgieuakksimmu(); $cmkqisoeyioisqaw = $this->cqmcaceygyqmuokq($cmkqisoeyioisqaw); $skacuygeqykiwiwy = $magicqkqogesowsu->gskqygiceygcguyo(); $yckucuyiaykemqea = $magicqkqogesowsu->smemquqkamygequg(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ($yyauwyaeewsickwk->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew)) { $qeswykqykqewiqmi = $yyauwyaeewsickwk->cmaecekuqkwmemms('PR_ENV_SLD', ''); $skacuygeqykiwiwy = $yyauwyaeewsickwk->aimgkskucmymyquc($qeswykqykqewiqmi, '%s', $skacuygeqykiwiwy); $yckucuyiaykemqea = $yyauwyaeewsickwk->aimgkskucmymyquc($qeswykqykqewiqmi, '%s', $yckucuyiaykemqea); } $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); $qookweymeqawmcwo = ['uses' => [Test::class, Buffer::class, Config::class], 'classes' => $cmkqisoeyioisqaw, 'namespace' => $this->gysieksskcaeyuom(Buffer::class), 'version' => $qgiimcueymgqcsai->gikwwgqmwccescgy($this), 'cache_path' => $skacuygeqykiwiwy, 'config_path' => $yckucuyiaykemqea, 'vendor_path' => $qgiimcueymgqcsai->aksiegmauqiaueis(Foundation::class), 'base_config_path' => untrailingslashit($yyauwyaeewsickwk->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy, '')) . '/config/index.php']; } return $qookweymeqawmcwo; } public function cqmcaceygyqmuokq($cmkqisoeyioisqaw) : array { $aqykuigiuwmmcieu = []; $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $aqykuigiuwmmcieu[$egkyssmuqcwaciya] = $miiyyswuessymmwe->eyqooeqgoyokqeoq($egkyssmuqcwaciya); } return $aqykuigiuwmmcieu; } public function gysieksskcaeyuom($egkyssmuqcwaciya) : string { return substr($egkyssmuqcwaciya, 0, strrpos($egkyssmuqcwaciya, '\\')); } }
