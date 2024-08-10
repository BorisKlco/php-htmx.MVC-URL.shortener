<?php

namespace App;

class View
{
    public function __construct(
        protected string $view,
        protected array $params = []
    ) {}

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render(): string
    {
        ob_start();
        $view = $this->view;
        $data = $this->params ?: [
            'title' => 'Default title'
        ];
        include_once VIEW_PATH . 'template.php';
        return (string) ob_get_clean();
    }

    public function __toString()
    {
        return $this->render();
    }
}
