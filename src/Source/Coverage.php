<?php
/**
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 */

namespace Gedcomx\Source;

use Gedcomx\Conclusion\DateInfo;
use Gedcomx\Conclusion\PlaceReference;
use Gedcomx\Links\HypermediaEnabledData;

/**
 * A description of the coverage of a resource.
 */
class Coverage extends HypermediaEnabledData
{
    /**
     * The type of record being covered.
     *
     * @var string
     */
    private $recordType;

    /**
     * Spatial coverage.
     *
     * @var PlaceReference
     */
    private $spatial;

    /**
     * Temporal coverage.
     *
     * @var DateInfo
     */
    private $temporal;

    /**
     * Constructs a Coverage from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     *
     * @throws \Exception
     */
    public function __construct($o = null)
    {
        if (is_array($o)) {
            $this->initFromArray($o);
        } else {
            if ($o instanceof \XMLReader) {
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
    }

    /**
     * The type of record being covered.
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * The type of record being covered.
     *
     * @param string $recordType
     */
    public function setRecordType($recordType)
    {
        $this->recordType = $recordType;
    }

    /**
     * Spatial coverage.
     *
     * @return \Gedcomx\Conclusion\PlaceReference
     */
    public function getSpatial()
    {
        return $this->spatial;
    }

    /**
     * Spatial coverage.
     *
     * @param \Gedcomx\Conclusion\PlaceReference $spatial
     */
    public function setSpatial(PlaceReference $spatial)
    {
        $this->spatial = $spatial;
    }

    /**
     * Temporal coverage.
     *
     * @return \Gedcomx\Conclusion\DateInfo
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * Temporal coverage.
     *
     * @param \Gedcomx\Conclusion\DateInfo $temporal
     */
    public function setTemporal(DateInfo $temporal)
    {
        $this->temporal = $temporal;
    }

    /**
     * Returns the associative array for this Coverage
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->recordType) {
            $a["recordType"] = $this->recordType;
        }
        if ($this->spatial) {
            $a["spatial"] = $this->spatial->toArray();
        }
        if ($this->temporal) {
            $a["temporal"] = $this->temporal->toArray();
        }

        return $a;
    }

    /**
     * Initializes this Coverage from an associative array
     *
     * @param array $o
     */
    public function initFromArray(array $o)
    {
        parent::initFromArray($o);
        if (isset($o['recordType'])) {
            $this->recordType = $o["recordType"];
        }
        if (isset($o['spatial'])) {
            $this->spatial = new PlaceReference($o["spatial"]);
        }
        if (isset($o['temporal'])) {
            $this->temporal = new DateInfo($o["temporal"]);
        }
    }

    /**
     * Sets a known child element of Coverage from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     *
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement(\XMLReader $xml)
    {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
            return true;
        } else {
            if (($xml->localName == 'recordType') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
                $child = '';
                while ($xml->read() && $xml->hasValue) {
                    $child = $child . $xml->value;
                }
                $this->recordType = $child;
                $happened = true;
            } else {
                if (($xml->localName == 'spatial') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
                    $child = new PlaceReference($xml);
                    $this->spatial = $child;
                    $happened = true;
                } else {
                    if (($xml->localName == 'temporal') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
                        $child = new DateInfo($xml);
                        $this->temporal = $child;
                        $happened = true;
                    }
                }
            }
        }

        return $happened;
    }

    /**
     * Sets a known attribute of Coverage from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     *
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute(\XMLReader $xml)
    {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }

        return false;
    }

    /**
     * Writes this Coverage to an XML writer.
     *
     * @param \XMLWriter $writer            The XML writer.
     * @param bool       $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml(\XMLWriter $writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'coverage', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this Coverage to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents(\XMLWriter $writer)
    {
        parent::writeXmlContents($writer);
        if ($this->recordType) {
            $writer->startElementNs('gx', 'recordType', null);
            $writer->text($this->recordType);
            $writer->endElement();
        }
        if ($this->spatial) {
            $writer->startElementNs('gx', 'spatial', null);
            $this->spatial->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->temporal) {
            $writer->startElementNs('gx', 'temporal', null);
            $this->temporal->writeXmlContents($writer);
            $writer->endElement();
        }
    }
}
