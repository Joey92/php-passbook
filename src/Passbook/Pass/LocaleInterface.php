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
 * LocaleInterface
 *
 * @author Josef Simonson <josefatsimonson@gmail.com>
 */
interface LocaleInterface
{
    /**
     * @return string
     */
    public function getLocale();

    /**
     * @param $locale
     *
     * @return LocaleInterface
     */
    public function setLocale($locale);

    /**
     * @return string
     */
    public function getStrings();

    /**
     * @param string $key
     * @param string $value
     *
     * @return LocaleInterface
     */
    public function setString($key, $value);

    /**
     * @param Image $img
     *
     * @return LocaleInterface
     */
    public function addImage(Image $img);

    /**
     * @return Image[]
     */
    public function getImages();
}
