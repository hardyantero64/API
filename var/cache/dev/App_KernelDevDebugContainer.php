<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSQJLBwL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSQJLBwL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSQJLBwL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSQJLBwL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSQJLBwL\App_KernelDevDebugContainer([
    'container.build_hash' => 'SQJLBwL',
    'container.build_id' => '1ff41c23',
    'container.build_time' => 1643691871,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSQJLBwL');