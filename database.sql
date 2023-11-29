create table users
(
    users_id        bigint auto_increment
        primary key,
    users_username  varchar(255)                           null,
    users_email     varchar(255)                           not null,
    users_password  char(60)                               not null,
    users_role      varchar(255) default 'user'            null,
    users_create_at timestamp    default CURRENT_TIMESTAMP null,
    constraint users_users_id_uindex
        unique (users_id),
    constraint users_users_username_uindex
        unique (users_username)
);

create table posts
(
    posts_id          bigint auto_increment
        primary key,
    posts_title       varchar(255)                        not null,
    posts_description text                                not null,
    posts_user        bigint                              null,
    foreign key (posts_user) references users(users_id) on delete cascade,
    posts_create_at   timestamp default CURRENT_TIMESTAMP null,
    constraint posts_posts_id_uindex
        unique (posts_id)
);
