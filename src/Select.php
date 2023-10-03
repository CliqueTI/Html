<?php

namespace CliqueTI\Html;

class Select {

    public function __construct(
       public string $name,
       public ?array $data      = null,
       public ?string $selected = null,
       public ?array $params    = null,
       public ?string $default  = null
    ) {}


    public function render(): string {

        //Params
        $strParams = null;
        if(!empty($this->params)){
            foreach ($this->params as $param => $value){
                $strParams .= "{$param}=\"$value\" ";
            }
        }

        //Options
        $strOptions = null;
        if(!empty($this->default)){
            $this->data = array_merge(['0'=>['id'=>null,'field'=>$this->default]],($this->data??[]));
        }

        //Flat or Multidimensional
        if(!empty($this->data)){
            if (count($this->data) == count($this->data, COUNT_RECURSIVE)) {
                foreach ($this->data as $value => $label){
                    $strSelected = ($value == $this->selected ? "selected" : "");
                    $strOptions .= "    <option value=\"{$value}\" {$strSelected}>{$label}</option>\n";
                }
            } else {
                foreach ($this->data as $key => $item){
                    if(is_array($item)){
                        $strSelected = (reset($item) == $this->selected ? "selected" : "");
                        $strOptions .= "    <option value=\"".reset($item)."\" {$strSelected}>".end($item)."</option>\n";
                    } else {
                        $strSelected = ($key == $this->selected ? "selected" : "");
                        $strOptions .= "    <option value=\"{$key}\" {$strSelected}>{$item}</option>\n";
                    }
                }
            }
        }
        //OutPut
        $html  = "<select name=\"{$this->name}\" ".trim($strParams).">\n";
        $html .= $strOptions;
        $html .= "</select>";
        return $html;
    }

}
