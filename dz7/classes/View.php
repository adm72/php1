<?php

class View
{
    protected $arr;

    public function assign($name, $value)
    {
        $this->arr = [];
        $this->arr[$name] = $value;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }
}