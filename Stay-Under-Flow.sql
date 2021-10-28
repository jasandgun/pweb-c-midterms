/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/07/2020 16.05.08                          */
/*==============================================================*/


drop table if exists ANSWER;

drop table if exists DISCUSS;

drop table if exists QUESTION;

drop table if exists TOPIC;

drop table if exists USER;

/*==============================================================*/
/* Table: ANSWER                                                */
/*==============================================================*/
create table ANSWER
(
   ANSWER_ID            int not null,
   USER_ID              int,
   DISCUSS_ID           int,
   ANSWER_CONTENT       varchar(255),
   ANSWER_AUTHOR        int,
   ANSWER_STATUS        varchar(64),
   ANSWER_CREATE        timestamp,
   ANSWER_UPDATE        timestamp,
   primary key (ANSWER_ID)
);

/*==============================================================*/
/* Table: DISCUSS                                               */
/*==============================================================*/
create table DISCUSS
(
   DISCUSS_ID           int not null,
   USER_ID              int,
   TOPIC_ID             int,
   QUESTION_ID          int,
   DISCUSS_STATUS       varchar(8),
   DISCUSS_CREATE       timestamp,
   primary key (DISCUSS_ID)
);

/*==============================================================*/
/* Table: QUESTION                                              */
/*==============================================================*/
create table QUESTION
(
   QUESTION_ID          int not null,
   DISCUSS_ID           int,
   QUESTION_CONTENT     varchar(1024),
   QUESTION_AUTHOR      int,
   QUESTION_STATUS      varchar(64),
   QUESTION_CREATE      timestamp,
   QUESTION_UPDATE      timestamp,
   primary key (QUESTION_ID)
);

/*==============================================================*/
/* Table: TOPIC                                                 */
/*==============================================================*/
create table TOPIC
(
   TOPIC_ID             int not null,
   USER_ID              int,
   TOPIC_NAME           varchar(64),
   TOPIC_DESCRIPTION    varchar(255),
   primary key (TOPIC_ID)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USER_ID              int not null,
   USER_NAME            varchar(255),
   USER_EMAIL           varchar(255),
   USER_PASSWORD        varchar(255),
   USER_DESCRIPTION     varchar(1024),
   primary key (USER_ID)
);

alter table ANSWER add constraint FK_DITANGGAPI_BEBERAPA foreign key (DISCUSS_ID)
      references DISCUSS (DISCUSS_ID) on delete restrict on update restrict;

alter table ANSWER add constraint FK_MENGUSULKAN foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;

alter table DISCUSS add constraint FK_MENGAJUKAN foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;

alter table DISCUSS add constraint FK_TERDAPAT_SATU foreign key (QUESTION_ID)
      references QUESTION (QUESTION_ID) on delete restrict on update restrict;

alter table DISCUSS add constraint FK_TERDIRI_DARI foreign key (TOPIC_ID)
      references TOPIC (TOPIC_ID) on delete restrict on update restrict;

alter table QUESTION add constraint FK_TERDAPAT_SATU2 foreign key (DISCUSS_ID)
      references DISCUSS (DISCUSS_ID) on delete restrict on update restrict;

alter table TOPIC add constraint FK_MEMILIH foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;

