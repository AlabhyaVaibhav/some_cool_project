<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9V0WSmc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9V0WSmc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9V0WSmc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9V0WSmc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9V0WSmc\App_KernelDevDebugContainer([
    'container.build_hash' => '9V0WSmc',
    'container.build_id' => '788a0ecb',
    'container.build_time' => 1600718294,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9V0WSmc');
