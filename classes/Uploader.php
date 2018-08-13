<?php

class Uploader
{
    protected $formName;
    protected $myimg;

    /**
     * Uploader constructor.
     * @param $formName
     */
    public function __construct($formName)
    {
        $this->formName = $formName;
        $this->myimg = $_FILES[$this->formName];
    }

    /**
     * @return $this|bool
     */
    public function isUploaded()
    {
        if (is_uploaded_file($_FILES[$this->formName]['tmp_name']) ) {
          return true;
        } else {
            return false;
        }
    }

    /**
     * Method uploads file on the server
     */
    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($this->myimg['tmp_name'], __DIR__ . '/../images/' . $this->myimg['name']);
        }
    }

}

