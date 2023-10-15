<?php

namespace Pohoda\Service;

/**
 * Class representing ServiceSubjectType
 *
 *
 * XSD Type: serviceSubjectType
 */
class ServiceSubjectType
{
    /**
     * @var \Pohoda\Service\SubjectType $subject
     */
    private $subject = null;

    /**
     * Gets as subject
     *
     * @return \Pohoda\Service\SubjectType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param \Pohoda\Service\SubjectType $subject
     * @return self
     */
    public function setSubject(\Pohoda\Service\SubjectType $subject)
    {
        $this->subject = $subject;
        return $this;
    }
}

