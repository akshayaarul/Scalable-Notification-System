# Scalable-Notification-System
## Table of Contents
- Database Schema
- Description of Concept Implementation
- Login Credentials
- Student/Staff Database
- Performance Metrics
## Database Schema
![database_schema](https://user-images.githubusercontent.com/67939612/87218556-e775b280-c2de-11ea-961d-8623d71e9d20.PNG)

The database used in scalable notification system is MySql. MySql has its own unique storage-engine architecture allowing users to configure the MySQL database server specifically for particular applications, with high performance end results.And the open source nature of MySQL allows complete customization for those wanting to add unique requirements to the database server. The above image represents the schematic representation of database used in scalable notification system.

## Description of Concept Implementation
### Account Creation

Scalable notification application allows user to create thier own student or staff account and generate login credentials.

### Architecture

Website will contain a login page as index, where user can login into thier account either as a student or staff based on the registration.This website is designed with a seperate profile page for student and staff. After login the index page redirects to profile where basic and academic details retrived from registration are tabulated. In staff profile there will be a seperate message icon on right corner of the page through which a staff can notify students about the start of a course. Notification can be sent either to single student (To choose one student from student table in database) or a subset of student based on a criteria or the entire set of students.These messages are stored in a table(notification).The logout button also on right corner of the page redirects to login/index page. In student profile there will be a seperate notification icon on top left corner of the page, which when clicked shows the list of notifications in the order of latest first which are extracted from notification table.An example use case would be a chat application where a user sends multiple messages and the recipient displays multiple notifications count on the icon similarly,the notification icon on this webpage displays the count of unread messages which is scalable (i.e varied once after opened).Staff profile also has a logout redirection.

### Features

In staff profile, the message icon is provided with a feature of sending notification to
1. A single student
2. Subset of students
3. Entire student set

##  Login Credentials

**url** : [Scalable Notification System](akshaya.epizy.com)
       
### 1.Student Login

**username :** Student

**password :** Student

### 2.Staff Login

**username :** Staff

**password :** Staff
>You can create your own credentials too

## Student/Staff database

![Student img](https://user-images.githubusercontent.com/67939612/87223435-db521b00-c307-11ea-909e-93a1c0dcb58b.PNG)

![staff](https://user-images.githubusercontent.com/67939612/87223558-fe30ff00-c308-11ea-9fe4-0a6e65e9fecf.PNG)

## Performance Metrics

1. Notification to individual user

![single](https://user-images.githubusercontent.com/67939612/87223670-c9717780-c309-11ea-842e-d90bc0c30c1f.PNG)

2. Notification to subset of students

![subset](https://user-images.githubusercontent.com/67939612/87223754-603e3400-c30a-11ea-84f4-158a646dd79d.PNG)

3. Notification to Everyone

![everyone](https://user-images.githubusercontent.com/67939612/87223808-f2463c80-c30a-11ea-977d-e2ed2a41273a.PNG)



