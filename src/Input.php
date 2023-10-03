<?php

namespace CliqueTI\Html;

class Input {

    public function __construct(
        public string $name,
        public ?string $value   = null,
        public ?array $params   = null,
        public string $type     = 'text'
    ) {}


    public function render() :string {

        $strParams = null;
        if(!empty($this->params)){
            foreach ($this->params as $param => $value){
                $strParams .= "{$param}=\"$value\" ";
            }
        }

        $html  = "<input type=\"{$this->type}\" name=\"{$this->name}\" value=\"{$this->value}\" ".trim($strParams).">";
        return $html;
    }
}
