<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 2017/11/18 0018
 * Time: 19:27
 */

namespace PhpComp\Asset\Item;

/**
 * Class JsCode
 * @package PhpComp\Asset\Item
 */
final class JsCode extends CodeItem
{
    /**
     * @inheritdoc
     */
    public function __construct($type, $content, $filter = true, array $attributes = [])
    {
        if (!$attributes) {
            $attributes['type'] = 'text/javascript';
        }

        parent::__construct(self::JS_CODE, $content, $filter, $attributes);
    }

    /**
     * @param bool $wrapperTag
     * @return string
     */
    public function toString($wrapperTag = true): string
    {
        $content = $this->getContent();

        if ($wrapperTag) {
            return sprintf('<script %s>%s</script>', $this->buildAttributes(), $content);
        }

        return $content;
    }
}

