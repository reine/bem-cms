BackEndManager CMS Module
=======

A content management module for [BackEndManager](https://github.com/reine/BackEndManager).

# Features

Herewith is a list of features for this module:

* **Install Wizard**
	* Automatic update of the ACL resource table to include 'Content Management' in the database
	* Automatic creation of content-related tables in the database
* *Other features to be added as needed*

# Setup, Installation & Configuration

## System Requirements

A working copy of BackEndManager is required as this is NOT a standalone app.

Using git, go to the root of the BackEndManager project directory and clone this repository as a submodule.

	cd BackEndManager
	git submodule add https://github.com/reine/bem-cms.git apps/default/modules/cms

If you do not want to use git, you can [download a copy](https://github.com/reine/bem-cms/archive/master.zip) of the latest release in ZIP format. Create a **cms** subdirectory inside **apps/default/modules** directory and extract the archive from there.

## Installation Instructions

Login to the control panel and in the main admin dashboard, click on the **Content** icon - it will redirect you to the CMS module's dashboard. Click on the **Install CMS Module** button to begin the installation process.

--- *More content to follow* ---

## Screenshots

*Install wizard to initialize module on first use.*
![screenshot - install wizard](/files/screenshot-install-mod.png?raw=true)

# Support

This is a work in progress - use at your own risk.

If you find any bugs, please report them at the [Issues](https://github.com/reine/bem-cms/issues) section of the project repository. Do note that I may not always reply to them as needed because I also work on my client projects.

# Copyright & License

BackEndManager is released under GPL v2. Wherever a third-party code is used, owner of the said code retains his/her own copyright & license. As much as possible, we will only use open source codes.