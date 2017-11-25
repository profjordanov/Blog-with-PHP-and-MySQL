# “Blog” Web application in PHP + MySQL
## Created for "Server-Side Programming" coure in University of Economics - Varna.
Academics: 
           Ivan Kuyumdzhiеv Cа.D
           Pavеl Pеtrov Ph.D


## Project Specification

•	Home

    o	Showed the last 3 posts at the home page, ordered by date (from the most recent).
    
    o	Showed also the last 5 post titles at the home page (as a sidebar) with a link to the post.
    
    o	Showed [Login] and [Register] buttons (when no user is logged in).
    
•	Login

    o	Login in the blog existing account (username + password).
    
    o	Showed a success message after login or error message in case of problem.
    
•	Register

    o	Registering a new user in the MySQL database (by username + password + full name).
    
    o	Showed a success message after registration or error message in case of problem.
    
•	Logout

    o	Logouted the current user.
    
    o	This [Logout] button is available after successful login only.
    
•	View / Create / Edit / Delete Posts (CRUD Operations)

    o	Logged in users are able to view all posts, create new post (by title + content) / edit post / delete post.
    
    o	Posts are displayed in a table (one row for each post). At each row a link [Edit] and [Delete] should be displayed.
    
    o	Createed post shows a form to enter the post data (title + content). Implemented field validation (non-empty fields are required).
    
    o	Edit post fills its existing post data in a form and allows it to be edited. Implemented field validation.
    
    o	Delete post shows the post to be deleted and asks for confirmation.
    
•	View All Users

    o	Logged in users should be able to view all users (username + full name) in a table.

