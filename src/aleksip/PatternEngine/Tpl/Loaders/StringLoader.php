<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class StringLoader extends AbstractTplLoader
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

        return $this->renderTpl($string, $data);
    }
}
