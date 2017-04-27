# ToDoList
	RESTful API To-Do List in Laravel PHP Framework
	Capabilities:
- view all tasks in the list
- view a single task in the list
- add a task to the list
 - edit existing task
- set the task status 
 - delete a task from the list

## How to deploy
#### Server Requirements
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
#### Installation 
- Clone the repositary
- Rename .env.example to .env 
- Alter Database credentials in .env file (look into "config/database.php" for competibilities') 
- Import "todolist.sql" into your dbms	
	
---
## API Document


 	| Method    | URI                   		| Name            |
	+-----------+-------------------------------+-----------------+
	GET|HEAD 	| api/tasks             		| tasks.index   
	POST        | api/tasks             		| tasks.store   
	GET|HEAD  	| api/tasks/create      		| tasks.create  
	DELETE    	| api/tasks/{task}      		| tasks.destroy 
	PUT|PATCH 	| api/tasks/{task}      		| tasks.update  
	GET|HEAD  	| api/tasks/{task}      		| tasks.show   
	GET|HEAD  	| api/tasks/{task}/edit 		| tasks.edit    