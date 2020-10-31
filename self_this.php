<!--

Function Name    :  Using Self And This Keyword In PHP
Function Date    :  31 Oct 2020
Function Author  :  Prasad Dangare
Output           :  Job Name : Full Stack Developer
                 :  Job Description : You must know Frontend and Backend
                 :  Company Name : TCS

-->

<?php

class Job
{

    public $name;

    public $desc;

    public static $company;

    // public function to get job name

    public function getName()
    {
        return $this->name;
    }

    // public function to get job description

    public function getDesc()
    {
        return $this->desc;
    }

    // static function to get the company name

    public static function getCompany()
    {
        return self::$company;
    }

    // non-static function to get the company name

    public function getCompany_nonStatic()
    {
        return self::getCompany();
    }
}

$objJob = new Job();

// setting values to non-static variables

$objJob->name = "Full Stack Developer";
$objJob->desc = "You must know Frontend and Backend ";


Job::$company = "TCS";

// calling the methods

echo "Job Name : " . $objJob->getName() . "<br/>";
echo "Job Description : " . $objJob->getDesc() . "<br/>";
echo "Company Name : " . Job::getCompany_nonStatic();
