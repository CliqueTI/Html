<?php

namespace CliqueTI\Html;

class Label {

    public function __construct(
        public string $label,
        public ?array $params = null,
        public ?string $for = null
    ) {}


    public function render() :string {

        $strParams = null;
        if(!empty($this->params)){
            foreach ($this->params as $param => $value){
                $strParams .= "{$param}=\"$value\" ";
            }
        }

        $html  = "<label for=\"{$this->for}\" ".trim($strParams).">{$this->label}</label>\n";
        return $html;
    }
}
