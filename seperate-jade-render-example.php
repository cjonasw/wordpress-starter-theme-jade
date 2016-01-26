<?php

$hash = array(
  'message' => 'This is a seperate jade render being included using `!= seperate_jade_render_example`'
);

return $compiler->render(get_template_directory() . '/views/seperate-jade-render-example.jade', $hash);

?>
