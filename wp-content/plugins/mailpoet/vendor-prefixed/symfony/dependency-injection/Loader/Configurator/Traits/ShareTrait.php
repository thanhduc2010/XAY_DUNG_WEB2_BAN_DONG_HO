<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator\Traits; if (!defined('ABSPATH')) exit; trait ShareTrait { public final function share(bool $shared = \true) : self { $this->definition->setShared($shared); return $this; } } 