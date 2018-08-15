<?php

class View
{

   protected $data = [];

    /**
     * @param string $name
     * @param $value
     * @return $this
     */
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    /**
     * @param $template
     * @return string $outData
     */
    public function render($template)
    {
        ob_start();
        //require $template;
        $this->display($template);
        $outData = ob_get_contents();
        ob_end_clean();
        return $outData;
    }

    /**
     * @param $template
     */
    public function display($template)
    {
        foreach ($this->data as $name => $value) {
            $$name = $value;
         }
        require $template;
    }

}
