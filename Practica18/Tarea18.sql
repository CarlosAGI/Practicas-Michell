create table eventos(
    idEvento int primary key auto_increment,
    nombreEvento varchar(25),
    descripcionEvento varchar(300),
    idParticipantes int
    
)engine=innodb character set=utf8 collate=utf8_spanish_ci;  
