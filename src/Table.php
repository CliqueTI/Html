<?php

namespace CliqueTI\Html;

class Table {

    private string $htmlOpen;
    private int $numberColumns;
    private int $current = 1;

    public function __construct(string $id, ?array $params) {
        if(!empty($params)){
            foreach ($params as $param => $value){
                $strParams = ($strParams??"") . "{$param}=\"$value\" ";
            }
        }
        $this->htmlOpen = "<table id=\"{$id}\" {$strParams}>";
    }

    public function tHead(array $theads, ?array $params=null) {
        $this->numberColumns = count($theads);

        if(!empty($params)){
            foreach ($params as $param => $value){
                $strParams = ($strParams??"") . "{$param}=\"$value\" ";
            }
        }

        echo $this->htmlOpen."\n";
        echo "<thead>\n";
        echo "<tr>\n";
        foreach ($theads as $thead){
            echo "    <th>$thead</th>\n";
        }
        echo "</tr>\n";
        echo "</thead>\n";
        echo "<tbody>\n";
    }

    public function tContent($line) {
        if($this->current == 1 ){
            echo "    <tr>\n";
        }
        if($this->current < $this->numberColumns){
            echo "        <td>{$line}</td>\n";
        }
        if($this->current == $this->numberColumns){
            echo "        <td>{$line}</td>\n";
            echo "    </tr>\n";
            $this->current = 0;
        }
        $this->current++;
    }

    public function tClose() {
        echo "</tbody>\n";
        echo "</table>\n";
    }

}
