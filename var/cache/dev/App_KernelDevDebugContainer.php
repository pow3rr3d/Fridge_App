<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBaFOuAJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBaFOuAJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBaFOuAJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBaFOuAJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBaFOuAJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'BaFOuAJ',
    'container.build_id' => 'e522c305',
    'container.build_time' => 1605389463,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBaFOuAJ');
