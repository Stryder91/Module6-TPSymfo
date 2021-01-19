<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidate
 *
 * @ORM\Table(name="candidate")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\CandidateRepository")
 */
class Candidate
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
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="jobname", type="string", length=255)
     */
    private $jobname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=255, nullable=true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_url", type="string", nullable=true)
     */
    private $twitterUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_url", type="string", nullable=true)
     */
    private $linkedinUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="github_url", type="string", nullable=true)
     */
    private $githubUrl;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Candidate
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Candidate
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set jobname
     *
     * @param string $jobname
     *
     * @return Candidate
     */
    public function setJobname($jobname)
    {
        $this->jobname = $jobname;

        return $this;
    }

    /**
     * Get jobname
     *
     * @return string
     */
    public function getJobname()
    {
        return $this->jobname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Candidate
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Candidate
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Candidate
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Candidate
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Candidate
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Candidate
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Candidate
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Candidate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set twitterUrl
     *
     * @param string $twitterUrl
     *
     * @return Candidate
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;

        return $this;
    }

    /**
     * Get twitterUrl
     *
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * Set linkedinUrl
     *
     * @param string $linkedinUrl
     *
     * @return Candidate
     */
    public function setLinkedinUrl($linkedinUrl)
    {
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     * Get linkedinUrl
     *
     * @return string
     */
    public function getLinkedinUrl()
    {
        return $this->linkedinUrl;
    }

    /**
     * Set githubUrl
     *
     * @param string $githubUrl
     *
     * @return Candidate
     */
    public function setGithubUrl($githubUrl)
    {
        $this->githubUrl = $githubUrl;

        return $this;
    }

    /**
     * Get githubUrl
     *
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->githubUrl;
    }





    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\Realisation", mappedBy="candidate", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $realisations;

    public function removeRealisation($realisation)
    {
        if ($this->realisations->contains($realisation)) {
            $this->realisations->remove($realisation);
        }

        return $this;
    }

    /**
     * @param $realisation
     *
     * @return $this
     */
    public function addRealisation($realisation)
    {
        $this->realisations[] = $realisation;
        $realisation->setCandidate($this);

        return $this;
    }

    /**
     * @param $realisations
     */
    public function setRealisations($realisations)
    {
        $this->realisations->clear();
        foreach ($realisations as $realisation) {
            $this->addRealisation($realisation);
        }
    }

    /**
     * @return mixed
     */
    public function getRealisations() {
        return $this->realisations;
    }




    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\JobExperience", mappedBy="candidate", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $jobExperiences;

    public function removeJobExperience($jobExperience)
    {
        if ($this->jobExperiences->contains($jobExperience)) {
            $this->jobExperiences->remove($jobExperience);
        }

        return $this;
    }

    /**
     * @param $jobExperience
     *
     * @return $this
     */
    public function addJobExperience($jobExperience)
    {
        $this->jobExperiences[] = $jobExperience;
        $jobExperience->setCandidate($this);

        return $this;
    }

    /**
     * @param $jobExperiences
     */
    public function setJobExperiences($jobExperiences)
    {
        $this->jobExperiences->clear();
        foreach ($jobExperiences as $jobExperience) {
            $this->addJobExperience($jobExperience);
        }
    }

    /**
     * @return mixed
     */
    public function getJobExperiences() {
        return $this->jobExperiences;
    }




    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\Formation", mappedBy="candidate", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $formations;

    public function removeFormation($formation)
    {
        if ($this->formations->contains($formation)) {
            $this->formations->remove($formation);
        }

        return $this;
    }

    /**
     * @param $formation
     *
     * @return $this
     */
    public function addFormation($formation)
    {
        $this->formations[] = $formation;
        $formation->setCandidate($this);

        return $this;
    }

    /**
     * @param $formations
     */
    public function setFormations($formations)
    {
        $this->formations->clear();
        foreach ($formations as $formation) {
            $this->addFormation($formation);
        }
    }

    /**
     * @return mixed
     */
    public function getFormations() {
        return $this->formations;
    }



    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\CandidateCompetence", mappedBy="candidate", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $candidateCompetences;

    public function removeCandidateCompetence($candidateCompetence)
    {
        if ($this->candidateCompetences->contains($candidateCompetence)) {
            $this->candidateCompetences->remove($candidateCompetence);
        }

        return $this;
    }

    /**
     * @param $candidateCompetence
     *
     * @return $this
     */
    public function addCandidateCompetence($candidateCompetence)
    {
        $this->candidateCompetences[] = $candidateCompetence;
        $candidateCompetence->setCandidate($this);

        return $this;
    }

    /**
     * @param $candidateCompetences
     */
    public function setCandidateCompetences($candidateCompetences)
    {
        $this->candidateCompetences->clear();
        foreach ($candidateCompetences as $candidateCompetence) {
            $this->addCandidateCompetence($candidateCompetence);
        }
    }

    /**
     * @return mixed
     */
    public function getCandidateCompetences() {
        return $this->candidateCompetences;
    }




    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\Diploma", mappedBy="candidate", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $diplomas;

    public function removeDiploma($diploma)
    {
        if ($this->diplomas->contains($diploma)) {
            $this->diplomas->remove($diploma);
        }

        return $this;
    }

    /**
     * @param $diploma
     *
     * @return $this
     */
    public function addDiploma($diploma)
    {
        $this->diplomas[] = $diploma;
        $diploma->setCandidate($this);

        return $this;
    }

    /**
     * @param $diplomas
     */
    public function setDiplomas($diplomas)
    {
        $this->diplomas->clear();
        foreach ($diplomas as $diploma) {
            $this->addDiploma($diploma);
        }
    }

    /**
     * @return mixed
     */
    public function getDiplomas() {
        return $this->diplomas;
    }

}

