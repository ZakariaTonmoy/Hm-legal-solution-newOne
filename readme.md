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

2. Updating the data with PHP form:
```
 Task Description:
 The task involves implementing functionality to update data using a PHP form. This feature aims to allow users to modify existing records within a database table through a web interface. The task includes creating the necessary HTML form, implementing PHP code for data processing, and ensuring proper validation and error handling.
 
 Task Details:
 
 Form Design:
 
 Create an HTML form with appropriate input fields for updating the desired data.
 Ensure the form follows a user-friendly layout and includes labels and placeholders for each input field.
 Implement any necessary form styling or validation to enhance the user experience.
 Form Submission:
 
 Handle the form submission using PHP to process the updated data.
 Set up the necessary server-side validation to ensure the data entered is valid and meets the required criteria.
 Handle any form submission errors by displaying appropriate error messages and highlighting the problematic fields.
 Data Processing:
 
 Retrieve the submitted form data using PHP.
 Validate and sanitize the data to prevent security vulnerabilities, such as SQL injection or cross-site scripting (XSS).
 Implement appropriate checks to ensure data integrity and consistency.
 Database Interaction:
 
 Connect to the relevant database using PHP and establish the necessary database credentials.
 Write the SQL query to update the corresponding record(s) based on the submitted form data.
 Execute the query to modify the data within the database table.
 Error Handling:
 
 Implement error handling mechanisms to handle potential failures during the database update process.
 Display user-friendly error messages in case of any database connectivity issues or data update failures.
 Log any errors or exceptions for troubleshooting purposes.
 Success Message:
 
 Provide a success message to inform the user that the data has been successfully updated.
 Redirect the user to an appropriate page or display a confirmation message.
 Testing and Quality Assurance:
 
 Perform comprehensive testing to verify the correctness and reliability of the implemented code.
 Test various scenarios, including valid and invalid data inputs, to ensure proper validation and error handling.
 Verify that the data is correctly updated in the database.
 Documentation:
 
 Document the steps involved in updating data using the PHP form.
 Provide clear instructions on how to utilize the form and its functionality.
 Document any additional configuration or customization requirements.
 Deployment and Rollout:
 
 Coordinate with the relevant team members to deploy the updated code to the production environment.
 Ensure appropriate backups and version control measures are in place before deploying the changes.
 Communicate the availability of the updated functionality to stakeholders and provide necessary training or documentation.
 Note: This task assumes you have an existing database and knowledge of PHP and database interactions. Adjustments may be required to align with your specific technologies, 
  frameworks, or conventions utilized in your environment
```
   
   
5. Dashbord (table,contact massages ).
   ```
   Task Summary:
   The task is to create a dashboard that displays a table and manages contact messages. This feature aims to provide an organized view of contact messages received from users, allowing efficient management and response. The task involves designing and implementing a user-friendly dashboard interface, integrating a table to display messages, and providing functionality to handle message actions.
   
   Task Details:
   
   Dashboard Design:
   
   Design a visually appealing and user-friendly dashboard interface for managing contact messages.
   
   Table Integration:
   
   Develop a table component to display contact messages.
   Define the necessary columns to represent relevant message attributes (e.g., sender name, email, subject, date, etc.).
   Implement sorting and filtering options to allow users to find messages based on specific criteria.
   Message Management Functionality:
   
   
   Implement pagination functionality to handle a large number of messages.
   Divide the messages into manageable pages and provide navigation options for users to move between pages.
   Ensure smooth loading and rendering of messages to maintain a good user experience.
   Search Functionality:
   
   Incorporate a search feature to allow users to search for specific messages based on keywords, sender name, or other relevant attributes.
   Develop a search mechanism that dynamically updates the table results as users enter their search queries.
   User Authentication and Authorization:
   
   Documentation:
   
   Document the steps involved in accessing and utilizing the dashboard.
   Provide clear instructions on how to perform various actions, such as viewing, managing, and responding to messages.
   Document any customization options or configuration settings available for the dashboard.
   Deployment and Rollout:
   
   Coordinate with the relevant team members to deploy the dashboard to the production environment.
   Ensure appropriate backups and version control measures are in place before deploying the changes.
   Communicate the availability of the new dashboard functionality to stakeholders and provide necessary training or documentation.
   Note: This task assumes you have an existing system or framework in which the dashboard will be integrated. Adjustments may be required to align with your specific   technologies, frameworks, or conventions utilized in your environment.
   ```
7. Sidebar to table.
8. Create user table
9. Plan about athentication (email,password,jwt token) bcrypt.
10. Composer package install.
11. Impliment authentication.
12. Plan user authorisation, role base access.3
13. create a new folder name validations.(done)



### Refactor:
---
11. put all the validation in as separeted files, as class.
   Example: EmptyStringChecker{},
   $stringChcker  = new EmptyStringChecker,
   $emptyCheker->isEmpty('Valueoffrom').
