<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace ZendeskBundle\Entity\Definition;

/**
 * Definition class for the Attachment connector object
 *
 */
trait AttachmentDefinition
{    

	 /**
	 * @var integer
	 *
	 
	 */
	private $id;    

	 /**
	 * @var string
	 *
	 
	 */
	private $fileName;    

	 /**
	 * @var string
	 *
	 
	 */
	private $contentType;    

	 /**
	 * @var string
	 *
	 
	 */
	private $contentUrl;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $size;    

	 /**
	 * @var string
	 *
	 
	 */
	private $thumbnails;    

	 /**
	 * @var integer
	 *
	 
	 */
	private $inline;    

	/**
	 * Set id
	 *
	 * @param  integer $id
	 * @return Attachment
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
	 * Set fileName
	 *
	 * @param  string $fileName
	 * @return Attachment
	 */
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		
		return $this;
	}
	
	/**
	 * Get fileName
	 *
	 * @return string
	 */
	public function getFileName()
	{
		return $this->fileName;
	}

    

	/**
	 * Set contentType
	 *
	 * @param  string $contentType
	 * @return Attachment
	 */
	public function setContentType($contentType)
	{
		$this->contentType = $contentType;
		
		return $this;
	}
	
	/**
	 * Get contentType
	 *
	 * @return string
	 */
	public function getContentType()
	{
		return $this->contentType;
	}

    

	/**
	 * Set contentUrl
	 *
	 * @param  string $contentUrl
	 * @return Attachment
	 */
	public function setContentUrl($contentUrl)
	{
		$this->contentUrl = $contentUrl;
		
		return $this;
	}
	
	/**
	 * Get contentUrl
	 *
	 * @return string
	 */
	public function getContentUrl()
	{
		return $this->contentUrl;
	}

    

	/**
	 * Set size
	 *
	 * @param  integer $size
	 * @return Attachment
	 */
	public function setSize($size)
	{
		$this->size = $size;
		
		return $this;
	}
	
	/**
	 * Get size
	 *
	 * @return integer
	 */
	public function getSize()
	{
		return $this->size;
	}

    

	/**
	 * Set thumbnails
	 *
	 * @param  string $thumbnails
	 * @return Attachment
	 */
	public function setThumbnails($thumbnails)
	{
		$this->thumbnails = $thumbnails;
		
		return $this;
	}
	
	/**
	 * Get thumbnails
	 *
	 * @return string
	 */
	public function getThumbnails()
	{
		return $this->thumbnails;
	}

    

	/**
	 * Set inline
	 *
	 * @param  integer $inline
	 * @return Attachment
	 */
	public function setInline($inline)
	{
		$this->inline = $inline;
		
		return $this;
	}
	
	/**
	 * Get inline
	 *
	 * @return integer
	 */
	public function getInline()
	{
		return $this->inline;
	}

}