<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCwuEVsy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCwuEVsy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCwuEVsy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCwuEVsy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCwuEVsy\App_KernelDevDebugContainer([
    'container.build_hash' => 'CwuEVsy',
    'container.build_id' => '89137a5b',
    'container.build_time' => 1584022186,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCwuEVsy');
