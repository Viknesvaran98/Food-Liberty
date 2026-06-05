Food-Liberty (FYP)

Overview

Food-Liberty is a platform designed to streamline food donation and management activities. The repository facilitates interactions between administrators, donors, and donees (recipients), ensuring efficient communication, resource allocation, and record tracking.

This system includes features that allow users to donate food, book donations, view detailed records, and manage their account information. With dedicated interfaces for every user type (admins, donors, and donees), Food-Liberty ensures functionality and clarity.

Key Features

General Features

• User-driven interfaces for:

• Administrators

• Donors

• Donees/Recipients

• Robust table management for tracking donations, bookings, and recipients.

• Data storage, retrieval, and operational tools for all database-connected actions.

• Account management tools to sign up, login, and view/update information.

Donor Features

• Log in and create new food donations via straightforward forms.

• View past donations and bookings made by donees.

• Delete donations if needed.

• Review booking requests from donees.

Donee Features

• Explore and book food donations made by donors using a simple interface.

• Delete or cancel bookings.

• View the current dashboard with their active activities or donation bookings.

• Update user account details.

Administrator Features

• Control over donor and donee accounts with centralized access.

• Manage booking lists and donor contributions.

• View and analyze graphs representing donation/bookings data.

• Main dashboards aggregating user/donor/donee information and booked plus rejected food statistics.

Security

This project includes secure login systems for each type of user and session management mechanisms to ensure safety while accessing protected pages.


Repository Structure

The repository includes the following critical files and directories:

Main Files

• index.html: Main entry point of the platform.

• dbConfigg.php/dbconfig.php: Database configuration files enabling backend connectivity.

• style.css/stylelogin.css/styleexam.css: Stylesheets defining the visual interface.

• javascript.js: Handles user interactivity.

Donor-Specific Pages

• donorsignupp.html: Enables donor registration flow.

• postfood.php: Facilitates the posting and uploading of new donations.

• viewdonorbyadmin.php: Enables administrators to view donor details.

• donormainpagee.php: The main dashboard for donor activities, including viewing their active contributions and activities.

• donorregisterprocess.php: Manages the donor registration process.

• donordelete.php: Allows donors to delete their profiles if necessary.

• donordeletefood.php: Empowers donors to delete previously posted food donations.

Donee-Specific Pages

• doneesignupp.html: Registration page for donees.

• logindonee.html & logindoneeprocess.php: Combination of login UI and backend management for donee users.

• doneemainpage.php: The central dashboard for donees to handle their activities, bookings, and contributions.

• viewbookingbydonee.php: Allows donees to view their bookings efficiently.

• doneeregisterprocess.php: Handles donee registration submissions and integrations.

• doneedetail.php: Provides detailed information about registered donees.

• doneedelete.php: Allows donees to delete their profiles or cancel activities.

Common Utility Files

• logout.php: Shared logout functionality ending the session for all types of users.

• resetpassword.php: Password reset functionality for all users.

• style.css & stylelogin.css: Stylesheets ensuring the visual consistency of login and other interfaces.

Graph/Analytics Features

These files provide rich insights into data.

• doneegraphpage.php: Visualizes donee activities.

• donorgraphpage.php: Graphical representation of donor contributions.

• linegraph.php, graph.php, graph2.php, graph3.php: Files for rendering various analytics and visual data insights across the system.

Tech Stack

Frontend

• HTML/CSS: For the layout and design of web pages.

• JavaScript: Adds interactivity and client-side dynamic functionalities.

• SCSS & Less: CSS preprocessors for easier styling.

Backend

• PHP: Handles server-side logic, data processing, and computation.

• MySQL (via dbConfig): Database integration and data persistence layer.

Installation Instructions

1. Clone the Repository:

git clone https://github.com/Viknesvaran98/Food-Liberty.git

2. Navigate into the Directory:

cd Food-Liberty

3. Set Up the Database:Import the database file into your MySQL database.

4. Configure Database Connection:Update the dbConfigg.php or dbconfig.php files with your database credentials.

5. Run the Project:Host the project using a local server, such as XAMPP, WAMP, or any PHP server.

6. Access via Browser:Open your browser and navigate to http://localhost/Food-Liberty.

Future Enhancements

• Adding mobile responsiveness to improve accessibility across devices.

• Allowing integration with third-party authentication services (e.g., Google, Facebook).

• Enhancing data security features such as encryption for sensitive information.

• Introducing email notifications for booking updates or account modifications.

License

This project is licensed under the GNU General Public License v3.0. This means:

• You are free to copy, distribute, and modify the software.

• Any changes or improvements must also be distributed under the same license.

• The software is provided without warranty of merchantability or fitness for a particular purpose.

For more details, check the full license text in the LICENSE file or visit the GNU License webpage.


## Main Page of Food Liberty
<img width="1903" height="910" alt="image" src="https://github.com/user-attachments/assets/4b414649-a44d-4c7e-8e7f-d3dd50fb90aa" />
