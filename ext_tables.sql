# Make backend layout fields longer
CREATE TABLE pages
(
    backend_layout varchar(200) not null default '',
    backend_layout_next_level varchar(200) not null default ''
);
