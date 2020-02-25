create table `user` (
  `id` int not null,
  `username` text not null,
  `role_id` int not null
);

alter table `user` add primary key `user_id_primary`(`id`);

create table `user_role` (
    `id` int not null,
    `rolename` text not null
);

alter table `user_role` add primary key `user_role_id_primary`(`id`);

alter table `user` add constraint `user_role_id_foreign` foreign key (`role_id`) references `user_role` (`id`);
