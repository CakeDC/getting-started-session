<?php
use Cake\Utility\Text;
echo strip_tags(Text::insert($bodyTemplate, $variables, $options));