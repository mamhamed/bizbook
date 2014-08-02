<?php
$instructions = elgg_echo('help:admin:instruct');

$categories = help_get_categories();

$category_input = elgg_view('input/dropdown', array('name'=>'category', 'option_vallues'=>$categories));

$question_input = elgg_view('input/text',array('name'=>'question'));

$answer_input = elgg_view('input/longtext', array(
    'name' => 'answer',
));

$access_input = elgg_view('input/access', array('name'=>'access_id'));

$button = elgg_view('input/submit', array('value'=>elgg_echo('save')));

echo <<< HTML
<div>$instructions</div>
<div>
<label>Category</label><br />
$category_input
</div>
<div>
<label>Question</label><br />
$question_input
/div>
<div>
<label>Answer</label>
$answer_input
</div>
<div>
<label>Access</label><br />
$access_input
</div>
<div class="elgg-foot">
$button
</div>
HTML;

?>

