<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2kaF6KM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2kaF6KM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2kaF6KM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2kaF6KM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2kaF6KM\App_KernelDevDebugContainer([
    'container.build_hash' => '2kaF6KM',
    'container.build_id' => '43247f36',
    'container.build_time' => 1602362957,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2kaF6KM');
