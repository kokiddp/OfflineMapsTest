<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.elk-lab.com
 * @since      1.0.0
 *
 * @package    Offline_Maps_Test
 * @subpackage Offline_Maps_Test/admin/partials
 */
?>

<div class="wrap">
    <h1><?= __('Offline Maps Test', 'offline-maps-test') ?></h1>

    <form method="post" action="options.php">
        <?php settings_fields('offline-maps-test_options'); ?>
        <?php do_settings_sections('offline-maps-test'); ?>
        <?php submit_button(); ?>
    </form>
</div>
