# Changelog
Team Members:
Captain: Alex Xia
First Mate: Yongjian(Roger) Zhang
Second Mate: Luke Lee
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [0.0.15] - 2018-03-09
### Added
- Comments for each file for lab 10
- Function descriptions

### Fixed
- Bad exception description
- Unit test function bad checks for Task.php

### Updated
- Changelog

## [0.0.14] - 2018-03-08
### Changed
- TaskTest now pass, nothing wrong with Task.php I just wasn't using PHPUnit correctly before

## [0.0.13] - 2018-03-08
### Changed
- updated TaskListTest to test for case if incomplete tasks are more than complete tasks

## [0.0.12] - 2018-03-08
### Added
- unit tests with PHPUnit

## [0.0.11] - 2018-03-01
### Added
- fields to Maintenance page while in Owner mode to set size, group, and status of tasks  

### Changed
- mildly changed the way fields on Maintenance page displays; the default way clusters everything on 1 line which looks bad  
- Fixed crash on Work page that would occur if you were working with an empty list (all tasks completed) because View.php & Task.php did not check if array was empty before calling array item members

## [0.0.10] - 2018-03-01
### Added
 - itemedit view to display form for editing maintanence task list

### Changed
 - Added methods in mtce controller for handling editing tasks
 - Modified App model to fix undefined index PHP error
 - Changelog

## [0.0.9] - 2018-03-01
### Added
 - oneitemx to link item to the list
 - itemadd button to add a new todo job for owners

### Changed
 - mtce controller so the owners has the ability to add jobs
 - Changelog

## [0.0.8] - 2018-03-01
### Changed
 - Tasks by priority list is in a form now
 - Added checkboxes to indicate completed tasks
 - Added owner privilege to complete a task
 - Added a complete() function in Views controller to handle completer action

## [0.0.7] - 2018-03-01
### Added
 - Simple User Roles
 - Set Role under User Role at top of page
 - Role will be displayed atop Maintenance page

### Changed
 - .gitignore now ignores temp folder

## [0.0.6] - 2018-03-01
### Added
 - Page navigation
 - Each page will now show 10 tasks for maintenance
 - itemnav view to view the itemlist

### Changed
 - itemlist view to properly display pages
 - updated Changelog

## [0.0.5] - 2018-02-15
### Added
 - jobs.md markup file for jobs
 - Parsedown.php library from github
 - Helpme.php controller for handling text from parsedown

### Changed
 - Redirects from "Help Wanted" navbar item to Help me page


## [0.0.4] - 2018-02-15
### Added
 - itemlist table view for maintenance
 - mtce controller
 - reconstructed item list so the list view is being passed to by mtce controller

### Updated
 - Modified the changelog
 - Modified the footer to be organization name

## [0.0.3] - 2018-02-15
### Added
- template_secondary.php view to display tasks as ordered list under Work link
- Views.php controller to control the views of displaying tasks in ordered list 
- by_category.php view to display tasks by category
- by_priority.php view to display tasks by priority

### Updated
- changelog
- Added methods in Tasks.php to get tasks by categories
- Changed link of Work to "/views" in config.php
- Fixed base controller My_Controller.php

## [0.0.2] - 2018-02-15
### Changed
- homepage now displays tasks remaining

## [0.0.1] - 2018-02-15
### Added
- tasks php model

### Updated
- changelog

## [0.0.0] - 2018-02-15
### Added
- forked from starter repo
- added changelog.md
