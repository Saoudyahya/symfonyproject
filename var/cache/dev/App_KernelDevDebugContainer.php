<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBOXrm4K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBOXrm4K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBOXrm4K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBOXrm4K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBOXrm4K\App_KernelDevDebugContainer([
    'container.build_hash' => 'BOXrm4K',
    'container.build_id' => '7a4d8255',
    'container.build_time' => 1701282464,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBOXrm4K');
