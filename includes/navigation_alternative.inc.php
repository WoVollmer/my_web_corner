<?php
$pages = [
  [
	'name' => 'index',
    'linktext' => 'Startseite',
  ],
  [
    'name' => 'corona',
    'linktext' => 'Corona Sites',
  ],
    [
    'name' => 'php_test',
    'linktext' => 'PHP Test',
  ],
];

foreach ($pages as $index => $page) :
  $listitem = "<li";
  if ($_SERVER["SCRIPT_NAME"] == $page["name"] . ".html" ) :
    $listitem .= " aria-current='page'><a>";
  else :
    $listitem .= "><a href='" . $page["name"] . ".html'>";
  endif;
  $listitem .= $page["linktext"] . "</a></li>";
  $pages[$index]["listitem"] = $listitem;
endforeach; ?>

  <nav>
    <ul>
    <?php foreach ($pages as $page) : echo $page["listitem"]; endforeach; ?>
    </ul>
  </nav>	


