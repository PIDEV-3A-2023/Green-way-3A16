<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMlWfkRj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMlWfkRj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMlWfkRj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMlWfkRj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMlWfkRj\App_KernelDevDebugContainer([
    'container.build_hash' => 'MlWfkRj',
    'container.build_id' => '5eac4daf',
    'container.build_time' => 1682893482,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMlWfkRj');
