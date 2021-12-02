create table users(
    id_user int auto_increment not null,
    user varchar(25) not null unique,
    password varchar(511) not null,
    user_type int not null,
    validation int,
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
    info varchar(300) not null,
    primary key(id_desayuno)
);
create table colacion1(
    id_colacion1 int auto_increment not null,
    info varchar(300) not null,
    primary key(id_colacion1)
);
create table colacion2(
    id_colacion2 int auto_increment not null,
    info varchar(300) not null,
    primary key(id_colacion2)
);
create table comidas(
    id_comida int auto_increment not null,
    info varchar(300) not null,
    primary key(id_comida)
);
create table cenas(
    id_cena int auto_increment not null,
    info varchar(300) not null,
    primary key(id_cena)
);
create table dias(
    id_dia int auto_increment not null,
    dia varchar(25) not null,
    primary key(id_dia)
);
create table menu_dias(
    id_menu_dia int auto_increment not null,
    id_dia int not null,
    id_desayuno int not null,
    id_colacion1 int not null,
    id_colacion2 int not null,
    id_cena int not null,
    id_comida int not null,
    id_menu int not null,
    primary key(id_menu_dia),
    foreign key(id_dia) references dias(id_dia) on update cascade on delete restrict,
    foreign key(id_desayuno) references desayunos(id_desayuno) on update cascade on delete restrict,
    foreign key(id_colacion1) references colacion1(id_colacion1) on update cascade on delete restrict,
    foreign key(id_colacion2) references colacion2(id_colacion2) on update cascade on delete restrict,
    foreign key(id_comida) references comidas(id_comida) on update cascade on delete restrict,
    foreign key(id_cena) references cenas(id_cena) on update cascade on delete restrict,
    foreign key(id_menu) references menu_plans(id_menu)on update cascade on delete restrict
);

create view view_menu_dias AS 
SELECT menu_dias.id_menu_dia AS id_menu_dia,
dias.dia AS dia,
desayunos.info AS desayuno,
colacion1.info AS colacion1,
comidas.info AS comida,
colacion2.info AS colacion2,
cenas.info AS cena,
users.id_user AS id_user,
menu_plans.id_menu AS id_menu
FROM menu_dias LEFT JOIN desayunos ON menu_dias.id_desayuno = desayunos.id_desayuno
LEFT JOIN dias ON menu_dias.id_dia = dias.id_dia
LEFT JOIN colacion1 ON menu_dias.id_colacion1 = colacion1.id_colacion1
LEFT JOIN comidas ON menu_dias.id_comida = comidas.id_comida
LEFT JOIN colacion2 ON menu_dias.id_colacion2 = colacion2.id_colacion2
LEFT JOIN cenas ON menu_dias.id_cena = cenas.id_cena
LEFT JOIN menu_plans ON menu_dias.id_menu = menu_plans.id_menu
LEFT JOIN users ON menu_plans.id_user = users.id_user;

create table reminders(
    id_reminder int auto_increment not null,
    reminder_info varchar(100) not null,
    id_user int not null,
    primary key(id_reminder),
    foreign key(id_user) references users(id_user) on update cascade on delete restrict
);
