
var ApiGen = ApiGen || {};
ApiGen.elements = [["c","Gedcomx\\Agent\\Address"],["c","Gedcomx\\Agent\\Agent"],["c","Gedcomx\\Agent\\OnlineAccount"],["c","Gedcomx\\Atom\\Category"],["c","Gedcomx\\Atom\\CommonAttributes"],["c","Gedcomx\\Atom\\Content"],["c","Gedcomx\\Atom\\Entry"],["c","Gedcomx\\Atom\\ExtensibleElement"],["c","Gedcomx\\Atom\\Feed"],["c","Gedcomx\\Atom\\Generator"],["c","Gedcomx\\Atom\\Person"],["c","Gedcomx\\Common\\Attributable"],["c","Gedcomx\\Common\\Attribution"],["c","Gedcomx\\Common\\CustomEntity"],["c","Gedcomx\\Common\\CustomKeyedItem"],["c","Gedcomx\\Common\\EvidenceReference"],["c","Gedcomx\\Common\\ExtensibleData"],["c","Gedcomx\\Common\\HasNotes"],["c","Gedcomx\\Common\\Note"],["c","Gedcomx\\Common\\Qualifier"],["c","Gedcomx\\Common\\ResourceReference"],["c","Gedcomx\\Common\\TextValue"],["c","Gedcomx\\Common\\UniqueCustomKeyedItem"],["c","Gedcomx\\Conclusion\\Conclusion"],["c","Gedcomx\\Conclusion\\DateInfo"],["c","Gedcomx\\Conclusion\\DisplayProperties"],["c","Gedcomx\\Conclusion\\Document"],["c","Gedcomx\\Conclusion\\Event"],["c","Gedcomx\\Conclusion\\EventRole"],["c","Gedcomx\\Conclusion\\Fact"],["c","Gedcomx\\Conclusion\\Gender"],["c","Gedcomx\\Conclusion\\HasFacts"],["c","Gedcomx\\Conclusion\\Identifier"],["c","Gedcomx\\Conclusion\\Name"],["c","Gedcomx\\Conclusion\\NameForm"],["c","Gedcomx\\Conclusion\\NamePart"],["c","Gedcomx\\Conclusion\\Person"],["c","Gedcomx\\Conclusion\\PlaceDescription"],["c","Gedcomx\\Conclusion\\PlaceDisplayProperties"],["c","Gedcomx\\Conclusion\\PlaceReference"],["c","Gedcomx\\Conclusion\\Relationship"],["c","Gedcomx\\Conclusion\\Subject"],["c","Gedcomx\\Exensions\\FamilySearch\\OAuth2"],["c","Gedcomx\\Extensions\\FamilySearch\\Error"],["c","Gedcomx\\Extensions\\FamilySearch\\FamilySearchPlatform"],["c","Gedcomx\\Extensions\\FamilySearch\\Feature"],["c","Gedcomx\\Extensions\\FamilySearch\\HealthConfig"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Artifacts\\ArtifactMetadata"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Artifacts\\ArtifactType"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Discussions\\Comment"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Discussions\\Discussion"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\ChangeInfo"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\ChangeObjectModifier"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\ChangeObjectType"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\ChangeOperation"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\ChildAndParentsRelationship"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\DiscussionReference"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\MatchInfo"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\MatchStatus"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\Merge"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\MergeAnalysis"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Tree\\MergeConflict"],["c","Gedcomx\\Extensions\\FamilySearch\\Platform\\Users\\User"],["c","Gedcomx\\Extensions\\FamilySearch\\Rt\\FamilySearchPlatformLocalReferenceResolver"],["c","Gedcomx\\Extensions\\FamilySearch\\Rt\\FamilySearchPlatformModelVisitor"],["c","Gedcomx\\Extensions\\FamilySearch\\Rt\\FamilySearchPlatformModelVisitorBase"],["c","Gedcomx\\Extensions\\FamilySearch\\Tag"],["c","Gedcomx\\Extensions\\FamilySearch\\Types\\FactType"],["c","Gedcomx\\Gedcomx"],["c","Gedcomx\\GedcomxFile\\DefaultJsonSerialization"],["c","Gedcomx\\GedcomxFile\\DefaultXMLSerialization"],["c","Gedcomx\\GedcomxFile\\GedcomxEntryDeserializer"],["c","Gedcomx\\GedcomxFile\\GedcomxEntrySerializer"],["c","Gedcomx\\GedcomxFile\\GedcomxFile"],["c","Gedcomx\\GedcomxFile\\GedcomxFileEntry"],["c","Gedcomx\\GedcomxFile\\GedcomxFileException"],["c","Gedcomx\\GedcomxFile\\GedcomxOutput"],["c","Gedcomx\\GedcomxFile\\Manifest"],["c","Gedcomx\\GedcomxFile\\ManifestAttribute"],["c","Gedcomx\\Links\\HypermediaEnabledData"],["c","Gedcomx\\Links\\Link"],["c","Gedcomx\\Links\\SupportsLinks"],["c","Gedcomx\\Records\\Collection"],["c","Gedcomx\\Records\\CollectionContent"],["c","Gedcomx\\Records\\Field"],["c","Gedcomx\\Records\\FieldDescriptor"],["c","Gedcomx\\Records\\FieldValue"],["c","Gedcomx\\Records\\FieldValueDescriptor"],["c","Gedcomx\\Records\\HasFields"],["c","Gedcomx\\Records\\RecordDescriptor"],["c","Gedcomx\\Records\\RecordSet"],["c","Gedcomx\\Records\\RecordSetIterator"],["c","Gedcomx\\Rt\\GedcomxLocalReferenceResolver"],["c","Gedcomx\\Rt\\GedcomxModelVisitor"],["c","Gedcomx\\Rt\\GedcomxModelVisitorBase"],["c","Gedcomx\\Search\\ResultConfidence"],["c","Gedcomx\\Source\\CitationField"],["c","Gedcomx\\Source\\Coverage"],["c","Gedcomx\\Source\\ReferencesSources"],["c","Gedcomx\\Source\\SourceCitation"],["c","Gedcomx\\Source\\SourceDescription"],["c","Gedcomx\\Source\\SourceReference"],["c","Gedcomx\\Support\\HasJsonKey"],["c","Gedcomx\\Types\\ConfidenceLevel"],["c","Gedcomx\\Types\\DocumentType"],["c","Gedcomx\\Types\\EventRoleType"],["c","Gedcomx\\Types\\EventType"],["c","Gedcomx\\Types\\FactType"],["c","Gedcomx\\Types\\FieldType"],["c","Gedcomx\\Types\\FieldValueType"],["c","Gedcomx\\Types\\GenderType"],["c","Gedcomx\\Types\\IdentifierType"],["c","Gedcomx\\Types\\NamePartType"],["c","Gedcomx\\Types\\NameType"],["c","Gedcomx\\Types\\RecordType"],["c","Gedcomx\\Types\\RelationshipType"],["c","Gedcomx\\Types\\ResourceType"],["c","Gedcomx\\Util\\Collection"],["c","Gedcomx\\Util\\Duration"],["c","Gedcomx\\Util\\FormalDate"],["c","Gedcomx\\Util\\JsonMapper"],["c","Gedcomx\\Util\\SimpleDate"],["c","Gedcomx\\Util\\XmlMapper"],["c","Gedcomx\\Vocab\\VocabElement"],["c","Gedcomx\\Vocab\\VocabElementList"]];
