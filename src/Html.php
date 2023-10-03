<?php

namespace CliqueTI\Html;

class Html {

    /**
     * Retorna HTML do Label
     * @param string $label
     * @param array|null $params
     * @param string|null $for
     * @return string
     */
    public static function label(
        string $label,
        ?array $params = null,
        ?string $for = null
    ) :string {
        return (new Label(
            $label,
            $params,
            $for
        ))->render();
    }

    /**
     * Retorna HTML do Label
     * @param string $label
     * @param array|null $params
     * @param string|null $for
     * @return string
     */
    public static function labelFile(
        string $label,
        ?array $params = null,
        ?string $for = null
    ) :string {
        return (new LabelFile(
            $label,
            $params,
            $for
        ))->render();
    }

    /**
     * Retorna HTML do Botão
     * @param string $label
     * @param string $type
     * @param array|null $params
     * @return string
     */
    public static function button(
        string $label,
        string $type     = "button",
        ?array $params   = null
    ) :string {
        return (new Button(
            $label,
            $type,
            $params
        ))->render();
    }

    /**
     * Retorna HTML do Select
     * @param string $name
     * @param array|null $data
     * @param string|null $selected
     * @param array|null $params
     * @param string|null $default
     * @return string
     */
    public static function select(
        string $name,
        ?array $data      = null,
        ?string $selected = null,
        ?array $params    = null,
        ?string $default  = null
    ) :string {
        return (new Select(
            $name,
            $data,
            $selected,
            $params,
            $default
        ))->render();
    }

    /**
     * Retorna HTML do Input
     * @param string $name
     * @param string|null $value
     * @param array|null $params
     * @param string $type
     * @return string
     */
    public static function input(
        string $name,
        ?string $value   = null,
        ?array $params  = null,
        string $type     = 'text'
    ) :string {
        return (new Input(
            $name,
            $value,
            $params,
            $type,
        ))->render();
    }

    /**
     * Retorna HTML do Textarea
     * @param string $name
     * @param string|null $value
     * @param array|null $params
     * @return string
     */
    public static function textarea(
        string $name,
        ?string $value   = null,
        ?array $params  = null
    ) :string {
        return (new TextArea(
            $name,
            $value,
            $params
        ))->render();
    }

    /**
     * Cria HTML de uma Tabela
     * @param string $id
     * @param array|null $params
     * @return Table
     */
    public static function table(
        string $id,
        ?array $params = null
    ) {
        return (new Table($id, $params));
    }

}
