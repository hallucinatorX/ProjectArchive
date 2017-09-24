<?php
class Thesis{
	private $_thesisId;
	private $_thesisThumbnail;
	private $_thesisTitle;
	private $_thesisDescription;
	private $_thesisLink;
	private $_thesisYearId;
	private $_thesisTermId;
	private $_thesisCourseId;
	private $_thesisDisciplineId;
	private $_thesisCreatedAt;
	private $_thesisUpdatedAt;

	//Id
    public function getThesisId()
    {
        return $this->_thesisId;
    }
    public function setThesisId($thesisId)
    {
        $this->_thesisId = $thesisId;
    }

    //Thumbnail
    public function getThesisThumbnail()
    {
        return $this->_thesisThumbnail;
    }
    public function setThesisThumbnail($thesisThumbnail)
    {
        $this->_thesisThumbnail = $thesisThumbnail;
    }

    //Title
    public function getThesisTitle()
    {
    	return $this->_thesisTitle;
    }
    public function setThesisTitle($thesisTitle)
    {
    	$this->_thesisTitle=$thesisTitle;
    }

    //Description
    public function getThesisDescription()
    {
    	return $this->_thesisDescription;
    }
    public function setThesisDescription($thesisDescription)
    {
    	$this->_thesisDescription=$thesisDescription;
    }

    //Link
    public function getThesisLink()
    {
    	return $this->_thesisLink;
    }
    public function setThesisLink($thesisLink)
    {
    	$this->_thesisLink=$thesisLink;
    }

    //YearID
    public function getThesisYearId()
    {
    	return $this->_thesisYearId;
    }
    public function setThesisYearId($thesisYearId)
    {
    	$this->_thesisYearId=$thesisYearId;
    }

    //TermID
    public function getThesisTermId()
    {
    	return $this->_thesisTermId;
    }
    public function setThesisTermId($thesisTermId)
    {
    	$this->_thesisTermId=$thesisTermId;
    }

    //CourseId
    public function getThesisCourseId()
    {
    	return $this->_thesisCourseId;
    }
    public function setThesisCourseId($thesisCourseId)
    {
    	$this->_thesisCourseId=$thesisCourseId;
    }

    //DisciplineId
    public function getThesisDisciplineId()
    {
    	return $this->_thesisDisciplineId;
    }
    public function setThesisDisciplineId($thesisDisciplineId)
    {
    	$this->_thesisDisciplineId=$thesisDisciplineId;
    }

    //Created At
    public function getThesisCreatedAt()
    {
    	return $this->_thesisCreatedAt;
    }
    public function setThesisCreatedAt($thesisCreatedAt)
    {
    	$this->_thesisCreatedAt=$thesisCreatedAt;
    }

    //Updated At
    public function getThesisUpdatedAt()
    {
    	return $this->_thesisUpdatedAt;
    }
    public function setThesisUpdatedAt($thesisUpdatedAt)
    {
    	$this->_thesisUpdatedAt=$thesisUpdatedAt;
    }
}

class StudentThesis{
	private $_studentThesisId;
	private $_studentId;
	private $_thesisId;

	//StudentThesisId
	public function getStudentThesisId()
	{
		return $this->_studentThesisId;
	}
	public function setStudentThesisId($studentThesisId)
	{
		$this->_studentThesisId=$studentThesisId;
	}

	//StudentId
	public function getStudentId()
	{
		return $this->_studentId;
	}
	public function setStudentId($studentId)
	{
		$this->_studentId=$studentId;
	}

	//ThesisId
	public function getThesisId()
	{
		return $this->_thesisId;
	}
	public function setThesisId($thesisId)
	{
		$this->_thesisId=$thesisId;
	}
}

class SupervisorThesis{
	private $_supervisorThesisId;
	private $_supervisorId;
	private $_thesisId;

	//SupervisorThesisId
	public function getSupervisorThesisId()
	{
		return $this->_supervisorThesisId;
	}
	public function setSupervisorThesisId($supervisorThesisId)
	{
		$this->_supervisorThesisId=$supervisorThesisId;
	}

	//SupervisorId
	public function getSupervisorId()
	{
		return $this->_supervisorId;
	}
	public function setSupervisorId($supervisorId)
	{
		$this->_supervisorId=$supervisorId;
	}

	//ThesisId
	public function getThesisId()
	{
		return $this->_thesisId;
	}
	public function setThesisId($thesisId)
	{
		$this->_thesisId=$thesisId;
	}
}
?>