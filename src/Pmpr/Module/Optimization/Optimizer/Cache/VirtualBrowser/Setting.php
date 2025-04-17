<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062cd4b37             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\VirtualBrowser; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Setting\SettingSegment; use Pmpr\Module\Optimization\Optimizer\Extension\Plugin\PageBuilder\Elementor\Setting as ElementorSetting; class Setting extends SettingSegment { const wwceuayikmqqwqmq = 'pattern_cache_'; const uawsucaowsqeeisi = self::wwceuayikmqqwqmq . 'purge_on_'; const gccuqiaqooyuooki = self::uawsucaowsqeeisi . 'change_cover'; const aswykaacmiooqsum = self::uawsucaowsqeeisi . 'change_widgets'; const ymcaisoiwqyqacsm = self::uawsucaowsqeeisi . 'update_cover'; const cccaqamummqsgwmq = self::uawsucaowsqeeisi . 'update_module'; const ukquomugsiygmoee = self::uawsucaowsqeeisi . 'update_common'; const ysqismgmgqwekqsu = self::ecykieqkcugukiae . 'css'; const eoeewcigeywcquis = self::uogwigocosgsugqq . 'critical_css'; const eyouawqyuyaaueeu = self::eoeewcigeywcquis . '_load'; const ciqeeymywqaykcss = self::eoeewcigeywcquis . '_extra'; const kkygieaguayewaak = self::uogwigocosgsugqq . 'remove_unused_css'; const gkqwyqeuosecqkqy = self::kkygieaguayewaak . '_exclude'; const poyueymoykaqiwau = 'apart'; const cucykekeweeukgyy = 'combine'; public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ymkqyawksmqcgsei = __('ATF & BTF', PR__MDL__OPTIMIZATION); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('pattern_cache')->jyumyyugiwwiqomk(1)->saemoowcasogykak(IconInterface::cgaumaacsaeauwqy)->gswweykyogmsyawy(__('Pattern Cache', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Pattern-level cache management', PR__MDL__OPTIMIZATION))->cuomeiwckekemywm($this->symouyowemaacayu(), Constants::smkwuwawwaqyimcq, false)->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('styles')->saemoowcasogykak(IconInterface::ywswaeisusymaeii)->gswweykyogmsyawy(__('Styles', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::eoeewcigeywcquis)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Extract Critical Style', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::uucoeqmmykkwsmqc, __('Inactive (downfall FCP & LCP)', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::eqewsqmqmsiocaeg, sprintf('%s <span>%s</span>', $this->kciwwegaqoqscqeo(), __('Active (improve FCP & LCP)', PR__MDL__OPTIMIZATION)))->qyucewwiggkyeaso(Constants::eqewsqmqmsiocaeg, [self::kkygieaguayewaak, self::eyouawqyuyaaueeu, self::ciqeeymywqaykcss, self::ysqismgmgqwekqsu]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::eyouawqyuyaaueeu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Load Critical Style', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::poyueymoykaqiwau, sprintf('%s (%s)', sprintf(__('Apart %s', PR__MDL__OPTIMIZATION), $ymkqyawksmqcgsei), __('Increase page load speed', PR__MDL__OPTIMIZATION)))->kesomeowemmyygey(self::cucykekeweeukgyy, sprintf('%s (%s)', sprintf(__('Combine %s', PR__MDL__OPTIMIZATION), $ymkqyawksmqcgsei), sprintf(__('In case of %s downfall', PR__MDL__OPTIMIZATION), 'CLS'))))->mkksewyosgeumwsa($uuyucgkyusckoaeq->uouyygwcgsmygaee(self::ciqeeymywqaykcss)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Extra Style', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('The content of this option will be added to all extracted critical css.', PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::kkygieaguayewaak)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Remove Unused Style', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::NONE, __('None', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::kqeokggqcsesmqco, __('All Except', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::ALL, __('Remove All', PR__MDL__OPTIMIZATION))->qyucewwiggkyeaso(Constants::kqeokggqcsesmqco, self::gkqwyqeuosecqkqy)->qyucewwiggkyeaso([Constants::NONE, Constants::kqeokggqcsesmqco], self::ysqismgmgqwekqsu))->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::gkqwyqeuosecqkqy)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Exclude Unused Style', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Specify URLs or patters of CSS files to be excluded from remove.', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ccyeycyyykwuymsy)->gswweykyogmsyawy(__('Pattern Or URL', PR__MDL__OPTIMIZATION))->kyiucygqsgequoys('/wp-content/themes/some-theme/(.*).css')->kqqqugemmqagucuq()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ysqismgmgqwekqsu)->gswweykyogmsyawy(__('Delay Style Load', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Improves performance by delaying the loading of CSS files until user interaction (e.g. scroll, click).', PR__MDL__OPTIMIZATION))->sqasaeywwcswqqye(ElementorSetting::ceoiqegoyougggms)))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('purge')->saemoowcasogykak(IconInterface::wuyemouocmmciyca)->gswweykyogmsyawy(__('Purge Pattern Cache', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(sprintf(__('Select the events that lead to clearing the pattern cache. Re-creating the template cache %s.', PR__MDL__OPTIMIZATION), $this->kyccegouqwyemkwq($swqimwqeweekeusq->ciuuiyckmsygceis(__('requires a coin payment', PR__MDL__OPTIMIZATION)))))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::gccuqiaqooyuooki)->gswweykyogmsyawy(__('Change Cover or Theme', PR__MDL__OPTIMIZATION))->iygyugseyaqwywyg(true)->oykaosmaegqwmoga(true, true))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::aswykaacmiooqsum)->gswweykyogmsyawy(__('Change Widgets of Cover or Theme', PR__MDL__OPTIMIZATION))->iygyugseyaqwywyg(true)->oykaosmaegqwmoga(true, true))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ymcaisoiwqyqacsm)->gswweykyogmsyawy(__('Update Cover or Theme', PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::cccaqamummqsgwmq)->gswweykyogmsyawy(__('Update Modules or Plugins', PR__MDL__OPTIMIZATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ukquomugsiygmoee)->gswweykyogmsyawy(__('Update Commons', PR__MDL__OPTIMIZATION))))); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } }
