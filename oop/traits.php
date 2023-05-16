<?php

class Notification{
    const OOP = "OOP is  si funny to learn, but so hard";
}

trait learn
{
    public function learnOOP()
    {
        echo Notification::OOP;
    }
}
class learnToday
{
    use learn;
}

$laern = new learnToday();
$laern->learnOOP();