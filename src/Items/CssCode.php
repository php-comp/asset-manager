<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 2017/11/18 0018
 * Time: 19:27
 */

namespace Inhere\Asset\Items;

/**
 * Class CssCode
 * @package Inhere\Asset\Items
 */
final class CssCode extends CodeItem
{
    /**
     * @inheritdoc
     */
    public function __construct($content, $filter = true, $attributes = null)
    {
        if (!$attributes) {
            $attributes['type'] = 'text/css';
        }

        parent::__construct(self::CSS_CODE, $content, $filter, $attributes);
    }

    /**
     * @param bool $wrapperTag
     * @return string
     */
    public function toString($wrapperTag = true)
    {
        $content = $this->getContent();

        if ($wrapperTag) {
            return sprintf('<style %s>%s</style>', $this->buildAttributes(), $content);
        }

        return $content;
    }
}
