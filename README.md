# ToDoList
RESTful API To-Do List in Laravel PHP Framework
	Capabilities:
		- view all tasks in the list
		- view a single task in the list
		- add a task to the list
 		- edit existing task
		- set the task status 
 		- delete a task from the list

---
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


 	| Method        | URI                   	     	| Name            |
	+---------------+---------------------------------------+-----------------+
	GET|HEAD 	| api/tasks             		| tasks.index   
	GET|HEAD  	| api/tasks/{task}      		| tasks.show 
	GET|HEAD  	| api/tasks/create      		| tasks.create  
	POST        	| api/tasks             		| tasks.store   
	GET|HEAD  	| api/tasks/{task}/edit 		| tasks.edit 
	PUT|PATCH 	| api/tasks/{task}      		| tasks.update  
	GET    		| api/tasks/status/{task}/edit		| status.edit
	PATCH  		| api/tasks/status/{task}		| status.update
	DELETE    	| api/tasks/{task}      		| tasks.destroy

---
### GET|HEAD  	|  api/tasks
	Display a listing of the task.
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK",
  "data": [
    {
      "id": "Integer",
      "subject": "String",
      "content": "String",
      "status": "Char",
      "created_at": "Timestamp",
      "updated_at": "Timestamp"
    },
    {
      "id": "Integer",
      "subject": "String",
      "content": "String",
      "status": "Char",
      "created_at": "Timestamp",
      "updated_at": "Timestamp"
    },
  ]
}
```
##### Fail Response
```json
{
  "status_code": "404",
  "msg": "Not Found",
  "data": []
}
```
---
### GET|HEAD  	|  api/tasks/{task}
	Display the specified task.
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK",
  "data": {
    "id": "Integer",
    "subject": "String",
    "content": "String",
    "status": "Char",
    "created_at": "Timestamp",
    "updated_at": "Timestamp"
  }
}
```
##### Fail Response
```json
{
  "status_code": "404",
  "msg": "Not Found",
  "data": []
}
```
---
### GET|HEAD 	| api/tasks/create 
	Show the form for creating a new task.
---
### POST 		| api/tasks
	Store a newly created task in storage.
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK",
  "data": {
    "id": "Integer",
    "subject": "String",
    "content": "String",
    "status": "Char",
    "created_at": "Timestamp",
    "updated_at": "Timestamp"
  }
}
```
##### Fail Response
```json
{
  "status_code": "500",
  "msg": "Internal Server Error",
  "data": []
}
```
---
### GET|HEAD  	| api/tasks/{task}/edit
	Show the form for editing the specified task.
---
### PUT|PATCH 	| api/tasks/{task}
	Update the specified task in storage.
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK",
  "data": {
    "id": "Integer",
    "subject": "String",
    "content": "String",
    "status": "Char",
    "created_at": "Timestamp",
    "updated_at": "Timestamp"
  }
}
```
##### Fail Response
```json
{
  "status_code": "404",
  "msg": "Not Found",
  "data": null
}
```
```json
{
  "status_code": "500",
  "msg": "Internal Server Error",
  "data": []
}
```
---
### GET    		| api/tasks/status/{task}/edit
	Show the form for editing the specified task's status. 
---

### PATCH  		| api/tasks/status/{task}
	Update the specified task's status in storage	
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK",
  "data": {
    "id": "Integer",
    "subject": "String",
    "content": "String",
    "status": "Char",
    "created_at": "Timestamp",
    "updated_at": "Timestamp"
  }
}
```
##### Fail Response
```json
{
  "status_code": "404",
  "msg": "Not Found",
  "data": null
}
```
```json
{
  "status_code": "500",
  "msg": "Internal Server Error",
  "data": []
}
```
---
### DELETE    	| api/tasks/{task} 
	Remove the specified task from storage
##### Success Response
```json
{
  "status_code": "200",
  "msg": "OK"
}
```
##### Fail Response
```json
{
  "status_code": "404",

  "msg": "Not Found",
  "data": null
}
```
```json
{
  "status_code": "500",
  "msg": "Internal Server Error",
  "data": []
}
```
