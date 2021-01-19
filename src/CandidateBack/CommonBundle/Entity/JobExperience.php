<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobExperience
 *
 * @ORM\Table(name="job_experience")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\JobExperienceRepository")
 */
class JobExperience
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
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="date")
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date")
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="contract", type="string", length=255, nullable=true)
     */
    private $contract;


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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return JobExperience
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return JobExperience
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return JobExperience
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return JobExperience
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
     * Set contract
     *
     * @param string $contract
     *
     * @return JobExperience
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }





    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\Candidate", inversedBy="jobExperiences", cascade="persist")
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






    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\Project", mappedBy="jobExperience", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $projects;

    public function removeProject($project)
    {
        if ($this->projects->contains($project)) {
            $this->projects->remove($project);
        }

        return $this;
    }

    /**
     * @param $project
     *
     * @return $this
     */
    public function addProject($project)
    {
        $this->projects[] = $project;
        $project->setJobExperience($this);

        return $this;
    }

    /**
     * @param $projects
     */
    public function setProjects($projects)
    {
        $this->projects->clear();
        foreach ($projects as $project) {
            $this->addProject($project);
        }
    }

    /**
     * @return mixed
     */
    public function getProjects() {
        return $this->projects;
    }
}

