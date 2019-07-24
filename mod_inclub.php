<?php
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_rw/helpers/rw.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_inclub', $params->get('layout', 'default'));
