create database exam;

create table users(userid varbinary(15) primary key, username varchar(25), password varchar(50));

create table C_language_ans(userid varbinary(15), userans varchar(100), examno int(5), examname varchar(25), qno int(5));

create table It_ans like C_language_ans;

create table Gk_ans like C_language_ans;

create table aptitude_ans like c_language_ans;

create table english_ans like c_language_ans;

create table Computer_GK_ans like c_language_ans;


create table C_language_que(question varchar(200), orians varchar(100), qno int(5));

create table It_que like C_Language_que;

create table Gk_que like C_Language_que; 

create table aptitude_que like C_Language_que;

create table english_que like c_language_que; 

create table Computer_GK_que like c_language_que; 


insert into It_que values("1) SMPS stands for ?","A)Switch Mode Power Supply",0);

insert into It_que values("2) Floppy Disks are of 3 1/4 inches in size, and hold","A)1.45Mb",1);

insert into It_que values("3) IDE Stands for?","C)Integrated Drive Electronics",2);

insert into It_que values("4) Plotter is an","B)Output Device",3);

insert into It_que values("5) The space area where you type, edit, and format your document in MS WORD is","A)White Space Area",4);

insert into c_language_que values("1) In C Language, can we write a loop program without using loop statements?","A)Yes",0);

insert into c_language_que values("2) An Instruction Pipeline is called when the following","D)Arthimetic Operations",1);

insert into c_language_que values("3) TCP/IP stands for?","B)Transmission Control Protocol/Internet Protocol",2);

insert into c_language_que values("4) C++ was originally Developed by","C)Bjarne Stroustrup",3);

insert into c_language_que values("5) SQL stands for","A)Structured Query Language",4);

insert into Gk_que values("1) Which city is famous for Cotton Industry in Tamilnadu","C)Coimbatore",0); 

insert into Gk_que values("2) The World Smallest Country is","D)Vatican City",1); 

insert into Gk_que values("3) The famous biography of Akbar was written by","C)Abul Fazal",2); 

insert into Gk_que values("4) Which state possesses the maximum percentage of SC population?","A)Punjab",3);

insert into Gk_que values("5) The share of road transport in total transport of the country is","D)80%",4);

alter table aptitude_que modify question varchar(300);  

insert into aptitude_que values("1) A man takes 5 hours 45 min. in walking to a certain place and riding back. He would have gained 2 hours by riding both ways. The time he would take to walk both ways is :","A)11 hrs 45 min",0); 

insert into aptitude_que values("2) Two trains start from P and Q respectively and travel towards each other at a speed of 50 km/hr and 40 km/hr respectively. By the time they meet, the first train has travelled 100 km more than the second. The distance between P and Q is :","C)900km",1); 

insert into aptitude_que values("3) Two trains starting at the same time from two stations 200 km apart and going in opposite directions cross each other at a distance of 110 km from one of the stations. What is the ratio of their speeds ?","A)11:9",2); 

insert into aptitude_que values("4) A and B walk around a circular track. They start at 9 a.m. from the same point in the opposite directions. A and B walk at a speed of 2 rounds per hour and 3 rounds per hour respectively. How many times shall they cross each other before 9.30 a.m.?","B)7",3);

insert into aptitude_que values("5) Two guns were fired from the same place at an interval of 10 minutes and 30 seconds, but a person in the train approaching the place hears the second shot 10 minutes after the first. The speed of the trian (in km/hr), supposing that speed travels at 330 metres per second, is:","D)59.4",4);

insert into english_que values("1) The insects are a great nuisance ------- us.","A)for",0); 

insert into english_que values("2) He had to repent -------- what he had done.","C)for",1); 

insert into english_que values("3) The mother was anxious -------- the safety of her son.","B)about",2); 

insert into english_que values("4) The reward was not commensurate ---------- the work done by us.","C)with",3);

insert into english_que values("5) My cousin has invested a lot of money ---------- farming.","A)in",4);  

insert into Computer_GK_que values("1) BCD stands for","B)binary coded decimal",0); 

insert into Computer_GK_que values("2) Punched cards were first introduced by","C)Hollerith",1); 

insert into Computer_GK_que values("3) One byte is equivalent to","A)8 bit",2); 

insert into Computer_GK_que values("4) The number of bits in a word is known as","B)buffer",3);

insert into Computer_GK_que values("5) To move forward through the tabs","C)CTRL+TAB",4);

insert into aptitude_que values("1) ","",0); 

insert into aptitude_que values("2) ","",1); 

insert into aptitude_que values("3) ","",2); 

insert into aptitude_que values("4) ","",3);

insert into aptitude_que values("5) ","",4);

create table markslist (starttime time, endtime time, examdate date, avg float(5), userid varbinary(15), examno int(5), usermarks int(5), totalmarks int(5), examname varchar(25));

create table corrections(userid varbinary(15), examname varchar(25), examno int(5), qno int(5), result enum('true','false'));

create table themes(userid varbinary(15),themename varchar(10) default "bgpat001");

insert into themes values("52d06896ba6e4","bgpat001");
// new c_language queries

mysql> alter table c_language_que add (ans1 varchar(100),ans2 varchar(100), ans3 varchar(100),
ans4 varchar(100));
Query OK, 5 rows affected (0.17 sec)
Records: 5  Duplicates: 0  Warnings: 0

mysql> desc c_language_que;
+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| question | varchar(200) | YES  |     | NULL    |       |
| orians   | varchar(100) | YES  |     | NULL    |       |
| qno      | int(5)       | YES  | UNI | NULL    |       |
| ans1     | varchar(100) | YES  |     | NULL    |       |
| ans2     | varchar(100) | YES  |     | NULL    |       |
| ans3     | varchar(100) | YES  |     | NULL    |       |
| ans4     | varchar(100) | YES  |     | NULL    |       |
+----------+--------------+------+-----+---------+-------+
7 rows in set (0.00 sec)

mysql> select * from c_language_que;
+------------------------------------------------------------------------------+---------------
------------------------------------+------+------+------+------+------+
| question                                                                     | orians
                                    | qno  | ans1 | ans2 | ans3 | ans4 |
+------------------------------------------------------------------------------+---------------
------------------------------------+------+------+------+------+------+
| 1) In C Language, can we write a loop program without using loop statements? | A)Yes
                                    |    0 | NULL | NULL | NULL | NULL |
| 2) An Instruction Pipeline is called when the following                      | D)Arthimetic O
perations                           |    1 | NULL | NULL | NULL | NULL |
| 3) TCP/IP stands for?                                                        | B)Transmission
 Control Protocol/Internet Protocol |    2 | NULL | NULL | NULL | NULL |
| 4) C++ was originally Developed by                                           | C)Bjarne Strou
strup                               |    3 | NULL | NULL | NULL | NULL |
| 5) SQL stands for                                                            | A)Structured Q
uery Language                       |    4 | NULL | NULL | NULL | NULL |
+------------------------------------------------------------------------------+---------------
------------------------------------+------+------+------+------+------+
5 rows in set (0.00 sec)

mysql> delete from c_language_que;
Query OK, 5 rows affected (0.02 sec)

mysql> insert into c_language_que values("1) In C Language, can we write a loop program without
 using loop statements?", "A)Yes" , 0 ,"A)Yes","B)No","C)May be","D)Error");
Query OK, 1 row affected (0.04 sec)

mysql> insert into c_language_que values("2) An Instruction Pipeline is called when the followi
ng", "D)Arthimetic Operations" , 1 ,"A)Register Transfer","B)Branch","C)Stack Operations","D)Ar
thimetic Operations");
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("3) TCP/IP stands for?", "B)Transmission Control Proto
col/Internet Protocol" , 2 ,"A)Transition Control Protocol/Internet Protocol","B)Transmission C
ontrol Protocol/Internet Protocol","C)Transfer Control Protocol/Internet Protocol","D)None of t
he above");
Query OK, 1 row affected (0.03 sec)

mysql> insert into c_language_que values("4) C++ was originally Developed by", "C)Bjarne Strous
trup",3,"A)Nicolas Writh","B)Donaled Knuth","C)Bjarne Stroustrup","D)Ken Thompson");
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("5) SQL stands for", "A)Structured Query Language",4,"
A)Structured Query Language","B)Standarad Query Language",C)Simple Query Language"","D)None of
these");
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to
your MySQL server version for the right syntax to use near 'Simple Query Language"","D)None of
these")' at line 1
mysql> insert into c_language_que values("5) SQL stands for", "A)Structured Query Language",4,"
A)Structured Query Language","B)Standarad Query Language","C)Simple Query Language","D)None of
these");
Query OK, 1 row affected (0.04 sec)

mysql> insert into c_language_que values("6) A stack is also known as ", "A)LIFO",5,"A)LIFO","B
)FIFO","c)FILO","D)None of these");
Query OK, 1 row affected (0.03 sec)

mysql> insert into c_language_que values("7) Arrays can be initialized provided they are","D)bo
th B and C",7,"A)Automatic","B)External","C)Static","D)both B and C");
Query OK, 1 row affected (0.03 sec)

mysql> insert into c_language_que values("8) Items can be removed from both ends of a","C)Deque
ue",8,"A)","B)","C)","");
Query OK, 1 row affected (0.03 sec)

mysql> delete from c_language_que where qno ==7;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to
your MySQL server version for the right syntax to use near '==7' at line 1
mysql> delete from c_language_que where qno =7;
Query OK, 1 row affected (0.02 sec)

mysql> delete from c_language_que where qno =8;
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("7) Arrays can be initialized provided they are","D)bo
th B and C",6,"A)Automatic","B)External","C)Static","D)both B and C");
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("8) Items can be removed from both ends of a","C)Deque
ue",8,"A)Stack","B)Queue","C)Dequeue","D)None of the above");
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("9) Any C program","A)Must contain atleast one functio
n",9,"A)Must contain atleast one function","B)Need not contain any function","C)Needs input dat
a ","D)None of the above");
Query OK, 1 row affected (0.02 sec)

mysql> delete from c_language_que where qno =8;
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("8) Items can be removed from both ends of a","C)Deque
ue",7,"A)Stack","B)Queue","C)Dequeue","D)None of the above");
Query OK, 1 row affected (0.01 sec)

mysql> delete from c_language_que where qno =9;
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("9) Any C program","A)Must contain atleast one functio
n",8,"A)Must contain atleast one function","B)Need not contain any function","C)Needs input dat
a ","D)None of the above");
Query OK, 1 row affected (0.02 sec)

mysql> insert into c_language_que values("10) In a for loop, if the condition is missing then "
,"B)It is assumed to be present abd taken to be true",9,"A)Must contain atleast one function","
B)It is assumed to be present abd taken to be true","C)It results in Syntax error","D)Execution
 will be terminated abruptly");
Query OK, 1 row affected (0.03 sec)