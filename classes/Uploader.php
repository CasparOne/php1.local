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
     * @return bool
     */
    public function isUploaded()
    {
        return is_uploaded_file($this->myimg['tmp_name']);
    }

    /**
     * Method uploads file on the server
     */
    public function upload()
    {
        if ( $this->isUploaded() &&
            (
             'image/jpeg' === $this->myimg['type'] ||
             'image/gif' === $this->myimg['type'] ||
             'image/gif' === $this->myimg['type'] ||
             'image/png' === $this->myimg['type']
            ) &&
             1048576 >= $this->myimg['size '] ) {
            move_uploaded_file($this->myimg['tmp_name'], __DIR__ . '/../images/' . $this->myimg['name']);

            if (is_writable( __DIR__ . '/../upload.log')) {
                $log = date('Y-m-d-H-i-s') . ':' . $_SESSION['usr'] . ':' . $this->myimg['name'];
                $logFile = file(__DIR__ . '/../upload.log', FILE_IGNORE_NEW_LINES);
                $logFile[] = $log;

                foreach ($logFile as $line) {
                    $record = implode("\n", $logFile);
                }
                file_put_contents(__DIR__ . '/../upload.log', $record);
            }
        }
    }

}

