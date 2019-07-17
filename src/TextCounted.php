<?php

namespace ElevateDigital\CharcountedFields;

class TextCounted extends FieldCounted
{

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-counted';

    /**
     * Display the field as raw HTML using Vue.
     *
     * @return $this
     */
    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }
}
