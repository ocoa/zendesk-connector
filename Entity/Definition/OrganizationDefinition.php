<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace ZendeskBundle\Entity\Definition;

/**
 * Definition class for the Organization connector object
 *
 */
trait OrganizationDefinition
{    

	 /**
	 * @var datetime
	 *
	 
	 */
	private $updatedAt;    

	 /**
	 * @var string
	 *
	 
	 */
	private $domainNames;    

	 /**
	 * @var string
	 *
	 
	 */
	private $details;    

	 /**
	 * @var string
	 *
	 
	 */
	private $notes;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $groupId;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $sharedTickets;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $sharedComments;    

	 /**
	 * @var string
	 *
	 
	 */
	private $tags;    

	 /**
	 * @var string
	 *
	 
	 */
	private $organizationFields;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $id;    

	 /**
	 * @var string
	 *
	 
	 */
	private $url;    

	 /**
	 * @var string
	 *
	 
	 */
	private $externalId;    

	 /**
	 * @var string
	 *
	 
	 */
	private $name;    

	 /**
	 * @var datetime
	 *
	 
	 */
	private $createdAt;    

	/**
	 * Set updatedAt
	 *
	 * @param  datetime $updatedAt
	 * @return Organization
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
		
		return $this;
	}
	
	/**
	 * Get updatedAt
	 *
	 * @return datetime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

    

	/**
	 * Set domainNames
	 *
	 * @param  string $domainNames
	 * @return Organization
	 */
	public function setDomainNames($domainNames)
	{
		$this->domainNames = $domainNames;
		
		return $this;
	}
	
	/**
	 * Get domainNames
	 *
	 * @return string
	 */
	public function getDomainNames()
	{
		return $this->domainNames;
	}

    

	/**
	 * Set details
	 *
	 * @param  string $details
	 * @return Organization
	 */
	public function setDetails($details)
	{
		$this->details = $details;
		
		return $this;
	}
	
	/**
	 * Get details
	 *
	 * @return string
	 */
	public function getDetails()
	{
		return $this->details;
	}

    

	/**
	 * Set notes
	 *
	 * @param  string $notes
	 * @return Organization
	 */
	public function setNotes($notes)
	{
		$this->notes = $notes;
		
		return $this;
	}
	
	/**
	 * Get notes
	 *
	 * @return string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

    

	/**
	 * Set groupId
	 *
	 * @param  integer $groupId
	 * @return Organization
	 */
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		
		return $this;
	}
	
	/**
	 * Get groupId
	 *
	 * @return integer
	 */
	public function getGroupId()
	{
		return $this->groupId;
	}

    

	/**
	 * Set sharedTickets
	 *
	 * @param  integer $sharedTickets
	 * @return Organization
	 */
	public function setSharedTickets($sharedTickets)
	{
		$this->sharedTickets = $sharedTickets;
		
		return $this;
	}
	
	/**
	 * Get sharedTickets
	 *
	 * @return integer
	 */
	public function getSharedTickets()
	{
		return $this->sharedTickets;
	}

    

	/**
	 * Set sharedComments
	 *
	 * @param  integer $sharedComments
	 * @return Organization
	 */
	public function setSharedComments($sharedComments)
	{
		$this->sharedComments = $sharedComments;
		
		return $this;
	}
	
	/**
	 * Get sharedComments
	 *
	 * @return integer
	 */
	public function getSharedComments()
	{
		return $this->sharedComments;
	}

    

	/**
	 * Set tags
	 *
	 * @param  string $tags
	 * @return Organization
	 */
	public function setTags($tags)
	{
		$this->tags = $tags;
		
		return $this;
	}
	
	/**
	 * Get tags
	 *
	 * @return string
	 */
	public function getTags()
	{
		return $this->tags;
	}

    

	/**
	 * Set organizationFields
	 *
	 * @param  string $organizationFields
	 * @return Organization
	 */
	public function setOrganizationFields($organizationFields)
	{
		$this->organizationFields = $organizationFields;
		
		return $this;
	}
	
	/**
	 * Get organizationFields
	 *
	 * @return string
	 */
	public function getOrganizationFields()
	{
		return $this->organizationFields;
	}

    

	/**
	 * Set id
	 *
	 * @param  integer $id
	 * @return Organization
	 */
	public function setId($id)
	{
		$this->id = $id;
		
		return $this;
	}
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

    

	/**
	 * Set url
	 *
	 * @param  string $url
	 * @return Organization
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		
		return $this;
	}
	
	/**
	 * Get url
	 *
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

    

	/**
	 * Set externalId
	 *
	 * @param  string $externalId
	 * @return Organization
	 */
	public function setExternalId($externalId)
	{
		$this->externalId = $externalId;
		
		return $this;
	}
	
	/**
	 * Get externalId
	 *
	 * @return string
	 */
	public function getExternalId()
	{
		return $this->externalId;
	}

    

	/**
	 * Set name
	 *
	 * @param  string $name
	 * @return Organization
	 */
	public function setName($name)
	{
		$this->name = $name;
		
		return $this;
	}
	
	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

    

	/**
	 * Set createdAt
	 *
	 * @param  datetime $createdAt
	 * @return Organization
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
		
		return $this;
	}
	
	/**
	 * Get createdAt
	 *
	 * @return datetime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

}