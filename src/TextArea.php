<?php

namespace CliqueTI\Html;

class TextArea {

    public function __construct(
        public string $name,
        public ?string $value   = null,
        public ?array $params   = null
    ) {}


    public function render() :string {

        $strParams = null;
        if(!empty($this->params)){
            foreach ($this->params as $param => $value){
                $strParams .= "{$param}=\"$value\" ";
            }
        }

        $html  = "<textarea name=\"{$this->name}\"".trim($strParams).">{$this->value}</textarea>";
        return $html;
    }
}
