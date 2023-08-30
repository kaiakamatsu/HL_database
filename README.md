# HL_database
HealthLink Database 

* `connection.php` - establishes a connection to the heal8312_Database, which consists of two tables (student_info and project_info)
* `index.html` - landing page for the HealthLink UCSD Database and provides users with four buttons that redirect them to different forms/databases
* `student_form.html` - creates a signup form for students to provide their information
* `prof_form.html`- creates a form that allows project leads to submit information about a project or opportunity they are offering
* `signup.inc.php` -  handles form submissions from a student sign-up form and inserts the submitted data into the database (student_info table)
* `signup.project.php` - handles form the submission from project lead form and inserts the submitted data into a database (project_info), redirects to `filtered_results.php`
* `filter_student_db.php` - allows users to filter and display student information based on various criteria such as major, year of study, and keyword search
* `filter_project_db.php` - allows users to filter and display project information based on various criteria such as major, education level, time commitment, and keyword search.
* `filtered_students.php` - filters through database based on major and year preferences from project lead and displays the students


