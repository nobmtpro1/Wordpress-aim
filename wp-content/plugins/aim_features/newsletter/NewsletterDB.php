<?php

namespace aim_features\newsletter;

class NewsletterDB
{
    public function install()
    {
        self::newsletter_table();
    }

    static public function newsletter_table()
    {
        $sql = "CREATE TABLE " . AIM_NEWSLETTER_TABLE . " (
            id int(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR (255) NULL,
            email VARCHAR(255) NULL,
            is_marketing INT(15) default 0,
            PRIMARY KEY (id)
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
