<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Category;

/**
 * Class representing ActionTypeType.
 *
 * XSD Type: actionTypeType
 */
class ActionTypeType
{
    /**
     * Vložení nového záznamu. Výchozí hodnota.
     */
    private \Pohoda\Filter\RequestCategoryActionType $add = null;

    /**
     * Aktualizace dokladu.
     */
    private \Pohoda\Filter\RequestCategoryActionType $update = null;

    /**
     * Gets as add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return \Pohoda\Filter\RequestCategoryActionType
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Sets a new add.
     *
     * Vložení nového záznamu. Výchozí hodnota.
     *
     * @return self
     */
    public function setAdd(?\Pohoda\Filter\RequestCategoryActionType $add = null)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Gets as update.
     *
     * Aktualizace dokladu.
     *
     * @return \Pohoda\Filter\RequestCategoryActionType
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Sets a new update.
     *
     * Aktualizace dokladu.
     *
     * @return self
     */
    public function setUpdate(?\Pohoda\Filter\RequestCategoryActionType $update = null)
    {
        $this->update = $update;

        return $this;
    }
}
