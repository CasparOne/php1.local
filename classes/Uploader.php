<?php
class Uploader
{
    /**
     * @var
     */
    protected $formName;
    protected $dstPath;
    protected $file;

    /**
     * Uploader constructor.
     * @param $upfile
     */
    public function __construct($upfile)
    {
        $this->formName = $upfile;
        $this->file = $_FILES[$upfile];
        $this->dstPath = __DIR__ . '/../images/';
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->isUploaded()) {
        move_uploaded_file($this->file['tmp_name'],
            $this->dstPath . $this->file['name']);
        return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    protected function isUploaded()
    {
        return (is_uploaded_file($this->file['tmp_name']) && (0 == $this->file['error']));
    }
}