<?php

class Notification
{
    const WebDev = "Belajar Web development PHP.";
}

interface study
{
    public function personalStudy();
}

class school implements study
{
    public function personalStudy()
    {
        echo Notification::WebDev;
    }
}
$school = new school();
$school->personalStudy();