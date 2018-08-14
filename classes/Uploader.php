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
        if (isset($this->myimg['tmp_name']) && !empty($this->myimg['tmp_name']) &&
            (0 == $this->myimg['error']) &&
            is_uploaded_file($this->myimg['tmp_name']) &&
            (
                /* Можно реализовать с помощью защищенного свойства типа Array, но для наглядности сделал так*/
                'image/jpeg' === $this->myimg['type'] ||
                'image/gif' === $this->myimg['type'] ||
                'image/gif' === $this->myimg['type'] ||
                'image/png' === $this->myimg['type']
            ) &&
            1048576 >= $this->myimg['size'] ) {
            return true;
        }
        return false;
    }
    /**
     * Method uploads file on the server
     */
    public function upload()
    {
        if ( $this->isUploaded() ) {
            move_uploaded_file($this->myimg['tmp_name'], __DIR__ . '/../images/' . $this->myimg['name']);
            /* можно вынести данную проверку в отдельный метод. например, saveLog(). И вызывать этот метод после upload()
            */
            if (is_writable( __DIR__ . '/../data/upload.log')) {
                $log = date('Y-m-d:H-i-s') . ':' . $_SESSION['usr'] . ':' . $this->myimg['name'];
                $logFile = file(__DIR__ . '/../data/upload.log', FILE_IGNORE_NEW_LINES);
                $logFile[] = $log;
                foreach ($logFile as $line) {
                    $record[] = $line;
                }
                file_put_contents(__DIR__ . '/../data/upload.log', implode("\n", $record));
            }
            return true;
        }
        return false;
    }
}
