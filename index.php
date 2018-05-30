
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

<script>hljs.initHighlightingOnLoad();</script>

<?php

require_once "package/parsedown.php";

$Parsedown = new Parsedown();

$text ="
Contoh Markdown
===============

    <?php print_r(`)
      echo 'test ' . \$var;
    ?>

### ini kode

```
<?php print_r(`)
  public function name(\$a, \$b)
  {
    return \$a + \$b;
  }
?>
```

### ini link
[Disini](http://example.com/ 'Link download')

### ini gambar
![Logo Laravel](blacklaravel.jpeg)
";

$result = $Parsedown->text($text);
echo $result;
