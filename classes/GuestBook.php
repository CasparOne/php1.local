<?php
require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $pathFile;
    protected $data = [];

    /**
     * GuestBook constructor.
     */
    public function __construct($datafile)
    {
        if ( file_exists($datafile) && is_readable($datafile) && (0 !== filesize($datafile)) ) {
            $this->pathFile = $datafile;
            $lines = file($this->pathFile, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $this->data[] = new GuestBookRecord($line);
            }
        }
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        return $this->data;
    }

    /**
     * @param GuestBookRecord $record
     * @return $this
     */
    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    /**
     * @return bool
     */
    public function save()
   {
       $lines = [];
       foreach ($this->getRecords() as $record) {
           $lines[] = $record->getMessage();
       }
       if ( file_exists($this->pathFile) && is_writable($this->pathFile)) {
           file_put_contents($this->pathFile, implode("\n", $lines));
           return true;
       } else {
           return false;
       }
   }
}
