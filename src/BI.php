<?php

namespace yii\bootstrap5;

use yii\helpers\ArrayHelper;

class BI
{
    public static string $cssPrefix = 'bi';
    public static string $basePrefix = 'bi';

    /**
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct(string $cssPrefix, string $name, private array $options = [])
    {
        Html::addCssClass($this->options, $cssPrefix);

        if (!empty($name)) {
            Html::addCssClass($this->options, static::$basePrefix . '-' . $name);
        }
    }

    /**
     * @param string $name
     * @param array $options
     * @return static
     */
    public static function i(string $name, array $options = []): static
    {
        return static::icon($name, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @return static
     */
    public static function icon(string $name, array $options = []): static
    {
        return new static(static::$cssPrefix, $name, $options);
    }

    /**
     * @param string $class
     * @param bool $condition
     * @param string|null $throw
     * @return static
     */
    public function addCssClass(string $class, bool $condition = true, ?string $throw = null): static
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'i');

        return Html::tag($tag, null, $options);
    }

    /**
     * @param array|string $style
     * @param bool $overwrite
     * @return static
     */
    public function addCssStyle(array|string $style, bool $overwrite = true): static
    {
        Html::addCssStyle($this->options, $style, $overwrite);

        return $this;
    }

}