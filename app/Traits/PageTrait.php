<?php


namespace App\Traits;


use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;

trait PageTrait
{
    public static function getPageByTagAndLocale($tag, $locale, $siteDomain): bool|Page|Builder
    {
        $localeId = LocaleTrait::getAllLocaleSettings()[$locale]['id'];

        $page = match ($siteDomain) {
            'global' => Page::where(['tag' => $tag, 'locale_id' => $localeId, 'for_global' => 1])->first(),
            'au' => Page::where(['tag' => $tag, 'locale_id' => $localeId, 'for_au' => 1])->first(),
        };

        if ($page) {
            return $page;
        } else {
            abort(404);
            return false;
        }
    }
}
