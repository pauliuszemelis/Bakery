<?php


namespace app\controller;


class TemplateEngineController
{
    /**
     * @var string
     */
    private $vieName;

    private $values = [];

    public function __construct(string $vieName)
    {

        $this->vieName = "app/view/tpl/$vieName.tpl";
    }

    public function set (string $key, string $value) {
        $this->values[$key] = $value;
    }

    public function echoOutput()
    {
        //check if file exists
        if(!file_exists($this->vieName)){
           die("Error loading file ($this->viewName");
        }
        //read file
        $output = file_get_contents($this->vieName);

        //replace all tags with values

        foreach ($this->values as $key => $value) {
            $tagToReplace = "[@$key]";
            $output = str_replace($tagToReplace, $value, $output);

        }
        //echo result
        echo $output;
    }


}