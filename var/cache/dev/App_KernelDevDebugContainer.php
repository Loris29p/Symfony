<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH8cLa9c\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH8cLa9c/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH8cLa9c.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH8cLa9c\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH8cLa9c\App_KernelDevDebugContainer([
    'container.build_hash' => 'H8cLa9c',
    'container.build_id' => 'b50c7564',
    'container.build_time' => 1650358245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH8cLa9c');
