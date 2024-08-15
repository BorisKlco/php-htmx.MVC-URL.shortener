<?php

namespace App;

class View
{
    public function __construct(
        protected string $view,
        protected array $params,
        protected bool $template
    ) {}

    public static function make(string $view, array $params = [], bool $template = true): static
    {
        return new static($view, $params, $template);
    }

    public function render(): string
    {
        ob_start();
        $view = $this->view;
        $data = $this->params ?: [
            'title' => 'Default title'
        ];
        if ($this->template) {
            include_once VIEW_PATH . 'template.php';
        } else {
            include_once VIEW_PATH . "$view.php";
        }
        return (string) ob_get_clean();
    }

    public function __toString()
    {
        return $this->render();
    }
}
