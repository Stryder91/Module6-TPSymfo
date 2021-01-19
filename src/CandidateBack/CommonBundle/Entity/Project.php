<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\ProjectRepository")
 */
class Project
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
     * @var \DateTime
     *
     * @ORM\Column(name="begin_at", type="date")
     */
    private $beginAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_at", type="date")
     */
    private $endAt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="domain_intervention", type="text", nullable=true)
     */
    private $domainIntervention;

    /**
     * @var string
     *
     * @ORM\Column(name="technical_environment", type="text", nullable=true)
     */
    private $technicalEnvironment;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * Set beginAt
     *
     * @param \DateTime $beginAt
     *
     * @return Project
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     *
     * @return Project
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Project
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
     * Set domainIntervention
     *
     * @param string $domainIntervention
     *
     * @return Project
     */
    public function setDomainIntervention($domainIntervention)
    {
        $this->domainIntervention = $domainIntervention;

        return $this;
    }

    /**
     * Get domainIntervention
     *
     * @return string
     */
    public function getDomainIntervention()
    {
        return $this->domainIntervention;
    }

    /**
     * Set technicalEnvironment
     *
     * @param string $technicalEnvironment
     *
     * @return Project
     */
    public function setTechnicalEnvironment($technicalEnvironment)
    {
        $this->technicalEnvironment = $technicalEnvironment;

        return $this;
    }

    /**
     * Get technicalEnvironment
     *
     * @return string
     */
    public function getTechnicalEnvironment()
    {
        return $this->technicalEnvironment;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
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
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\JobExperience", inversedBy="projects", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $jobExperience;

    /**
     * @return mixed
     */
    public function getJobExperience()
    {
        return $this->jobExperience;
    }

    /**
     * @param mixed $jobExperience
     */
    public function setJobExperience($jobExperience)
    {
        $this->jobExperience = $jobExperience;
    }

}

