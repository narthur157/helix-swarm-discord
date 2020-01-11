<?php
\Zend\Loader\AutoloaderFactory::factory(
    array(
        'Zend\Loader\StandardAutoloader' => array(
            'namespaces' => array(
                'Discord'      => BASE_PATH . '/module/Discord/src',
            )
        )
    )
);
return [
    'Discord'
];