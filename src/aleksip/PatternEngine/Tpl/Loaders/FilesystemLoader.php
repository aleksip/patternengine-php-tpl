<?php

namespace aleksip\PatternEngine\Tpl\Loaders;
use PatternLab\Config;
use PatternLab\Console;

/**
 * @author Aleksi Peebles <aleksi@iki.fi>
 */
class FilesystemLoader extends AbstractTplLoader
{
    protected $templatePath;

    public function __construct($options = array())
    {
        $this->templatePath = $options['templatePath'];
        set_include_path(get_include_path().PATH_SEPARATOR.$options['partialsPath']);
    }

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

        if (file_exists(($file = $this->templatePath.DIRECTORY_SEPARATOR.$template.'.tpl.php'))) {
            $template = file_get_contents($file);
        }
        else {
            Console::writeInfo('template '.$file.' was not found...');
        }

        return $this->renderTpl($template, $data);
    }
}
