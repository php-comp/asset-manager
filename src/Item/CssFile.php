<?php
/**
 * Created by PhpStorm.
 * User: Inhere
 * Date: 2017/11/18 0018
 * Time: 19:27
 */

namespace PhpComp\Asset\Item;

/**
 * Class CssFile
 * @package PhpComp\Asset\Item
 */
final class CssFile extends FileItem
{
    /**
     * @inheritdoc
     */
    public function __construct(string $path, bool $local = true, $filter = true, array $attributes = [])
    {
        parent::__construct(self::CSS_FILE, $path, $local, $filter, $attributes);
    }

    /**
     * @param bool $wrapperTag
     * @return string
     */
    public function toString($wrapperTag = true): string
    {
        $path = $this->getPath();

        if ($wrapperTag) {
            return sprintf(
                '<link href="%s" rel="stylesheet" %s>',
                $path,
                $this->buildAttributes()
            );
        }

        return $path;
    }
}
