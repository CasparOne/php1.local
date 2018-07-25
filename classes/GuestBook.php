<?php
require __DIR__ . '/TextFile.php';
require __DIR__ . '/GuestBookRecord.php';

class GuestBook extends TextFile
{
    protected $pathFile = __DIR__ . '/../data/gb.txt';
    protected $data = [];

    public function __construct()
    {
        if ( file_exists($this->pathFile) && is_readable($this->pathFile)) {
            $lines = file($this->pathFile, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $this->data[] = new GuestBookRecord($line);
            }
        }
    }

    public function getRecords()
    {
        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

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
