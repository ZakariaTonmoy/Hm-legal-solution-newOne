Date
14.5.2023

1. divide index.php in 5 smaller files.(done)
2. include these files in index.php properly.(done)
3. outcome: index.php will be same as before.(done)

Date
15.5.2023

1. database connection.(done 1/2 )
2. database connection with mysqli.(done)
3. database connection with mysqli object.(done)
4. database connection with PDO object.(done)


Date
17.5.2023

1. make a table (CONTACTS) with phpScript.
 (a). Create a table.
 (b). I need database connection.
 (c). I need sqlquery to create table.
 (d). I need to run database connection object with query method function .
 (e). I need to pass sqlquery from option (c) to query method.

2. with mysqli. (done)
3. with mysqli object. (done)
4. with PDO object. (done)

Date
18.5.2023

1. Study with form input.(done)

Date
23.5.2023

1. Saving data with php forms.
(a) make a form with html/or find exiting form.(done)
(b) make this html form into php form.(done)
(c) add action path.(done)
(d) debug action in php file.(done)
(e) validate empty field, validate strip extra spaces.

---
### Done till here.
---

### Will start from here:


  
1. Save action perams into database table.
   ### Task Summary:
   The task is to develop a functionality that allows saving action parameters into a database table. This feature aims to store relevant information about actions performed    within a system, enabling efficient tracking and analysis of user interactions. The task involves implementing the necessary code and database schema changes to ensure       seamless data storage and retrieval.
   
   ### Task Details:
   
   Database Integration:
   
   Review the existing database schema and identify the appropriate table to store action parameters.
   Analyze the data requirements and modify the table structure if necessary to accommodate the new parameters.
   Ensure proper indexing and data types for efficient querying and storage.
   Action Parameter Collection:
   
   Identify the actions for which parameters need to be saved.
   Determine the relevant parameters to be captured for each action.
   Implement the necessary code changes to collect the parameters during action execution.
   Database Persistence:
   
   Develop the code logic to save the collected action parameters into the designated database table.
   Utilize appropriate database query or ORM (Object-Relational Mapping) techniques for efficient data insertion.
   Implement error handling mechanisms to handle database connectivity issues or data insertion failures.
   Data Retrieval and Analysis:
   
   Develop retrieval mechanisms to fetch action parameters from the database table.
   Implement necessary filtering and sorting options to facilitate data analysis based on different criteria.
   Integrate the retrieved data into the system's reporting or analysis modules, if applicable.
   Testing and Quality Assurance:
   
   Document the changes made to the database schema, including table structure modifications, indexing, and data types.
   Provide clear instructions on how to utilize the new functionality for future reference.
   Document any additional configuration requirements or considerations.
   Deployment and Rollout:
   
   
3. Updating data with php form.
4. Dashbord (table,contact massages ).
5. Sidebar to table.
6. Create user table
7. Plan about athentication (email,password,jwt token) bcrypt.
8. Composer package install.
9. Impliment authentication.
10. Plan user authorisation, role base access.3
11. create a new folder name validations.(done)



### Refactor:
---
11. put all the validation in as separeted files, as class.
   Example: EmptyStringChecker{},
   $stringChcker  = new EmptyStringChecker,
   $emptyCheker->isEmpty('Valueoffrom').
