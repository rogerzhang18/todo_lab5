# Changelog
Team Members:
Captain: Alex Xia
First Mate: Yongjian(Roger) Zhang
Second Mate: Luke Lee
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

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
