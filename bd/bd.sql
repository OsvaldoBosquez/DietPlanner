create table users(
    id_user int auto_increment not null,
    user varchar(25) not null unique,
    password varchar(511) not null,
    user_type int not null,
    primary key(id_user)
);

create table menu_plans(
    id_menu int auto_increment not null,
    name_menu varchar(50) not null,
    id_user int not null,
    primary key(id_menu),
    foreign key(id_user) references users(id_user) on update cascade on delete restrict
);
create table desayunos(
    id_desayuno int auto_increment not null,
    info varchar(150) not null,
    primary key(id_desayuno)
);
create table colacion1(
    id_colacion1 int auto_increment not null,
    info varchar(150) not null,
    primary key(id_colacion1)
);
create table colacion2(
    id_colacion2 int auto_increment not null,
    info varchar(150) not null,
    primary key(id_colacion2)
);
create table comidas(
    id_comida int auto_increment not null,
    info varchar(150) not null,
    primary key(id_comida)
);
create table cenas(
    id_cena int auto_increment not null,
    info varchar(150) not null,
    primary key(id_cena)
);
create table dias(
    id_dia int auto_increment not null,
    dia varchar(25) not null,
    id_desayuno int not null,
    id_colacion1 int not null,
    id_colacion2 int not null,
    id_cena int not null,
    id_comida int not null,
    primary key(id_dia),
    foreign key(id_desayuno) references desayunos(id_desayuno) on update cascade on delete restrict,
    foreign key(id_colacion1) references colacion1(id_colacion1) on update cascade on delete restrict,
    foreign key(id_colacion2) references colacion2(id_colacion2) on update cascade on delete restrict,
    foreign key(id_comida) references comidas(id_comida) on update cascade on delete restrict,
    foreign key(id_cena) references cenas(id_cena) on update cascade on delete restrict
);

create table reminders(
    id_reminder int auto_increment not null,
    reminder_info varchar(100) not null,
    id_user int not null,
    primary key(id_reminder),
    foreign key(id_user) references users(id_user) on update cascade on delete restrict
);
