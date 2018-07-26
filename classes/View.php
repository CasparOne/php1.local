<?php

class View
{
    public $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        //return $this;

    }

    public function render($template)
    {
        ob_start();
        require $template;
        $outData = ob_get_contents();
        ob_end_clean();
        return $outData;
    }

    public function display($template)
    {
        require $template;
    }

}