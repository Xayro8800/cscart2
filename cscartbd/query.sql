CREATE TABLE IF NOT EXISTS cscart_collections (
    collection_id INT(11) unsigned NOT NULL auto_increment,
    position INT(11) unsigned NOT NULL default '0',
    status varchar(1) NOT NULL default 'A',
    timestamp INT(11) unsigned NOT NULL default '0',
    upd_timestamp INT(11) unsigned NOT NULL default '0',
    user_id INT (11) unsigned NOT NULL default '0',
    KEY (user_id),
    PRIMARY KEY (collection_id)
) ENGINE=InnoDB default CHARSET=utf8
CREATE TABLE IF NOT EXISTS cscart_collection_descriptions (
    collection_id INT(11) unsigned NOT NULL default '0',
    lang_code char(2) NOT NULL default '',
    colection varchar(255) NOT NULL default '',
    description text null,
    PRIMARY KEY (collection_id, lang_code)
) ENGINE=InnoDB default CHARSET=utf8
CREATE TABLE IF NOT EXISTS cscart_collection_links (
    collection_id INT(11) unsigned NOT NULL default '0',
    product_id INT(11) unsigned NOT NULL default '0',
    KEY (product_id),
    KEY (collection_id),
    PRIMARY KEY (collection_id, product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8