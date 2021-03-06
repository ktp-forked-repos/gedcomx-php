<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Common;

/**
 * Attribution for genealogical information. Attribution is used to model <strong>who</strong> is contributing/modifying
     * information, <strong>when</strong> they contributed it, and <strong>why</strong> they are making the
     * contribution/modification.
 */
class Attribution extends ExtensibleData
{
    /**
     * Reference to the contributor of the attributed data.
     *
     * @var ResourceReference
     */
    private $contributor;

    /**
     * The modified timestamp for the attributed data.
     *
     * @var integer
     */
    private $modified;

    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @var string
     */
    private $changeMessage;

    /**
     * Constructs a Attribution from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     *
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
     * Reference to the contributor of the attributed data.
     *
     * @return ResourceReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Reference to the contributor of the attributed data.
     *
     * @param ResourceReference $contributor
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }
    /**
     * The modified timestamp for the attributed data.
     *
     * @return integer
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * The modified timestamp for the attributed data.
     *
     * @param integer $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }
    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @return string
     */
    public function getChangeMessage()
    {
        return $this->changeMessage;
    }

    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @param string $changeMessage
     */
    public function setChangeMessage($changeMessage)
    {
        $this->changeMessage = $changeMessage;
    }
    /**
     * Returns the associative array for this Attribution
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->contributor) {
            $a["contributor"] = $this->contributor->toArray();
        }
        if ($this->modified) {
            $a["modified"] = $this->modified;
        }
        if ($this->changeMessage) {
            $a["changeMessage"] = $this->changeMessage;
        }
        return $a;
    }


    /**
     * Initializes this Attribution from an associative array
     *
     * @param array $o
     */
    public function initFromArray(array $o)
    {
        if (isset($o['contributor'])) {
            $this->contributor = $o['contributor'] instanceof ResourceReference ? $o['contributor'] : new ResourceReference($o["contributor"]);
            unset($o['contributor']);
        }
        if (isset($o['modified'])) {
            $this->modified = $o["modified"];
            unset($o['modified']);
        }
        if (isset($o['changeMessage'])) {
            $this->changeMessage = $o["changeMessage"];
            unset($o['changeMessage']);
        }
        parent::initFromArray($o);
    }

    /**
     * Sets a known child element of Attribution from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     *
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement(\XMLReader $xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'contributor') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->contributor = $child;
            $happened = true;
        }
        else if (($xml->localName == 'modified') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->modified = $child;
            $happened = true;
        }
        else if (($xml->localName == 'changeMessage') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->changeMessage = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of Attribution from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     *
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute(\XMLReader $xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }

        return false;
    }

    /**
     * Writes this Attribution to an XML writer.
     *
     * @param \XMLWriter $writer            The XML writer.
     * @param bool       $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml(\XMLWriter $writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'attribution', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this Attribution to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents(\XMLWriter $writer)
    {
        parent::writeXmlContents($writer);
        if ($this->contributor) {
            $writer->startElementNs('gx', 'contributor', null);
            $this->contributor->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->modified) {
            $writer->startElementNs('gx', 'modified', null);
            $writer->text($this->modified);
            $writer->endElement();
        }
        if ($this->changeMessage) {
            $writer->startElementNs('gx', 'changeMessage', null);
            $writer->text($this->changeMessage);
            $writer->endElement();
        }
    }
}
