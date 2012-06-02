<div class="wrap raptor-wrap">
    <div class="raptor-settings-form">
        <h2>WP Raptor Options</h2>

        <form method="post" action="" autocomplete="off">

            <?php $this->saveOptions(); ?>
            <?php settings_fields(self::RAPTOR_SETTINGS); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">
                        <label for="raptor-allow-in-place-editing">Allow in place editing</label>
                    </th>
                    <td>
                        <input id="raptor-allow-in-place-editing" type="checkbox" value="1" name="<?php echo self::INDEX_ALLOW_IN_PLACE_EDITING; ?>" <?php if ($options[self::INDEX_ALLOW_IN_PLACE_EDITING]): ?>checked="checked"<?php endif; ?> />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">
                        <label for="raptor-raptorize-quickpress">Raptorize Quickpress</label>
                    </th>
                    <td>
                        <input id="raptor-raptorize-quickpress" type="checkbox" value="1"name="<?php echo self::INDEX_RAPTORIZE_QUICKPRESS; ?>" <?php if ($options[self::INDEX_RAPTORIZE_QUICKPRESS]): ?>checked="checked"<?php endif; ?> />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">
                        <label for="raptor-admin-post-editing">Raptorize admin post editing</label>
                    </th>
                    <td>
                        <input id="raptor-admin-post-editing" type="checkbox" value="1" name="<?php echo self::INDEX_RAPTORIZE_ADMIN_EDITING; ?>" <?php if ($options[self::INDEX_RAPTORIZE_ADMIN_EDITING]): ?>checked="checked"<?php endif; ?> />
                    </td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>

    <div class="raptor-settings-information">
        <h2>WP Raptor Editor</h2>
        <p>
            This plugin was built with <a href="http://raptor-editor.com/">Raptor Editor</a>, this generation's WYSIWYG editor.
        </p>
    </div>

</div>