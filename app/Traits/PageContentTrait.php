<?php


namespace App\Traits;


use App\Models\Locale;
use App\Models\PageContent;
use Illuminate\Support\Facades\Cache;

trait PageContentTrait
{
    /**
     * Get and cache all page content in the database.
     *
     * @return array
     */
    public static function getAllPageContent(): array
    {
        return Cache::rememberForever('page_content', function () {
            $result = [];

            $content = PageContent::all();

            foreach ($content as $cont) {
                $result[] = [
                    'page_id' => $cont->page_id,
                    'component' => $cont->component,
                    'type' => $cont->type,
                    'value' => $cont->value,
                ];
            }

            return $result;
        });
    }

    public static function getPageContent($pageId, $component)
    {
        foreach (static::getAllPageContent() as $content) {
            if ($content['page_id'] === $pageId && $content['component'] === $component) {
                return $content;
            }
        }

        return null;
    }
}
