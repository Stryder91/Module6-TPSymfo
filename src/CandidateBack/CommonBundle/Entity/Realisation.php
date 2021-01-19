<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisation
 *
 * @ORM\Table(name="realisation")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\RealisationRepository")
 */
class Realisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tools", type="string", length=255, nullable=true)
     */
    private $tools;

    /**
     * @var string
     *
     * @ORM\Column(name="system", type="string", length=255, nullable=true)
     */
    private $system;

    /**
     * @var string
     *
     * @ORM\Column(name="hosting", type="string", length=255, nullable=true)
     */
    private $hosting;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_published", type="boolean", nullable=true)
     */
    private $isPublished;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Realisation
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Realisation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Realisation
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Realisation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tools
     *
     * @param string $tools
     *
     * @return Realisation
     */
    public function setTools($tools)
    {
        $this->tools = $tools;

        return $this;
    }

    /**
     * Get tools
     *
     * @return string
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * Set system
     *
     * @param string $system
     *
     * @return Realisation
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return string
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set hosting
     *
     * @param string $hosting
     *
     * @return Realisation
     */
    public function setHosting($hosting)
    {
        $this->hosting = $hosting;

        return $this;
    }

    /**
     * Get hosting
     *
     * @return string
     */
    public function getHosting()
    {
        return $this->hosting;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Realisation
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Realisation
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
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\Candidate", inversedBy="realisations", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $candidate;

    /**
     * @return mixed
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param mixed $candidate
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
    }

}

