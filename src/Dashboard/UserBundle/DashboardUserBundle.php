<?php

namespace Dashboard\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DashboardUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
