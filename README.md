# Gidra PHP

> Support only chromium!

## Examples

Simple page

###### _MyPage.php_

```php
<?php

require_once(__DIR__ . "/../frameworks/tree-php/Includes/All.php");

class MyPage extends Component
{
  // like main
  function Build() : GeneratedObject {
    return (new Document)
    ->SetTitle("My page")
    ->SetChild(
      // align childs like column
      (new Column)
      // add childs
      ->AddChilds([
        (new Text)
        // add css
        // framework have full css support
        ->AddThemeParameter(FontSize /*parameter name*/, Px(20)/*value. Px(20) equals to 20px*/)
        ->SetText("My title"),
        (new Text)
        ->SetText("My text.")
      ])
    );
  }
}

// generate and send out page
GeneratedObject::RunOf(new MyPage);

```
###### _Result_

![](/.assets/my_page_example.png)

#

License: [GNU General Public License v3.0](LICENSE)

© 2020
