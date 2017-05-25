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