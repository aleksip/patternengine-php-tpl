<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class PatternLoader extends AbstractTplLoader
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

        return $this->renderTpl($pattern, $data);
    }
}
