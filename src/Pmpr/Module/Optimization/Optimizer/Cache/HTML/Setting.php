<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbb9b4545             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Setting\SettingSegment; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Purge\Setting as PurgeSetting; use Pmpr\Module\Optimization\Optimizer\Cache\HTML\Preload\Setting as PreloadSetting; class Setting extends SettingSegment { const ygcmeykickqoayeo = 'html_cache'; const wqumaksaywyiiukw = self::ygcmeykickqoayeo . '_enable_gzip'; const aqaeiauuykqeiyoi = self::ygcmeykickqoayeo . '_cache_enable'; const egcsacmywomuowsc = self::ygcmeykickqoayeo . '_mobile_cache'; public function mameiwsayuyquoeq() { PurgeSetting::symcgieuakksimmu(); PreloadSetting::symcgieuakksimmu(); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg(self::ygcmeykickqoayeo)->jyumyyugiwwiqomk(2)->saemoowcasogykak(IconInterface::wyikeiwemqwyaquo)->gswweykyogmsyawy(__('Elected Page\'s Cache', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Page-level cache management', PR__MDL__OPTIMIZATION))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('cache')->saemoowcasogykak(IconInterface::ycwuwkomomgswcgg)->gswweykyogmsyawy(__('Cache', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::aqaeiauuykqeiyoi)->gswweykyogmsyawy(__('HTML Cache', PR__MDL__OPTIMIZATION))->ecyiaeoqyuyuoyya([self::egcsacmywomuowsc, self::wqumaksaywyiiukw]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::egcsacmywomuowsc)->gswweykyogmsyawy(__('Separate HTML Cache For Mobile', PR__MDL__OPTIMIZATION))->eumecwmqmukqgyea()->kesomeowemmyygey(Constants::eqewsqmqmsiocaeg, sprintf('%s (%s)', __('Active', PR__MDL__OPTIMIZATION), sprintf(__('%s along with %s', PR__MDL__OPTIMIZATION), __('Increasing the number of inode usage', PR__MDL__OPTIMIZATION), __('Improves performance in mobile', PR__MDL__OPTIMIZATION))))->kesomeowemmyygey(Constants::uucoeqmmykkwsmqc, sprintf('%s (%s)', __('Inactive', PR__MDL__OPTIMIZATION), sprintf(__('%s along with %s', PR__MDL__OPTIMIZATION), __('Reducing the number of inode usage', PR__MDL__OPTIMIZATION), __('Downfall performance in mobile', PR__MDL__OPTIMIZATION)))))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::wqumaksaywyiiukw)->wywmmeyauqkeskeq(function_exists('gzencode'))->gswweykyogmsyawy(__('HTML cache (with Gzip compression)', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Gzip compression for cache (improves performance along with increasing the number of inode usage)', PR__MDL__OPTIMIZATION))))); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $qiouiwasaauyaaue[self::wqumaksaywyiiukw] = true; $qiouiwasaauyaaue[self::aqaeiauuykqeiyoi] = true; $qiouiwasaauyaaue[self::egcsacmywomuowsc] = true; return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } }
