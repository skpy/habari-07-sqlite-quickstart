Habari 0.7 SQLite on OpenShift
=========================
Habari is a modern PHP blogging platform.

http://habariproject.org/

Running on OpenShift
--------------------

Create an account at http://openshift.redhat.com/

Create a PHP application

	rhc-create-app -a habari -t php-5.3 -l $USERNAME

Add this upstream Habari quickstart repo

	cd habari/php
	rm -rf *
	git remote add upstream -m master git://github.com/skpy/habari-07-sqlite-quickstart.git
	git pull -s recursive -X theirs upstream master

Then push the repo upstream to OpenShift:

	git push

That's it, you can now checkout your application at:

	http://habari-$yourlogin.rhcloud.com

Your first visit to your app's URL will create the SQLite database.

	username = admin
	password = habari

Please change your password!

NOTE
----
This installation of Habari will have no plugins enabled. You'll likely want to enable a few.

Please be advised that use of the Habari Media Silo plugin is discouraged on OpenShift at this time. OpenShift replaces *all* of the files in the php directory when a new version of the app is pushed. This means that files uploaded to the Habari Media Silo will be deleted.

For more details, see:

https://www.redhat.com/openshift/kb/kb-e1002/deploying-openshift-express-applications-using-sqlite
