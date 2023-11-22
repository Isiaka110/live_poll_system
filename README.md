# Group Project: Interactive Poll System

## Group E

**Group Leaders:** 
- Ishaq (Contact: 09072071676)
- Oseiwe (Contact: 08140127072)

## Overview
This project involves creating an Interactive Poll System where users can vote on various topics. The technologies used include HTML for displaying poll options, PHP for processing votes and storing them in a MySQL database, and JavaScript for real-time updates.

## Solution Steps:

### Step 1: Planning
We researched our topic using ChatGPT, YouTube, and other online resources. We installed XAMPP since we're using PHP and MySQL as the database.

### Step 2: Set Up Your Development Environment
We created a folder (`csc201_poll_project`) to store our codes. We set up XAMPP and Visual Studio Code for code editing.

### Step 3: Create the Database
We used MySQL to create a database named `testing` to store poll questions, options, and responses. We also created a table named `tbl_poll.sql` and imported it into our database.

#### Step 4: Create HTML Poll Form
We designed a web page (index.php) with HTML to display the poll, including the question and options. A form is used to submit the selected option to the PHP processing script.

### Step 5: Fetch Poll Data with PHP
We created a PHP script (`fetch_poll_data.php`) to fetch poll question and options from the database and dynamically populate the HTML form.

### Step 6: Process Poll Submission with PHP
We created a PHP script (poll.php) to process the submitted poll and update the database.

### Step 7: Implement Real-Time Updates with JavaScript
For real-time updates, JavaScript and AJAX are used. A JavaScript script handles the asynchronous submission of the form and dynamically updates poll options.

### Step 8: Test Your Polling System
save up all codes and Set up your local host (XAMPP) to ensure that everything functions correctly, and real-time updates work as expected.
