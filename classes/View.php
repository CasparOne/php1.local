<?php

class View
{
    protected $data = [];
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include __DIR__ . '/../templates/' . $template;
        ob_start();
        $data = ob_get_contents();
        ob_end_clean();
        return $data;
    }

    public function render($template)
    {

    }

}