<?php

namespace aleksip\PatternEngine\Tpl;

use PatternLab\PatternEngine\Rule;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class PatternEngineRule extends Rule
{
    public function __construct()
    {
        parent::__construct();

        $this->engineProp = 'tpl.php';
        $this->basePath = '\aleksip\PatternEngine\Tpl';
    }
}
