drop database dvr;
create database dvr;
\c dvr;

/*drop table inventory;
drop table film; 
drop table category;
drop table film_category;
drop table actor;
drop table played_by;
drop table branch;
drop table branch_location;
drop table staff;
drop table customer;
drop table service;*/

create table inventory(inventory_id integer primary key,name varchar(100) not null,rent integer,rent_date varchar(10),return_date varchar(10) CHECK(return_date >= rent_date),last_update varchar(20),available varchar(50),arr_date varchar(10),buy_amt integer);

create table film
(film_id integer primary key,inventory_id integer,title varchar(100),description varchar(200),rating integer check(rating <= 5),last_update varchar(10),language varchar(15),foreign key(inventory_id)references inventory(inventory_id) on delete cascade);

create table category (category_id integer primary key,name varchar(30));

create table film_category (film_id integer,category_id integer,primary key(film_id,category_id),foreign key(film_id)references film(film_id) on delete cascade,foreign key(category_id)references category(category_id)on delete cascade); 

create table actor (actor_id varchar(50) primary key,name varchar(100));

create table played_by(actor_id varchar(50) ,film_id integer,primary key(actor_id,film_id),foreign key(film_id) references film(film_id)on delete cascade,foreign key(actor_id) references actor(actor_id)on delete cascade);

create table                                                                            
branch (branch_id integer primary key,inventory_id integer,name varchar(100),foreign key(inventory_id) references inventory(inventory_id)on delete cascade);

create table                                                                            
branch_location  (location varchar(50),branch_id integer,primary key(location,branch_id),foreign key(branch_id) references branch(branch_id)on delete cascade);

create table staff(staff_id integer primary key,branch_id integer,username varchar(50),password varchar(20) ,name varchar(100),address varchar(200),ph_no varchar(15),city_name varchar(100),email varchar(50),salary integer,foreign key(branch_id) references branch(branch_id)on delete cascade);

create table customer (customer_id integer primary key,fullname varchar(100),address varchar(200),email varchar(30));

create table customerb(customer_id integer,inventory_id integer,primary key(customer_id,inventory_id),foreign key(inventory_id) references inventory(inventory_id)on delete cascade,foreign key (customer_id) references customer(customer_id)on delete cascade);

create table service (customer_id integer,branch_id integer,primary key(customer_id,branch_id),foreign key(branch_id) references branch(branch_id)on delete cascade,foreign key(customer_id) references customer(customer_id)on delete cascade);  



insert into inventory values(001,'mungarumale',100,'23-03-17','3-04-17','20-03-17','no','15-02-17',1500);
insert into inventory values(002,'batman',150,'','','21-03-17','yes','16-02-17',1200);
insert into inventory values(003,'bahubali',100,'','','22-03-17','yes','17-02-17',1100);
insert into inventory values(004,'rajakumar',100,'25-03-17','6-04-17','23-03-17','no','18-02-17',1600);
insert into inventory values(005,'deadpool',150,'','','24-03-17','yes','19-02-17',1700);
insert into inventory values(007,'rajarani',100,'','','24-03-17','yes','19-02-17',1560);
insert into inventory values(008,'ironman',150,'22-03-17','27-03-17','24-03-17','no','19-02-17',1300);
insert into inventory values(009,'sherlock',150,'','','24-03-17','yes','19-02-17',1700);
insert into inventory values(010,'mr.ramachari',100,'','','24-03-17','yes','19-02-17',1300);
insert into inventory values(011,'katamarayudu',100,'','','24-03-17','yes','19-02-17',1800);
insert into inventory values(006,'dangal',200,'','','14-03-17','yes','18-02-17',1600);
insert into inventory values(0012,'dangal',200,'25-03-2017','23-03-2017','14-03-17','no','18-02-17',1600);

insert into film values(101,001,'mungarumale','good',3,'20-03-17','kannada');
insert into film values(102,002,'batman','aveage',4,'21-03-17','english');
insert into film values(103,003,'bahubali','excellent',5,'22-03-17','telagu');
insert into film values(104,004,'rajkumar','average',4,'23-03-17','kannada');
insert into film values(105,005,'deadpool','good',3,'24-03-17','english');
insert into film values(106,006,'rajarani','excellent',4,'26-03-17','telugu');
insert into film values(107,007,'ironman','good',3,'21-03-17','english');
insert into film values(108,008,'sherlock','excellent',4,'11-03-17','english');
insert into film values(109,009,'ramachari','good',3,'25-03-17','kannada');
insert into film values(110,010,'katamarayudu','good',2,'29-03-17','telugu');
insert into film values(111,011,'dangal','excellent',4,'21-03-17','hindi');





insert into category values(1001,'comedy');
insert into category values(1002,'action');
insert into category values(1003,'love');
insert into category values(1004,'comic');
insert into category values(1005,'comedy');
insert into category values(1006,'love');
insert into category values(1007,'action');
insert into category values(1008,'entertainment');
insert into category values(1009,'love');
insert into category values(1010,'entertainment');
insert into category values(1011,'action');

insert into film_category values(101,1001);
insert into film_category values(102,1002);
insert into film_category values(103,1003);
insert into film_category values(104,1004);
insert into film_category values(105,1005);
insert into film_category values(106,1006);
insert into film_category values(107,1007);
insert into film_category values(108,1008);
insert into film_category values(109,1009);
insert into film_category values(110,1010);
insert into film_category values(111,1011);

insert into actor values('gan','ganesh');
insert into actor values('crt','christian bail');
insert into actor values('prb','prabhas');
insert into actor values('pnt','punith');
insert into actor values('jck','john wick');
insert into actor values('ary','arya');
insert into actor values('rbrow','robert brownie');
insert into actor values('ben','benedick');
insert into actor values('ysh','yash');
insert into actor values('pspk','pawan kalyan');
insert into actor values('ameer','ameer khan');

insert into played_by values('gan',101);
insert into played_by values('crt',102);
insert into played_by values('prb',103);
insert into played_by values('pnt',104);
insert into played_by values('jck',105);
insert into played_by values('ary',106);
insert into played_by values('rbrow',107);
insert into played_by values('ben',108);
insert into played_by values('ysh',109);
insert into played_by values('pspk',110);
insert into played_by values('ameer',111);


insert into branch values(1234,001,'likhith dvd zone');
insert into branch values(1235,002,'mallappa dvd rents');
insert into branch values(1236,003,'nischal dvds');
insert into branch values(1237,004,'kt dvd museum');
insert into branch values(1238,005,'natesh albums');
insert into branch values(1239,006,'khaarvi albums');
insert into branch values(1240,007,'sangeetha albums');
insert into branch values(1241,008,'volga albums');
insert into branch values(1242,009,'pes albums');
insert into branch values(1243,010,'aditya albums');
insert into branch values(1244,011,'devraj albums');


insert into branch_location values('banglore',1234);
insert into branch_location values('chennai',1235);
insert into branch_location values('mumbai',1236);
insert into branch_location values('hyderabad',1237);
insert into branch_location values('shivmoga',1238);
insert into branch_location values('ranchi',1239);
insert into branch_location values('delhi',1240);
insert into branch_location values('pune',1241);
insert into branch_location values('manglore',1242);
insert into branch_location values('goa',1243);
insert into branch_location values('trivendram',1244);


insert into staff values(9991,1234,'lik1','liki1234','akshay','likithnilaya-no-1010','9876543211','balllapur','akshaylikithsn@gmail.com',50000);
insert into staff values(9992,1235,'har1','harry','harsha','biradar-no-1010','9844543211','hubli','akshay@gmail.com',5000);
insert into staff values(9993,1236,'nat1','singer','natesh','natanilaya-no-1010','9876544211','kolar','princenatesh11@gmail.com',5000);
insert into staff values(9994,1237,'man1','manurp','manoj','manojnilaya-no-1010','9875543211','kullaapur','akshaylikithsn@gmail.com',50000);
insert into staff values(9995,1238,'kit1','candyb','krish','krishnilaya-no-1010','9806543211','sirsi','kt97@gmail.com',10000);

insert into customer values(7771,'laxmi','banshankari 3rd phase','laxm97@gmail.com');
insert into customer values(7772,'mamatha','banshankari 2rd phase','mamaa@gmail.com');
insert into customer values(7773,'krishnateja','chutta galli 3rd stage','kt128@gmail.com');
insert into customer values(7774,'likith','gandhinagera kemaranilaya','likithdirector@gmail.com');
insert into customer values(7775,'umesh','jayanagar 5th block','umesh97@gmail.com');
insert into customer values(7776,'ramesh','jayanagar 6th block','ramesh97@gmail.com');
insert into customer values(7777,'somesh','jayanagar 7th block','somesh97@gmail.com');
insert into customer values(7778,'thimmesh','jayanagar 8th block','thimmesh97@gmail.com');
insert into customer values(7779,'rohini','annagar 5th block','rohot97@gmail.com');
insert into customer values(7780,'sujatha','vinobanagar 5th block','suoja@gmail.com');
insert into customer values(7781,'nithi','nagara 5th block','nikami7@gmail.com');

insert into service values(7771,1234);
insert into service values(7772,1235);
insert into service values(7773,1236);
insert into service values(7774,1237);
insert into service values(7775,1238);
insert into service values(7776,1239);
insert into service values(7777,1240);
insert into service values(7778,1241);
insert into service values(7779,1242);
insert into service values(7780,1243);
insert into service values(7781,1244);





insert into customerb values(7771,001);
insert into customerb values(7773,004);



/*displaying the contents of inventory table*/
select * from inventory;

/*displaying the contents of film table*/
select * from film;

/*displaying the contents of staff table*/
select * from staff;

/*displaying the contents of category table*/
select * from category;

/*displaying the contents of branch table*/
select * from branch;

/*displaying the contents of customer table*/
select * from customer;

/*displaying the contents of actor table*/
select * from actor;



delete from inventory where inventory_id=001;

/*displaying avilable movies with rent amount from database*/ 
select name as available_movies,rent from inventory where available='yes';

/*displaying movie name and it's category */
select title,name as genre from film f,category c,film_category fc where f.film_id=fc.film_id and c.category_id=fc.category_id; 

/*displaying view content*/
select * from film_actor;
select * from details;

/*displaying staff id ,name and salary whose salary is higher than 20000*/
select staff_id,name,salary from staff where salary>20000;

/*displaying name and salary in the ascending order of salary*/
select name,salary from staff order by salary;

/*displaying movie name ,rent amount ,rent date and return date which are given to customers*/
select fullname,name as movie_name,rent,rent_date,return_date from inventory i,customerb b,customer c  where c.customer_id= b.customer_id and i.inventory_id=b.inventory_id;  

/*displaying name of the actor,title of the movie and language*/
select name,title,language from actor a,film f,played_by p where a.actor_id=p.actor_id and f.film_id=p.film_id;

/*displaying customer id and fullname of customers*/
select customer_id,fullname from customer ;

/*displaying staff name and branch name of all branches */
select s.name as staff_name,b.name as name from staff s,branch b where s.branch_id=b.branch_id;

/*displaying  movie title where leading actor is ganesh*/
select title from film where film_id=(select film_id from played_by where actor_id=(select actor_id from actor  where name ='ganesh'));

/*displaying film title ,review and rating whose buy amount is greate than 1200*/
select title,description as reviews,rating from film  where inventory_id in(select inventory_id from inventory where buy_amt >1200);

/*displaying  customer name along with his branch name */
select fullname as customer_name,b.name as branch_name from customer c,service s,branch b where b.branch_id=s.branch_id and c.customer_id=s.customer_id;

/*displaying the sum of all the film CD's rent which are borrowed by customers*/
select sum(rent) as rent_taken from  inventory i,customerb b,customer c  where c.customer_id= b.customer_id and i.inventory_id=b.inventory_id;  

/* creating view to see name ,rent,description,rating in the single table*/
create view details
as  select  name,rent,description,rating
from inventory i,film f
where i.inventory_id=f.inventory_id;


/* creating view to see film title ,language,actor name in the single table*/
create view film_actor
as  select  title,language,name
from actor a,film f,played_by p 
where a.actor_id=p.actor_id and f.film_id=p.film_id;


/*displaying average salary of staffs*/
select avg(salary) from staff ;

/*joining inventory and film table where rating is grater than 2*/
select i.name,rent ,buy_amt 
from (inventory i join film f on i.inventory_id=f.inventory_id)
where rating >2;

/*joining inventory and branch table using left outer join*/
select i.name,rent, buy_amt 
from (inventory i left outer join branch b on  i.inventory_id=b.inventory_id);

/*selecting the film CD which are not borrowed*/
select name,rent_date,return_date 
from inventory
where  available in(select available
	from inventory 
	where  available='no');

select * from inventory;
