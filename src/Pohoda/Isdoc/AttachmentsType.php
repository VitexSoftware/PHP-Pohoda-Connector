<?php

namespace Pohoda\Isdoc;

/**
 * Class representing AttachmentsType
 *
 *
 * XSD Type: attachmentsType
 */
class AttachmentsType
{
    /**
     * @var \Pohoda\Isdoc\AttachmentType[] $attachment
     */
    private $attachment = [
        
    ];

    /**
     * Adds as attachment
     *
     * @return self
     * @param \Pohoda\Isdoc\AttachmentType $attachment
     */
    public function addToAttachment(\Pohoda\Isdoc\AttachmentType $attachment)
    {
        $this->attachment[] = $attachment;
        return $this;
    }

    /**
     * isset attachment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachment($index)
    {
        return isset($this->attachment[$index]);
    }

    /**
     * unset attachment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachment($index)
    {
        unset($this->attachment[$index]);
    }

    /**
     * Gets as attachment
     *
     * @return \Pohoda\Isdoc\AttachmentType[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * @param \Pohoda\Isdoc\AttachmentType[] $attachment
     * @return self
     */
    public function setAttachment(array $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }
}

