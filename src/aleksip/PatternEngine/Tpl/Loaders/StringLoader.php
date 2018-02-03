<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

use PatternLab\PatternEngine\Loader;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class StringLoader extends Loader
{
    /**
     * Render a string.
     *
     * @param array $options Options
     *
     * @return string The rendered result
     */
    public function render($options = array())
    {
        $string = $options['string'];
        $data = $options['data'];

        return '';
    }
}