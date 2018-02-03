<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

use PatternLab\PatternEngine\Loader;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class FilesystemLoader extends Loader
{
    /**
     * Render a template.
     *
     * @param array $options Options
     *
     * @return string The rendered result
     */
    public function render($options = array())
    {
        $template = $options['template'];
        $data = $options['data'];

        return '';
    }
}
