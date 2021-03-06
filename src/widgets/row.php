<?php

require_once __DIR__ . '/flex.php';
require_once __DIR__ . '/../styles.php';

class Row extends FlexWidget {

    public function createElement() : Element {
        $result = parent::createElement();

        $result->styles[] = new StyleStrategy(
            name: CssTags::class("__row"),
            styles: [ 
                new StyleValue(CssTags::FlexDirection, CssTags::Row),
                new StyleValue(CssTags::safari(CssTags::FlexDirection), CssTags::Row),
            ],
        );

        foreach ($result->styles as &$value) {
            $value->styles = PaintUtil::arrayWhere($value->styles, function ($e) {
                return $e->value != null;
            });
        }

        $result->classes[] = '__row';

        return $result;
    }
}