<?php

namespace aleksip\PatternEngine\Tpl\Loaders;

use PatternLab\PatternEngine\Loader;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class AbstractTplLoader extends Loader
{
    /**
     * Renders a .tpl.php file.
     *
     * @param string $tpl .tpl.php file contents
     * @param array $data Data to be used in rendering
     *
     * @return string Rendered .tpl.php file
     */
    protected function renderTpl($tpl, $data = array())
    {
        if (!empty($tpl)) {
            extract($data);
            ob_start();
            eval('?>'.$tpl.'<?php ');
            $tpl = ob_get_clean();
        }

        return $tpl;
    }
}
