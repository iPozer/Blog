<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZmeliwq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZmeliwq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZmeliwq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZmeliwq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZmeliwq\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Zmeliwq',
    'container.build_id' => '777cae9e',
    'container.build_time' => 1524083820,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerZmeliwq');
