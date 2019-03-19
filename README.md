# FSWD60-CodeReview10-SLAATS
CodeReview #10

Key Comments:

Developed as a Content Management System for CF Public Library. So primary focus is on the internal organisation with little for external other than seeing the media available. 

a. index.php is for all external users. Would be an external only search file. Not really functional beyond dispaying the current database to the valid user who is looking at the page. 

b. employeelogin.php is or would be the login for all employees (currenetly no session or security linkage)More for reference at this point as it needs to be completed with final security. It has become linked though to the indexcfpublib.php page now so one can flow together.

c. indexcfpublib.php is the homepage for all employees to manage content management system. From there all updates and data inputs can be done. Edit and delete is now functional. Also drop down lists from other tables is now working as well fully.

Folder: mySQLDumpanddatabase is where you find the sql file.

Folder: DatabaseDevelopment are all pdf's for the db creation phase till 3NF.

Was created as a CRUD application. Many create files and then action files are available. 

Thanks,
