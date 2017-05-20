<?php
class Uploader
{
    public $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }
    public function isUploaded()
    {
        if (isset($_FILES[$this->filename])) {
            if (0 === $_FILES[$this->filename]['error']) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function upload()
    {
        if ($this->isUploaded() === true) {

            $imgname = $_FILES[$this->filename]['name'];
            $i = 0;
            while (file_exists(__DIR__.'/img/'.$imgname)) {
                $imgname = $i.'_'.$_FILES[$this->filename]['name'];
                $i++;
            }
            move_uploaded_file($_FILES[$this->filename]['tmp_name'], __DIR__.'/img/'.$imgname);
           }
    }
}



