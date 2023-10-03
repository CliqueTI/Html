<?php

namespace CliqueTI\Html;

class Button {

    public function __construct(
        public string $label,
        public string $type     = "button",
        public ?array $params   = null
    ) {}


    public function render() :string {

        $strParams = null;
        if(!empty($this->params)){
            foreach ($this->params as $param => $value){
                $strParams .= "{$param}=\"$value\" ";
            }
        }

        $html  = "<button type=\"{$this->type}\" {$strParams}>{$this->label}</button>";
        return $html;
    }
}
