<?php

class View
{
    protected $arr;

    public function assign($name, $value)
    {
        //- сохранить данные, передаваемые в шаблон по заданному имени (
        //используйте защищенное свойство - массив для хранения этих данных)
        $this->arr = [];
        $this->arr[$name] = $value;
        //объевили что защищенная переменная arr это пустой массив
        //затем в этот массив добавляем ключ $name и значение $value

    }

    public function display($template)
    {
        //отображает указанный шаблон с заранее сохраненными данными
        //прилетает ссылка на шаблон в котором будем выводить.
        //вызывается метод чтобы выводить через буфер обмена
        echo $this->render($template);


    }
    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }
}

class GuestBookRecord
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}

class GuestBook
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getData()
    {
        $data = file($this->path, FILE_IGNORE_NEW_LINES);
        $arr = [];
        foreach ($data as $item) {
            $arr[] = new GuestBookRecord($item);
        }
        return $arr;
        //чтобы запилить каждую запись в объект, нам нужно 2 массива.
        //1й с записями из тхт, а другой чистый, в который зальются новые объекты.
    }
}

$gb = new GuestBook(__DIR__ . '/data.txt');
$dataobj = $gb->getData(); //получили все записи-объекты в массив

$view = new View();
$view->assign('book', $dataobj); //book ключ массива $this->arr['book' => $dataobj]
$view->display(__DIR__.'/test.html');

//foreach ($gb->getData() as $item) {
//    echo $item->getMessage() . '<br>';
//}
