<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable;

use Closure;

/**
 * Class AddIfTrait
 *
 * @package Sg\DatatablesBundle\Datatable
 */
trait AddIfTrait
{
    /**
     * Add an object only if parameter / conditions are TRUE.
     * Default: null
     *
     * @var null|Closure
     */
    protected $addIf;

    //-------------------------------------------------
    // Helper
    //-------------------------------------------------

    /**
     * Checks whether the object may be added.
     *
     * @param array $row
     *
     * @return bool
     */
    public function callAddIfClosure(array $row = array())
    {
        if ($this->addIf instanceof Closure) {
            return call_user_func($this->addIf, $row);
        }

        return true;
    }

    //-------------------------------------------------
    // Getters && Setters
    //-------------------------------------------------

    /**
     * Get addIf.
     *
     * @return null|Closure
     */
    public function getAddIf()
    {
        return $this->addIf;
    }

    /**
     * Set addIf.
     *
     * @param null|Closure $addIf
     *
     * @return $this
     */
    public function setAddIf($addIf)
    {
        $this->addIf = $addIf;

        return $this;
    }
}
