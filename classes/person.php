<?php

require_once "../config.php";


class Person
{
    public $first_name;
    public $last_name;
    public $phone_number;
    public $patient_email;
    public $doctor_email;


    public function __construct($first_name = null, $last_name = null, $phone_number = null, $patient_email = null, $doctor_email = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_number = $phone_number;
        $this->patient_email = $patient_email;
        $this->doctor_email = $doctor_email;

    }

    public function getInfo()
    {
        return [
            "fname" => $this->first_name,
            "lname" => $this->last_name,
            "phone" => $this->phone_number,
            "pemail" => $this->patient_email,
            "demail" => $this->doctor_email

        ];
    }


    public function setInfo(array $info)
    {
        if (empty($info['fname']) || empty($info['lname']) || empty($info['phone']) || empty($info['pemail']) || empty($info['demail'])) {
            throw new \Exception("Eroooooooooooooor : all information is required !...");
        } else {
            $this->first_name = $info['fname'];
            $this->last_name = $info['lname'];
            $this->phone_number = $info['phone'];
            $this->patient_email = $info['pemail'];
            $this->doctor_email = $info['demail'];
        }


    }
}
