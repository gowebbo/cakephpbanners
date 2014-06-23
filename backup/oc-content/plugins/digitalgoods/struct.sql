CREATE TABLE /*TABLE_PREFIX*/t_item_dg_files (
    pk_i_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fk_i_item_id INT UNSIGNED NOT NULL,
    s_name VARCHAR(250) NOT NULL,
    s_code VARCHAR(14) NOT NULL,
    i_downloads INT UNSIGNED NOT NULL DEFAULT 0,

        PRIMARY KEY (pk_i_id),
        FOREIGN KEY (fk_i_item_id) REFERENCES /*TABLE_PREFIX*/t_item (pk_i_id)
) ENGINE=InnoDB DEFAULT CHARACTER SET 'UTF8' COLLATE 'UTF8_GENERAL_CI';