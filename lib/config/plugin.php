<?php
return array(
    // обязательные параметры
    'name' => 'short descriptions',
    'description' => 'short descriptions for blog\'s single',
    'version' => '1.0',
    // соответствие событие => обработчик (название метода в классе плагина),
    // если плагину нужно обрабатывать какие-то события
    'handlers' => array(
      'backend_post_edit' => 'addShortDescriptionsHtml',
      'backend_assets' => 'setDescriptionsAssets',
      'post_save' => 'savePostShortDescriptions',
      'post_publish' => 'savePostShortDescriptions',
      //...
    ),    
);