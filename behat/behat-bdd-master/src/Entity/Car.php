<?php

/*
 * This file is part of the behatbdd package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;


class Car
{
    private $color;
    private $wheels = 4;
    private $brand;

    /**
     * @return int
     */
    public function getWheels(): int
    {
        return $this->wheels;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        if ('red' === $color) {
            $this->brand = 'Ferrari';
        }

        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }
}