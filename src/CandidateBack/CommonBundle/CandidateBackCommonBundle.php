<?php

namespace CandidateBack\CommonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CandidateBackCommonBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
