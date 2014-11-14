<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Extensions\FamilySearch\Platform\Discussions;

use Gedcomx\Common\ResourceReference;
use Gedcomx\Extensions\FamilySearch\Rt\FamilySearchPlatformModelVisitor;
use Gedcomx\Links\HypermediaEnabledData;

/**
 * 
 */
class Comment extends HypermediaEnabledData
{

    /**
     * The text or &quot;message body&quot; of the comment
     *
     * @var string
     */
    private $text;

    /**
     * date of creation
     *
     * @var integer
     */
    private $created;

    /**
     * contributor of comment
     *
     * @var ResourceReference
     */
    private $contributor;

    /**
     * Constructs a Comment from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     * @throws \Exception
     */
    public function __construct($o = null)
    {
        if (is_array($o)) {
            $this->initFromArray($o);
        }
        else if ($o instanceof \XMLReader) {
            $success = true;
            while ($success && $o->nodeType != \XMLReader::ELEMENT) {
                $success = $o->read();
            }
            if ($o->nodeType != \XMLReader::ELEMENT) {
                throw new \Exception("Unable to read XML: no start element found.");
            }

            $this->initFromReader($o);
        }
    }

    /**
     * The text or &quot;message body&quot; of the comment
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The text or &quot;message body&quot; of the comment
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    /**
     * date of creation
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * date of creation
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
    /**
     * contributor of comment
     *
     * @return ResourceReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * contributor of comment
     *
     * @param ResourceReference $contributor
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }
    /**
     * Returns the associative array for this Comment
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->text) {
            $a["text"] = $this->text;
        }
        if ($this->created) {
            $a["created"] = $this->created;
        }
        if ($this->contributor) {
            $a["contributor"] = $this->contributor->toArray();
        }
        return $a;
    }


    /**
     * Initializes this Comment from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        if (isset($o['text'])) {
            $this->text = $o["text"];
            unset($o['text']);
        }
        if (isset($o['created'])) {
            $this->created = $o["created"];
            unset($o['created']);
        }
        if (isset($o['contributor'])) {
            $this->contributor = $o['contributor'] instanceof ResourceReference ? $o["contributor"] : new ResourceReference($o["contributor"]);
            unset($o['contributor']);
        }
        parent::initFromArray($o);
    }

    public function accept(FamilySearchPlatformModelVisitor $visitor)
    {
        $visitor->visitComment($this);
    }

    /**
     * Sets a known child element of Comment from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'text') && ($xml->namespaceURI == 'http://familysearch.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->text = $child;
            $happened = true;
        }
        else if (($xml->localName == 'created') && ($xml->namespaceURI == 'http://familysearch.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->created = $child;
            $happened = true;
        }
        else if (($xml->localName == 'contributor') && ($xml->namespaceURI == 'http://familysearch.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->contributor = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of Comment from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute($xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }

        return false;
    }

    /**
     * Writes the contents of this Comment to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        parent::writeXmlContents($writer);
        if ($this->text) {
            $writer->startElementNs('fs', 'text', null);
            $writer->text($this->text);
            $writer->endElement();
        }
        if ($this->created) {
            $writer->startElementNs('fs', 'created', null);
            $writer->text($this->created);
            $writer->endElement();
        }
        if ($this->contributor) {
            $writer->startElementNs('fs', 'contributor', null);
            $this->contributor->writeXmlContents($writer);
            $writer->endElement();
        }
    }
}
