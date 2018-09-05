<?php

class Uploader
{
    protected $formName;

    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function isUploaded()
    {
        if (0 == $_FILES[$this->formName]['error'] && is_uploaded_file($_FILES[$this->formName]['tmp_name'])) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function upload() :bool
    {
        if (true === $this->isUploaded()
        && true === $this->validateFile()) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                // добавил рандомную приставку для возможности загрузки файлов с одинаковым именем
                __DIR__ . '/../images/' . rand(0, 999) . $_FILES[$this->formName]['name']);
            return true;
        }
        return false;
    }

    /**
     * @return bool
     * Добавил метод проверки на тип файла и размер. Параметры прописанны в файле, который фозвращает массив параметров
     */
    protected function validateFile ()
    {
        if(file_exists(__DIR__ . '/../fileparams.php')) {
            $paramsArray = include __DIR__ . '/../fileparams.php';
            $filetypes = $paramsArray['filetypes'];
            $filesize = $paramsArray['filesize'];
            if (in_array($_FILES[$this->formName]['type'], $filetypes)
                && $filesize >= $_FILES[$this->formName]['size']) {
                return true;
            }
        }
        return false;
    }

}

