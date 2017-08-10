<?php

class Project{
    private $_projectId;
    private $_title;
    private $_description;
    private $_link;
    private $_language;
    private $_yearId;
    private $_termId;
    private $_courseId;
    private $_teacher;
    private $_createdAt;
    private $_updatedAt;

    //Id
    public function getProjectId(){
        return $this->_projectId;
    }
    public function setProjectId($projectId){
        $this->_projectId=$projectId;
    }

    //Title
    public function getTitle(){
        return $this->_title;
    }
    public function setTitle($title){
        $this->_title=$title;
    }

    //Description
    public function getDescription(){
        return $this->_description;
    }
    public function setDescription($description){
        $this->_description=$description;
    }

    //Link
    public function getLink(){
        return $this->_link;
    }
    public function setLink($link){
        $this->_link=$link;
    }

    //Language
    public function getLanguage(){
        return $this->_language;
    }
    public function setLanguage($language){
        $this->_language=$language;
    }

    //YearId
    public function getYearId(){
        return $this->_yearId;
    }
    public function setYearId($yearId){
        $this->_yearId=$yearId;
    }

    //TermId
    public function getTermId(){
        return $this->_termId;
    }
    public function setTermId($termId){
        $this->_termId=$termId;
    }

    //CourseId
    public function getCourseId(){
        return $this->_courseId;
    }
    public function setCourseId($courseId){
        $this->_courseId=$courseId;
    }

    //Teacher
    public function getTeacher(){
        return $this->_teacher;
    }
    public function setTeacher($teacher){
        $this->_teacher=$teacher;
    }

    //CreatedAt
    public function getCreatedAt(){
        return $this->_createdAt;
    }
    public function setCreatedAt($createdAt){
        $this->_createdAt=$createdAt;
    }

    //UpdatedAt
    public function getUpdatedAt(){
        return $this->_updatedAt;
    }
    public function setUpdatedAt($updatedAt){
        $this->_updatedAt=$updatedAt;
    }
}

class Year{
    private $_yearId;
    private $_yearName;

    //YearId
    public function getYearId(){
        return $this->_yearId;
    }
    public function setYearId($yearId){
        $this->_yearId=$yearId;
    }

    //YearName
    public function getYearName(){
        return $this->_yearName;
    }
    public function setYearName($yearName){
        $this->_yearName=$yearName;
    }
}

class Term{
    private $_termId;
    private $_termName;

    //TermId
    public function getTermId(){
        return $this->_termId;
    }
    public function setTermId($termId){
        $this->_termId=$termId;
    }

    //TermName
    public function getTermName(){
        return $this->_termName;
    }
    public function setTermName($termName){
        $this->_termName=$termName;
    }
}

class Course{
    private $_courseId;
    private $_courseNumber;
    private $_courseName;

    //CourseId
    public function getCourseId(){
        return $this->_courseId;
    }
    public function setCourseId($courseId){
        $this->_courseId=$courseId;
    }

    //CourseNumber
    public function getCourseNumber(){
        return $this->_courseNumber;
    }
    public function setCourseNumber($courseNumber){
        $this->_courseNumber=$courseNumber;
    }

    //CourseName
    public function getCourseName(){
        return $this->_courseName;
    }
    public function setCourseName($courseName){
        $this->_courseName=$courseName;
    }
}

class StudentProject{
    private $_studentProjectId;
    private $_userId;
    private $_projectId;

    //StudentProjectId
    public function getStudentProjectId(){
        return $this->_studentProjectId;
    }
    public function setStudentProjectId($studentProjectId){
        $this->_studentProjectId=$studentProjectId;
    }

    //UserId
    public function getUserId(){
        return $this->_userId;
    }
    public function setUserId($userId){
        $this->_userId=$userId;
    }

    //ProjectId
    public function getProjectId(){
        return $this->_projectId;
    }
    public function setProjectId($projectId){
        $this->_projectId=$projectId;
    }
}

class CreateProject{
    private $_projectId;
    private $_title;
    private $_description;

    //Id
    public function getProjectId(){
        return $this->_projectId;
    }
    public function setProjectId($projectId){
        $this->_projectId=$projectId;
    }

    //Title
    public function getTitle(){
        return $this->_title;
    }
    public function setTitle($title){
        $this->_title=$title;
    }

    //Description
    public function getDescription(){
        return $this->_description;
    }
    public function setDescription($description){
        $this->_description=$description;
    }
}