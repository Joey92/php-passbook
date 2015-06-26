<?php

/*
 * This file is part of the Passbook package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Passbook\Pass;

/**
 * Locale
 *
 * @author Josef Simosnon <josefatsimonson@gmail.com>
 */
class Locale implements LocaleInterface
{
    /**
     * @var string
     */
    private $locale;

    /**
     * @var array
     */
    private $strings;

    /**
     * @var Image[]
     */
    private $images;

    /**
     * @param string $locale
     * @param string $value
     */
    function __construct($locale)
    {
        $this->locale  = $locale;
        $this->strings = [];
        $this->images  = [];
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param $locale
     *
     * @return LocaleInterface
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrings()
    {
        return $this->strings;
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return LocaleInterface
     */
    public function setString($key, $value)
    {
        $this->strings[$key] = $value;

        return $this;
    }

    /**
     * @param Image $img
     *
     * @return LocaleInterface
     */
    public function addImage(Image $img)
    {
        $this->images[] = $img;

        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }
}
