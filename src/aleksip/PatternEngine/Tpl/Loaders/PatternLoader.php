<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

use PatternLab\PatternEngine\Loader;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class PatternLoader extends Loader
{
    /**
     * Render a pattern.
     *
     * @param array $options Options
     *
     * @return string The rendered result
     */
    public function render($options = array())
    {
        $pattern = $options['pattern'];
        $data = $options['data'];

        return '';
    }
}
