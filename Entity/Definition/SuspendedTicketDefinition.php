<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace ZendeskBundle\Entity\Definition;

/**
 * Definition class for the SuspendedTicket connector object
 *
 */
trait SuspendedTicketDefinition
{    

	 /**
	 * @var integer
	 *
	 
	 */
	
	private $ticketId;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $recipient;
	
    

	 /**
	 * @var datetime
	 *
	 
	 */
	
	private $createdAt;
	
    

	 /**
	 * @var datetime
	 *
	 
	 */
	
	private $updatedAt;
	
    

	 /**
	 * @var Object
	 *
	 
	 */
	
	private $via;
	
    

	 /**
	 * @var integer
	 *
	 
	 */
	
	private $brandId;
	
    

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
	 * @var Object
	 *
	 
	 */
	
	private $author;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $subject;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $content;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $cause;
	
    

	 /**
	 * @var string
	 *
	 
	 */
	
	private $messageId;
	
    

	
	/**
	 * Get ticketId
	 *
	 * @return integer
	 */
	public function getTicketId()
	{
		return $this->ticketId;
	}

	/**
	 * Set ticketId
	 *
	 * @param  integer $ticketId
	 * @return SuspendedTicket
	 */
	public function setTicketId($ticketId)
	{
		$this->ticketId = $ticketId;
		
		return $this;
	}	
    

	
	/**
	 * Get recipient
	 *
	 * @return string
	 */
	public function getRecipient()
	{
		return $this->recipient;
	}

	/**
	 * Set recipient
	 *
	 * @param  string $recipient
	 * @return SuspendedTicket
	 */
	public function setRecipient($recipient)
	{
		$this->recipient = $recipient;
		
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

	/**
	 * Set createdAt
	 *
	 * @param  datetime $createdAt
	 * @return SuspendedTicket
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
		
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
	 * Set updatedAt
	 *
	 * @param  datetime $updatedAt
	 * @return SuspendedTicket
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
		
		return $this;
	}	
    

	
	/**
	 * Get via
	 *
	 * @return Object
	 */
	public function getVia()
	{
		return $this->via;
	}

	/**
	 * Set via
	 *
	 * @param  Object $via
	 * @return SuspendedTicket
	 */
	public function setVia($via)
	{
		$this->via = $via;
		
		return $this;
	}	
    

	
	/**
	 * Get brandId
	 *
	 * @return integer
	 */
	public function getBrandId()
	{
		return $this->brandId;
	}

	/**
	 * Set brandId
	 *
	 * @param  integer $brandId
	 * @return SuspendedTicket
	 */
	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		
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
	 * Set id
	 *
	 * @param  integer $id
	 * @return SuspendedTicket
	 */
	public function setId($id)
	{
		$this->id = $id;
		
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
	 * Set url
	 *
	 * @param  string $url
	 * @return SuspendedTicket
	 */
	public function setUrl($url)
	{
		$this->url = $url;
		
		return $this;
	}	
    

	
	/**
	 * Get author
	 *
	 * @return Object
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * Set author
	 *
	 * @param  Object $author
	 * @return SuspendedTicket
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
		
		return $this;
	}	
    

	
	/**
	 * Get subject
	 *
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * Set subject
	 *
	 * @param  string $subject
	 * @return SuspendedTicket
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
		
		return $this;
	}	
    

	
	/**
	 * Get content
	 *
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Set content
	 *
	 * @param  string $content
	 * @return SuspendedTicket
	 */
	public function setContent($content)
	{
		$this->content = $content;
		
		return $this;
	}	
    

	
	/**
	 * Get cause
	 *
	 * @return string
	 */
	public function getCause()
	{
		return $this->cause;
	}

	/**
	 * Set cause
	 *
	 * @param  string $cause
	 * @return SuspendedTicket
	 */
	public function setCause($cause)
	{
		$this->cause = $cause;
		
		return $this;
	}	
    

	
	/**
	 * Get messageId
	 *
	 * @return string
	 */
	public function getMessageId()
	{
		return $this->messageId;
	}

	/**
	 * Set messageId
	 *
	 * @param  string $messageId
	 * @return SuspendedTicket
	 */
	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		
		return $this;
	}	
}