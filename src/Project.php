<?php

namespace Vafa\Packagelearn;

class Project
{
    public function getName()
    {
        return config('packagelearn.site_name', '.:: Shah Code ::.');
    }
}