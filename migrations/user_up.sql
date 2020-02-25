CREATE TABLE `user`
(
    `id`       int unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(100) NOT NULL,
    `role_id`  int unsigned NOT NULL,
    PRIMARY KEY `user_id_primary` (`id`),
    KEY `username` (`username`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

CREATE TABLE `user_role`
(
    `id`       int unsigned NOT NULL AUTO_INCREMENT,
    `rolename` varchar(100) NOT NULL,
    PRIMARY KEY `user_role_id_primary` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

ALTER TABLE `user`
    ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
