<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8HiHRnG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8HiHRnG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8HiHRnG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8HiHRnG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8HiHRnG\App_KernelDevDebugContainer([
    'container.build_hash' => '8HiHRnG',
    'container.build_id' => '23801ef6',
    'container.build_time' => 1677322178,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8HiHRnG');