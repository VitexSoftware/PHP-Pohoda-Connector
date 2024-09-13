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

namespace Pohoda\Service;

/**
 * Class representing ServiceSubjectType.
 *
 * XSD Type: serviceSubjectType
 */
class ServiceSubjectType
{
    private \Pohoda\Service\SubjectType $subject = null;

    /**
     * Gets as subject.
     *
     * @return \Pohoda\Service\SubjectType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject.
     *
     * @return self
     */
    public function setSubject(\Pohoda\Service\SubjectType $subject)
    {
        $this->subject = $subject;

        return $this;
    }
}
